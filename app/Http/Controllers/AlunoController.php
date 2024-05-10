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



    public function edit()
    {
      return view('aluno.edit');
    }




    public function update()
    {
      dd("apagar");
    }




    public function destroy()
    {
        dd("editar");
    }
}
