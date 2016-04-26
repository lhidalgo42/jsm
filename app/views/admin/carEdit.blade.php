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
                <h1 class="page-header"><i class="fa fa-home"></i> Inicio</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!-- /.row -->
        <div class="row" style="background-color: whitesmoke;opacity: 1">
            <table class="table table-bordered">
                <tr>
                    <th>Nombre</th>
                    <th>Estado</th>
                </tr>
                <tbody>

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

@stop