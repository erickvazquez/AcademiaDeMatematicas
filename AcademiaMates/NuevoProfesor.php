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
            
           
            $Contraseña = $_POST['Password'];
            
            $Nombres = $_POST['Nombres'];
            $Apellidos = $_POST['Apellidos'];
            $Username = $_POST['Username'];

            
            $VerificaClave="SELECT * FROM Profesor WHERE Username=$Username";
            
              $Query = mysqli_query($Conexion, $VerificaClave);
              
              if(!$Query){
                  
                 $AltaArchivo= "INSERT INTO Profesor (Nombres, Apellidos, Username, Contraseña, Tipo) values ('$Nombres', '$Apellidos', '$Username', '$Contraseña', '2')";
                $Query2 = mysqli_query($Conexion, $AltaArchivo);
    
              }else{
            echo "<script>
         alert('Escoga otro username ya que este ya esta en uso');
        
         location.href='http://localhost/AcademiaMatematicas/AñadirProfesor.php';
        </script>";
           
              }
       

        
?>

     <script>
         alert('Profesor Registrado');
  
         location.href="https://matematicasv3.000webhostapp.com/AñadirProfesor.php";
        </script>