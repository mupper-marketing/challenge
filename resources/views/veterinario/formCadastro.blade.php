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
            <div class="card-header">Formulario de cadastro de veterinarios</div>
            <div class="card-body">
                <form action="/veterinarios/cadastro" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do veterinario" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telefone</label>
                        <input type="text" class="form-control" placeholder="Telefone do veterinario" name="telefone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">CRV</label>
                        <input type="text" class="form-control" placeholder="CRV do veterinario" name="crv">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço</label>
                        <input type="text" class="form-control" placeholder="Endereço do veterinario" name="endereco">
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@stop