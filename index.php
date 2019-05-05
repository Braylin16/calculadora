<?php

error_reporting(0);

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$value = $_GET['value'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora Online PHP</title>
    <link rel="shortcut icon" href="image/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>

<header class="container-fluid header">
    <div>
        <h1 class="glyphicon glyphicon-plus">Calculadora</h1>
    </div>
</header>

<p>
    <form class="form-inline text-center" method="get">
    <div class="form-group">
        <input type="number" autofocus class="form-control" name="numero1" placeholder="Valor 1" required>
    </div>
    <div class="form-group">

    <span class="glyphicon glyphicon-plus"></span>

        <!--
            <select name="value" id="value">
                <option value="+">Sumar</option>
                <option value="*">Multiplicar</option>
                <option value="/">Dividir</option>
            </select>
        -->
        <input type="number" class="form-control" name="numero2" placeholder="Valor 2" required>
    </div>
    <p><br>
        <button type="submit" class="btn btn-success">CALCULAR</button>
    </p>
    </form>
</p>

<div class="table">
    <h3>Resultado:</h3>
    <div class="row">
        <p class="resultado">
            <?php echo $numero1 + $numero2; ?>
        </p>
    </div>
</div>

<footer>
    <div class="row">
        <h5 class="text-center">Calculadora online &copy;2019 todos los derechos reservados</h5>
    </div>
</footer>
    
</body>
</html>