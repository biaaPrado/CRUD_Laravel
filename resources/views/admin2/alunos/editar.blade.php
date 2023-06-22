@extends('layout.site')
@section('titulo','Editar Alunos')
@section('conteudo')
  <div class="container">
    <h3 class="center">Editando Alunos</h3>
    <div class="row">
      <form class="" action="{{route('admin2.alunos.atualizar', $linha->id)}}" 
        method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="put">
        @include('admin2.alunos._form')
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
@endsection