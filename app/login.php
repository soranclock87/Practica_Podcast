<?php

require '../clases/AutoCarga.php';

$usuario = Request::post("usuario");

if ($usuario === NULL || $usuario === '') {
    header('Location:../index.php');
    exit();
} else {
    session_start();
    $session = new Session();
    $session->set('user', $usuario);
    //echo $usuario;
   header("Location:../app/cpanel.php");
   
}
    
    