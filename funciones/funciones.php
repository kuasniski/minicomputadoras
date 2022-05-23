<?php
    function registro(){
         require_once('recursos/conexion.php');
         $errores = [];
         $nombre = limpiar($_POST['nombre']);
         $apellido = limpiar($_POST['apellido']);
         $usuario = limpiar($_POST['usuario']);
         $email = limpiar($_POST['email']);
         $clave = limpiar($_POST['clave']);
         
         $dec = $con -> prepare("INSERT INTO usuario (nombre, apellido, usuario, email, clave) VALUES (?, ?, ?, ?, ?)");
         $dec -> bind_param("sssss", $nombre, $apellido, $usuario, $email, $clave);
         $dec -> execute();
         $resultado = $dec -> affected_rows;
         $dec -> free_result();
         $dec -> close();
         $con -> close();

         if($resultado == 1){
             $_SESSION['usuario'] = $usuario;
             header('location: index.php');
         }
         else{
             $errores[] = 'Oops, algo salio mal, no pudimos crear la cuenta, por favor intentelo mas tarde';
         }
         
         return $errores;
    }
    
    
    function limpiar($datos){
         $datos = trim($datos);
         $datos = stripslashes($datos);
         $datos = htmlspecialchars($datos);
         return $datos;
    }
?>