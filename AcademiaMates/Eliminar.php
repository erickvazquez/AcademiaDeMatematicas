<?php

          $Usuario = "id8284702_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "id8284702_academia";
            /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/
 
            //Conexión
            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
            
            
            $idArchiv = $_POST['ID'];

            $NombreArchivo= "SELECT * FROM Archivos WHERE idArchivo=$idArchiv";
            $Query = mysqli_query($Conexion, $NombreArchivo);
            $columna = mysqli_fetch_array($Query);
            $Nombre = $columna['Nombre'];
            
            
            $AltaArchivo= "DELETE FROM Archivos WHERE idArchivo=$idArchiv";
            $Query2 = mysqli_query($Conexion, $AltaArchivo);
            
            unlink("Archivos/$Nombre");
            
           
       
        
?>

     <script>
         alert('Archivo Eliminado');
        
         location.href="https://matematicasv3.000webhostapp.com/MiMaterial.php";
        </script>