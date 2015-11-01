<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <title></title>
    </head>
    <body>

        <header>
            <h1>Podcast Blosmik Studio</h1>

        </header>
        <div class="registro">
            <form action="app/login.php" method="POST">
                <label>Nombre de Usuario :</label> <input type="text" name="usuario"/> 
                <input type="submit" value="Acceder"/>
                <h5>Introduce un nombre de usuario para acceder al menú.</h5>
            </form>   

        </div>
        <div class="list">

            <h2>Ultimos Usuarios</h2>
             <?php
               require '../Practica_Podcast/clases/AutoCarga.php';
               
                $ruta = "../Practica_Podcast/usuarios/";


        $directorio = opendir($ruta); //ruta actual
        while ($archivo = readdir($directorio)) { //obtenemos un archivo y luego otro sucesivamente
            if (!is_dir($archivo)) {
                echo "<li>". $archivo ."</li>";
            }
        }
                ?>
               
        </div>


       







    </body>
</html>
