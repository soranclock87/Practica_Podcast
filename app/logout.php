<?php

require '../clases/AutoCarga.php';

$session = new Session();
$session->destroy();

header('Location:../index.php');

