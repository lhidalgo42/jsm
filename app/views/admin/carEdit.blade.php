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
                    <h1 class="page-header"><i class="fa fa-home"></i> Editar Auto</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row" style="background-color: whitesmoke;opacity: 1">
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th>Visitas</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{$car->name}}</td>
                            <td>{{$car->email}}</td>
                            @if($car->active == 0)
                                <td>DESABILITADO</td>
                            @else
                                <td>ACTIVO</td>
                            @endif
                            <td>{{$car->visitas}}</td>
                            <td class="text-center"><a href="#" class="btn btn-info editarAuto" data-id="{{$car->id}}">Editar</a>
                            </td>
                            <td class="text-center"><a href="#" class="btn btn-danger removeAuto"
                                                       data-id="{{$car->id}}">Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                 id="modalAuto">
                <div class="modal-dialog modal-lg">

                    <div class="modal-content">
                        <div class="modal-header" id="nameModal">

                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <h4 class="h4"><strong>Datos Personales</strong></h4>

                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                           placeholder="Telefono">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text" id="rut" name="rut" placeholder="RUT">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="email" id="email" name="email"
                                           placeholder="Direcion de Correo">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="patente" name="patente" class="form-control"
                                           placeholder="Patente">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" name="price" id="precio"
                                           placeholder="Precio">
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="h4"><strong>Especificaciones Tecnicas</strong></h4>

                                <div class="col-md-4">
                                    <input id="marca" name="marca" class="form-control" type="text" placeholder="Marca">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="modelo" name="modelo" class="form-control"
                                           placeholder="Modelo">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="version" name="version" class="form-control"
                                           placeholder="Versión">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="number" id="anio" name="anio" class="form-control" placeholder="Año">
                                </div>
                                <div class="col-md-4">
                                    <input id="tipo_vehiculo" name="tipo_vehiculo" class="form-control" type="text"
                                           placeholder="Tipo de Vehiculo">
                                </div>
                                <div class="col-md-4">
                                    <input id="carroceria" name="carroceria" class="form-control" type="text"
                                           placeholder="Carroceria">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" id="cilindrada" name="cilindrada" class="form-control"
                                           placeholder="cilindrada">
                                </div>
                                <div class="col-md-4">
                                    <input type="number" min="0" id="kilometraje" name="kilometraje"
                                           placeholder="Kilometraje" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="color" name="color" placeholder="Color" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="h4"><strong>Especificaciones del Vehículo</strong></h4>

                                <div class="col-md-4">
                                    <input id="transmision" name="transmision" class="form-control" type="text"
                                           placeholder="Transmision">
                                </div>
                                <div class="col-md-4">
                                    <input id="direccion" name="direccion" class="form-control" type="text"
                                           placeholder="Dirección">
                                </div>
                                <div class="col-md-4">
                                    <input id="aire" name="aire" class="form-control" type="text"
                                           placeholder="Aire Acondicionado">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input id="radio" name="radio" class="form-control" type="text" placeholder="Radio">
                                </div>
                                <div class="col-md-4">
                                    <input id="alzavidrios" name="alzavidrios" class="form-control" type="text"
                                           placeholder="Alzavidrios Electrico">
                                </div>
                                <div class="col-md-4">
                                    <input id="espejos" name="espejos" class="form-control" type="text"
                                           placeholder="Espejos Electricos">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input id="frenos" name="frenos" class="form-control" type="text"
                                           placeholder="Posee ABS">
                                </div>
                                <div class="col-md-4">
                                    <input id="airbag" name="airbag" class="form-control" type="text"
                                           placeholder="Posee Airbag">
                                </div>
                                <div class="col-md-4">
                                    <input id="cierre" name="cierre" class="form-control" type="text"
                                           placeholder="Posee Cierre Centralizado">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input id="catalitico" name="catalitico" class="form-control" type="text"
                                           placeholder="Posee Catalitico">
                                </div>
                                <div class="col-md-4">
                                    <input id="combustible" name="combustible" class="form-control" type="text"
                                           placeholder="Tipo de Combustible">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Llantas" id="llantas" name="llantas"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="number" name="puertas" id="puertas" class="form-control"
                                           placeholder="Numero de Puertas">
                                </div>
                                <div class="col-md-4">
                                    <input id="alarma" name="alarma" class="form-control" type="text"
                                           placeholder="Posee Alarma">
                                </div>
                            </div>
                            <div class="row">
                                <h4 class="h4"><strong>Estado del Vehiculo</strong></h4>

                                <div class="col-md-3">
                                    <input id="tipodeventa" name="tipodeventa" class="form-control" type="text"
                                           placeholder="Estado del Vehiculo">
                                </div>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" id="duenos" name="duenos"
                                           placeholder="Dueños Anteriores" value="{{Input::old('duenos')}}">
                                </div>
                                <div class="col-md-3">
                                    <input id="papeles" name="papeles" class="form-control" type="text"
                                           placeholder="Estado de los Papeles">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="pintura" name="pintura" class="form-control"
                                           placeholder="Estado de la Pintura">
                                </div>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <a href="/save/car" class="btn btn-primary pull-left">Guardar</a>
                        <a href="#" class="btn btn-default pull-right" data-dismiss="modal">Cerrar</a>
                    </div>
                </div>

            </div>
        </div>
        <script>
            $(".editarAuto").click(function () {
                $.ajax({
                    url: '/get/auto/' + $(this).attr('data-id'),
                    type: 'POST',
                    success: function (data) {
                        $("#modalAuto").modal('show');
                    }
                });

            });
            $(".removeAuto").click(function () {
                var lado =  $(this);
                $.ajax({
                    url: '/remove/auto/' + $(this).attr('data-id'),
                    type: 'POST',
                    success: function (data) {
                        lado.parent().parent().remove();
                    }
                });

            });
        </script>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

@stop