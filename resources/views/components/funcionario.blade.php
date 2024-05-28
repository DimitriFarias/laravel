<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
     <x-application-logo class="block h-12 w-auto" />
     <link rel="stylesheet" href="../../../style.css">
     <div class="d-flex align-items-center justify-contant-between">
     <h1 class="col-11 text-2xl font-medium text-gray-900 ">LISTA DE FUNCIONARIO</h1>
     <a href="{{Route('funcionario.create')}}" class="btn btn-primary">funcionario</a>
     </div>
  <hr>

  <?php
 use App\Models\funcionario;
 $funcionario = funcionario::orderBy('created_at', 'DESC')->get();

 ?>





</div>
  <table class="table-hover text-center">
        <thead class="table-primary">
            <tr>
                <th class="col-1">#</th>
                <th class="col-3">nome</th>
                <th class="col-4">email</th>
                <th class="col-4">salario</th>
                <th class="col-4">ações</th>
            </tr>
        </thead>
        <tbody>
            @if($funcionario->count() > 0)
            @foreach($funcionario as $rs )
                <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$rs->nome}}</td>
                    <td class="align-middle">{{$rs->email}}</td>
                    <td class="align-middle"> R$ {{$rs->salario}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic exemple">
                            <!-- <a href="" type="button" class="btn btn-secondary">info</a> -->
                            <div class="m-1">
                                <a href="{{Route('funcionario.edit', $rs->id )}}"type="button" class="btn btn-warning">editar</a>
                            </div>

                            <form action="{{Route('funcionario.destroy', $rs->id)}}" method="post" onsubmit="return confirm('deletar?')">
                            @csrf
                            @method('delete')
                                <Button class="btn btn-danger m-1" >delete</Button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

        @else
    <tr>
        <td class="text-center" colspan="s"></td>
    </tr>
        @endif
        </tbody>
</div>
</table>
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

</div>
</div>
