<?php

session_start();

if($_SESSION["Pass"] == "0000"){
 
    
    echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Añadir Profesor</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>
    </head>
    <body>
        
<br />
<br />
         <nav class='navbar navbar-inverse navbar-fixed-top' style='background: #88313d; color: white;'>
  
            <div class='container-fluid'>
    
                <div class='navbar-header'>
      
                    <a class='navbar-brand'  style='color: white;'>Añadir Profesor</a>
    
                </div>
                
                 <ul class='nav navbar-nav navbar-right'>

                    <li><a style='color: white;' href='javascript:history.go(-1);'><span class='glyphicon glyphicon-log-in' style='color: white;'></span> Regresar </a></li>

                </ul>
 
            </div>
        </nav>
        
    <center>
        
        <br />
        <br />
       



        
        <div class='alert alert-info'>
  
            <strong>Información: </strong> Añade a la plataforma a los profesores de la academia.

        </div>
        
        <form class='form-horizontal' action='NuevoProfesor.php' method='post' >
  
            <br />

           
  <br />
        <br />
        <br />
        <br />

            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Nombres:</label>
    
                <div class='col-sm-10'> 
  
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Nombres' name='Nombres' required>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Apellidos:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Apellidos' name='Apellidos' required>
    
                </div>
  
            </div>
            
<div class='form-group'>
    
                <label class='control-label col-sm-2'>Username:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Username' name='Username'required>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Contraseña:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='password' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Password' name='Password'required>
    
                </div>
                
            </div>

            <div class='form-group'> 
    
                <div class='col-sm-offset-2 col-sm-10'>
      
                    <button style='width: 600px; position: relative; left: 115px; top: 20px; float: left;' type='submit' class='btn btn-success'>Añadir Profesor</button>
    
                </div>
  
            </div>
            
             <img style=' width: 200px; height: 200px; position: relative; left: 1100px; top: -250px; float: left;' src='Images/Ag.png' alt='Archivos' />
        </form>   
    </center>
 
    </body>
</html>
";
    
    
}else{
    
    echo 'Holi';
}


?>