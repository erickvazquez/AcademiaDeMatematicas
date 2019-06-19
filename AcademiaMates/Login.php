<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css">
    </head>
    
    <body>
        
        <div class="container">
            <center>
                
                <br />
                <br />
                <br />
                <br />

                <h3>Ingrese los datos correspondientes</h3>
                <br />
                <br />

                <form action="Cuentas.php" method='post'>

                   <div class="form-group">

                        <label for="email">Nombre de Usuario</label>
                        <i class="glyphicon glyphicon-user"></i><input type="text" class="form-control" name="user" required style="width: 400px" id="user">

                   </div>

                   <div class="form-group">

                       <label for="pwd">Contraseña</label>
                       <i class="glyphicon glyphicon-lock"></i><input type="password" class="form-control" required style="width: 400px" name="pwd" id="pwd">

                   </div>

                   <br />

                   <button type="submit" class="btn btn-success">Entrar</button>

               </form> 

                <br />
                <br />

                <img src="Images/IPN.png" style="width: 200px; height: 200px;" alt="Login" />
                <br />
                <br />
                
                <div class="alert alert-danger">
                    <strong>Si olvidaste tu contraseña</strong> solicitar reposición con el nombre de usuario a: <strong>academia-matematicas@outlook.com</strong>
                </div>

                <div class="alert alert-danger">
                    <strong>Recuerda</strong> que para poder acceder, es necesario que el presidente de academia haya registrado previamente tu cuenta.
                </div>
                
            </center>
        </div>
       
        <?php
        
        ?>
    </body>
</html>
