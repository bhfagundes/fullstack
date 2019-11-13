<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estagiarios;

class EstagiariosController extends Controller
{
    public function index()
    {
        $etagiarios=Estagiarios::all();
    }
    public function show(Estagiarios $estagiario)
    {
       return $estagiario;
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required|unique:estagiarios|max:255',
            'email' => 'required',
            'telefone' => 'required',
            'data_nascimento' => 'required',
            'price' => 'integer',
            'availability' => 'boolean',
        ]);
        $estagiario = Estagiarios::create($request->all());
        return response()->json($estagiario, 201);
    }
    public function update(Request $request, Estagiarios $estagiario)
    {
        
        $estagiario->update($request->all());
        return response()->json($estagiario, 200);
    }
    public function destroy(Estagiarios $estagiario)
    {
        $estagiario->delete();
        return response()->json(null, 204);
    }
}
