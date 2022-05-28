
<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Tutores</title>
</head>
<body>

    <table class="table table-bordered">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Ocupacion</th>
                <th>Descripcion</th>
                <th>Accion</th>
            </tr>
            </thead>
        <tbody>

        <?php
        $query = "SELECT * FROM tb_tutor";
        $result_tb_tutor = mysqli_query($conn, $query);    

        while($row = mysqli_fetch_assoc($result_tb_tutor)) { ?>
        <tr>
        <td><?php echo $row['nombre']; ?></td>
        <td><?php echo $row['ocupacion']; ?></td>
        <td><?php echo $row['descripcion']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
            <i class="fas fa-marker"></i>
            </a>
            <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
            <i class="far fa-trash-alt"></i>
            </a>
        </td>
        </tr>
        <?php } ?>
        </tbody>


            </div>
            
        </body>
    <table>
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