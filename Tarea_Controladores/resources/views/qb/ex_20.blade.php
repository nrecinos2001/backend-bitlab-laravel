<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 20</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 20</strong>
    <p>
        <strong>Registros </strong>
        @foreach ($data as $dt)
            <li>
            <strong>
                | {{$dt->id}} | {{$dt->primer_apellido}} | {{$dt->segundo_apellido}}
                | {{$dt->primer_nombre}} | {{$dt->segundo_nombre}} | {{$dt->email}}
                | {{$dt->teléfono}} | {{$dt->carrera}} | {{$dt->nota_paes}} 
                | {{$dt->nota_admision}} | {{$dt->ano_ingreso}}
            </strong>
            </li>
        @endforeach
    </p>
</body>
</html>