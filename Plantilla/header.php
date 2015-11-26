<!-- ENCABEZAMIENTO DE LA PÁGINA -->
<head>
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/bootstrap/css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12">
	<div class="panel panel-primary">
	  <div class="panel-heading">
		<div style="height:70px" class="panel-title"> 
		
		<a href="web.php?page=inicio_pag"><img src="../assets/logo.png"> <img src="../assets/paco.png"></a>
		   
	<?php if (isset($_SESSION['user'])){?>	   
    <?php if (isset($_SESSION['tipo']) && $_SESSION['tipo']=="Administrador"){?>
    	&nbsp;&nbsp;|&nbsp;&nbsp; 
     <a href="?page=NuevaTarea"><img src="../assets/nueva.ico"> Nueva Tarea</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="?page=buscar_pag">Buscar Tarea</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="?page=AddUser">Añadir Usuario</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     <a href="?page=ListaUser">Listar Usuarios</a>&nbsp;&nbsp;|&nbsp;&nbsp;
     
     <?php } if (isset($_SESSION['tipo']) && $_SESSION['tipo']=="Operario"){?>
     
     <a href="?page=ModUser&idusers=<?=$_SESSION['id']?>">Modificar Datos</a>   
      	 <?php }?>
          <p style="float:right"> Conectado como <?php if (isset($_SESSION['user']))echo $_SESSION['user']?> 
          <br>Inicio de sesión: <?php if (isset($_SESSION['hora'])) echo $_SESSION['hora']; ?><br>
     <a style="float:right; color:white" href="?page=cerrarSesion"><button type="button" class="btn btn-warning">Cerrar Sesión</button></a></p>
  <?php }?>
     </div>
	  </div>
  </div>
 </div>
 </div>
</div>
	  
