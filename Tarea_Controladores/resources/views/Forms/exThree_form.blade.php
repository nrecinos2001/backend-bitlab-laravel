<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Formulario</title>
</head>
<body>
    <form action="/result/Three" method="POST">
        @csrf
        <p>Ingrese un numero:</p>
        <input type="number" name="number">
        <br>
        <button>Enviar</button>
    </form>
    <a href="/">Ir al inicio</a>
</body>
</html>