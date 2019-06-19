<?php

$Pass = $_POST['pwd'];
$Us = $_POST['user'];

$Usuario = "id8284702_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "id8284702_academia";
$Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
$ConsultaPass= "SELECT * FROM Profesor WHERE Username='$Us' AND Contraseña='$Pass'";    

$Query = mysqli_query($Conexion, $ConsultaPass);

if(!$Query){
    
    echo "No existe el archivo";  
   
 }else{
     
     $columna = mysqli_fetch_array($Query);
     $Resultado = $columna['Tipo']; 
     $Nombre = $columna['Nombres'];
     $Apellido = $columna['Apellidos'];
     $idProfesor = $columna['idProfesor'];
     
     /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/
     
     session_start();
     
     $_SESSION["Pass"] = "0000";
     
     if($Resultado === "1"){

         session_start();
     
     $_SESSION["Nombre"] =$Nombre;
     $_SESSION["Apellido"] = $Apellido;
     $_SESSION["idProfesor"] = $idProfesor;
         
         echo "<!DOCTYPE html>
             <html>
             <head>
             <title>Bienveni@ $Nombre (Presidente de Academia)</title>
             <meta name='viewport' content='width=device-width, initial-scale=1'>
             <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
             <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
             <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
             <link rel='stylesheet' href='Style.css'>
    
        
            <nav class='navbar navbar-inverse navbar-fixed-top' style='background: #88313d; color: white;'>
  
            <div class='container-fluid'>
    
                <div class='navbar-header'>
      
                    <a class='navbar-brand' style='color: white;'>Bienveni@ $Nombre (Presidente de Academia)</a>
    
                </div>
  
                <ul class='nav navbar-nav navbar-right'>

                    <li><a style='color: white;' href='https://matematicasv3.000webhostapp.com/'><span class='glyphicon glyphicon-log-in' style='color: white;'></span> Cerrar Sesión </a></li>

                </ul>
                
            </div>
        </nav>
  
        
        <ul class='barra'>
            
            <br />
            <br />
            <br />
        
            
            <li><a target='_blank' href='Subir.php'>Subir Archivos</a></li>
            <li><a target='_blank' href='Avisos.php'>Subir Avisos</a></li>
            <li><a target='_blank' href='AllMaterial.php'>Materiales</a></li>
            <li><a target='_blank' href='AllAviso.php'>Avisos</a></li>
            <li><a target='_blank' href='Profesores.php'>Profesores</a></li>
            
            <li><a target='_blank' href='Cuenta.php'> Mi Cuenta</a></li>
            
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            
<br />
            <br />
            <br />
            <br />


            


            
<div class='alert alert-warning alert-dismissible'>
<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Atención:</strong> Este es un prototipo en fase de pruebas, dicha página estara en constante cambio. Cualquier sugerencia de cambio, enviarla a <strong>academia-matematicas@outlook.com</strong>
</div>
      
        </ul>
        
        <div style='margin-left:25%;height:100%;' class='container'>
  
            <br />
            <br />
            <br />
            <br />
            
            <center>
                <img class='Logos' style='position: relative; left: -1020px; top: -20px; float: right;' src='Images/IPN.png' alt='Logo IPN' />
                <br />
                <br />
                <b><p style='position: relative; left: 50px; top: -20px; font-size: 20px; float: top;'>Centro de Estudios Cientificos y Tecnológicos #3 'Estanislao Ramírez Ruiz'</p></b>
                <br />
                <img class='Logos' style='position: relative; left: 1000px; top: -120px; float: left;'src='Images/C3.png' alt='Logo CECYT 3' />
            </center>
              
            <center>
                
                <h2 style='color: #671e31;'>Interfaz de presidente de academia para la administración del sitio</h2>
             
            <br />
            <br />
            <br />
            
                 <img src='Images/P.png 'style='height: 250px; position: relative; left: -40px;' alt='Simbolos' style='width:100%'>
                 
            </center>
            
        </div>
</html>";
     }else if($Resultado === "2"){
         session_start();
         $_SESSION["Nombre"] =$Nombre;
         $_SESSION["Apellido"] = $Apellido;
         $_SESSION["idProfesor"] = $idProfesor;
       
         echo "<!DOCTYPE html>
             <html>
             <head>
             <title>Bienvenid@ $Nombre (Profesor)</title>
             <meta name='viewport' content='width=device-width, initial-scale=1'>
             <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
             <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
             <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
             <link rel='stylesheet' href='Style.css'>
    
        
            <nav class='navbar navbar-inverse navbar-fixed-top' style='background: #88313d; color: white;'>
  
            <div class='container-fluid'>
    
                <div class='navbar-header'>
      
                    <a class='navbar-brand' style='color: white;'>Bienvenid@ $Nombre (Profesor)</a>
    
                </div>
  
                <ul class='nav navbar-nav navbar-right'>

                    <li><a style='color: white;' href='index.php'><span class='glyphicon glyphicon-log-in' style='color: white;'></span> Cerrar Sesión </a></li>

                </ul>
                
            </div>
        </nav>
 
        
        <ul class='barra'>
            
            <br />
             <br />
             <br />

            
            <li><a target='_blank' href='Subir.php'>Subir Archivos</a></li>
            <li><a target='_blank' href='Avisos.php'>Subir Avisos</a></li>
            
            <li><a target='_blank' href='MiMaterial.php'>Mi Material</a></li>
            <li><a target='_blank' href='MisAvisos.php'>Mis Avisos</a></li>
            <li><a target='_blank' href='Cuenta.php'> Mi Cuenta</a></li>
            
                     <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            
<br />
            <br />
            <br />
            <br />
            <br />
            <br />

            


            
<div class='alert alert-warning alert-dismissible'>
<a class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Atención:</strong> Este es un prototipo en fase de pruebas, dicha página estara en constante cambio. Cualquier sugerencia de cambio, enviarla a <strong>academia-matematicas@outlook.com</strong>
</div>
      
      
        </ul>
        
        <div style='margin-left:25%;height:100%;' class='container'>
  
            <br />
            <br />
            <br />
            <br />
            
            <center>
                <img class='Logos' style='position: relative; left: -1020px; top: -20px; float: right;' src='Images/IPN.png' alt='Logo IPN' />
                <br />
                <br />
                <b><p style='position: relative; left: 50px; top: -20px; font-size: 20px; float: top;'>Centro de Estudios Cientificos y Tecnológicos #3 'Estanislao Ramírez Ruiz'</p></b>
                <br />
                <img class='Logos' style='position: relative; left: 1000px; top: -120px; float: left;'src='Images/C3.png' alt='Logo CECYT 3' />
            </center>
              
            <center>
                
                <h2 style='color: #671e31;'>Interfaz para profesores de la academia de matemáticas</h2>
             
            <br />
            <br />
            <br />
            
                 <img src='Images/P.png 'style='height: 250px; position: relative; left: -40px;' alt='Simbolos' style='width:100%'>
                 
            </center>
            
        </div>
</html>";
     }else{
         
        echo "<script>alert('Usuario Incorrecto');"
         . "location.href='https://matematicasv3.000webhostapp.com/Login.php';</script>";
         
     }
              
    }

?>