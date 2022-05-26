<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Tutores</title>
</head>
<body>
    <div class="mostrar">
    <table>
        <thead>
        <tr>
            <th>nombre<th>
            <th>imagen<th>
            <th>operaciones<th>
        </tr> 
    </thead>
















    </div>
    
</body>
</html>











































<!-- <!DOCTYPE html>
<html>
<head>

<title>Mostrar Imagenes</title>

</head>
<body> 
  <div>
       <table>
           <div>

              <tr>
                  <th>id</th>
                  <th>Nombre</th>
                  <th>Imagen</th>
                  <th>Operaciones</th>
                </tr>  
            </div>
                <div>
                <?php
                    include("conexion.php");


              $query = "SELECT FROM tabla_tutor";
              $resultado = $conexion->query($query);
              while($row = $resultado->fetch_assoc()){
            ?>
              <tr>
                  <td><?php echo$row['id'];?></td>
                  <td><?php echo$row['nombre'];?></td>
                  <td><img height="50px"src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                  <th><a href="#"> Modificar </a></th>
                  <th><a href="#"> Eliminar </a></th>
              </tr>
              <?php
              }
              ?>
           <div>
        </table>
    </div>
       
</body>

</html> -->