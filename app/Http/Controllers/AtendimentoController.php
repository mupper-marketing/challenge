<?php

namespace App\Http\Controllers;

use App\Atendimento;
use App\Http\Requests\AtendimentoRequest;
use App\Pet;
use App\Veterinario;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function index(){
        $atendimentos = Atendimento::all();
        return view('atendimento.index')->with('atendimentos', $atendimentos);
    }

    public function formCadastro(){
        $pets = Pet::where('status', 1)->get();
        $veterinarios = Veterinario::where('status', 1)->get();
        return view('atendimento.formCadastro')->with(array('pets' => $pets, 'veterinarios' => $veterinarios));
    }

    public function cadastro(AtendimentoRequest $request){
        $atendimento = new Atendimento($request->all());
        $atendimento->created_at = Date('Y-m-d H:i:s');
        $atendimento->updated_at = Date('Y-m-d H:i:s');
        $atendimento->save();
        return redirect('/atendimentos');
    }
}
