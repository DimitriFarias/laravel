<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('STRIKER') }}
        </h2>


    </x-slot>
    <br>

    <!-- COLOCAR PARA MOSTRAS A QUANTIDADE Q TEM -->
    <div class="row justify-content-center">
  <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ALUNO</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
        <a href="{{ route('aluno.index') }}" class="btn btn-primary">ALUNO</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">FUNCIONARIO</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
        <a href="{{ route('funcionario.index') }}"class="btn btn-primary">FUNCIONARIO</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PRODUTO</h5>
        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum </p>
        <a href="{{ route('produto.index') }}" class="btn btn-primary">PRODUTO</a>
      </div>
    </div>
  </div>

</div>
</x-app-layout>

