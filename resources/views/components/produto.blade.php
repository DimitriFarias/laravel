<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
     <x-application-logo class="block h-12 w-auto" />
     <link rel="stylesheet" href="../../../style.css">
     <div class="d-flex align-items-center justify-contant-between">


     <h1 class="col-11 text-2xl font-medium text-gray-900 ">LISTA DE PRODUTO</h1>

     <a href="{{Route('produto.create')}}" class="btn btn-primary">+produto</a>
     </div>
     <form action="{{route('produto.index')}}" method="get">
        <input type="text"  name="search" class="col-6" placeholder="pesquisar...">
        <Button  class="btn btn-success" >kkkk</Button>
     </form>
  <hr>
 <?php
// parei tentaando fazer aprecer so um produto Curso Laravel - Busca no Laravel - #21

  use App\Models\produto;
 $produto = produto::orderBy('created_at', 'DESC')->get();
 ?>






</div>
  <table class="table-hover text-center">
        <thead class="table-primary">
            <tr>
                <th class="col-2">#</th>
                <th class="col-5">nome</th>
                <th class="col-4">preço</th>
                <th class="col-3">ações</th>
            </tr>
        </thead>
        <tbody>
            @if($produto->count() > 0)
            @foreach($produto as $rs )
                <tr>
                    <td class="align-middle">{{$loop->iteration}}</td>
                    <td class="align-middle">{{$rs->nome}}</td>
                    <td class="align-middle">R${{$rs->preco}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic exemple">
                            <!-- <a href="" type="button" class="btn btn-secondary">info</a> -->
                            <div class="m-1">
                                <a href="{{Route('produto.edit', $rs->id )}}"type="button" class="btn btn-warning">editar</a>
                            </div>


                            <form action="{{Route('produto.destroy', $rs->id)}}" method="post" onsubmit="return confirm('deletar?')">
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

