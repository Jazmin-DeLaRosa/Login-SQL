<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Administrador</title>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container">
            <h2>Listado de personajes</h2>

            <div class="row">
                <div class="col-sm-12">
                    <div class="table table-responsive">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Nombre</th>
                                <th>Especie</th>
                                <th>Alimentacion</th>
                                <th>Periodo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            <?php foreach ($datos as $key) : ?>
                                <tr>
                                    <td><?php echo $key->nombre ?></td>
                                    <td><?php echo $key->especie ?></td>
                                    <td><?php echo $key->alimentacion ?></td>
                                    <td><?php echo $key->periodo ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . '/obtenerNombre/' . $key->id ?>" class="btn btn-warning btn-sm">Editar</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url() . '/eliminar/' . $key->id ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <h5>Agregar personaje</h5>
            <div class="row">
                <div class="col-sm-12">
                    <form method="POST" action="<?php echo base_url() . '/crear' ?>">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        <label for="paterno">Especie</label>
                        <input type="text" name="especie" id="especie" class="form-control">
                        <label for="materno">Alimentacion</label>
                        <input type="text" name="alimentacion" id="alimentacion" class="form-control">
                        <label for="materno">Periodo</label>
                        <input type="text" name="periodo" id="periodo" class="form-control">
                        <br>
                        <button class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
            let mensaje = '<?php echo $mensaje ?>';

            if (mensaje == '1') {
                swal(':D', 'Agregado con exito!', 'success');
            } else if (mensaje == '0') {
                swal(':(', 'Fallo al agregar!', 'error');
            } else if (mensaje == '2') {
                swal(':D', 'Actualizado con exito!', 'success');
            } else if (mensaje == '3') {
                swal(':(', 'Fallo al Actualizar!', 'error');
            } else if (mensaje == '4') {
                swal(':D', 'Eliminado con exito!', 'success');
            } else if (mensaje == '5') {
                swal(':(', 'Fallo al eliminar!', 'error');
            }
        </script>
    </section>
</body>

</html>