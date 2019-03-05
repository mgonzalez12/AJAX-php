<?php

   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido']; 

   if(empty($nombre) || empty($apellido)){
       echo "Por Favor ingrese su nombre y apellido";
   }else{
       echo "Gracias ". $nombre ." ".$apellido;
   }
?>