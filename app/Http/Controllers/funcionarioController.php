<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\funcionario;
class funcionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('funcionario.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        funcionario::create($request->all());
      
      return redirect()->route('funcionario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('funcionario.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = funcionario::findOrFail($id);
        return view('funcionario.edit', ['id' => $id,
        'nome' => $funcionario->nome, 'email' => $funcionario->email, 'salario' => $funcionario->salario, 'funcionario'=>$funcionario
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
       public function update(Request $request, string $id)
    {
        $funcionario = funcionario::findOrFail($id);
        $funcionario->update($request->all());
        return redirect()->route('funcionario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $funcionario = funcionario::findOrFail($id);

        $funcionario->delete();

        return redirect()->route('funcionario.index');
    }
}
