<div id="products">
    <div class="container">
        <div class="title text-center">
            <h3 class="title-text">Vehículos</h3>
            <em class="lead"> Vehículos Destacados !</em>
            <hr>
        </div>

        <div class="row">
            <div class="portfolio-items">
                <?php
                $autos = Car::where('active','=',1)->orderBy('visitas', 'DESC')->get();
                ?>
                @foreach($autos as $auto)
                    <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <ul>
                            <?php
                            $info = Specification::where('cars_id', '=', $auto->id)->get()->first();
                            ?>
                            <li class="img_item">
                                <div class="caption8 ctn_blue">
                                    <h3>{{$info->marca}} {{$info->modelo}}</h3>
                                    <ul>
                                        <li>Año : {{$info->anio}}</li>
                                        <li>Tipo Vehículo : {{$info->tipo_vehiculo}}</li>
                                        <li>Carrocería : {{$info->carroceria}}</li>
                                        <li>Kilometraje : {{$info->kilometraje}}</li>
                                        <li>Cilindrada : {{$info->cilindrada}} cc</li>
                                    </ul>
                                    <button class="btn btn-lg pf_button green" data-id="{{$auto->id}}">Ver más
                                        Detalles
                                    </button>
                                </div>
                                <?php
                                $photo = PhotoFile::where('cars_id', '=', $auto->id)->take(1)->get()->first();

                                ?>
                                @if($photo)
                                    <img class="img-responsive"
                                         src="/autos/{{$photo->name}}"
                                         alt="">
                                @else
                                    <img class="img-responsive"
                                         src="/images/imagen_no_disponible.jpg"
                                         alt="">
                                @endif
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div><!-- End of .portfolio-items -->

        </div><!-- end row -->
    </div><!-- end portfolio_wrapper -->
</div>


<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" id="details">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: -25px;">
                    <h4 class="pull-left" id="modalTitle">Modal title</h4>
                    <a role="button" class="close pull-right" data-dismiss="modal" aria-label="Close"
                       style="margin-top: 6px;"><i class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="carousel-caption"></div>
                                </div>
                                <div class="item">
                                    <div class="carousel-caption"></div>
                                </div>
                                <div class="item">
                                    <div class="carousel-caption"></div>
                                </div>
                            </div>
                            <!-- Controls -->
                            <bu class="left carousel-control" href="#carousel" role="button"
                                data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </bu>
                            <a class="right carousel-control" href="#carousel" role="button"
                               data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4">Especificaciones Técnicas</h4>
                        <ul id="spects">
                        </ul>
                        <h4 class="h4">Equipamiento</h4>
                        <ul id="equip">
                        </ul>
                        <h3 class="h3"><strong id="price">Precio $ 12.990.000</strong></h3>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pull-left" id="financemo">Obtener Financiamiento</button>
                <button type="button" class="btn btn-lg pull-right" data-dismiss="modal" style="border: 0px">
                    Cerrar
                </button>
            </div>
        </div><!-- end modal_content -->
    </div> <!-- end modal dialog -->
</div> <!-- end modal -->
