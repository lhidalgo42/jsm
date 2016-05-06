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
                    <h1 class="page-header"><i class="fa fa-home"></i> Agregar Grupo de Preguntas</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha de Creacion</th>
                        <th>Borrar <small class="small">(Borrara todas las preguntas contenidas en ella)</small></th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($types as $type)
                            <tr>
                                <td>{{$type->name}}</td>
                                <td>{{$type->created_at}}</td>
                                <td class="text-center"><a href="#" class="btn btn-danger deleteGroup" data-id="{{$type->id}}">Borrar</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $("#deleteGroup").click(function(){
                var row = $(this);
                $.ajax({
                    url:"/del/askGroup/"+$(this).attr('data-id'),
                    success:function(data){
                        row.parent().parent().remove();
                    }
                })
            });
        </script>
        <!-- /.row -->

    </div>
    <!-- /#wrapper -->

@stop