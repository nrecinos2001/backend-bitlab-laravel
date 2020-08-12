<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 7</title>
</head>
<body>
    <strong>Ejercicio 7</strong>
    <p>
        <ul>
            @foreach ($data as $dt)
                <li>
                    <strong>Email: </strong>{{$dt->email}} |
                    <strong>Primer Nombre: </strong>{{$dt->primer_nombre}} |
                    <strong>Primer apellido: </strong>{{$dt->primer_apellido}}
                    <hr>
                </li>        
            @endforeach
        </ul> 
    </p>
</body>
</html>