<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Acceso Restringido</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css">
    </head>
    <body>
        
       <nav class="navbar navbar-inverse navbar-fixed-top" style="background: #88313d; color: white;">
  
            <div class="container-fluid">
    
                <div class="navbar-header">
      
                    <a class="navbar-brand" style="color: white;">Material con Acceso Restringido</a>
    
                </div>
  
                <ul class="nav navbar-nav navbar-right">

                    <li><a style="color: white;" href="Material.php"><span class="glyphicon glyphicon-log-in" style="color: white;"></span> Regresar </a></li>

                </ul>
                
            </div>
        </nav>
        <br />
        <br />
        <br />
        <div class="alert alert-danger">
            <center>
            <strong>Atención</strong> El contenido que intenta descargar tiene <strong>acceso restringido</strong>, para acceder a el ingresa la contraseña proporcionada por el profesor
            </center>  
        </div>
        <br />
<br />
<br />
<br />
<br />
    <center>
         <form action="Access.php" method='post' enctype=multipart/form-data>

                   <div class="form-group">

                        <label>Contraseña del archivo:</label>
                        <input type="text" class="form-control" name="Contraseña" required style="width: 400px" id="Contraseña">

                   </div>

                   <button type="submit" class="btn btn-success">Enviar</button>

               </form> 
    </center>
    </body>
</html>
