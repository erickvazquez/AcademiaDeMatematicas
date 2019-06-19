<?php

session_start();

if($_SESSION["Pass"] == "0000"){
    
    $id = $_SESSION["idProfesor"];
    
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
    
    $ConsultaPass= "SELECT * FROM Profesor WHERE idProfesor=$id";
    $Query = mysqli_query($Conexion, $ConsultaPass);
    
    $columna = mysqli_fetch_array($Query);
    $_SESSION["idProf"] = $id;
    
    $Nombres = $columna["Nombres"];
    $Apellidos = $columna["Apellidos"];
    $Username = $columna["Username"];
    $Contraseña = $columna["Contraseña"];
    
    echo "<!DOCTYPE html>

<html>
    <head>
         <meta charset='UTF-8'>
        <title>Mi Cuenta</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>
    </head>
    <body>
        
         <nav class='navbar navbar-inverse navbar-fixed-top' style='background: #88313d; color: white;'>
  
            <div class='container-fluid'>
    
                <div class='navbar-header'>
      
                    <a class='navbar-brand' style='color: white;'>Mi Cuenta</a>
    
                </div>
 
                

            </div>
        </nav>
        
    <center>
        
        <br />
        <br />
        <br />
        <br />
        
        <div class='alert alert-info'>
  
            <strong> Modifica los datos de tu cuenta.</strong>

        </div>
        
        <form class='form-horizontal' action='Update.php' method='post'>
  
            <br />
            <br />
            <br />
            <br />
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Nombre(s):</label>
   
                <div class='col-sm-10'>
                <input type='text' value='$id' hidden name='idP' />
                    <input type='text' class='form-control' style='width: 600px; position: relative; left: -250px;' id='Nombre' name='Nombre' value='$Nombres'>
    
                </div>
  
            </div>
  
            <div class='form-group'>
    
                <label class='control-label col-sm-2' >Apellidos:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Apellidos' name='Apellidos' value='$Apellidos'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Username:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Username' name='Username' value='$Username'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Contraseña:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='password' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Contraseña' name='Contraseña' value='$Contraseña'>
    
                </div>
                
            </div>
            
            <div class='form-group'> 
    
                <div class='col-sm-offset-2 col-sm-10'>
      
                    <button style='width: 400px; position: relative; left: 200px; top: 20px; float: left;' type='submit' class='btn btn-success'>Actualizar Datos</button>
    
                </div>
  
            </div>
            
            
             <img style=' width: 200px; height: 200px; position: relative; left: 1100px; top: -250px; float: left;' src='Images/Login.png' alt='Archivos' />
        </form>   
    </center>
 
    </body>
</html>

";
    
    
}else{
    
    echo 'Holi';
}


?>