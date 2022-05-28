<?php include("conexion.php") ?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="cold-md-4">



            <div class="card card-body">
                <form action="save_tutor.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control"
                        placeholder="Nombre/Apellido">
                    </div>
                
                    <div class="form-group">
                        <input type="text" name="ocupacion" class="form-control"
                        placeholder="Ocupacion">
                    </div>
                    <div class="form-group">
                        <input type="text" name="descripcion" class="form-control"
                        placeholder="Descripcion">
                    </div>
                    <!-- <div class="form-group">
                        <input type="text" name="descripcion" class="form-control"
                        placeholder="Descripcion">
                    </div> -->
                    <input type="submit" class="btn btn-success btn-block" name="guardar_tutor"
                    value="Guardar">
                </form>
            </div>

        </div>

        <div class="col-md-8">

        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>