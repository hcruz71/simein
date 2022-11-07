<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>PAgina de prueba para generacion de Percentiles</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

 
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

  <style>
    div morado-color { 
      background-color: #35386b; 
    }
  </style>
  <script type="text/css">
    .center {
      margin: 0 auto;
    }
    </script>
</head>
<body>

 <div class="row"> 

   <div class="input-field col s12 m12 center-align">
        <font color="green" face="PT Serif"> 
            <h2 name = "labelTituloPercentil" id = "labelTituloPercentil">Impresion de Percentiles</h2>
         </font>  
   </div>
</div>

CSS 
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 m12 rigth-align">
         <font color="green" face="PT Serif"> 
            <h5 name = "labelNombre" id = "labelNombre">Nombre de Paciente</h5>
         </font>  
        </div>
        <div class="input-field col s12">
          <input placeholder="Nombre completo del paciente" id="name" type="text" class="validate">
          <label for="name">Nombre</label>
        </div>

        <div class="input-field col s12 m12 rigth-align">
         <font color="green" face="PT Serif"> 
            <h5 name = "labelFuente" id = "labelFuente">Fuente de la Grafica</h5>
         </font>  
        </div>        
        <p>
          <label>
            <input name="tipopercent" type="radio" checked />
            <span>OMS</span>
          </label>
        </p>
        <p>
          <label>
            <input name="tipopercent" type="radio" />
            <span>CDC</span>
          </label>
        </p>

        <div class="input-field col s12 m12 rigth-align">
         <font color="green" face="PT Serif"> 
            <h5 name = "labelPercentil" id = "labelPercentil">Sexo</h5>
         </font>  
        </div>
        <p>
          <label>
            <input name="sexo" type="radio" checked />
            <span>Masculino</span>
          </label>
        </p>
        <p>
          <label>
            <input name="sexo" type="radio" />
            <span>Femenino</span>
          </label>
        </p>

        <div class="input-field col s12 m12 rigth-align">
         <font color="green" face="PT Serif"> 
            <h5 name = "labelPercentil" id = "labelPercentil">Elegir Percentil</h5>
         </font>  
        </div>
        <p>
          <label>
            <input name="percentil" type="radio" checked />
            <span>Peso</span>
          </label>
        </p>
        <p>
          <label>
            <input name="percentil" type="radio" />
            <span>Talla</span>
          </label>
        </p>
        <p>
          <label>
            <input name="percentil" type="radio" />
            <span>Perimetro Cefalico</span>
          </label>
        </p>


    </form>
  </div>


      <div class="row" >
              <div class="center" id="btnPercentil">
              <a class="waves-effect waves-light btn  yellow brown-text">Graficar Percentil</a>
          </div> 
      </div>


  

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l4 s12">
          <h5 class="white-text">Esta pagina es para probar el correcto funcionamiento de la generacion e impresión de percentiles</h5>
          
        </div>
                <div class="col l4 s12">
          
          
        </div>
        <div class="col l4 s12">
          <h5 class="white-text">This web page is for test the rigth performance of the main project for generate pencentiles forms</h5>
        </div>
 
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Creada por <a class="brown-text text-lighten-3" href="#"> Hector Cruz el 27 de Enero de 2019</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/index.js"></script>

  </body>
</html>
