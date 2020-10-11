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
   
  
	<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	
	<title>Hello, word!</title>
	<style>
		html,
 body {
  overflow-x: hidden; /* Prevent scroll on narrow devices */
 }

body {
  padding-top: 56px;
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

(async () => {
  const DataModel = await muze.DataModel.onReady();
  const env = await muze();
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

  let mountPoint = document.getElementById("chart");
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
      <a class="navbar-brand" href="#">Offcanvas navbar</a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#ventana1" data-toggle="modal">Cargar Data</a>
                <div class="modal fade" id="ventana1">
                <div class="modal-dialog">
                  <div class="content">
                    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"cargando la data></h4>

                  </div>

                </div>


                </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Switch account</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" >Cargar Data </a>               
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">
          <!-- weather widget start -->
          <a target="_blank" href="https://hotelmix.es/weather/la-paz-13481">
          <img src="https://w.bookcdn.com/weather/picture/21_13481_1_4_3658db_250_2a48ba_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=582&anc_id=93525" alt="booked.net"/></a>
          <!-- weather widget end -->
        <a class="nav-link" href="#">
          <!-- weather widget start -->
          <a target="_blank" href="https://hotelmix.es/weather/santa-cruz-de-la-sierra-2115">
          <img src="https://w.bookcdn.com/weather/picture/21_2115_1_4_3658db_250_2a48ba_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=582&anc_id=37230" alt="booked.net"/></a>ç
          <!-- weather widget end -->
          <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">Explore</a>
        <a class="nav-link" href="#">Suggestions</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
      </nav>
    </div>
   <!-- loader
    <div class="d-flex justify-content-center">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
        
      </div>
    </div>-->
    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>



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
              <h1 class="display-3" >LA INFORMACION DESINFORMADA</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>   
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

    

    <section id="columnas">
      <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <div class="left">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
              </div>
            </div>      
            <div class="col-sm-6">
              <div class="right">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown button
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
              </div>
            </div>
          </div> 
      </div>
    </section>
    
    <hr class="featurette-divider">

    <section id="comparador">
      <div class="container"> 
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eveniet consequatur, et accusantium vitae accusamus unde beatae a repellat obcaecati fugit tempora dolore, cupiditate harum repellendus ullam adipisci veritatis exercitationem.
        </p>
          <div class="abs-center" style="width: 800px;height: 650px;" id="chart"></div>
          <!--div class="abs-center" style="max-width: 100%; margin: auto " id="myDiv" ></div-->
      </div>

    </section>

    <hr class="featurette-divider">
    <div class="container">
      <!-- Example row of columns -->      

     

			<!-- for rendering chart -->
			<!--div style="width: 800px;height: 550px;" id="chart"></div-->


			<div class="row">
				<div class="col-lg-6">
					<h2>Reporte</h2>
					
          <div  style=" margin: auto " id="myDiv" ></div>
          <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-lg-6">
					<h2>Reporte</h2>
				
          <div  style=" margin: auto" id="myDiv2" ></div>
          
				</div>
      </div>
      <hr class="featurette-divider">

      <div class="row">
				<div class="col-md-6">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
				</div>
				<div class="col-md-6">
					<h2>Heading</h2>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
				</div>
      </div>
      
      <hr class="featurette-divider">

      <div class="container"> 
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eveniet consequatur, et accusantium vitae accusamus unde beatae a repellat obcaecati fugit tempora dolore, cupiditate harum repellendus ullam adipisci veritatis exercitationem.
        </p>
    

      </div>
      
      <hr class="featurette-divider">

      <section id="team">
        <div class="container.my-3.py-5 text-center">
         <div class="row mb-5">
           <div class="col">
             <h1>TEAM</h1>
             <p class="mt-3"></p>

           </div>

         </div>
         <div class="row">
           <div class="col-lg-3 col-md-4">
             <div class="card">
              <div class="card-header">
               <div class="card-body">
                 <img src="../desinweb/imagenes/esdras.jpg" alt="" class="img-fluid rounded-circle
                 w-50 mb-3">
                 <h3>Esdras Valencia</h3>
                 <h5>Periodista</h5>
                 <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                 <div class="d-flex flex-row justify-content-center">
                   <div class="p-4">
                     <a href="#">
                       <i class="fa fa-facebook"></i>
                     </a>
                   </div>
                   <div class="p-4">
                     <a href="#">
                       <i class="fa fa-twiter"></i>
                     </a>
                   </div>
                   <div class="p-4">
                     <a href="#">
                       <i class="fa fa-instagram"></i>
                     </a>
                   </div>
                 </div>
                </div>
              </div>
             </div>
           </div>
          <div class="col-lg-3 col-md-4">
            <div class="card">
            <div class="card-header">
              <div class="card-body">
                  <img src="../desinweb/imagenes/yana.jpg" alt="" class="img-fluid rounded-circle
                  w-50 mb-2">
                  <h3>Omar Yana</h3>
                  <h5>Informatico</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="card">
            <div class="card-header">
              <div class="card-body">
                  <img src="../desinweb/imagenes/edith.jpg" alt="" class="img-fluid rounded-circle
                  w-50 mb-2">
                  <h3>Edith Rafael</h3>
                  <h5>Informatico</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </div>
                    <div class="p-4">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
         </div>
        </div>

      </section>
			<!--hr>
			<button type="button" class="btn btn-success" id="success">Success</button>
			<hr-->
		</div> <!-- /container -->

		</main>

		<footer class="footer text-muted">
			<div class="container">
				<span class="text-muted">
					<p class="float-right">
					<a href="#">Back to top</a>
					</p>
					<p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
					<p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
				</span>
			</div>
		</footer>

	</body>
	<script>





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

		var data = [{
		values: [19, 26, 55],
		labels: ['Residential', 'Non-Residential', 'Utility'],
		type: 'pie'
		}];

		var layout = {
		height: 400,
		width: 500
		};

		Plotly.newPlot('myDiv', data, layout);
    Plotly.newPlot('myDiv2', data, layout);
	</script>	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
	
</html>
