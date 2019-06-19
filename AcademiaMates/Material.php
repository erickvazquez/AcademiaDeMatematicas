<!DOCTYPE html>

<html>
    <head>
        <title>Material Disponible</title>
               <meta charset="UTF-8">
       

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="Style.css">
        
    </head>
    <body>
    <center>
        
        <h3>Descarga de material</h3>
    
        <br>
  
        <input class="form-control" style="width: 1000px;" id="myInput" type="text" placeholder="Buscar Archivo..">
        </center>
  <br>
  
  <div class="alert alert-danger">
  <strong>Atención:</strong> Todo el contenido publicado aquí es gratuito, se prohibe su comercialización, cualquier queja sobre esto mandarla a: <strong>academia-matematicas@outlook.com </strong>
</div>
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
    
    <tbody id="myTable">
   
    
     <?php
         
            $Usuario = "id8284702_root";
        $Password = "123456789";
        $Servidor = "localhost";
        $BaseDatos = "id8284702_academia";
            
            /*$Usuario = "root";
        $Password = "root";
        $Servidor = "localhost";
        $BaseDatos = "Academia";*/

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
        
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
        </script>


        
    </body>
</html>
