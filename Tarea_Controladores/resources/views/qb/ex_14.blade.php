<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 14</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 14</strong>
    <p>
        <strong>Promedio de admisión segun carrera: </strong>
        @foreach ($data as $dt)
            <li>
                <strong>{{$dt->carrera}}: </strong> 
                {{$dt->prom}}
            </li>
        @endforeach
    </p>
</body>
</html>