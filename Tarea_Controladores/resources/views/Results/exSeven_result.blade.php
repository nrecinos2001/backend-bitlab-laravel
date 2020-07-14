<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Resultado</title>
</head>
<body>
    <h3>Recomendaciones:</h3>
    @for($i = 0; $i < count($toRead); $i++)
        <p>{{$toRead[$i]}}</p>
    @endfor
    <h3>No Recomendados:</h3>
    @for($i = 0; $i < count($notRec); $i++)
        <p>{{$notRec[$i]}}</p>
    @endfor

    <a href="/ejercicio/7">Go back to form!</a>
</body>
</html>