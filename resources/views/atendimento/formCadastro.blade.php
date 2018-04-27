@extends('layouts.app')

@section('content')
    <div class="container">
        @if($errors->all())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">Formulario de cadastro de atendimento</div>
            <div class="card-body">
                <form action="/atendimentos/cadastro" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Data</label>
                        <input type="date" class="form-control" placeholder="Data da consulta" name="data">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Pet</label>
                        <select class="form-control" placeholder="Telefone do veterinario" name="pet_id">
                        @foreach($pets as $p)
                            <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Veterinario</label>
                        <select class="form-control" placeholder="Telefone do veterinario" name="veterinario_id">
                            @foreach($veterinarios as $v)
                                <option value="{{$v->id}}">{{$v->nome}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Observaçao</label>
                        <textarea class="form-control" placeholder="Observaçoes" name="observacao"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@stop