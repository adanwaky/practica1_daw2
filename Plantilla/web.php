<?php 
//PÁGINA DE INICIO
define('INS',__DIR__.'/../install/');
define('MOD',__DIR__.'/../app/models/');
define('VIEW',__DIR__.'/../app/views/');
define('CTRL',__DIR__.'/../app/controllers/');
session_start();

include("top_page.php"); 
?>
 <div id="wrapper">      
     <div id="header">       
         <?php  include("header.php"); //MUESTRA EL ENCABEZAMIENTO ?>        
     </div>  
     <div id="contenido">
         <?php include("pages.php"); //MUESTAS LAS PÁGINAS A LAS QUE SE ACCEDE?>        
         <br style="clear:both;" />
     </div>
     <div id="footer">          
         <?php include("footer.php"); //MUESTRA EL PIE DE PÁGINA?>        
     </div>
 </div>