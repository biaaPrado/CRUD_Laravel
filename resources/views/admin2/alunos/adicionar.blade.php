@extends('layout.site')
@section('titulo','Adicionar Alunos')
@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Aluno</h3>
    <div class="row">
      <form class="" action="{{route('admin2.alunos.salvar')}}" 
            method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin2.alunos._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
@endsection