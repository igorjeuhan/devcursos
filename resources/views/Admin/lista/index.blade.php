@extends('Admin.layouts.list')

@section('menu-lista')
    <h1>Lista de cursos</h1>
    <div class="buttons-lista">
        <button class="button-lista">Início</button> <button class="button-lista">Adicionar curso</button>
    </div>
@endsection

@section('lista')
    <table class="lista" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Título</th>
                <th class="hidden">Categoria</th>
                <th>Produtor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Web Front-end Iniciante</td>
                <td class="hidden">Web Front-end</td>
                <td>Igor Jeuhan</td>
                <td>
                    <a href="" class="btn-act"><img class="icon-act" src="/images/icons/edit.svg" alt=""></a>
                    <button class="btn-act"><img class="icon-act" src="/images/icons/save.svg" alt=""></button>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
