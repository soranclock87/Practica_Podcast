<?php
//texto y archivo
require '../clases/Request.php';
require '../clases/FileUpload.php';
require '../clases/AutoCarga.php';



/*Aqui empieza el subir*/
$session = new Session();
        $nombre = $session->get('user');
$usuario = Request::post("usuario");
$categoria = Request::post("categoria");
$subir= new FileUpload("archivo");
$subir->setDestino("../usuarios/$nombre/");
$subir->setTamaño(7000000);
$subir->setNombre($subir->getNombre());
$subir->addTipo("mp3");

if($subir->upload()){
    header('Location:../app/cpanel.php');
      exit();
} else{
    echo 'Archivo no subido';
}


