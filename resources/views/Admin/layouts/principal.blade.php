<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/principal.css">
    <title>Dev Cursos</title>
</head>
<body>

    <nav class="menu">
        <h1 class="hidden-menu">Dev Cursos</h1>
        <ul>
            <li class="hidden-menu">Inicio</li>
            <li class="hidden-menu">Cursos</li>
            <li>Cadastre-se</li>
            <li><button class="btn-entrar">Entrar</button></li>
        </ul>
    </nav>

    <header class="cabecalho">
        @yield('header')
    </header>

    @yield('categorias')

    <section class="conteudo">
        @yield('cards')
    </section>

    <footer class="rodape">
        @yield('rodape')
    </footer>
</body>
</html>
