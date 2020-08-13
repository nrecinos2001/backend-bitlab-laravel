<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Ejercicio 3</title>
</head>
<body class="text-blue-700">
    <strong>Ejercicio 3</strong>
    <div class="grid grid-cols-2">
        <!--English-->
        <div>
            <ul>
                <li>
                    <strong>English</strong>
                </li>
                @foreach ($data as $dt)
                    <li>
                        {{$dt->name_en}}
                    </li>
                @endforeach
            </ul>
        </div>
        <!--Spanish-->
        <div>
            <ul>
                <li>
                    <strong>Español</strong>
                </li>
                @foreach ($data2 as $dt2)
                    <li>
                        {{$dt2->name}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>