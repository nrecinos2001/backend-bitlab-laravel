<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 23</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 23</strong>
    <p>
        <strong>ID de departamentos en El Salvador: </strong>
        @foreach ($data as $dt)
            <li>
            <strong>
                {{$dt->id}}
            </strong>
            </li>
        @endforeach
    </p>
</body>
</html>