<?php

session_start();

if($_SESSION["Pass"] == "0000"){
    
    $Profesor = $_SESSION["Nombre"]." ".$_SESSION["Apellido"];
    $id = $_SESSION["idProfesor"];
    
    echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Subir Aviso</title>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <link rel='stylesheet' href='Style.css'>
    </head>
    <body>
        
    <center>
        
        <br />
        <br />
        <br />
        <br />
        
        <div class='alert alert-info'>
  
            <strong>Información: </strong> Sube algún aviso para comunicar a los alumnos.

        </div>
        
        <form class='form-horizontal' action='CargaAviso.php' method='post' id='usrform'>
  
            <br />
            <br />
            <div class='form-group'>
    
                <label class='control-label col-sm-2' for='Nombre'>Nombre del Aviso:</label>
   
                <div class='col-sm-10'>
      
                    <input type='text' class='form-control' style='width: 600px; position: relative; left: -250px;' id='Nombre' name='Nombre' placeholder='Ejemplo: No habra clase'>
    
                </div>
  
            </div>
  
            <div class='form-group'>
    
                <label class='control-label col-sm-2' for='Grupo'>Grupo:</label>
    
                <div class='col-sm-10'> 
      
                     <input type='text' value='$id' name='idP' hidden>
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Grupo' name='Grupo' placeholder='Ejemplo: 2IM7'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2' for='Profesor'>Profesor:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Profesor' name='Profesor' value='$Profesor'>
    
                </div>
  
            </div>
            
             <div class='form-group'>
    
                <label class='control-label col-sm-2' for='Texto'>Contenido:</label>
    
                <div class='col-sm-10'> 
      
                    <textarea rows='6' cols='94' style='position: relative; left: -250px;' name='Texto' id='Texto' form='usrform' placeholder='Recuerda especificar a tus alumnos fecha y hora si es necesario' ></textarea>
                        
                </div>
  
            </div>
            
            <div class='form-group'> 
    
                <div class='col-sm-offset-2 col-sm-10'>
      
                    <button style='width: 400px; position: relative; left: 200px; top: 20px; float: left;' type='submit' class='btn btn-success'>Publicar Aviso</button>
    
                </div>
  
            </div>
            
             <img style=' width: 270px; height: 200px; position: relative; left: 1100px; top: -320px; float: left;' src='Images/Nota.png' alt='Archivos' />
        </form>   
    </center>
 
    </body>
</html>
";
    
    
}else{
    
    echo 'Holi';
}


?>