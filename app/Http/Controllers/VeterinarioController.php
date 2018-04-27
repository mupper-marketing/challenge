<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeterinarioRequest;
use App\Veterinario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
        $veterinarios = Veterinario::where('status', 1)->get();
        return view('veterinario.index')->with('veterinarios', $veterinarios);
    }

    public function formCadastro(){
        return view('veterinario.formCadastro');
    }

    public function cadastro(VeterinarioRequest $request){
        $veterinario = new Veterinario($request->all());
        $veterinario->save();
        return redirect('/veterinarios');
    }

    public function formEdita($id) {
        $veterinario = Veterinario::find($id);

        return view('veterinario.formEdita')->with('veterinario', $veterinario);
    }

    public function edita(VeterinarioRequest $request, $id){
        $veterinario = Veterinario::find($id);
        $veterinario->nome = $request->nome;
        $veterinario->telefone = $request->telefone;
        $veterinario->crv = $request->crv;
        $veterinario->endereco = $request->endereco;
        $veterinario->Save();
        return redirect('/veterinarios');
    }

    public function deleta($id){
        $veterinario = Veterinario::find($id);
        $veterinario->status = 0;
        $veterinario->save();
        return redirect('/veterinarios');
    }
}
