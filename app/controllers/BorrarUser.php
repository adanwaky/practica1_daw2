<?php

//CONTROLADOR PARA BORRAR UNA TAREA

include_once MOD . 'users.php'; //Funciones para la tabla tareas
$usuario = DatosUser($_GET['idusers']); //Busca la tarea de la posición que llega por GET

if (!$_POST) {
    if (!ExisteUser($_GET['idusers'])) { //Si no se ha enviado nada y la tarea no existe
        include_once VIEW . 'Error404.php';
    } else //Si la tarea existe muestra el formulario de confirmación de borrado
        include VIEW . "BorraUser.php";
}
else {
    if (isset($_POST['no'])) {//Si no se quiere borrar la tarea recarga el index
        header("Location: index.php?page=ListaUser");
    }

    if (isset($_POST['si'])) {
        //Si se quiere borrar la tarea, se borra de la base de datos
        // y recarga el index
        BorraUser($_GET['idusers']);
        header("Location: index.php?page=ListaUser");
    }
}
?>
