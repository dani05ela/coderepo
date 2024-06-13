<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <script src="public/js/bootstrap.min.js"></script>
    <link href="public/body.css" rel="stylesheet">
</head>

<body>
    <form id="suma" method="post" action="<?php base_url()?>resultado">
        <div class="input-group mb-3">
            <span class="input-group-text">Número 1</span>
            <div class="form-floating">
                <input name="numero1" type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                <label for="floatingInputGroup1">Ingresa tu número</label>
            </div>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Número 2</span>
            <div class="form-floating">
                <input name="numero2" type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                <label for="floatingInputGroup1">Ingresa tu número</label>
            </div>
        </div>


        <p>Ir a formulario 2</p>
        <button class="btn btn-danger" type="submit">Formulario 2</button>
    </form>
</body>

</html>