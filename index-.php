<?php
    session_start();
   // $_SESSION['usuario'] = "jAVI";
   $titulo ='Nuestro Proyecto | Principio';
   require_once('parciales/arriba.php');
   require_once('parciales/nav.php');
   // require_once('recursos/conexion.php');
?>


   

    <!--Contenedor Principal (cuepo de la pagina)-->
    <div class="container" id="pagina-principio">
        <h1 class = "titulo-de-pagina">Pagina Principal</h1>  
        <?php
              if(isset($_SESSION['usuario'])){
                  echo '
                        <p>Bienvenido '.$_SESSION['usuario'].'</p>
                        '; 
              }
              else{
                  echo '
                        <p>Bienvenido por favor Registrate o Logueate</p>
                  ';
              } 
          ?>

    </div><!--/Contenedor Principal (cuepo de la pagina)-->

    <?php
        require_once('parciales/pie.php');
        require_once('parciales/abajo.php');
    ?>     
    
    