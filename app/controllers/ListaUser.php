<?php

include_once MOD . 'users.php';
$resultado = Usuarios();

if (!$_POST) {
    include_once VIEW . 'ListaUsuario.php';
}

