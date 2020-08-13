<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 19</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 19</strong>
    <p>
        <strong>Nostas de PAES más altas por carrera: </strong>
        @foreach ($data as $dt)
            <li>
            <strong>
                {{$dt->carrera}}
            </strong>
            {{$dt->nota_paes}}
            </li>
        @endforeach
    </p>
</body>
</html>