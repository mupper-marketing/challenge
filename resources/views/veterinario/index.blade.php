@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Lista de veterinarios <a href="/veterinarios/cadastro" class="btn btn-info">Cadastrar</a></div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Nome</td>
                        <td>Telefone</td>
                        <td>CRV</td>
                        <td>Endereço</td>
                        <td>Açoes</td>
                    </tr>
                    @foreach($veterinarios as $v)
                        <tr>
                            <td>{{$v->nome}}</td>
                            <td>{{$v->telefone}}</td>
                            <td>{{$v->crv}}</td>
                            <td>{{$v->endereco}}</td>
                            <td>
                                <a class="btn btn-info" href="/veterinarios/edita/{{$v->id}}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-info" href="/veterinarios/deleta/{{$v->id}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@stop