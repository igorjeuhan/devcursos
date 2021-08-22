<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/lista.css">
    <title>Lista de cursos</title>
</head>
<body>

    <nav class="menu-lista">
        @yield('menu-lista')
    </nav>

    <section class="lista-content">
        @yield('lista')
    </section>

</body>
</html>
