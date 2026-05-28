<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use Illuminate\Support\Facades\Redirect;
use Pest\Support\View;

class MaterialController extends Controller
{

    //retorna a view com o form para cadastrar o usuário
    public function create(){
        return view ("materials/form");
    }

    //recebe os dados para armazenar no banco de dados
    public function store(Request $request){
        //criar um novo material
        $material = new Material();

        //definir os campos do material
        $material->name = $request->name;
        $material->description = $request->description;
        $material->user_id = 1;
        $material->file_url = "https://www.desenhosparacolorir.org/desenhos/178-desenhos-para-colorir-George-Curioso.html";

        //salva no BD
        $material->save();

        return redirect("/materials/new");
    }

    public function index(){
        $materials = Material::all();
        return View('materials/table', [
            'materials'=> $materials
        ]);
    }

    public function edit($id){

        $material = Material::findOrFail($id);

        return view("materials/form",[
            "material" => $material
        ]);
    }

    public function update(Request $request){
        return redirect("/materials/edit");
    }
    
}
