<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $rows = Aluno::all();
        return view('admin2.alunos.index', compact('rows'));
    }

    public function adicionar() 
    {
        return view('admin2.alunos.adicionar');
    }
    
    public function salvar(Request $req) 
    {
        $dados = $req->all();
        
        if($req->hasFile('imagem'))
        {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/alunos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Aluno::create($dados);
        return redirect()->route('admin2.alunos');
    }

    public function editar($id) 
    {
        // repare que ele recebe o id da ROTA
        $linha = Aluno::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('admin2.alunos.editar',compact('linha'));
        // manda o registro encontrado para ser editado na visão
    }
            
    public function excluir($id) 
    {
        // repare que ele recebe o id da ROTA
        Aluno::find($id)->delete();
        // apos selecionar o registro, é chamado o método DELETE do OBJETO registro
        // é mapeado internamente como um 'delete from' interno que rodara no BD
        return redirect()->route('admin2.alunos');
        // abre a visão da lista de cursos
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        
        if($req->hasFile('imagem'))
        {
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        
        Aluno::find($id)->update($dados);
        return redirect()->route('admin2.alunos');
    }
}
