@extends('layout.site')
@section('titulo','Home')
@section('conteudo')
<div class='container'>
    <h5 class="center">Seja bem vindo ao Projeto Universidade, confira abaixo as informações</h5>
    <h3 class='center'>Cards de Cursos</h3>  
    <div class="row">
        @foreach($linhas as $linha)
        <div class="col s6 m6">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset($linha->imagem)}}" alt="{{$linha->titulo}}" width="150" height="250">
                    <a href="{{route('admin.cursos.editar', $linha->id)}}" class="btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">edit</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title black-text black-darken-5"><b>{{$linha->titulo}}</b></span>
                    <p>{{$linha->descricao}}</p>
                    <p>{{$linha->valor}}</p>
                </div>   
            </div>
        </div>
        @endforeach
    </div>

    <h3 class='center'>Cards de Alunos</h3>
    <div class="row">
        @foreach($rows as $row)
        <div class="col s6 m6">
            <div class="card">
                <div class="card-image">
                    <img src="{{asset($row->imagem)}}" alt="{{$row->nome}}"  width="150" height="250">
                    <a href="{{route('admin2.alunos.editar', $row->id)}}" class="btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">edit</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title black-text"><b>{{$row->nome}}</b></span>
                    <p>{{$row->email}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection