<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Formulario</title>
</head>
<body>
    <form action="/result/Five" method="POST">
        @csrf
        <p>Ingresa una serie de numeros separados por una coma</p>
        <input type="text" name="ages">
        <br>
        <button>Enviar</button>
    </form>
    <a href="/">Ir al inicio</a>
</body>
</html>