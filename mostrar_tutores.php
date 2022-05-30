<?php include 'includes/header.php'?>


  <?php
    include_once "tutores/conexion.php";
    $sentencia = $bd -> query("select * from tb_tutor");
    $persona = $sentencia->fetchAll(PDO::FETCH_OBJ);
   
?>
<body>


            <div class="card">
                <div class="card-header">
                    Tutores Contacto
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Contacto</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php 
                                foreach($persona as $dato){ 
                            ?>

                            <tr>
                                <td scope="row"><?php echo $dato->codigo; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->ocupacion; ?></td>
                                <td><?php echo $dato->descripcion; ?></td>
                            </tr>

                            <?php 
                                }
                            ?>

                        </tbody>
                    </table>
                    
                </div>
            </div>
<body>
<html>


