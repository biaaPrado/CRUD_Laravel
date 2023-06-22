@extends('layout.site')
@section('titulo','Desenvolvedores')
@section('conteudo')
<div class='container'>
    <h3 class='center'>Alunas desenvolvedoras</h3>  
    <div class="row">
        <div class='center'>
            <div class="col s3 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('img\devs\imagem_4380.jpg')}}" alt="Bia" width="30" height="350">
                    </div>
                    <div class="card-content">
                        <span class="card-title black-text black-darken-5"><b>Beatriz Prado Soche</b></span>
                        <p>n° 6 &nbsp;&nbsp; 73B</p>
                        <p>beatriz.p.soche@unesp.br</p>
                    </div>   
                </div>
            </div>

            <div class="col s3 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('img\devs\imagem_6721.jpg')}}" alt="Gabi" width="30" height="350">
                    </div>
                    <div class="card-content">
                        <span class="card-title black-text black-darken-5"><b>Gabriele de Lima</b></span>
                        <p>n° 16 &nbsp;&nbsp; 73B</p>
                        <p>gabriele.lima@unesp.br</p>
                    </div>   
                </div>
            </div>

            <div class="col s3 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset('img\devs\imagem_7452.jpg')}}" alt="Eid" width="30" height="350">
                    </div>
                    <div class="card-content">
                        <span class="card-title black-text black-darken-5"><b>Maria Luisa Eid</b></span>
                        <p>n° 27 &nbsp;&nbsp; 73B</p>
                        <p>luisa.eid@unesp.br</p>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection