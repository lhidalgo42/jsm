@extends('layout.master')
@section('content')
    <div id="wrapper">
        @include('section.nav.home')
        @include('section.header.home')

        <div class="white-wrapper">

                @include('section.products.home')
            <br>
            <br>
            <br>


            <!-- FAQ -->

            @include('section.faq')
            <!--End Faq -->
            @include('modals.finance')

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