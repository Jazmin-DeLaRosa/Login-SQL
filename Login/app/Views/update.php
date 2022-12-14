<?php 

    $id = $datos[0]['id'];
    $nombre = $datos[0]['nombre'];
    $especie = $datos[0]['especie'];
    $alimentacion = $datos[0]['alimentacion']; 
    $periodo = $datos[0]['periodo']; 
 ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Actualiza </title>
</head>
<body>

    <div class="container">
        <h1>Editar Personaje</h1>

        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                    <input type="text" id="id" name="id" hidden="" 
                    value="<?php echo $id ?>">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" 
                    value="<?php echo $nombre ?>">

                    <label for="paterno">Especie</label>
                    <input type="text" name="especie" id="especie" class="form-control" 
                    value="<?php echo $especie ?>">

                    <label for="materno">Alimentacion</label>
                    <input type="text" name="alimentacion" id="alimentacion" class="form-control" 
                    value="<?php echo $alimentacion ?>">

                    <label for="materno">Periodo</label>
                    <input type="text" name="periodo" id="periodo" class="form-control" 
                    value="<?php echo $periodo ?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>