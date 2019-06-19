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

            $Grupo = $_POST['Grupo'];
            $Profesor = $_POST['Profesor'];
            $Nombre = $_POST['Nombre'];
            $Texto = $_POST['Texto'];
            $idP = $_POST['idP'];
            
            $AltaArchivo= "INSERT INTO Avisos (Titulo, Contenido, Grupo, Profesor, idP) values ('$Nombre', '$Texto', '$Grupo', '$Profesor', '$idP')";
            $Query = mysqli_query($Conexion, $AltaArchivo);
            
        


?>

     <script>
         alert('Carga Realizada');
         
         location.href="https://matematicasv3.000webhostapp.com/Avisos.php";
        </script>