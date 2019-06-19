

<?php

        $Usuario = "id8284702_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "id8284702_academia";
        
        /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/

        $Pass = $_POST['Contraseña'];

        
        //Conexión
        $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
        $ConsultaPass= "SELECT * FROM Archivos WHERE Contraseña='$Pass'";    
        
        $Query = mysqli_query($Conexion, $ConsultaPass);
         $columna = mysqli_fetch_array($Query);
         $Resultado = $columna['Nombre']; 
         
        if($Resultado==''){
            
          echo "<script>alert('La contraseña del archivo es incorrecta');"
            . "location.href='https://matematicasv3.000webhostapp.com/Valida.php';</script>";  
   
        }else{
            
            echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Descarga</title>
        
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>
    </head>
    <body>";
               

                
        echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "<br />";  
                echo "<center>";
                echo "<h1>";
                echo "<p>Descarga de archivo</p>";
                 echo "<br />";
                echo "</h1>";
                echo "<a href='Archivos/$Resultado' download='$Resultado'><input type='button' class='btn btn-primary' value='Descargar Archivo'></a> &nbsp";
                echo "<a href='Material.php'><input type='button' class='btn btn-danger' value='Regresar'></a>";
                echo "</center>";
                echo"
    </body>
</html>";
 
            }
            
            ?>

