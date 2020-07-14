<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Resultado</title>
</head>
<body>
    
    <h4>Las frecuencias de personas por edad son son:</h4>
    @foreach($frec as $index => $f)
    <p> {{$index}} años = {{$f}}
        @if($f==1)
        persona.
        @else
        personas.
        @endif
    </p>
    @endforeach

    <a href="/ejercicio/5">Go back to form!</a>
</body>
</html>