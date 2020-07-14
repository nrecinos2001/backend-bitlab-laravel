<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Formulario</title>
</head>
<body>
    <form action="/result/One" method="POST">
        @csrf
        <p>Ingrese su edad:</p>
        <input type="number" name="age">
        <br>
        <button>Enviar</button>
    </form>
    <a href="/">Ir al inicio</a>
</body>
</html>