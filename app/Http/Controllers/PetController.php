<?php

namespace App\Http\Controllers;

use App\Atendimento;
use App\Http\Requests\PetRequest;
use App\ImgPets;
use App\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $pets = Pet::where(array('status' => 1))->get();
        return view('pet.index')->with('pets', $pets);
    }

    public function formCadastro() {
        return view('pet.formCadastro');
    }

    public function cadastro(PetRequest $request){
        $pet = new Pet($request->all());
        $pet->save();
        if ($request->hasFile('input_img')) {
            if($request->file('input_img')->isValid()) {
                $file = $request->file('input_img');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();

                $request->file('input_img')->move("fotoupload", $name);

                $imgPet = new ImgPets();
                $imgPet->imagem = $name;
                $imgPet->pet_id = $pet->id;
                $imgPet->save();
            }
        }
        return redirect('/pet/cadastro');
    }

    public function formEdita($id) {
        $pet = Pet::find($id);
        $atendimentos = Atendimento::where('pet_id', $id)->get();
        return view('pet.formEdita')->with(array('pet' => $pet, 'atendimentos' => $atendimentos));
    }

    public function edita(PetRequest $request, $id){
        $pet = Pet::find($id);
        $pet->nome = $request->nome;
        $pet->idade = $request->idade;
        $pet->especie = $request->especie;
        $pet->raca = $request->raca;
        $pet->observacao = $request->observacao;
        $pet->save();
        return redirect('/pet');
    }

    public function editaImage(Request $request, $id){
        if ($request->hasFile('input_img')) {
            $pet = Pet::find($id);
            if(isset($pet->imgPet->imagem)){
                $name = $pet->imgPet->imagem;
            }else{
                $file = $request->file('input_img');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $imgPet = new ImgPets();
                $imgPet->imagem = $name;
                $imgPet->pet_id = $pet->id;
                $imgPet->save();
            }

            if($request->file('input_img')->isValid()) {
                $request->file('input_img')->move("fotoupload", $name);
                return redirect('/pet');
            }
        }
    }

    public function deleta($id){
        $pet = Pet::find($id);
        $pet->status = 0;
        $pet->save();
        return redirect('/pet');
    }

}
