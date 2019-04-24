<?php
include("assets/includes/head.html");
include("procesar.php");
include("conexion.php");
$conn = conectar();
if (isset($_GET['admin'])) {
    $admin = $_GET['admin'];
} else {
    $admin = false;
}
?>

    <body>
        <link rel="stylesheet" type="text/css" href="galeryEstilos.css">

        <?php
if ($admin != false) {
?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css" />
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>

            <section class="container">
                <div class="row">
                    <div class="col-md-4 mt-5 card-body card">
                        <h1> Imagenes de la galeria </h1>
                        <hr>
                        <form role="form" action="procesar2.php" enctype="multipart/form-data" method="post">

                            <input type="file" name="file[]" id="file" class="form-control" multiple>
                            <input type="hidden" name="enviar" value="1">
                            <button type="submit" class="btn btn-success mt-3 btn-block"> Enviar </button>
                        </form>
                    </div>
                    <div class="col-md-8 mt-5 card-body">
                        <center>
                            <h1> Listo de imagenes </h1>
                        </center>
                        <table class="table" width="100%" id="example">
                            <thead style="background-color:#f2f2f2">

                                <th>Id</th>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>#</th>

                            </thead>
                            <tbody>
                                <?php
$consulta = mysqli_query($conn,"SELECT * FROM `fotos` ");
 while ($REGISTRO=mysqli_fetch_assoc($consulta)){
?>
                                    <tr>
                                        <td align="center">
                                            <?php echo $REGISTRO["id"];?>
                                        </td>
                                        <td align="center">
                                            <img src="<?php echo $REGISTRO[" ruta "];?>" alt=" <?php echo $REGISTRO[" nombre "];?>" style="width:100px !important;">

                                        </td>
                                        <td align="center">
                                            <?php echo $REGISTRO["nombre"];?>
                                        </td>
                                        <td align="center">

                                            <a class="btn btn-danger btn-xs" href="procesar2.php?eliminar=<?php echo $REGISTRO[" id "];?>">
                                            Eliminar
                                        </a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <?php
} else {
?>
                <?php
include("assets/includes/navegacion.html");

?>
                    <!--Portada-->
                    <div class="portada port-contacto" style="height:110px ;background-color:#555;">
                        <div class="contenedor-1150">
                            <div class="encabezado-azul">¡Contactanos!</div>
                        </div>
                    </div>

                    <CENTER>
                        <H1>Galeria</H1>
                        <hr>
                    </CENTER>

                    <div id="galeria" style="display:grid;">
                        <div class="">
                            <div id="galeria_miniaturas">
                                <?php
$consulta = mysqli_query($conn,"SELECT * FROM `fotos` ");
$i=0;
$y=1;
while ($REGISTRO=mysqli_fetch_assoc($consulta)){
$i++;
if($i===48){ $y=$y+1; $i=0; }
?>
                                    <img class="i<?= $y?> miniatura" <?php if($y!==1){ echo 'style="display:none"';} ?> src="
                                    <?php echo $REGISTRO["ruta"];?>" onclick="document.getElementById('imgMostrar').src='<?php echo $REGISTRO["ruta"];?>';">

                                            <?php }  ?>

                            </div>
                            <div style="display:block; width:100%;">
                                <ul class="pagination">
                                    <li><a href="javascript:paginar(1)">1</a></li>
                                    <?php
$consulta = mysqli_query($conn,"SELECT * FROM `fotos` ");
$i=0;
$y=1;
while ($REGISTRO=mysqli_fetch_assoc($consulta)){
$i++;
if($i===48){ $y=$y+1; $i=0; 
?>
                                        <li>
                                            <a href="javascript:paginar(<?=$y?>)">
                                                <?=$y?>
                                            </a>
                                        </li>

                                        <?php }} ?>
                                </ul>
                            </div>
                        </div>
                        <div id="galeria_principal">
                            <img id="imgMostrar" src="imagenes/1.jpg">
                        </div>
                    </div>

                    <!--Footer-->
                    <?php
    include("assets/includes/footer.html");
?>
                        <!--Scripts-->
                        <?php
    include("assets/includes/scripts-pie.html");
?>
                            <?php
}
?>
                                <script type="text/javascript">
                                    function paginar(cls) {
                                        console.log(cls);
                                        $('.i' + cls).show();
                                        for (var i = 1; i < <?= $y; ?> + 1; i++) {

                                            if (i != cls) {
                                                console.log('dd' + i);
                                                $('.i' + i).hide();
                                            }
                                        }
                                    }
                                </script>
    </body>
    </html>