<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 12</title>
</head>
<body>
    <strong>Ejercicio 12</strong>
    <p>
        <strong>Promedio de nota PAES más nota de admisión: </strong>
        @foreach ($data as $dt)
            <li>
                Nota: {{$dt->prom}}
            </li>
        @endforeach
    </p>
</body>
</html>