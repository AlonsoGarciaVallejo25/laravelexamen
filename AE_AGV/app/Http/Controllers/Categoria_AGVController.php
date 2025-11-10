<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria_AGV;

class Categoria_AGVController extends Controller
{
    public function index()
    {
        $categorias = Categoria_AGV::all();
        return view('categorias.index', compact('categorias'));
    }

    public function show($id)
    {
        $categoria = Categoria_AGV::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'nullable',
            'precio' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0'
        ]);

        Categoria_AGV::create($request->all());
        return redirect()->route('categorias.index');
    }
}
