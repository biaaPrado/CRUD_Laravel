@extends('layout.site')
@section('titulo','Alunos')
@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Alunos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr> <!-- CABECALHO -->
                    <td>Id</td>
                    <td>Nome</td>
                    <td>RA</td>
                    <td>Data Nascimento</td>
                    <td>Celular</td>
                    <td>Email</td>
                    <td>Foto</td>
                </tr>
            </thead>
            
            <tbody>
                @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nome }}</td>
                        <td>{{ $row->ra }}</td>
                        <td>{{ $row->data_nasc }}</td>
                        <td>{{ $row->celular }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->imagem }}</td>
                        <td><img src="{{ asset($row->imagem) }}" alt="{{ $row->titulo }}" width="120" height="100"></td>
                        <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' style="margin:10;" href="{{ route('admin2.alunos.editar',$row->id) }}">Alterar</a>
                        <a class='btn rede' style="margin:10;" href="{{ route('admin2.alunos.excluir',$row->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin2.alunos.adicionar')}}">Adicionar</a>
    </div>
</div>
@endsection