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
                        @foreach($cars as $car)
                            <?php $spec = Specification::find($car->id); ?>
                        <tr>
                            <td>{{$spec->marca}} {{$spec->modelo}} - {{$spec->version}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="...">
                                    <button type="button" data-val="SI" car="{{$car->id}}" class="btn btn-default @if($car->estado == 1) active @endif">SI</button>
                                    <button type="button" data-val="NO" car="{{$car->id}}" class="btn btn-default @if($car->estado == 0) active @endif">NO</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

@stop