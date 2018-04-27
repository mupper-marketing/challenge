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
            <div class="card-header">Formulario de cadastro de animais</div>
            <div class="card-body">
                <form action="/pet/cadastro" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" class="form-control" placeholder="Nome do animal" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Idade</label>
                        <input type="number" class="form-control" placeholder="Idade do animal" name="idade">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Especie</label>
                        <input type="text" class="form-control" placeholder="Especie do animal" name="especie">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Raça</label>
                        <input type="text" class="form-control" placeholder="Raça do animal" name="raca">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Imagem</label>
                        <input type="file" class="form-control" placeholder="Raça do animal" name="input_img">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Observaçao</label>
                        <textarea type="text" class="form-control" placeholder="Observaçao do animal" name="observacao"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@stop