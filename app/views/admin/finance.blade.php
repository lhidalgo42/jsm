@extends('layout.app')

@section('content')
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('navs.top')
            @include('navs.left')
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12" style="padding-bottom: 15px;">
                    <h1 class="page-header"><i class="fa fa-money"></i> Listado Financiamiento</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <table class="table table-condensed table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>RUT</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Fecha Nacimiento</th>
                        <th>Email</th>
                        <th>Empleador</th>
                        <th>Cargo</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /#wrapper -->

@stop