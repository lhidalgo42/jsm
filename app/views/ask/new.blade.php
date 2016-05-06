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
                    <h1 class="page-header"><i class="fa fa-home"></i> Añadir Pregunta</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Grupo</th>
                        <th>Pregunta</th>

                        <th>Fecha de Creacion</th>
                        <th>Editar</th>
                        <th>Borrar
                            <small class="small">(Borrara todas las preguntas contenidas en ella)</small>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="5">Respuesta (nivel inferior)</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr>
                            <td><select id="group" class="form-control">
                                    <option value="1">Seleccione Grupo</option>
                                    @foreach(FaqType::all() as $type)
                                        @if($faq->faq_types_id == $type->id)
                                            <option value="{{$type->id}}" selected>{{$type->name}}</option>
                                        @else
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endif
                                    @endforeach
                                </select></td>
                            <td>{{$faq->ask}}</td>
                            <td>{{$type->created_at}}</td>
                            <td class="text-center"><a href="#" class="btn btn-info editAsk"
                                                       data-id="{{$faq->id}}">Editar</a></td>
                            <td class="text-center"><a href="#" class="btn btn-danger deleteAsk"
                                                       data-id="{{$faq->id}}">Borrar</a></td>
                        </tr>
                        <tr>
                            <td colspan="5">{{$faq->response}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $("#deleteAsk").click(function () {
                var row = $(this);
                $.ajax({
                    url: "/del/ask/" + $(this).attr('data-id'),
                    success: function (data) {
                        row.parent().parent().remove();
                    }
                })
            });
            $("#editAsk").click(function () {
                var row = $(this);
                $.ajax({
                    url: "/edit/ask/" + $(this).attr('data-id'),
                    success: function (data) {

                    }
                })
            });
        </script>
        <!-- /.row -->

    </div>
    <!-- /#wrapper -->

@stop