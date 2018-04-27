@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Lista de atendimentos <a href="/atendimentos/cadastro" class="btn btn-info">Cadastrar</a></div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Data</td>
                        <td>Veterinario</td>
                        <td>Pet</td>
                        <td>Observaçoes</td>
                    </tr>
                    @foreach($atendimentos as $a)
                        <tr>
                            <td>{{date('d/m/Y', strtotime($a->data))}}</td>
                            <td>{{$a->veterinario->nome}}</td>
                            <td>{{$a->pet->nome}}</td>
                            <td>{{$a->observacao}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop