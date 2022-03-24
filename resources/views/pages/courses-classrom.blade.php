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
                    <h1 class="text-center font-weight-bold mb-0">CURSOS PRESENCIAIS</h1>
                    
                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                            <p class="text-center">Informação do curso de Máquinas Pesadas e Empilhadeira Certificado reconhecido Nacionalmente Carteira Nacional de Operador de Máquinas NRs 06,11,12,17, Assinatura Engenheiro de Segurança do Trabalho - Mecânica Garantia de Aprendizagem Aula prática Aula Teórica Certificado com mais de 30h.</p>
                           <a href="https://api.whatsapp.com/send?phone=554831972020&text=Ol%C3%A1%2C%20encontrei%20o%20n%C3%BAmero%20no%20site%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es." style=" background-color:#fff;width:240px;border-radius:50px;font-size:2em;color:#e13c5c;font-weight:bold;margin-top:1em" class="btn">Saiba mais</a>
                        </div>
                    </div>
                    <div class="row my-5">
                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/01.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/01.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/01.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/02.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/02.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/02.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/03.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/03.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/03.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/04.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/04.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/04.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/05.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/05.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/05.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/06.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/06.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/06.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/07.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/07.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/07.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/08.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/08.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/08.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/09.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/09.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/09.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/10.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/10.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/10.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/11.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/11.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/11.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 mb-3">
                            <div class="item" style="background-image: url({{ asset('images/cursos-presenciais/12.jpeg') }})">
                                <a data-fancybox="cursos-ead" data-src="{{ asset('images/cursos-presenciais/12.jpeg') }}">
                                    <img src="{{ asset('images/cursos-presenciais/12.jpeg') }}" class="img-fluid" />
                                </a>
                            </div>
                        </div>
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