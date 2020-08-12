<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 13</title>
</head>
<body>
    <strong>Ejercicio 13</strong>
    <p>
        <strong>Promedio de nota PAES más nota de admisión: </strong>
        @foreach ($data as $dt)
            <li>
                <strong>Nombre: </strong> {{$dt->primer_nombre}} {{$dt->primer_apellido}} | 
                <strong>Nota PAES: </strong> {{$dt->nota_paes}}
            </li>
        @endforeach
    </p>
</body>
</html>