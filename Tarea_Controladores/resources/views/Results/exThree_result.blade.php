<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Resultado</title>
</head>
<body>
    @for($i = 1; $i <= $number; $i++)
        @if($i%2 == 0)
        <p>El numero {{$i}} es par.</p>
        @else
        <p>El numero {{$i}} es impar.</p>
        @endif
    @endfor

    <a href="/ejercicio/3">Go back to form!</a>
</body>
</html>