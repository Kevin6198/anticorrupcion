<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{!! asset('css/estilos.css') !!}">
 

  
</head>
<body>
  <form method="post" action="datos.html" >
  <section class="formu">
    <h4>REGISTRO</h4>
    <input  class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese  Nombre" required="">
   <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese  Apellido Paterno" required="">
   <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Ingrese  Apellido Materno" required="">
   <input class="controls" type="date" placeholder="Fecha nacimiento" required="">
    <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese  Correo Electronico" required="">
     <input class="controls" type="email" name="correo" id="correo" placeholder="Ingrese  Nombre Usuario" required="">
    <input class="controls" type="password" name="correo" id="correo" placeholder="Ingrese  Contraseña" required="">
    
   <!--  /<input class="controls" type="FILE" name="ima" />-->
    <h4 >Estoy de acuerdo con <a  href="#">Terminos y Condiciones</a></h4>
    <input class="botons" type="submit" value="Registrar">
    <input class="botons" type="reset" value = "BORRAR"></td>
    <h4><a href="#">¿Ya tengo Registro?</a></h4>
  </section>
</form>

</body>
</html>