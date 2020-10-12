from flask import Flask, request, jsonify, make_response
from flask_sqlalchemy import SQLAlchemy
from marshmallow_sqlalchemy import ModelSchema
from marshmallow import fields
from sqlalchemy.dialects.mysql import LONGTEXT
from sqlalchemy.sql.expression import cast
from sqlalchemy import func  
import json
import configparser

config = configparser.ConfigParser()
config.read('config.ini')

hostdb = config['db']['host']
portdb = config['db']['port']
db = config['db']['db']
user = config['db']['user']
passwd = config['db']['passwd']

hostrest = config['rest']['host']
portrest = config['rest']['port']

app = Flask(__name__)

app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
app.config['SQLALCHEMY_DATABASE_URI']='mysql+pymysql://{}:{}@{}:{}/{}'.format(user, passwd,hostdb, portdb, db) #'mysql+pymysql://<mysql_username>:<mysql_password>@<mysql_host>:<mysql_port>/<mysql_db>'
db = SQLAlchemy(app)

class VideosAux:  
    def __init__(self, id, value):  
        self.id = id  
        self.value = value 
    def __str__ (self):
        return f"VideosAux: {self.id} {self.value}"

class FrequencyWord:  
    def __init__(self, word, frequency):  
        self.word = word  
        self.frequency = frequency 
    def __str__ (self):
        return f"FrequencyWord: {self.word} {self.frequency}"

class FrequencyWordCompare:  
    def __init__(self, word, frequencyA, frequencyB, frequency):  
        self.word = word  
        self.frequencyA = frequencyA
        self.frequencyB = frequencyB
        self.frequency = frequency
    def __str__ (self):
        return f"FrequencyWordCompare: {self.word} {self.frequencyA} {self.frequencyB} {self.frequency}"

###Models####
class Videos(db.Model):
    __tablename__ = "videos"
    id = db.Column(db.Integer, primary_key=True)
    videoId = db.Column(db.String(5000))
    videoName = db.Column(db.String(5000))
    videoText = db.Column(db.Text(10000000))
    videoTextLength = db.Column(db.Integer)
    videoTextClean = db.Column(db.Text(10000000))
    videoTextCleanLength = db.Column(db.Integer)
    lexicalWealth = db.Column(db.Text(10000000))
    frequencyWord = db.Column(db.Text(10000000))
    frequencyWordClean = db.Column(db.Text(10000000))
    sentenceWord = db.Column(db.Text(10000000))

    def create(self):
      db.session.add(self)
      db.session.commit()
      return self
    def __init__(self,videoId,videoName,videoText,videoTextLength, videoTextClean, videoTextCleanLength,lexicalWealth,frequencyWord, frequencyWordClean,sentenceWord):
        self.videoId = videoId
        self.videoName = videoName
        self.videoText = videoText
        self.videoTextLength = videoTextLength
        self.videoTextClean = videoTextClean
        self.videoTextCleanLength = videoTextCleanLength
        self.lexicalWealth = lexicalWealth
        self.frequencyWord = frequencyWord
        self.frequencyWordClean = frequencyWordClean
        self.sentenceWord = sentenceWord
    def __repr__(self):
        return '' % self.id

db.create_all()

class VideosSchema(ModelSchema):
    class Meta(ModelSchema.Meta):
        model = Videos
        sqla_session = db.session
    id = fields.Number(dump_only=True)
    videoId = fields.String(required=True)
    videoName = fields.String(required=True)
    videoText = fields.String(required=True)
    videoTextLength = fields.Number(required=True)
    videoTextClean = fields.String(required=False)
    videoTextCleanLength = fields.Number(required=False)
    lexicalWealth = fields.String(required=True)
    frequencyWord = fields.String(required=True)
    frequencyWordClean = fields.String(required=True)
    sentenceWord = fields.String(required=True)
    
print("start")

### CORS section
@app.after_request
def after_request_func(response):
    origin = request.headers.get('Origin')
    if request.method == 'OPTIONS':
        response = make_response()
        response.headers.add('Access-Control-Allow-Credentials', 'true')
        response.headers.add('Access-Control-Allow-Headers', 'Content-Type')
        response.headers.add('Access-Control-Allow-Headers', 'x-csrf-token')
        response.headers.add('Access-Control-Allow-Methods',
                            'GET, POST, OPTIONS, PUT, PATCH, DELETE')
        if origin:
            response.headers.add('Access-Control-Allow-Origin', origin)
    else:
        response.headers.add('Access-Control-Allow-Credentials', 'true')
        if origin:
            response.headers.add('Access-Control-Allow-Origin', origin)

    return response
### end CORS section
@app.route('/', methods = ['GET'])
def index():
    return "desin"

@app.route('/videos', methods = ['GET'])
def get_all():
    get_videos = db.session.query(func.coalesce(Videos.id, '').label('id'), Videos.videoName.label('value')).all()
    
    
    lista = [] 
    for data in get_videos:
        print(data[0])
        lista.append(VideosAux(data[0], data[1]))
    
    json_format = json.dumps([ob.__dict__ for ob in lista])

    return make_response(json_format,200)

@app.route('/videos', methods = ['POST'])
def create_video():
    data = request.get_json()
    video_schema = VideosSchema()
    video = video_schema.load(data)
    result = video_schema.dump(video.create())
    return make_response(jsonify({"video": result}),200)

@app.route('/videos/<id>', methods = ['DELETE'])
def delete_video_by_id(id):
    num_rows_deleted = db.session.query(Videos).delete()
    db.session.commit() 
    #print("#########################"+str(num_rows_deleted))
    return make_response(jsonify({"videos": num_rows_deleted}),204)

@app.route('/videos/palabras', methods = ['POST'])
def get_palabras_video():
    data = request.get_json()
    get_video_a = Videos.query.get(data['id_video_a'])
    get_video_b = Videos.query.get(data['id_video_b'])
    
    list_word_repeat_ab = []
    list_word_ab = [] 

    words = get_video_a.frequencyWordClean.split("|")
    list_video_a = []  
    for word in words:
        if len(word) > 0:
            list_video_a.append(FrequencyWord(word.split(":")[0], word.split(":")[1])) 
            list_word_repeat_ab.append(word.split(":")[0])

    words = get_video_b.frequencyWordClean.split("|")
    list_video_b = []  
    for word in words:
        if len(word) > 0:
            list_video_b.append(FrequencyWord(word.split(":")[0], word.split(":")[1])) 
            list_word_repeat_ab.append(word.split(":")[0])

    #print(str(len(list_word_repeat_ab)))
    list_word_ab = set(list_word_repeat_ab)
    #print(str(len(list_word_ab)))

    list_frequency = [] 
    frequencyA = 0
    frequencyB = 0
    for word in list_word_ab:
        frequencyA = 0
        frequencyB = 0
        for worda in list_video_a:
            if(str(word) == str(worda.word)):
                frequencyA = frequencyA + int(worda.frequency)

        for wordb in list_video_b:
            if(str(word) == str(wordb.word)):
                frequencyB = frequencyB + int(wordb.frequency)

        list_frequency.append(FrequencyWordCompare(word, frequencyA, frequencyB, (frequencyA+frequencyB)))

    #list_frequency.sort(key=lambda x: x.word, reverse=False)
    #for item in list_frequency:
    #    print(item)

    #json_format = json.dumps([ob.__dict__ for ob in list_frequency])
    json_format = json.dumps({"video": [ob.__dict__ for ob in list_frequency]})
    return make_response(json_format,200)

@app.route('/videos/sentencias', methods = ['POST'])
def get_sentencias_video():
    data = request.get_json()
    get_video_a = Videos.query.get(data['id_video_a'])
    get_video_b = Videos.query.get(data['id_video_b'])

    list_word_repeat_ab = []
    list_word_ab = [] 
    words = get_video_a.sentenceWord.split("|")
    list_video_a = []  
    for word in words:
        if len(word) > 0:
            list_video_a.append(word) 
            list_word_repeat_ab.append(word)
    words = get_video_b.sentenceWord.split("|")
    list_video_b = []  
    for word in words:
        if len(word) > 0:
            list_video_b.append(word) 
            list_word_repeat_ab.append(word)

    #print(str(len(list_word_repeat_ab)))
    list_word_ab = set(list_word_repeat_ab)
    #print(str(len(list_word_ab)))

    list_frequency = [] 
    frequencyA = 0
    frequencyB = 0
    for word in list_word_ab:
        frequencyA = 0
        frequencyB = 0
        for worda in list_video_a:
            if(str(word) == str(worda)):
                frequencyA = frequencyA + 1

        for wordb in list_video_b:
            if(str(word) == str(wordb)):
                frequencyB = frequencyB + 1

        list_frequency.append(FrequencyWordCompare(word, frequencyA, frequencyB, (frequencyA+frequencyB)))

    list_frequency.sort(key=lambda x: x.word, reverse=False)
    #for item in list_frequency:
    #    print(item)

    #json_format = json.dumps([ob.__dict__ for ob in list_frequency])
    json_format = json.dumps({"video": [ob.__dict__ for ob in list_frequency]})
    return make_response(json_format,200)

'''
@app.route('/', methods = ['GET'])
def index():
    return "desin"
@app.route('/products', methods = ['GET'])
def get_all():
    get_products = Product.query.all()
    product_schema = ProductSchema(many=True)
    products = product_schema.dump(get_products)
    return make_response(jsonify({"product": products}))
@app.route('/products/<id>', methods = ['GET'])
def get_product_by_id(id):
    get_product = Product.query.get(id)
    product_schema = ProductSchema()
    product = product_schema.dump(get_product)
    return make_response(jsonify({"product": product}))
@app.route('/products/<id>', methods = ['PUT'])
def update_product_by_id(id):
    data = request.get_json()
    get_product = Product.query.get(id)
    if data.get('title'):
        get_product.title = data['title']
    if data.get('productDescription'):
        get_product.productDescription = data['productDescription']
    if data.get('productBrand'):
        get_product.productBrand = data['productBrand']
    if data.get('price'):
        get_product.price= data['price']    
    db.session.add(get_product)
    db.session.commit()
    product_schema = ProductSchema(only=['id', 'title', 'productDescription','productBrand','price'])
    product = product_schema.dump(get_product)
    return make_response(jsonify({"product": product}))
@app.route('/products/<id>', methods = ['DELETE'])
def delete_product_by_id(id):
    get_product = Product.query.get(id)
    db.session.delete(get_product)
    db.session.commit()
    return make_response("",204)
@app.route('/products', methods = ['POST'])
def create_product():
    data = request.get_json()
    product_schema = ProductSchema()
    product = product_schema.load(data)
    result = product_schema.dump(product.create())
    return make_response(jsonify({"product": result}),200)
'''
if __name__ == "__main__":
    app.debug = False#app.run(debug=True)
    #app.run(host = str(hostrest),port=portrest,ssl_context=('cert.pem', 'key.pem'))
    app.run(host = str(hostrest),port=portrest)
    #app.run()
#WINDOWS
#set FLASK_APP=app.py
#set FLASK_ENV=development #set FLASK_ENV=production
#set FLASK_RUN_PORT=8081
#set FLASK_RUN_HOST=0.0.0.0
#flask run
#LINUX
#export FLASK_APP=hello.py
#export FLASK_ENV=development #export FLASK_ENV=production
#export FLASK_RUN_PORT=8081
#export FLASK_RUN_HOST=0.0.0.0
#flask run