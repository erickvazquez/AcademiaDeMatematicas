<?php


            $id = $_POST['id'];

            $Usuario = "id8284702_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "id8284702_academia";
            
            /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/

            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
            $ConsultaPass= "SELECT * FROM Avisos WHERE idAviso=$id";
            $Query = mysqli_query($Conexion, $ConsultaPass);
            
            $columna = mysqli_fetch_array($Query);
                    
                    $Titulo = $columna['Titulo'];
            
           $Contenido = $columna['Contenido'];
           $Prof = $columna['Profesor'];
           
           echo "<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>Aviso</title>
        
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
      
                    <a class='navbar-brand' href='#' style='color: white;'></a>
    
                </div>
  
                <ul class='nav navbar-nav navbar-right'>

                    <li><a style='color: white;' href='ConsultaAvisos.php'><span class='glyphicon glyphicon-log-in' style='color: white;'></span> Regresar </a></li>

                </ul>
                
            </div>
        </nav>
        
        <div id='Preguntas'>
            
            <div id='Contenido'>
                
                <div id='Top' style='position: relative; left: 0px; top:-20px;'>
        
                    <center>
                    <h3 style='color: white;position: relative; left: 0px; top:30px;'>$Titulo</h3>
                    </center>                    
                </div>
                <center>
                <textarea cols='80' rows='10' style='position: relative; top: 50px; border: none; text-align: center;' readonly>$Contenido</textarea>
                </center>
                
                <p style='position: relative; left: 450px; top: 100px;'>Atte: $Prof</p>
                
                
                <br />
                <br />

                
            </div>
        </div>
    </body>
</html>
";


?>