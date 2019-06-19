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

            $AltaArchivo= "DELETE FROM Profesor WHERE idProfesor=$idArchiv";
            $Query2 = mysqli_query($Conexion, $AltaArchivo);
 
        
?>

     <script>
         alert('Profesor Eliminado');
      
         location.href="https://matematicasv3.000webhostapp.com/Profesores.php";
        </script>