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
            <div class="card-header">Editando dados de doacao</div>
            <div class="card-body">
                <form action="/doacoes/edita/{{$doacao->id}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tipo</label>
                        <select class="form-control" placeholder="Nome do animal" name="tipo">
                            <option value="r" {{$doacao->tipo == 'r' ? 'selected': null}}>Raçao</option>
                            <option value="m" {{$doacao->tipo == 'm' ? 'selected': null}}>Medicamentos</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Quantidade</label>
                        <input type="number" value="{{$doacao->quantidade}}" class="form-control" placeholder="Quantidade em reais" name="quantidade">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome do doador</label>
                        <input type="text" value="{{$doacao->nomeDoador}}" class="form-control" placeholder="Nome do doador" name="nomeDoador">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Endereço do doador</label>
                        <input type="text" value="{{$doacao->enderecoDoador}}" class="form-control" placeholder="Endereço do doador" name="enderecoDoador">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefone do doador</label>
                        <input type="text" value="{{$doacao->telefoneDoador}}" class="form-control" placeholder="Telefone do doador" name="telefoneDoador">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Doaçao especifica para algum animal?</label>
                        <select class="form-control" placeholder="Observaçao do animal" name="petEspecifico">
                            <option value="0">Nenhum animal especifico</option>
                            @foreach($pets as $p)
                                <option
                                        value="{{$p->id}}"
                                        @if(isset($doacao->doacaoEspecifica->pet_id))
                                            {{ $p->id ==  $doacao->doacaoEspecifica->pet_id ? 'selected' : null }}
                                        @endif
                                >
                                    {{$p->nome}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </div>
@stop