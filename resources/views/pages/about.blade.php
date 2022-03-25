@extends('layouts.master')

@section('css')
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
    />
@stop   

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <article id="termos-uso__wrapper" class="card p-4">
                    <h1 class="text-center font-weight-bold mb-0">SOBRE NÓS</h1>
                    
                    <div class="row mt-5">
                        <p>A <strong>Primus</strong> tem em seu DNA a vontade de crescer e fazer você evoluir também. Trazendo sempre os melhores métodos de ensino a distância, garantimos a  entrega de um serviço de qualidade e que respeita você, nosso consumidor. Venha conhecer mais nossos cursos e tornar o seu futuro com mais oportunidade no mercado de trabalho.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
@stop  

<style>
    .row > .col-xs-6 > .item {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;

        background-color: rgba(255, 255, 255, 0.5) !important;
        border: 0 !important;
        box-shadow: inset 0 0 200px #ffffff !important;
        backdrop-filter: blur(15px) !important;
        background-repeat: no-repeat;
    }
</style>