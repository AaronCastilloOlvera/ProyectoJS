<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
 <link href="formulario.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="css/reset.css">
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <title>Formulario1</title>
 <script src  = "jquery-3.4.1.slim.min.js"></script>
 <script src  = "jspdf.debug.js"></script>

<!-- Inicio Scrpt -->
<!--------------------------------------------------->
<script type = "text/javascript" >
function validarTarjetas(){
  
  
  visa = document.getElementById("visa").value;
  cv   = document.getElementById("cv").value;

  var visa_error = "";
  var color = "blue"; 
          //Validar la tarjea de credito    
      if (!visa.match(/^4\d{3}$/) || 
            cv <= 1000 || 
            cv >= 10000){
        
          visa_error = 
                    "Datos Incorrectos."+ 
                    "Numero tarjea o cv incorrectos";
          color = "red";
      }
      else{
          visa_error = "Tarjeta valida";
          color = "green";
      }
   
   document.getElementById("visa_error").innerHTML = 
        visa_error.fontcolor(color); 
  }

</script> 
<!-- Fin Scrpt -->
<!--------------------------------------------------->

</head>
<body>
 <div class="cont1">
  
  <div class="form-top">
   <h2> AEROLINEAS <span> LA LECHE  </span> </h2>  
   <h2> COMPRA     <span> BOLETOS   </span></h2>
  </div>

   <!--Cajas para ingresar datos-->
   <form  class="form-reg" action="guardar.php" method="POST">
   <input class="input" type="text"   name = "nombre"    placeholder=" &#128100; Nombre"  required autofocus>
   <input class="input" type="email"  name = "correo"    placeholder="&#9993;    Correo " required>
   <input class="input" type="number" name = "numero"    placeholder="&#888;     Numero "  required>       
   <input class="input" type="text"   name = "noTarjeta" placeholder="&#8962;    No Tarjeta"                  id="visa" >
   <input class="input" type="text"   name = "cv"        placeholder="&#8962;    CV" 
          id="cv">
   
   <!---------------------------->
   <br>   
    <img src="images/img_tarjeta.jpg" height="200" width="380s">  
   <br>
   
   <center>
     <span id="visa_error"></span><br>
   </center>
   
   <div class="btn-form">

      <input class="btn-submit" 
             type="button" 
             value="VALIDAR DATOS"       
             onClick="validarTarjetas();" style='width:150px; height:50px' >

      <input class="btn-reset" 
             type="submit" 
             value="SIGUIENTE" style='width:150px; height:50px'>

   </div>

  </form>
 </div>
</body>
</html>