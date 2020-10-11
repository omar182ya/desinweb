<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@chartshq/muze@2.0.0/dist/muze.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/@chartshq/muze@2.0.0/dist/muze.css" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
  <script src="https://cdn.dhtmlx.com/suite/edge/suite.js"></script>     
  <link rel="stylesheet" href="https://cdn.dhtmlx.com/suite/edge/suite.css"> 

	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="data/config.js"></script>
  
<!--
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  
 -->
  

	
	
	<title>Comparativa Debates - DESIN</title>

	<style>
		html,
 body {
  overflow-x: hidden; /* Prevent scroll on narrow devices */
 }

body {
  padding-top: 56px;
}
body {
  margin: 0; 
  background-image: url("../desinweb/imagenes/f1.jpg");
  background-size:100% 100%;
  background-attachment: fixed;
  /*background-repeat: repeat;
  background-position: 100px 0px;*/
  }

@media (max-width: 767.98px) {
  .offcanvas-collapse {
    position: fixed;
    top: 56px; /* Height of navbar */
    bottom: 0;
    width: 100%;
    padding-right: 1rem;
    padding-left: 1rem;
    overflow-y: auto;
    background-color: var(--gray-dark);
    transition: -webkit-transform .3s ease-in-out;
    transition: transform .3s ease-in-out;
    transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
  }

.offcanvas-collapse.open {
    -webkit-transform: translateX(-1rem);
    transform: translateX(-1rem); /* Account for horizontal padding on navbar */
  }
}

.nav-scroller {
  position: relative;
  z-index: 2;
  height: 2.75rem;
  overflow-y: hidden;
}

.nav-scroller .nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
  padding-bottom: 1rem;
  margin-top: -1px;
  overflow-x: auto;
  color: rgba(255, 255, 255, .75);
  text-align: center;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch;
}

.nav-underline .nav-link {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: .875rem;
  color: var(--secondary);
}

.nav-underline .nav-link:hover {
  color: var(--blue);
}

.nav-underline .active {
  font-weight: 500;
  color: var(--gray-dark);
}

.text-white-50 { color: rgba(255, 255, 255, .5); }

.bg-purple { background-color: var(--purple); }

.border-bottom { border-bottom: 1px solid #e5e5e5; }

.box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

.lh-100 { line-height: 1; }
.lh-125 { line-height: 1.25; }
.lh-150 { line-height: 1.5; }

/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}


#columnas{
  background-color: #e5e5e5;
  padding: 40px 0 30px 0;
  text-align: center;
  margin-top: 30px;
}

.linea {
  border-top: 1px solid black;
  height: 2px;
  padding: 0;
  margin: 10px auto 0 auto;
}

.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 60vh;
}

h3{
  font-size: 36px;
  color: #e5e5e5;
  font-weight: bold;
}
h5{
  font-size: 24px;
  color: #0000;
  font-weight: bold;
}
#team img{
margin-top: -50px;
}
#team i{
  font-size: 26px;
  color: #555;
}
#team p{
  font-weight: 500;
 
}
#team .card{
  width: 100%;
  max-width: 400px;
  height: 400px;
  display: flex;
  flex-wrap: wrap;
  
  margin: auto;
  border-radius: 0;
  box-shadow: 5px 5px 15px #e74c3c;
  transition: all 0.3s ease-in;
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
 
}

#team .card:hover{
  background: #e74c3c;
  color: #fff;
  border-radius: 5px;
  border: none;
  box-shadow: 5px 5px 10px #9E9E9E;
  transform: translateY(-30px);
  /*transform: translateY(-2px);*/
}
#team .card:hover h3, #team .card:hover i{
  color: #ffff;

}

/*logo {
                max-height: 40px;
                padding: 0 auto;
                margin-top: 0;
            }*/

/*de aqui el otro cards*/ 
.lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: #fff;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

/*fin loades*/ 

h4 {
  color: #4f4866;
  font-weight: normal;
  font-size: 35px;
  font-family: Arial;

}

	</style>
<script>


const muze = window.muze;

/*
(async () => {
const DataModel = await muze.DataModel.onReady();
const env = await muze();
//const data = await loadData("coffee.csv");
const data = await fetch('data/coffee-data.json').then(d => d.json());
const schema = [
  {
      "name": "Market",
      "type": "dimension"
  },
  {
      "name": "ProductType",
      "type": "dimension"
  },
  {
      "name": "Revenue",
      "type": "measure",
      //"format": val => `$${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
  },
  {
      "name": "Expense",
      "type": "measure",
      //"format": val => `$${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
  },
  {
      "name": "Profit",
      "type": "measure"
  }
];
const formattedData = await DataModel.loadData(data, schema);
let dm = new DataModel(formattedData);

let mountPoint = document.getElementById("chart");
env
  .canvas()
  .data(dm)
  .rows(['Market', 'ProductType'])
  .columns([['Revenue', 'Expense'], ['Revenue', 'Expense']])
  .config({
    axes: {
      x: {
        tickFormat: val => `$${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
      }
    }
  })
  .mount(mountPoint);
})();
*/

function bar_show(id_video_a,text_video_a,id_video_b,text_video_b) {
    $.ajax({
      async:false,
      cache:false,
      type: "POST",
      url: url+"/videos/palabras", 
      dataType: "json",
      contentType: "application/json; charset=UTF-8",
      data: JSON.stringify({id_video_a:id_video_a,id_video_b:id_video_b}),
      processData: false,
      success: function(data){

        var x1 = []; 
        var y1 = [];	
        var x2 = []; 
        var y2 = [];
        var a = 0;
        var b = 0;
        var ab = 0;	
        
        for(var palabra in data.video)
        {
          y1.push(data.video[palabra].word);
          x1.push(data.video[palabra].frequencyA);
          if(data.video[palabra].frequencyA>0){
            a++;
          }		
          if(data.video[palabra].frequencyB>0){
            b++;
          }	
          if(data.video[palabra].frequencyA>0 && data.video[palabra].frequencyB>0){
            ab++;
          }		 		
        }
        for(var palabra in data.video)
        {
          y2.push(data.video[palabra].word);
          x2.push(data.video[palabra].frequencyB);			 		
        }
        //alert(JSON.stringify(y));
        var trace1 = {
          y: y1,
          x: x1,
          name: ''+text_video_a,
          type: 'bar',
          orientation: 'h'
        };

        var trace2 = {
          y: y2,
          x: x2,
          name: ''+text_video_b,
          type: 'bar',
          orientation: 'h'
        };

        var data = [trace1, trace2];

        //var layout = {barmode: 'group'};
        var layout = {
          title: 'COMPARACIÓN DE PALABRAS MÁS USADAS EN EL DEBATE PRESIDENCIAL 2020',
          font:{
            family: 'Raleway, sans-serif'
          },
          barmode: 'group',
          xaxis2: {
            overlaying: 'x',
            side: 'top'
          }
        };

        Plotly.newPlot('divBar', data, layout);

        var data = [{
        values: [a, b, ab],
        labels: [(text_video_a+''), (text_video_b+''), 'AMBOS'],
        type: 'pie',
        insidetextorientation: "radial",
        marker: {
          colors: 'rgb(34, 53, 101)'
        },
        }];

        var layout = {
        height: 500,
        width: 500,
        'title': 'ESTADÍSTICA DE PALABRAS'
        };

        Plotly.newPlot('div_palabra', data, layout);
  
      }             
    });

    $.ajax({
      async:false,
      cache:false,
      type: "POST",
      url: url+"/videos/sentencias", 
      dataType: "json",
      contentType: "application/json; charset=UTF-8",
      data: JSON.stringify({id_video_a:id_video_a,id_video_b:id_video_b}),
      processData: false,
      success: function(data){
        //alert(JSON.stringify(data))
        
        var registros = [];
        var registro = null;
        var a = 0;
        var b = 0;
        var ab = 0;

        var i=1;
        for(var sentencia in data.video)
        {
          registro = {
            "id": i,
            "Descripcion": data.video[sentencia].word,
            "Video A": data.video[sentencia].frequencyA,
            "Video B": data.video[sentencia].frequencyB,
          };
          i++;
          if(data.video[sentencia].frequencyA>0){
            a++;
          }		
          if(data.video[sentencia].frequencyB>0){
            b++;
          }	
          if(data.video[sentencia].frequencyA>0 && data.video[sentencia].frequencyB>0){
            ab++;
          }

          registros.push(registro);
        }
        var data = [{
        values: [a, b, ab],
        labels: [(text_video_a+''), (text_video_b+''), 'AMBOS'],
        type: 'pie',
        insidetextorientation: "radial",
        marker: {
          colors: 'rgb(56, 75, 126)'
        },
        }];

        var layout = {
        height: 500,
        width: 500,
        'title': 'ESTADÍSTICA DE FRASES'
        };

        Plotly.newPlot('div_sentencia', data, layout);
        
        bar_load(registros);
      } 
    });
}

async function bar_load(registros) {
        const DataModel = await muze.DataModel.onReady();
        const env = await muze();

        
        const data = registros;
        const schema = [
          {
              "name": "Descripcion",
              "type": "dimension"
          },
          {
              "name": "Video A",
              "type": "measure",
              "format": val => `${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
          },
          {
              "name": "Video B",
              "type": "measure",
              "format": val => `${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
          }
        ];
        const formattedData = await DataModel.loadData(data, schema);
        let dm = new DataModel(formattedData);
        document.getElementById("divChart").innerHTML = "";
        let mountPoint = document.getElementById("divChart");
        env
          .canvas()
          .data(dm)
          .rows(['Descripcion'])
          .columns([['Video A', 'Video B'], ['Video A', 'Video B']])
          .data(dm)
          .color({
            field: 'Descripcion',
            step: true
          })
          .title("Grouped bar chart", { position: "bottom", align: "right" })
          .config({
            axes: {
              x: {
                tickFormat: val => `${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
              }
            },
            scrollBar: {
              vertical: {
                align: 'left'
              },
              thickness: 20,
              speed: 10
            }
          })
          .mount(mountPoint);
}



(async () => {
const DataModel = await muze.DataModel.onReady();
const env = await muze();
const data = [];//await fetch('data/coffee-data.json').then(d => d.json());
const schema = [
  {
      "name": "Market",
      "type": "dimension"
  },
  {
      "name": "ProductType",
      "type": "dimension"
  },
  {
      "name": "Revenue",
      "type": "measure",
      "format": val => `$${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
  },
  {
      "name": "Expense",
      "type": "measure",
      "format": val => `$${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
  },
  {
      "name": "Profit",
      "type": "measure"
  }
];
const formattedData = await DataModel.loadData(data, schema);
let dm = new DataModel(formattedData);

let mountPoint = document.getElementById("divChart");
env
  .canvas()
  .data(dm)
  .rows(['Market', 'ProductType'])
  .columns([['Revenue', 'Expense'], ['Revenue', 'Expense']])
  .color('ProductType')
  .config({
    axes: {
      x: {
        tickFormat: val => `$${val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`
      }
    }
  })
  .mount(mountPoint);
})();


</script>
  </head>
  <body>
  <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
  <img id="logo" src="../desinweb/imagenes/desin1.png" width="90px" height="80px">     
    
  <a class="navbar-brand" href="#">DESIN-FORMANDO</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Acerca de</span></a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          -->
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
     <!-- ojo
    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
          Friends
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <!--a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a*-->
      </nav>
    </div>
    <!-- ojo-->
		<main role="main">

		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div class="jumbotron">
			<div class="container">
      <div class="row">
          <div class="col-sm-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <img src="../desinweb/imagenes/desin1.png" class="d-block w-100" alt="..." width="400px" height="230px" style="color:antiquewhite">
                    <div class="carousel-caption d-none d-md-block ">
                      <h4 ><strong>LA INFORMACION DESINFORMADA</strong></h4>
                      <p style="color: #4f4866"><strong>INFORMATE ANTES DE COMPARTIR UNA SUPUESTA NOTICIA.</strong></p>
                    </div>
              </div>
              <div class="carousel-item">
              <img src="../desinweb/imagenes/1.jpg" class="d-block w-100" alt="..." width="400px" height="230px">
                    
              </div>
              <div class="carousel-item">
              <img src="../desinweb/imagenes/2.png" class="d-block w-100" alt="..." width="400px" height="230px">
                    <!--div class="carousel-caption d-none d-md-block ">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div-->
              </div>
              <div class="carousel-item">
              <img src="../desinweb/imagenes/3.jpg" class="d-block w-100" alt="..." width="400px" height="230px">
                    <!--div class="carousel-caption d-none d-md-block ">
                      <h5>First slide label</h5>
                      <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div-->
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>              
              
          </div>
        </div>
			</div>
    </div>
    
    <div class="container"> 
      <h1  style=" text-align: justify; font-family:arial;">
      <strong>DEBATE PRESIDENCIAL 2020 Y LA COMPARATIVA DE LOS CANDIDATOS<strong></h1>
      <br>
      <p style="font-size: 10px;  text-align: justify; font-family:arial;">Tarija 11 de Octubre 2020</p>
      <br>
      <br>
      <p style="font-size: 18px ;  text-align: justify; font-family:arial;">
      <strong>Hace una semana exactamente en fecha 04 de octubre, culmino el tan esperado debate presidencial rumbo a las elecciones 2020, contando con la participación de todos los candidatos el primer día de debate, de esta forma todo el país pudo enterarse de las participaciones de los postulantes que buscan sentarse en la silla presidencial.<strong></p>
      <br>
      <img src="../desinweb/imagenes/debate-presidencial.jpg" alt="..." width="900px" height="350px" style="font-size: 18px ; margin: 0 50px;align:center ">
      <br>
      <br>
      <p style="font-size: 14px ;  text-align: justify; font-family:arial;">
      Ante tal acontecimiento sumamente importante para la democracia, la información vertida para los votantes fue diversa, se observaron diversas directrices que asumirán los candidatos al momento de cumplir sus funciones como presidente del Estado plurinacional de Bolivia. Según encuestas realizadas los candidatos con mayor intención de votos son: Luis Arce del Movimiento al Socialismo (MAS), Carlos Mesa de Comunidad Ciudadana (CC) Y Luis Fernando Camacho de CREEMOS. 
      Teniendo en cuenta estas referencias se generó una herramienta estadística que arroja datos en base a palabras declaradas por mencionados candidatos, permitiendo realizar un análisis descriptivo de la opinión de cada postulante a la presidencia.

      </p>
    </div>
    <hr class="featurette-divider">
    <p style="font-size: 15px;  text-align: center; font-family:arial;color:#e74c3c"> SELECCIONAR CANDIDATOS A COMPARAR.</p>
   

    <br>
      <div class="container">
        <div class="row" > 
            <div class="col-sm-6">
              <div class="left">
                  <div class="dropdown">
                    <div class="dhx_sample-container__widget" id="cmb_video_a" style="min-width:300px;width:100%;padding:1px;"></div>
                  </div>
              </div>
            </div>      
            <div class="col-sm-6">
              <div class="right">
                  <div class="dropdown">
                    <div class="dhx_sample-container__widget" id="cmb_video_b" style="min-width:300px;width:100%;padding:1px;"></div>
                  </div>
              </div>
            </div>
          </div> 
      </div>
    
    <hr class="featurette-divider">
    <div class="container">
    <p style="font-size: 15px;  text-align: center; font-family:arial;color:#e74c3c">PALABRAS MÁS USADAS EN EL DEBATE PRESIDENCIAL 2020 POR PARTE DE LOS CANDIDATOS QUE OCUPAN LOS 3 PRIMEROS PUESTOS SEGUN ENCUESTAS.</p>
    <div id='divBar' style="min-height: 700px;padding:2%" style="align:center"><!-- Plotly chart will be drawn inside this DIV --></div> 
    </div>
    <hr class="featurette-divider">
    <div class="container">
    <p style="font-size: 15px;  text-align: center; font-family:arial; color:#e74c3c">FRASES MÁS USADAS EN EL DEBATE PRESIDENCIAL 2020 POR PARTE DE LOS CANDIDATOS QUE OCUPAN LOS 3 PRIMEROS PUESTOS SEGUN ENCUESTAS.</p>
    
    <div id="divChart" class="abs-center" style="width: 90%;height: auto; padding:4%;" ></div>
    
    </div>

    <div class="container">
      <!-- Example row of columns -->      

			<!-- for rendering chart -->
			<!--div style="width: 800px;height: 550px;" id="chart"></div-->


			<div class="row">
				<div class="col-lg-6">
          <div  style=" margin: auto " id="div_palabra" ></div>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-lg-6">
          <div  style=" margin: auto" id="div_sentencia" ></div>
				</div>
      </div>
      <hr class="featurette-divider">
      <!-- aqui -->
      <div class="conatainer">
      <div class="row" >
				<div class="col-md-6">
					<h2>Carlos Diego de Mesa Gisbert</h2>
					<p style="font-size: 14px;  text-align: justify; font-family:arial;">Según los datos analizados el candidato Carlos Mesa fue reiterativo con las palabras: crisis, corrupción, gobierno y empleo. Tal postura fue sumamente repetida a lo largo del debate por Carlos Mesa, además que mencionadas palabras fueron las suscitadas a lo largo de su campaña electoral haciendo referencia al duro embate que sufrió el país; crisis en el gobierno y un alto índice de corrupción que según Carlos Mesa fueron generadas por el gobierno de Evo Morales ex mandatario del País.
					<p><!--a class="btn btn-secondary" href="#" role="button">View details &raquo;</a--></p>
				</div>
				<div class="col-md-6" >
          <h2></h2>
            <br>
          <center><img src="../desinweb/imagenes/MESA.jpg" alt="..."  width="400px" height="200px"></center>
          
          <p style="font-size: 10px;  text-align: center; font-family:arial;color:#9E9E9E">“El país está atravesando una grave crisis, en realidad una triple crisis. Carlos Mesa en debate presidencial”</p>
				</div>
      </div>
      </div>
      <hr class="featurette-divider">
      
      <div class="container">
      <div class="row">
				<div class="col-md-6" >
         <h2 >Luis Alberto Arce Catacora</h2>
          <center><img src="../desinweb/imagenes/ARCE.jpg" alt="..."  width="400px" height="200px"  ></center>
          <p style="font-size: 10px;  text-align: center; font-family:arial;color:#9E9E9E">"Una vez más, el pueblo hoy está apostando por retomar todo el proceso de cambio. Luis Arce en debate presidencial.”</p>
        </div>
				<div class="col-md-6">
          <h2></h2>
          <br>
          <br>
          <p style="font-size: 14px;  text-align: justify; font-family:arial;">En contraposición a las declaraciones de Carlos Mesa, fue el candidato por el MAS Luis Arce que haciendo reiterado uso de las palabras: pueblo, país y boliviano contextualizo que el MAS siempre realizo un arduo trabajo por el pueblo boliviano y lo seguirá haciendo, tomando en cuenta la ideología que ya mantuvo durante 14 años de gobierno con respecto a los pueblos originarios.</p>
					<p><!--a class="btn btn-secondary" href="#" role="button">View details &raquo;</a--></p>
					
				</div>
      </div>
      </div>
      <hr class="featurette-divider">
    <div class="container">
      <section id="team">
        <div class="container.my-3.py-5 text-center">
         <div class="row mb-5">
           <div class="col">
             <h1>TEAM</h1>
             <p class="mt-3"></p>

           </div>

         </div>
         <div class="row">
           <div class="col-lg-4 ">
             <div class="card">
              <div class="card-header">
               <div class="card-body">
                 <img src="../desinweb/imagenes/esdras.jpg" alt="" class="img-fluid rounded-circle
                 w-50 ">
                 <h3>Esdras Valencia</h3>
                 <br>
                 <h4> Comunicación Social </h4>
                 <br>
                  <br>
                  <br><br>
                  
                  
                  
                  <div class="d-flex flex-row justify-content-center">
                    
                  </div>
                </div>
              </div>
             </div>
           </div>
          <div class="col-lg-4 col-md-6">
            <div class="card">
            <div class="card-header">
              <div class="card-body">

                  <img src="../desinweb/imagenes/OEYC.jpg" alt="" class="img-fluid rounded-circle
                  w-50">
                  <h3>Omar Yana</h3>
                  <br>
                  <h4>Informática</h4>
                  <br>
                  <br>
                  <br><br>
                  <br>
                  <br>
                  
                  <div class="d-flex flex-row justify-content-center">
                    
                  </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card">
            <div class="card-header">
              <div class="card-body">
                  <img src="../desinweb/imagenes/edith.jpg" alt="" class="img-fluid rounded-circle
                  w-50 ">
                  <h3>Edith Rafael</h3>
                  <br>
                  <h>Informática</h4>
                  <br>
                  <br>
                  <br><br>
                  <br>
                  <br>
                  <br>
                  
                  <div class="d-flex flex-row justify-content-center">
                    
                  </div>
                  </div>
                </div>
            </div>
          </div>
         </div>
        </div>

      </section>
</div>
<!-- hasta aqui -->
		</main>

		<footer class="footer text-muted">
			<div class="container">
				<span class="text-muted">
					<p class="float-right">
					<a href="#"></a>
					</p>
				
				</span>
			</div>
		</footer>

	</body>
	<script>
    var url = "http://"+rest.host+":"+rest.port;
    var en = {
      notFound: "No Encontrado Video",
      selectAll: "Seleccionar Todos los Videos",
      unselectAll: "Deseleccionar Todos los Videos",
      selectedItems: "Seleccionar Video"
    };
		dhx.i18n.setLocale("combobox", en);
		var combobox_video_a = new dhx.Combobox("cmb_video_a", {
			multiselection: false,
			selectAllButton: false,
			placeholder: "Videos",
      label:"Video A",
			labelInline: true,
			labelWidth: 100,
			template: function (item) {
				return "<div style='user-select:none;display:inline-block; vertical-align:middle;'></div> " + item.value + "";
			}
		});

    dhx.i18n.setLocale("combobox", en);
		var combobox_video_b = new dhx.Combobox("cmb_video_b", {
			multiselection: false,
			selectAllButton: false,
			placeholder: "Videos",
      label:"Video B",
			labelInline: true,
			labelWidth: 100,
			template: function (item) {
				return "<div style='user-select:none;display:inline-block; vertical-align:middle;'></div> " + item.value + "";
			}
		});
        
    combobox_video_a.data.load(url+"/videos").then(function(data){});
    combobox_video_b.data.load(url+"/videos").then(function(data){});

    combobox_video_a.events.on("change", function(value, e){
			if(e === 'update' && combobox_video_b.getValue() > 0){
				//alert('change:'+value+' event: '+e+ ' combo: '+combobox_video_b.getValue());
        const item_a = combobox_video_a.data.getItem(value);
        const item_b = combobox_video_b.data.getItem(combobox_video_b.getValue());
        bar_show(item_a.id, item_a.value, item_b.id, item_b.value);
			}
		});
    combobox_video_b.events.on("change", function(value, e){
			if(e === 'update' && combobox_video_a.getValue() > 0){
				//alert('change:'+value+' event: '+e+ ' combo: '+combobox_video_a.getValue());
        const item_b = combobox_video_b.data.getItem(value);
        const item_a = combobox_video_a.data.getItem(combobox_video_a.getValue());

        //alert(JSON.stringify(item_b)+' '+JSON.stringify(item_b));
        bar_show(item_a.id, item_a.value, item_b.id, item_b.value);
			}
		});

		$(document).ready(function () {
			$('#success').click(function (e) {
				e.preventDefault();
				$.ajax({
					async:false,
					cache:false,
					type: "GET",
					url: "http://127.0.0.1:85/products", 
					dataType: "json",
					contentType: "application/json; charset=UTF-8",
					//data: JSON.stringify({id:0}),
					processData: false,
					success: function(data){
						alert(JSON.stringify(data));
					}             
				});
			});

		});

		

    var trace1 = {
        y: [],
        x: [],
        name: '',
        type: 'bar',
        orientation: 'h'
      };

      var trace2 = {
        y: [],
        x: [],
        name: '',
        type: 'bar',
        orientation: 'h'
      };

      var data = [trace1, trace2];
      var layout = {
        title: '',
        barmode: 'group',
        xaxis2: {
          overlaying: 'x',
          side: 'top'
        }
      };

      Plotly.plot('divBar', data, layout);

      var data = [{
        values: [],
        labels: [],
        type: 'pie'
        }];

        var layout = {
        height: 500,
        width: 500
      };

      Plotly.newPlot('div_palabra', data, layout);
      Plotly.newPlot('div_sentencia', data, layout);

	</script>	
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	
</html>
