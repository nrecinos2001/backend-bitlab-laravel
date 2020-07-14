<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Resultado</title>
</head>
<body>

    @for($i = $numb; $i >= 0; $i--)
        <p>{{$i}} entre 2 es {{$numArr[$i]}} y me sobra
        @if($moduleArr[$i] == 0)
        0
        @else
        1</p>
        @endif
    @endfor

    <a href="/ejercicio/4">Go back to form!</a>
</body>
</html>