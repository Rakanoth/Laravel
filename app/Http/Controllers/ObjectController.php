<?php

namespace App\Http\Controllers;

use App\Object;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ObjectController extends Controller
{

    public function formRead() {
        return view('read');
    }

    public function read(Request $request) {
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            $dados = file($arquivo_tmp);
            foreach($dados as $linha){
                $linha = trim($linha);
                $object = new Object();
                $object->line = $linha;
                $object->save();
            }
        return redirect()->to('/listar');
    }

    public function list() {
        $objects = Object::all();
        return view('list', compact('objects'));
    }

    public function formCreate() {
        return view('create');
    }

    public function create(Request $request) {
        $object = new Object();
        $object->line = $request->line;
        $object->save();
        return redirect()->to('/listar');
    }
    
    public function formEdit($id) {
        $object = Object::find($id);
        if(!$object){
            abort(404);
        }
        return view('edit', compact('object'));
    }

    public function edit(Request $request, $id) {
        $object = Object::find($id);
        if(!$object){
            abort(404);
        }
        $object->line = $request->line;
        $object->save();
        return redirect()->to('/listar');
    }

    public function delete(Request $request, $id) {
        $object = Object::find($id);
        if(!$object){
            abort(404);
        }
        $object->delete();
        return redirect()->to('/listar');
    }
}