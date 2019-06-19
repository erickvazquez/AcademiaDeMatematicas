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
            
            $Name = $_POST['Name'];
            
            $VerificaClave="SELECT * FROM Profesor WHERE Username='$Name'";
            
              $Query = mysqli_query($Conexion, $VerificaClave);
              
              if($Query){
                $Quitar =   "UPDATE Profesor SET Tipo=2 WHERE Tipo=1";
                $Query2 = mysqli_query($Conexion, $Quitar);
                $Actualizar = "UPDATE Profesor SET Tipo=1 WHERE Username='$Name'";  
                $Query3 = mysqli_query($Conexion, $Actualizar);
                
                echo "<script>
         alert('El cambio de presidencia se logro con exito');
        
         location.href='https://matematicasv3.000webhostapp.com';
         
        </script>";
                session_destroy();
              
              }else{
            echo "<script>
         alert('El username que ingreso no existe');
        
         location.href='https://matematicasv3.000webhostapp.com/Profesores.php';
        </script>";
           
              }

