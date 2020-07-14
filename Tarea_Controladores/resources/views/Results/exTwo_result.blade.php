<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Resultado</title>
</head>
<body>
    <p>Resultado: </p>
    @for($i = 0; $i < $long; $i++)
        <p> {{$word[$i]}} </p>
    @endfor
    
    <a href="/ejercicio/2">Go back to form!</a>
</body>
</html>