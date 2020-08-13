<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 16</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 16</strong>
    <p>
        <strong>Alumnos que reprobaron la PAES: </strong>
        @foreach ($data as $dt)
            <li>
                {{$dt->primer_nombre}}
            </li>
        @endforeach
    </p>
</body>
</html>