<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <title>Celke</title>
</head>

<body>

    <h2 style="text-align: center;">Bem-vindo à Celke!</h2>

    <h4 style="text-align: center;">
        <a href="{{ route('user.index')}}">Usuários</a>
    </h4>
</body>

</html>
