<?php

if ($_FILES['Archivo']["error"] > 0){

            echo "Error: " . $_FILES['Archivo']['error'] . "<br>";
            
        }else{
  

     
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
            
            $Archivo = $_FILES['Archivo']['name'];
            $Contraseña = $_POST['Password'];
            $Grupo = $_POST['Grupo'];
            $Profesor = $_POST['Profesor'];
            $Acceso = $_POST['Acceso'];
            $Asignatura = $_POST['Asignatura'];
            $idP = $_POST['idP'];
            
            $Verifica="SELECT * FROM Archivos WHERE Contraseña=$Contraseña";
            

            $Query = mysqli_query($Conexion, $Verifica);
              
             $columna = mysqli_fetch_array($Query);
             
             if($columna['Nombre']==''){
                  
                 $AltaArchivo= "INSERT INTO Archivos (Nombre, Contraseña, Asignatura, Acceso, Grupo, Profesor, idP) values ('$Archivo', '$Contraseña', '$Asignatura', '$Acceso', '$Grupo', '$Profesor','$idP')";
                $Query2 = mysqli_query($Conexion, $AltaArchivo);
                move_uploaded_file ($_FILES['Archivo']['tmp_name'], 'Archivos/'.$_FILES['Archivo']['name']);  
             }else{
                 
                echo " <script>
         alert('Esta contraseña ya esta en uso, utiliza otra');
          
         location.href='https://matematicasv3.000webhostapp.com/Subir.php';
        </script>"; 
             }
                  
             
        }  

        
?>

     <script>
         alert('Carga Realizada');
          alert('Si no desesa subir más archivos, cierre la pestaña');
         location.href="https://matematicasv3.000webhostapp.com/Subir.php";
        </script>