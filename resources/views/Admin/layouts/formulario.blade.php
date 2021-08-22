<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/settings.css">
    <link rel="stylesheet" href="css/colors.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Adicione e Edite</title>
</head>
<body>

    <nav class="menu">
        @yield('menu')
    </nav>

    <header class="cabecalho">
        @yield('header-form')
    </header>

    <section class="formulario-content">
        @yield('formulario')
    </section>


</body>
</html>
