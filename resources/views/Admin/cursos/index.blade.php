@extends('Admin.layouts.principal')

@section('header')

    <h1 class="text-copy">Aprenda programação na Dev Cursos hoje.</h1>
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
        @forelse ($courses as $course)
            <div class="card">
                <h1 class="t-curso">{{$course->titulo}}</h1>
                <span class="divider"></span>
                <h2 class="produtor">{{$course->produtor}}</h2>
                <p class="desc-c">
                    {{$course->descricao}}
                </p>
                <span class="categoria-curso">{{$course->categoria}}</span>
                <span class="nivel-curso">{{$course->nivel}}</span>
            </div>
        @empty
            <h4>Não existem cursos cadastrados</h4>
        @endforelse

    </section>

@endsection


@section('rodape')
    <p>Todos os direitos reservados <strong> Dev Cursos </strong> &#169 - 2021.</p>
@endsection
