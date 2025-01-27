<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <title>Menu Lateral Animado Responsive</title>
    <link rel="stylesheet" href="icon/css/fontello.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css">
</head>
<body>
    <main>
        <div class="content-all">
            <header>
            <img src="image/logo.png">
            </header>
            <input type="checkbox" id="check">
            <label for="check" class="icon-menu">Menu</label>
            
            
            <nav class="menu">
                <ul>
                    <a href="index.html"><li>Inicio</li></a>
                    <a href="material.html"><li>Material</li></a>
                    <a href="avisos.html"><li>Avisos</li></a>
                    <a href="profesores.html"><li>Profesores</li></a>
                </ul>
            </nav>
            <center>
        
        <h3>Descarga de material</h3>
    
        <br>
  
        <input class="form-control" style="width: 300px;" id="myInput" type="text" placeholder="Buscar Archivo..">
        </center>
  <br>
     <center>
  <table class="table table-bordered table-striped">
   
    <thead>
      <tr>
          <th><center>Nombre</center></th>
  <th><center>Asignatura</center></th>
  <th><center>Grupo</center></th>
  <th><center>Profesor</center></th>
  <th><center>Acceso</center></th>
  <th><center>Descargar</center></th>
      
      </tr>
    </thead>
    
    <tbody id="myTable" style="width: 50%;">
   
    
     <?php
         
             $Usuario = "id8284702_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "id8284702_academia";

            $Conexion = mysqli_connect($Servidor,$Usuario,$Password, $BaseDatos) or die ("No se ha podido conectar al servidor de Base de datos");
            $ConsultaPass= "SELECT * FROM Archivos";
            $Query = mysqli_query($Conexion, $ConsultaPass);
            
            if(!$Query){
    
                echo "No existe el archivo";  
   
            }else{
             
            
                while($columna = mysqli_fetch_array($Query)){
                    $Resultado = $columna['Nombre'];
                   echo '<tr>';
                   echo '<td><center>';
                   echo $columna['Nombre'];
                   echo '</td></center>';
                   echo '<td><center>';
                   echo $columna['Asignatura'];
                   echo '</td></center>';
                   echo '<td><center>';
                   echo $columna['Grupo'];
                   echo '</td></center>';
                   echo '<td><center>';
                   echo $columna['Profesor'];
                   echo '</td></center>';
                   
                   if($columna['Acceso']=="1"){
                         echo '<td><center>';
                   echo "Restingido";
               
                   echo '</td></center>';
                       echo '<td><center>';
                   echo "<a href='Valida.php'><input type='button' class='btn btn-primary' value='Descargar Archivo'></a>";
                   echo '</td></center>';
                   
                   echo '</tr>';
                       
                   }else{
                        echo '<td><center>';
                   echo "Libre";
                   echo '</td></center>';
                   echo '<td><center>';
                   echo "<a href='Archivos/$Resultado' download='$Resultado'><input type='button' class='btn btn-primary' value='Descargar Archivo'></a>";
                   echo '</td></center>';
                    
                   echo '</tr>';
                   }    
              
                }
              
            }

        ?>
   
    </tbody>
  </table>
</center>


            </div>
    </main>
</body>
</html>