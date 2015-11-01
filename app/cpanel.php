<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>
    <body>
        <div class="menu">
        <?php
//RECOGEMOS EL USUARIO CON LA SESION
        require '../clases/AutoCarga.php';

        $session = new Session();
        $nombre = $session->get('user');



        //CREAMOS UNA CARPETA DONDE GUARDAREMOS A LOS USUARIOS
        $miembros = '../usuarios';

        if (!file_exists($miembros)) {
            mkdir($miembros, 0777, true);
        }

        //CREAMOS CARPETA DE USUARIO O LE DAMOS ACCESO 
        $carpeta = '../usuarios/' . $nombre;
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
        }
        echo "<h1>Bienvenido al panel de control</h1> <br> <h3>" . $nombre . " Sube un archivo mp3.</h3>";

        echo '<form action="subir.php" method="post"
            enctype="multipart/form-data">
            <input type="file" name="archivo" />
            <input type="submit" />
        </form>';
        
        echo "</div><br>";
        echo "<div class='canciones'><h1> Mis canciones</h1>";
       
        
            
        
        $ruta = "../usuarios/" . $nombre;


        $directorio = opendir($ruta); //ruta actual
        while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
            if (is_dir($archivo)) {//verificamos si es o no un directorio
                // echo "[" . $archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
            } else {
                echo "<h5>".$archivo . "</h5>";
                echo "<li><audio controls> <source src='" . $ruta . "/" . $archivo . "'" . " type='audio/mpeg' > </audio></li>";
            }
        }
        ?>

        <form action="logout.php" method="post"
              enctype="multipart/form-data">

            <input type="submit" value="Cerrar sesion" />
        </form>
        </div>
    </body>
</html>
