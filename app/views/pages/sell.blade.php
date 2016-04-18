@extends('layout.master')
@section('content')
    <div id="wrapper">
        @include('section.nav.sell')
        @include('section.header.home')

        <div class="white-wrapper" id="sell">
            @include('section.sell')
                    <!--End Faq -->

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