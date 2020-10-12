import nltk
import stanza
from nltk.collocations import * 
import requests
import os
import io
import json
import torch
from nltk.corpus import stopwords
import string

ip_rest = 'localhost'
port_rest = '80'

subscription_Key = ""
account_id = ""
location = ""
access_token = ""
videoId = ""


nlp = stanza.Pipeline('es') 
default_stopwords = set(nltk.corpus.stopwords.words('spanish'))

punctuations = list(string.punctuation)

def riqueza_lexica(tokens):
	tokens_conjunto = set(tokens)
	palabras_totales = len(tokens)
    #print(palabras_totales)
	palabras_diferentes = len(tokens_conjunto)
	riqueza_lexica = palabras_diferentes/palabras_totales
	return riqueza_lexica

def frecuencia_palabra(tokens):
    freq = nltk.FreqDist(tokens)
    frecuencia_palabras = '|'
    for key,val in freq.items():
        frecuencia_palabras = frecuencia_palabras + str(key) + ':' + str(val) + '|'
    return frecuencia_palabras

def sentencia_palabra(review):
    #torch.cuda.clear_memory_allocated() 
    torch.cuda.empty_cache()
    doc_review = nlp(review)
    doc_review.sentences[0].print_dependencies()
    sentencia_palabras = ''
    for sent in doc_review.sentences:
        for dep in sent.dependencies:
            if dep[1] == 'amod' :#amod#obj#conj
                #print('--->',dep[0].text, dep[2].text)
                sentencia_palabras = sentencia_palabras + str(dep[0].text) + ' ' + str(dep[2].text) + '|' 
    return sentencia_palabras

def limpiar_espacio_palabra(mystring):
    mystring = mystring.replace('\n', ' ').replace('\r', '')
    mystring = mystring.strip()  # the while loop will leave a trailing space, 
                  # so the trailing whitespace must be dealt with
                  # before or after the while loop
    while '  ' in mystring:
        mystring = mystring.replace('  ', ' ')
    return mystring

def frecuencia_palabra_clean(review):
    words  = nltk.word_tokenize(review,"spanish")
    # Remove single-character tokens (mostly punctuation)
    words = [word for word in words if len(word) > 1]

    # Remove numbers
    words = [word for word in words if not word.isnumeric()]

    # Lowercase all words (default_stopwords are lowercase too)
    words = [word.lower() for word in words]

    # Stemming words seems to make matters worse, disabled
    # stemmer = nltk.stem.snowball.SnowballStemmer('german')
    # words = [stemmer.stem(word) for word in words]

    # Remove stopwords
    words = [word for word in words if word not in default_stopwords]

    # Remove punctuations
    words = [word for word in words if word not in punctuations]

    # Calculate frequency distribution
    freq = nltk.FreqDist(words)
    frecuencia_palabras = '|'
    for word, frequency in freq.most_common(100):
        frecuencia_palabras = frecuencia_palabras + str(word) + ':' + str(frequency) + '|'
    #for key,val in freq.items():
    #    frecuencia_palabras = frecuencia_palabras + str(key) + ':' + str(val) + '|'
    return frecuencia_palabras




# Delete Videos
auth_uri = 'http://{}:{}/videos/0'.format(ip_rest, port_rest)
res = requests.delete(auth_uri)


# Get Token
auth_uri = 'https://api.videoindexer.ai/auth/trial/Accounts/{}/AccessToken'.format(account_id)
auth_params = {'allowEdit':'true'}
auth_header = {'Ocp-Apim-Subscription-Key': subscription_Key}
access_token = requests.get(auth_uri,headers=auth_header,params=auth_params).text.replace('"','')
#print(access_token)

# Get Videos of Video Indexer API
upload_uri = 'https://api.videoindexer.ai/{}/Accounts/{}/Videos/Search'.format(location,account_id)
upload_params = {
    'accessToken':access_token
}
res = requests.get(upload_uri,params=upload_params)
response_body = res.json()
#print(response_body)

for video in response_body['results']:
    print("#######################################################################################################"+str(video['id']))
    video_id = video['id']
    video_name = video['name']
    upload_uri = 'https://api.videoindexer.ai/{}/Accounts/{}/Videos/{}/Captions'.format(location,account_id,video_id)
    upload_params = {
        'format': "Txt",
        'language': "es-ES",
        'accessToken':access_token
    }
    res = requests.get(upload_uri,params=upload_params)
    response_body = res.text
    review = limpiar_espacio_palabra(response_body)
    #print("D-------------------------->" + str(len(review)) + '###' + str(len(response_body)))
    frecuencia_palabras_clean = frecuencia_palabra_clean(review)
    #print("E-------------------------->")
    #print(review)
    tokens = nltk.word_tokenize(review,"spanish")
    riqueza_lexicas  = ''
    riqueza_lexicas = riqueza_lexicas + str(riqueza_lexica(tokens))
    #print("A-------------------------->" + riqueza_lexicas)
    #texto_nltk = nltk.Text(tokens)
    #texto_nltk.concordance("artificial")
    frecuencia_palabras = frecuencia_palabra(tokens)
    #print("B-------------------------->"+frecuencia_palabras)
    limite = 5000
    cociente = len(review)//limite
    resto = len(review)%limite
    #print("B-------------------------->"+str(len(review))+":"+str(cociente)+":"+str(resto))
    sentencia_palabras = '|'
    sentencia_palabras_aux = ''
    sentencia_palabras_temp = ''
    sentencia_palabras_total = ''
    if(cociente>0):
        i = 0
        for i in range(cociente):
            sentencia_palabras_temp = review[(i*limite):(((i+1)*limite))]
            sentencia_palabras = sentencia_palabras + sentencia_palabra(sentencia_palabras_temp)
        i = i + 1
        sentencia_palabras_temp = review[(i*limite):len(review)]
        sentencia_palabras = sentencia_palabras + sentencia_palabra(sentencia_palabras_temp)
    else:
        sentencia_palabras_aux = review
        sentencia_palabras = sentencia_palabras + sentencia_palabra(sentencia_palabras_aux)
    #print("C-------------------------->"+sentencia_palabras)  

    # Save Videos
    auth_uri = 'http://{}:{}/videos'.format(ip_rest, port_rest)
    auth_params = {'videoId':video_id,'videoName':video_name,'videoText':review,'videoTextLength':len(review),'videoTextClean':'','videoTextCleanLength':0,'lexicalWealth':riqueza_lexicas,'frequencyWord':frecuencia_palabras,'frequencyWordClean':frecuencia_palabras_clean,'sentenceWord':sentencia_palabras}
    res = requests.post(auth_uri, json=auth_params)
    #print(res)

    

