<?php
include("conexion.php");
$nombre = '';
$ocupacion = '';
$descripcion = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM task WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $ocupacion = $row['ocupacion'];
    $descripcion = $row['descripcion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $ocupacion= $_POST['ocupacion'];
  $descripcion = $_POST['descripcion'];

  $query = "UPDATE tb_tutor set nombre = '$nombre', ocupacion = '$ocupacion' , descripcion = '$descripcion' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Tutor actualizado con exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: mostrar_tutores.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $title; ?>" placeholder="Update Title">
        </div>
        <div class="form-group">
        <textarea name="ocupacion" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <div class="form-group">
        <textarea name="descripcion" class="form-control" cols="30" rows="10"><?php echo $description;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Editar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>