<?php

session_start();

if($_SESSION["Pass"] == "0000"){
    
    $Profesor = $_SESSION["Nombre"]." ".$_SESSION["Apellido"];
    $id = $_SESSION["idProfesor"];
    
    echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Subir Archivos</title>
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
      
                    <a class='navbar-brand'  style='color: white;'>Subir Archivos</a>
    
                </div>
               

 
            </div>
        </nav>
        
    <center>
        
        <br />
        <br />

        
        <div class='alert alert-info'>
  
            <strong>Información: </strong> Sube material didáctico para facilitar la comunicación entre los alumnos.

        </div>
        
        <form class='form-horizontal' action='Carga.php' method='post' enctype=multipart/form-data>
  
            <br />

           
<div class='form-group'>
    
                <label class='control-label col-sm-2'>Asignatura:</label>
    
                <div class='col-sm-10'> 
      
                    <select name='Asignatura' style='width: 600px;position: relative; left: -250px; '>
  <option value='Algebra'>Álgebra</option>
  <option value='Geometria y Trigonometria'>Geometría y Trigonometría</option>
  <option value='Geometria Analítica'>Geometría Analítica</option>
  <option value='Calculo Diferencial'>Cálculo Diferencial</option>
  <option value='Calculo Integral'>Cálculo Integral</option>
  <option value='Probabilidad y Estadística'>Probabilidad y Estadística</option>
  
</select> 
                    
                </div>
  
            </div>
  
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Grupo:</label>
    
                <div class='col-sm-10'> 
                    
                    <input type='text' value='$id' name='idP' hidden>
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Grupo' name='Grupo' placeholder='Ejemplo: 2IM7'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Profesor:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='text' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Profesor' name='Profesor' value='$Profesor'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Contraseña:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='password' style='width: 600px; position: relative; left: -250px;' class='form-control' id='Password' name='Password'>
    
                </div>
                
            </div>
            
            <div class='alert alert-warning' style='width: 600px; position: relative; left: -120px;'>
                    
                    La <strong>contraseña</strong> sirve para poder identificar el archivo, poder eliminarlo o restringir su acceso. <strong>Recuerda no poner la misma contraseña en otros archivos, ya que esto causara que tu archivo no sea subido</strong>
              </div>
  
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Archivo:</label>
    
                <div class='col-sm-10'> 
      
                    <input type='file' style='width: 620px; position: relative; left: -245px;' class='form-control' id='Archivo' name='Archivo'>
    
                </div>
  
            </div>
            
            <div class='form-group'>
    
                <label class='control-label col-sm-2'>Acceso Restringido:</label>
    
                <div class='col-sm-10'> 
     
                     <select name='Acceso' style='width: 600px;position: relative; left: -250px; '>
                        
                        <option value='1'>Si</option>
                        <option value='0'>No</option>
  
                    </select> 
                </div>
  
            </div>
            
 <div class='alert alert-warning' style='width: 600px; position: relative; left: -120px;'>
                    
                    Al activar el <strong>acceso restringido</strong> se solicitara a los alumnos la contraseña ingresada para poder descargar.
              </div>
            
            <div class='form-group'> 
    
                <div class='col-sm-offset-2 col-sm-10'>
      
                    <button style='width: 600px; position: relative; left: 90px; top: 20px; float: left;' type='submit' class='btn btn-success'>Subir Archivo</button>
    
                </div>
  
            </div>
            
             <img style=' width: 400px; height: 200px; position: relative; left: 1000px; top: -400px; float: left;' src='Images/A.png' alt='Archivos' />
        </form>   
    </center>
 
    </body>
</html>
";
    
    
}else{
    
    echo 'Holi';
}


?>