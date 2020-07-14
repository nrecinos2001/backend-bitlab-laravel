<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Formulario</title>
</head>
<body>
    <form action="/result/Two" method="POST">
        @csrf
        <p>Ingrese una palabra: </p>
        <input type="text" name="word">
        <br>
        <button>Enviar</button>
    </form>
    <a href="/">Ir al inicio</a>
</body>
</html>