<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
     <x-application-logo class="block h-12 w-auto" />
     <link rel="stylesheet" href="../../../style.css">
     <div class="d-flex align-items-center justify-contant-between">
     <h1 class="col-11 text-2xl font-medium text-gray-900 ">LISTA DE ALUNOS</h1>
     <a href="{{Route('aluno.create')}}" class="btn btn-primary">aluno</a>
     </div>
  <hr>
 <?php
 use App\Models\Aluno;
 $aluno = Aluno::orderBy('created_at', 'DESC')->get();
//  function edit(string $id)
//  {
//     $aluno = Aluno::findOrFail($id);

//      return view('aluno.edit');
//  }

 ?>
  <!-- <div class="col-1">
            <a href="dashboard">
                <button class="btn btn-success w-100" type="submit">cadastrar</button>
            </a>
        </div> -->
    </div>
  <table class="table-hover text-center">
        <thead class="table-primary">
            <tr>
                <th class="col-2">#</th>
                <th class="col-5">nome</th>
                <th class="col-4">email</th>
                <th class="col-3">ações</th>
            </tr>
        </thead>
        <tbody>
            @if($aluno->count() > 0)
            @foreach($aluno as $rs )
                <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$rs->nome}}</td>
                    <td class="align-middle">{{$rs->email}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic exemple">
                            <!-- <a href="" type="button" class="btn btn-secondary">info</a> -->
                            <div>
                                <a href="{{Route('aluno.edit', $rs->id )}}"type="button" class="btn btn-warning">editar</a>
                            </div>

                            <form action="{{Route('aluno.destroy', $rs->id)}}" method="post" onsubmit="return confirm('deletar?')">
                            @csrf
                            @method('delete')
                                <Button class="btn btn-danger" >delete</Button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

        @else
    <tr>
        <td class="text-center" colspan="s">aluno n existe</td>
    </tr>
        @endif
        </tbody>
</div>
</table>






<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">


</div>
