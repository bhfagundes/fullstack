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
    public function show($id)
    {
        $estagiario = Estagiarios::find($id);

        if(!$estagiario) 
        {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($estagiario);
    }
    public function store(Request $request)
    {
        $estagiario = new Estagiario();
        $estagiario->fill($request->all());
        $estagiario->save();

        return response()->json($estagiario, 201);
    }
    public function update(Request $request, $id)
    {
        $estagiario = Estagiarios::find($id);

        if(!$estagiario) 
        {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $estagiario->fill($request->all());
        $estagiario->save();

        return response()->json($estagiario);
    }
    public function destroy($id)
    {
        $estagiario = Estagiarios::find($id);

        if(!$estagiario) 
        {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $estagiario->delete();
    }
}
