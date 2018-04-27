<?php

namespace App\Http\Controllers;

use App\Doacao;
use App\DoacaoEspecifica;
use App\Http\Requests\DoacaoRequest;
use App\Pet;
use Illuminate\Http\Request;

class DoacaoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $doacoes = Doacao::where('status', 1)->get();
        return view('doacao.index')->with('doacoes', $doacoes);
    }

    public function formCadastro(){
        $pets = Pet::where('status', 1)->get();
        return view('doacao.formCadastro')->with('pets', $pets);
    }

    public function cadastro(DoacaoRequest $request){
        $doacao = new Doacao($request->all());
        $doacao->created_at = Date('Y-m-d H:m:s');
        $doacao->updated_at = Date('Y-m-d H:m:s');
        $doacao->save();
        if(isset($request->petEspecifico)){
            if($request->petEspecifico != 0){
                $doacaoEspecifica = new DoacaoEspecifica();
                $doacaoEspecifica->pet_id = $request->petEspecifico;
                $doacaoEspecifica->doacao_id = $doacao->id;
                $doacaoEspecifica->save();
            }
        }
        return redirect('/doacoes');
    }

    public function formEdita($id) {
        $doacao = Doacao::find($id);
        $pets = Pet::where('status', 1)->get();

        return view('doacao.formEdita')->with(array('doacao' => $doacao, 'pets' => $pets));
    }

    public function edita(DoacaoRequest $request, $id){
        $doacao = Doacao::find($id);
        $doacao->tipo = $request->tipo;
        $doacao->quantidade = $request->quantidade;
        $doacao->nomeDoador = $request->nomeDoador;
        $doacao->enderecoDoador = $request->enderecoDoador;
        $doacao->save();
        if(isset($request->petEspecifico)) {
            if ($request->petEspecifico != 0) {
                $doacaoEspecifica = DoacaoEspecifica::where(
                    array(
                        'doacao_id' => $doacao->id
                    )
                )->get();
                if($doacaoEspecifica->count() > 0){
                    if($doacaoEspecifica[0]->pet_id != $request->petEspecifico){
                        $doacaoEspecifica[0]->pet_id = $request->petEspecifico;
                        $doacaoEspecifica[0]->save();
                    }
                }else{
                    $new = new DoacaoEspecifica();
                    $new->doacao_id = $doacao->id;
                    $new->pet_id = $request->petEspecifico;
                    $new->save();
                }
            }
        }
        return redirect('/doacoes');
    }

    public function deleta($id){
        $doacao = Doacao::find($id);
        $doacao->status = 0;
        $doacao->save();
        return redirect('/doacoes');
    }
}
