<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Resultado</title>
</head>
<body>
    @if($answer == 0)
        <p>El año {{$year}} es bisiesto.</p>
    @else
        <p>El año {{$year}} no es bisiesto</p>
    @endif

    <a href="/ejercicio/8">Go back to form!</a>
</body>
</html>