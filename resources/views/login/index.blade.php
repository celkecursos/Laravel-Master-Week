<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    <title>Celke</title>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="card p-4 shadow" style="width: 24rem">
        <main class="form-signin">
            <form action="{{ route('user.index')}}">
                <img class="mb-4" src="{{ asset('images/logo-define-100x100_v1.png') }}" alt="" width="72"
                    height="72">
                <h1 class="h3 mb-3 fw-normal">Área Restrita</h1>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email"
                        placeholder="Digite o e-mail de usuário">
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="password"
                        placeholder="Digite a senha">
                    <label for="password">Senha</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Acessar</button>

                <p class="mt-3 mb-3 text-body-secondary text-center">Esqueceu a Senha?</p>

                <p class="mt-3 mb-3 text-body-secondary text-center">Novo na Celke? <a href="#"
                        class="text-decoration-none">Escolha seus serviços</a> para começar!</p>
            </form>
        </main>
    </div>

</body>

</html>
