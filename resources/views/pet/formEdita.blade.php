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
            <div class="card-header">Editando dados de <b>{{$pet->nome}}</b></div>
            <div class="card-body">
                <form action="/pet/edita/{{$pet->id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome</label>
                        <input type="text" value="{{$pet->nome}}" class="form-control" placeholder="Nome do animal" name="nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Idade</label>
                        <input type="number" value="{{$pet->idade}}" class="form-control" placeholder="Idade do animal" name="idade">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Especie</label>
                        <input type="text" value="{{$pet->especie}}" class="form-control" placeholder="Especie do animal" name="especie">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Raça</label>
                        <input type="text" value="{{$pet->raca}}" class="form-control" placeholder="Raça do animal" name="raca">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Observaçao</label>
                        <textarea type="text" class="form-control" placeholder="Observaçao do animal" name="observacao">{{$pet->observacao}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
        <div class="card marginTop">
            <div class="card-header">Alterar imagem</div>
            <div class="card-body">
                <div class="row justify-content-md-center">
                    <div class="col col-md-8 text-center">
                        <form action="/pet/editaImage/{{ $pet->id  }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @if(isset($pet->imgPet->imagem))
                                <img src="{{ asset('fotoupload/' . $pet->imgPet->imagem) }}" class="img-fluid">
                            @else
                                <img src="{{ asset('img/noimage.jpeg') }}" class="img-fluid">
                            @endif
                            <div class="form-group">
                                <label for="exampleInputEmail1">Escolha a imagem</label>
                                <input type="file" class="form-control" name="input_img" required>
                            </div>
                            <input type="submit" value="Editar Imagem" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card marginTop">
            <div class="card-header">Historico de atendimentos</div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Data</td>
                        <td>Veterinario</td>
                        <td>Observaçoes</td>
                    </tr>
                    @foreach($atendimentos as $a)
                        <tr>
                            <td>{{date('d/m/Y', strtotime($a->data))}}</td>
                            <td>{{$a->veterinario->nome}}</td>
                            <td>{{$a->observacao}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@stop