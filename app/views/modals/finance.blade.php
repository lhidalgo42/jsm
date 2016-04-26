<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" id="finance">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {{Form::open(array('url' => '/create/finance'))}}
            <style>
                select{
                    margin: auto;
                    margin-bottom: 3em;
                }
            </style>
            <div class="modal-header">
                <div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: -25px;">
                    <h4 class="pull-left" id="modalTitle">Modal title</h4>
                    <a role="button" class="close pull-right" data-dismiss="modal" aria-label="Close"
                       style="margin-top: 6px;"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="modal-body">

                <div class="row">

                <div class="col-md-6">
                    <h4 class="h4"><strong>Datos Personales</strong></h4>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                               value="{{Input::old('nombre')}}" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="rut" name="rut" placeholder="RUT"
                               value="{{Input::old('rut')}}" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion"
                               value="{{Input::old('direccion')}}" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"
                               value="{{Input::old('telefono')}}">
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular"
                               value="{{Input::old('celular')}}" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                               placeholder="Fecha de Nacimiento"
                               value="{{Input::old('fecha_nacimiento')}}" required>
                    </div>
                    <div class="col-md-12">
                        <select name="estado_civil" class="form-control" id="estado_civil">
                            <option value="">Estado Civil</option>
                            <option value="soltero">Soltero</option>
                            <option value="cadado">Casado</option>
                            <option value="separado">Separado</option>
                            <option value="divorciado">Divorciado</option>
                            <option value="viudo">Viudo</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                               value="{{Input::old('email')}}" required>
                    </div>
                </div>
                    <div class="col-md-6">
                        <h4 class="h4"><strong>Datos Laborales</strong></h4>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="empleador" name="empleador"
                                   placeholder="Empleador"
                                   value="{{Input::old('empleador')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo"
                                   value="{{Input::old('cargo')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="renta_liquido" name="renta_liquido"
                                   placeholder="Renta Liquida"
                                   value="{{Input::old('renta_liquido')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso"
                                   placeholder="Fecha de Ingreso"
                                   value="{{Input::old('fecha_ingreso')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="direccion_laboral" name="direccion_laboral"
                                   placeholder="Dirección Laboral"
                                   value="{{Input::old('direccion_laboral')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="telefono_laboral" name="telefono_laboral"
                                   placeholder="Telefono Laboral"
                                   value="{{Input::old('telefono_laboral')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="tipo_contrato" name="tipo_contrato"
                                   placeholder="Tipo de Contrato"
                                   value="{{Input::old('tipo_contrato')}}">
                        </div>
                        <div class="col-md-12">
                            <select name="otros_ingresos" id="otros_ingresos" class="form-control">
                                <option value="">Otros Ingresos</option>
                                <option value="SI">SI</option>
                                <option value="NO">NO</option>
                                <option value="OCASIONALMENTE">OCACIONALMENTE</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="h4"><strong>Datos Conyuge</strong></h4>

                        <div class="col-md-12">
                            <input type="text" class="form-control" id="nombre_conyuge" name="nombre_conyuge"
                                   placeholder="Nombre Conyuge"
                                   value="{{Input::old('nombre_conyuge')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="rut_conyuge" name="rut_conyuge"
                                   placeholder="Rut Conyuge"
                                   value="{{Input::old('rut_conyuge')}}">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="renta_conyuge" name="renta_conyuge"
                                   placeholder="Renta Liquida Contuge"
                                   value="{{Input::old('renta_conyuge')}}">
                        </div>


                    </div>
                    <div class="col-md-6">
                        <h4 class="h4"><strong>Datos Bancarios</strong></h4>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="cuenta_corriente" name="cuenta_corriente"
                                   placeholder="Numero de Cuenta Corriente"
                                   value="{{Input::old('cuenta_corriente')}}">
                        </div>
                        <div class="col-md-12">
                            <select name="banco" class="form-control" id="banco">
                                <option value="">Banco</option>
                                <option value="ABN AMRO">ABN AMRO</option>
                                <option value="Atlas - Citibank">Atlas - Citibank</option>
                                <option value="Banco Bice">Banco Bice</option>
                                <option value="Banco Central de Chile">Banco Central de Chile</option>
                                <option value="Banco de Chile">Banco de Chile</option>
                                <option value="Banco de Credito e inversiones"> Banco de Credito e inversiones</option>
                                <option value="Banco del Desarrollo">Banco del Desarrollo</option>
                                <option value="Banco Edward">Banco Edwards</option>
                                <option value="Banco Falabella">Banco Falabella</option>
                                <option value="Banco Internacional">Banco Internacional</option>
                                <option value="Banco Nova">Banco Nova</option>
                                <option value="Banco Penta">Banco Penta</option>
                                <option value="Banco Santander">Banco Santander</option>
                                <option value="Banco Security">Banco Security</option>
                                <option value="Banco Estado">Banco Estado</option>
                                <option value="BBVA">BBVA</option>
                                <option value="Citibank">Citibank</option>
                                <option value="Corpbanca">Corpbanca</option>
                                <option value="Credichile">Credichile</option>
                                <option value="Deutsche Bank">Deutsche Bank</option>
                                <option value="ING Bank N.V.">ING Bank N.V.</option>
                                <option value="Redbanc">Redbanc</option>
                                <option value="Santander Banefe">Santander Banefe</option>
                                <option value="Scotiabank">Scotiabank</option>
                                <option value="UBS AG">UBS AG</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <select name="antiguedad" class="form-control" id="antiguedad">
                                <option value="">Antiguedad de la Cuenta</option>
                                <option value="Menos de 1 Año">Menos de 1 Año</option>
                                <option value="1 Año">1 Año</option>
                                <option value="2 Años">2 Años</option>
                                <option value="Mas de 2 Años">Mas de 2 Años</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <h4 class="h4"><strong>Otra Informacion</strong></h4>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="patrimonio" name="patrimonio"
                               placeholder="Patrimonio"
                               value="{{Input::old('patrimonio')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="referencias" name="referencias"
                               placeholder="Referencias"
                               value="{{Input::old('referencias')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="pie_vehiculo" name="pie_vehiculo"
                               placeholder="Pie o vehiculo en Parte de Pago"
                               value="{{Input::old('pie_vehiculo')}}">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="clave_sii" name="clave_sii" placeholder="Clave SII"
                               value="{{Input::old('clave_sii')}}">
                    </div>

                </div>
                <div class="row">
                    <h4 class="h4"><strong>Informacion del Auto a Comprar</strong></h4>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="marca_auto" placeholder="Marca Auto">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="modelo_auto" placeholder="Modelo">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="anio_auto" placeholder="Año">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="valor_auto" placeholder="Valor Auto">
                    </div>


                </div>
                <div class="row">
                    <div class="col-xs-3"><img src="/images/bancofalabella.png" alt="" style="width: 100%"></div>
                    <div class="col-xs-3"><img src="/images/Abcdin_New_Logo.svg" alt="" style="width: 100%"></div>
                    <div class="col-xs-3"><img src="/images/Logo-tanner.jpg" alt="" style="width: 100%"></div>
                    <div class="col-xs-3"><img src="/images/credito-directo.png" alt="" style="width: 100%"></div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-lg btn-success pull-left"  style="border: 0px">
                    Guardar
                </button>
                <button type="button" class="btn btn-lg pull-right" data-dismiss="modal" style="border: 0px">
                    Cerrar
                </button>
            </div>
            </form>
        </div><!-- end modal_content -->
    </div> <!-- end modal dialog -->
</div> <!-- end modal -->