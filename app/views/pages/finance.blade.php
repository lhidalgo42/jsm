@extends('layout.master')
@section('content')
    <div id="wrapper">
        @include('section.nav.sell')
        @include('section.header.home')

        <div class="white-wrapper" id="sell">
                    <!--End Faq -->
            <div class="container">
                @include('modals.finance')
                <div class="col-xs-12 col-md-12">
                    <h3 class="h3">Financiamos la Compra de tu Automovil</h3>
                    <p>Gestionamos tu Crédito Automotriz desde  (cuotas Fijas); Ofrecemos una gama de productos alternativos para tu financiamiento como:
                    </p>
                    <ul>
                        <li>Crédito Convencional</li>
                        <li>Compra Inteligente</li>
                        <li>Para vehículos nuevos y usados</li>
                    </ul>
                    <p>Todo esto con atención personalizada a través de nuestros ejecutivos calificados.</p>
                </div>
            </div>
            <div class="col-xs-12 col-md-12 ">
                <div class="row center-block" style="max-width: 800px;">
                    <div class="col-xs-3"><img src="/images/bancofalabella.png" alt="" style="width: 100%"></div>
                    <div class="col-xs-3"><img src="/images/Abcdin_New_Logo.svg" alt="" style="width: 100%"></div>
                    <div class="col-xs-3"><img src="/images/Logo-tanner.jpg" alt="" style="width: 100%"></div>
                    <div class="col-xs-3"><img src="/images/credito-directo.png" alt="" style="width: 100%"></div>
                </div>
                <button class="btn btn-lg btn-primary center-block" id="btn-finance">Obtener Financiamiento</button>
            </div>
            <!-- Contact -->

            <div id="contact">
                <div class="title text-center">
                    <h3 class="title-text">Contactanos</h3>

                    <em class="lead">Para un mejor servicio, es bueno estar en contacto.</em>
                    <hr>
                </div>
            </div>
            @include('section.map')

            @include('section.footer')

            @include('section.copyrights')
        </div>
    </div>
@stop