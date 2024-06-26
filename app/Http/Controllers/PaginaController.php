<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaginaRequest;
use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{

    public function index()
    {
        //
        $pagina = Pagina::all();
        return response()->json($pagina,200);
    }

    //no se ustiliza
    public function create()
    {
        //
    }

    public function store(PaginaRequest $request)
    {
        //
        $pagina = Pagina::create($request->all());
        return response()->json(['Success'=>true,'data'=>$pagina],201);
    }

    public function show(string $id)
    {
        //
        $pagina = Pagina::find($id);
        return response()->json($pagina,200);
    }

    //no se utiliza
    public function edit(string $id)
    {
        //

    }

    public function update(PaginaRequest $request, string $id)
    {
        //
        $pagina = Pagina::find($id);
        $pagina->titulo = $request->titulo;
        $pagina->descripcion = $request->descripcion;
        $pagina->imagen = $request->imagen;
        $pagina->save();

        return response()->json(['Success'=>true,'data'=>$pagina],200);
    }

    public function destroy(string $id)
    {
        //
        Pagina::find($id)->delete();
        return response()->json(['Success'=>true],200);
    }
}
