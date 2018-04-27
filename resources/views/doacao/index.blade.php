@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Lista de doaçoes <a href="/doacoes/cadastro" class="btn btn-info">Cadastrar</a></div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Tipo</td>
                        <td>Quantidade</td>
                        <td>Doador</td>
                        <td>Telefone</td>
                        <td>Açoes</td>
                    </tr>
                    @foreach($doacoes as $d)
                        <tr>
                            <td>{{$d->tipo == 'r' ? 'Raçao' : 'Medicamentos'}}</td>
                            <td>R$ {{number_format($d->quantidade, 2, ',', '.')}}</td>
                            <td>{{$d->nomeDoador}}</td>
                            <td>{{$d->telefoneDoador}}</td>
                            <td>
                                <a class="btn btn-info" href="/doacoes/edita/{{$d->id}}"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-info" href="/doacoes/deleta/{{$d->id}}"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@stop