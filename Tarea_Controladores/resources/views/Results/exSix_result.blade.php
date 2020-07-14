<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Resultado</title>
</head>
<body>
    <p>Resultado</p>
    @for($i = 1; $i <= $num; $i++)
    <?php $counter = 0; ?>
        <p>El numero 
        @if($count[$i] == 2)
            {{$i}} es primo
        @else
            {{$i}} no es primo</p>
        @endif
    @endfor

    <a href="/ejercicio/6">Go back to form!</a>
</body>
</html>