<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;
class produtoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('produto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        produto::create($request->all());
      
      return redirect()->route('produto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('produto.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produto= produto::findOrFail($id);
        return view('produto.edit', ['id' => $id,
        'nome' => $produto->nome, 'preco' => $produto->preco, 'produto'=>$produto
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produto = produto::findOrFail($id);
        $produto->update($request->all());
        return redirect()->route('produto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produto = produto::findOrFail($id);

        $produto->delete();

        return redirect()->route('produto.index');
    }
}
