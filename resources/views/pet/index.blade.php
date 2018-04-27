@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Lista de animais <a href="/pet/cadastro" class="btn btn-info">Cadastrar</a></div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nome</td>
                            <td>Idade</td>
                            <td>Especie</td>
                            <td>Raça</td>
                            <td>Açoes</td>
                        </tr>
                        @foreach($pets as $p)
                            <tr>
                                <td>{{$p->nome}}</td>
                                <td>{{$p->idade}}</td>
                                <td>{{$p->especie}}</td>
                                <td>{{$p->raca}}</td>
                                <td>
                                    <a class="btn btn-info" href="/pet/edita/{{$p->id}}"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-info" href="/pet/deleta/{{$p->id}}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop