@extends('admin.layouts.principal')

@section('header')

    <h1 class="text-copy">Aprenda sobre programação na Dev Cursos hoje.</h1>
    <h2 class="text-copy2">Expanda seu conhecimento e com ele suas chances no mercado de trabalho.</h2>
    <button class="btn-comece">Comece agora</button>

@endsection

@section('categorias')

    <section class="categorias">
        <div class="categoria">
            <img class="icons-cat" src="/images/icons/mobile.svg" alt="Mobile">
            <h2 class="t-cat">Mobile</h2>
            <h3 class="n-c">10 cursos</h3>
        </div>
        <div class="categoria">
            <img class="icons-cat" src="/images/icons/web-front.svg" alt="Web Front-end">
            <h2 class="t-cat">Web Front-end</h2>
            <h3 class="n-c">10 cursos</h3>
        </div>
        <div class="categoria">
            <img class="icons-cat" src="/images/icons/web-back.svg" alt="Web Back-end">
            <h2 class="t-cat">Web Back-end</h2>
            <h3 class="n-c">10 cursos</h3>
        </div>
        <div class="categoria">
            <img class="icons-cat" src="/images/icons/desktop.svg"alt="Desktop">
            <h2 class="t-cat">Desktop</h2>
            <h3 class="n-c">10 cursos</h3>
        </div>
    </section>

@endsection

@section('cards')
    <h1>Nossos cursos</h1>
    <section class="cards-content">
        <div class="card">
            <h1 class="t-curso">Web Front-end Iniciante</h1>
            <span class="divider"></span>
            <h2 class="produtor">Produtor: Igor Jeuhan</h2>
            <p class="desc-c">
                Nesse curso
                você aprenderá os conceitos básicos de HTML5, CSS3 e
                um pouco de JavaScript, que te deixará com uma base sólida
                para o mercado de trabalho.
            </p>
            <span class="categoria-curso">Web Front-end</span>
            <span class="nivel-curso">Nível iniciante</span>
        </div>
    </section>

@endsection
