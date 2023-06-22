<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/devs',
['as'=>'desenvolvedores',
'uses'=>'App\Http\Controllers\DevsController@index']);

Route::get('/',
['as'=>'site.home',
'uses'=>'App\Http\Controllers\Site\HomeController@index']);

Route::group(['middleware'=>'auth'], function(){
   
    //cursos
    Route::get('/admin/cursos',
    ['as' =>'admin.cursos',
    'uses'=>'App\Http\Controllers\Admin\CursoController@index']);
    
    Route::get('/admin/cursos/adicionar',
    ['as' =>'admin.cursos.adicionar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);
    
    Route::post('/admin/cursos/salvar',
    ['as' =>'admin.cursos.salvar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);
    
    Route::get('/admin/cursos/editar/{id}',
    ['as' =>'admin.cursos.editar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@editar']);
    
    Route::put('/admin/cursos/atualizar/{id}', 
    ['as' =>'admin.cursos.atualizar',
    'uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);
    
    Route::get('/admin/cursos/excluir/{id}',
    ['as' =>'admin.cursos.excluir',
    'uses'=>'App\Http\Controllers\Admin\CursoController@excluir']);

    //alunos
    Route::get('/admin2/alunos',
    ['as' =>'admin2.alunos',
    'uses'=>'App\Http\Controllers\AlunoController@index']);
    
    Route::get('/admin2/alunos/adicionar',
    ['as' =>'admin2.alunos.adicionar',
    'uses'=>'App\Http\Controllers\AlunoController@adicionar']);
    
    Route::post('/admin2/alunos/salvar',
    ['as' =>'admin2.alunos.salvar',
    'uses'=>'App\Http\Controllers\AlunoController@salvar']);
    
    Route::get('/admin2/alunos/editar/{id}',
    ['as' =>'admin2.alunos.editar',
    'uses'=>'App\Http\Controllers\AlunoController@editar']);
    
    Route::put('/admin2/alunos/atualizar/{id}',
    ['as' =>'admin2.alunos.atualizar',
    'uses'=>'App\Http\Controllers\AlunoController@atualizar']);
    
    Route::get('/admin2/alunos/excluir/{id}',
    ['as' =>'admin2.alunos.excluir',
    'uses'=>'App\Http\Controllers\AlunoController@excluir']);
});

//Login
Route::get('/login', 
['as' => 'site.login',
'uses'=>'App\Http\Controllers\Site\LoginController@index']);

Route::get('/login/sair',
['as'=>'site.login.sair',
'uses'=>'App\Http\Controllers\Site\LoginController@sair']);

Route::post('/login/entrar',
['as'=>'site.login.entrar',
'uses'=>'App\Http\Controllers\Site\LoginController@entrar']);

