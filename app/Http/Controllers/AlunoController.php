<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Aluno;

class AlunoController extends Controller
{

    public function index()
    {

    //   return view('aluno.index');
    return view('aluno.index');
    }




    public function create()
    {
      return view('aluno.create');

    }




    public function store(Request $request)
    {
      Aluno::create($request->all());
      //  return view('aluno.index');
      return redirect()->route('aluno.index')->with('success', 'aluno add');
    }



    public function show()
    {
      return view('aluno.show');
    }



    public function edit( string $id)
    {

        $aluno = Aluno::findOrFail($id);
        return view('aluno.edit', ['id' => $id,
        'nome' => $aluno->nome, 'email' => $aluno->email, 'aluno' => $aluno
    ]);
    }




    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('aluno.index');
    }




    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect()->route('aluno.index');
    }
}
