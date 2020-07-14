<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Formulario</title>
</head>
<body>
    <form action="/result/Four" method="POST">
        @csrf
        <p>Ingrese un numero entre el 1 y el 25</p>
        <input type="number" name="number">
        <br>
        <button>Enviar</button>
    </form>
    <a href="/">Ir al inicio</a>
</body>
</html>