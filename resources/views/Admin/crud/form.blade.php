@extends('Admin.layouts.formulario')

@section('menu')
    <h1>Adicione ou Edite um curso</h1>
    <div class="buttons">
        <button class="button">Início</button> <button class="button">Lista de cursos</button>
    </div>
@endsection

@section('header-form')
    <section></section>
@endsection


@section('formulario')

    <form action="#">
        <label for="titulo">Título</label>
        <input id="titulo" name="titulo" class="focus" type="text" placeholder="Exemplo: Web Front-end com React JS...">
        <label for="descricao">Descrição</label>
        <textarea class="focus" name="descricao" id="descricao" cols="30" rows=""></textarea>
        <label for="categoria">Categoria</label>
        <select class="focus" name="categoria" id="categoria">
            <option value="1">Mobile</option>
            <option value="2">Web Front-end</option>
            <option value="3">Web Back-end</option>
            <option value="4">Desktop</option>
        </select>
        <label for="nivel">Nível</label>
        <select class="focus" name="nivel" id="nivel">
            <option value="1">Iniciante</option>
            <option value="2">Intermediário</option>
            <option value="3">Avançado</option>
        </select>
        <label for="produtor">Produtor</label>
        <select class="focus" name="produtor" id="produtor">
            <option value="id-produtor">Igor Jeuhan</option>
        </select>
        <div class="buttons">
        <a href="" class="form-button" id="cancelar">Cancelar</a>
        <button class="form-button" id="salvar" type="submit">Salvar</button>
        </div>
    </form>
@endsection
