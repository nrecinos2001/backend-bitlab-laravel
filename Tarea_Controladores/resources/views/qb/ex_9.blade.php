<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 9</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 9</strong>
    <p>
        <ul>
            @foreach ($data as $dt)
            <li>
                <strong>Nombre: </strong>
                {{$dt->primer_nombre}} {{$dt->segundo_nombre}}
                {{$dt->primer_apellido}} {{$dt->segundo_apellido}} |
                <strong>Nota PAES </strong>{{$dt->nota_paes}}
            </li>        
            @endforeach
        </ul> 
    </p>
</body>
</html>