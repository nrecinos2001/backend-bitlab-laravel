<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Resultado</title>
</head>
<body>
    <p>Edad en reversa:</p>
    @for ($i = $age; $i >= 0; $i--)
        <p>{{ $i }} años</p>
    @endfor

    <a href="/ejercicio/1">Go back to form!</a>
</body>
</html>