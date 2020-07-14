<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Formulario</title>
</head>
<body>
    <form action="/result/Eight" method="POST">
        @csrf
        <p>Ingresa un año entre 1986 y 2020:</p>
        <input type="number" name="year">
        <br>
        <button>Enviar</button>
    </form>
    <a href="/">Ir al inicio</a>
</body>
</html>