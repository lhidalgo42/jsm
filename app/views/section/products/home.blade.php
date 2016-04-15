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
                    $autos = Car::orderBy('visitas','DESC')->take(6)->get();
                ?>
                @foreach($autos as $auto)
                <div class="item-blog col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <ul>
                        <?php
                            $info = Specification::where('cars_id','=',$auto->id)->get()->first();
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
                            $photo = PhotoFile::where('cars_id','=',$auto->id)->take(1)->get()->first();

                        ?>
                            @if($photo)
                            <img class="img-responsive" src="/autos/{{$photo->name}}" alt="" style="height: 317;width: 210;">
                            @else
                            <img class="img-responsive" src="/images/imagen_no_disponible.jpg" alt="" style="height: 317;width: 210;">
                            @endif
                        </li>
                    </ul>
                </div>
                @endforeach
            </div><!-- End of .portfolio-items -->

        </div><!-- end row -->
    </div><!-- end portfolio_wrapper -->
</div>
<script>
    $(".portfolio-items > div > ul > li > div > button").click(function () {
        $("#modalTitle").html($(this).parent().children('h3').html());
        $.ajax({
            url:"/getcar/"+$(this).attr('data-id'),
            type:"POST",
            data:{},
            success:function(data){
                console.log(data);
                data = JSON.parse(data);
                var car = data.car;
                var photos = data.photos;
                var specification = data.specification;
                var equipment = data.equipment;
                $("#carousel > .carousel-indicators").html("");
                $("#carousel > .carousel-inner").html("")
                $("#spects").html("");
                $("#spects").append("<li>Marca: "+specification['marca']+"</li>" +
                        "<li>Modelo:"+specification.modelo+"</li>" +
                        "<li>Versión:"+specification.version+"</li>" +
                        "<li>Año: "+specification.anio+"</li>" +
                        "<li>Tipo vehículo: "+specification.tipo_vehiculo+"</li>" +
                        "<li>Carrocería: "+specification.carroceria+"</li>" +
                        "<li>Kilometraje: "+specification.kilometraje+"</li>" +
                        "<li>Cilindrada : "+specification.cilindrada+" c.c.</li>");
                $("#equip").html("");
                $("#equip").append("<li>Transmisión: "+equipment.transmision+"</li>" +
                        "<li>Dirección:"+equipment.direccion+"</li>" +
                        "<li>Aire: "+equipment.aire+"</li>" +
                        "<li>Radio: "+equipment.radio+"</li>" +
                        "<li>Alzavidrios: "+equipment.alzavidrios+"</li>" +
                        "<li>Espejos: "+equipment.espejos+"</li>" +
                        "<li>Frenos: "+equipment.frenos+"</li>" +
                        "<li>Airbag: "+equipment.airbag+"</li>" +
                        "<li>Cierre: "+equipment.cierre+"</li>" +
                        "<li>Catalítico: "+equipment.catalitico+"</li>" +
                        " <li>Combustible: "+equipment.combustible+"</li>" +
                        "<li>Llantas: "+equipment.llantas+"</li>" +
                        "<li>Puertas: "+equipment.puertes+"</li>" +
                        "<li>Alarma: "+equipment.alarma+"</li>");
                $("#price").html("");
                $("#price").append("Precio $ "+car.price)
                for(var i = 0;i<photos.length;i++){
                    if(i==0){
                        $("#carousel > .carousel-indicators").append('<li data-target="#carousel" data-slide-to="'+i+'" class="active"></li>');
                        $("#carousel > .carousel-inner").append('<div class="item active">' +
                                '<img src="autos/'+photos[i].name+'" alt="auto1" class="img-rounded">' +
                                '<div class="carousel-caption">' +
                                '</div>' +
                                '</div>')
                    }
                    else {
                        $("#carousel > .carousel-indicators").append('<li data-target="#carousel" data-slide-to="' + i + '"></li>')
                        $("#carousel > .carousel-inner").append('<div class="item">' +
                                '<img src="autos/'+photos[i].name+'" alt="auto1" class="img-rounded">' +
                                '<div class="carousel-caption">' +
                                '</div>' +
                                '</div>')
                    }
                }

            }
        });
        $("#details").modal('show');
    });
</script>

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

                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                                <li data-target="#carousel" data-slide-to="3"></li>
                                <li data-target="#carousel" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="/images/imagen_no_disponible.jpg" alt="auto1" class="img-rounded">

                                    <div class="carousel-caption">
                                    </div>
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
                            <li>Marca: BMW</li>
                            <li>Modelo: 320 IA</li>
                            <li>Versión: SEDAN</li>
                            <li>Año: 2011</li>
                            <li>Tipo vehíc: Automóvil</li>
                            <li>Carrocería: Sedán</li>
                            <li>Kilometraje: 67.000</li>
                            <li>Cilindrada : 2.000 c.c.</li>
                        </ul>
                        <h4 class="h4">Equipamiento</h4>
                        <ul id="equip">
                            <li>Transmisión: Automática</li>
                            <li>Dirección: Hidráulica</li>
                            <li>Aire: Acondicionado</li>
                            <li>Radio: SI</li>
                            <li>Alzavidrios: Eléctricos</li>
                            <li>Espejos: Eléctricos</li>
                            <li>Frenos: ABS</li>
                            <li>Airbag: SI</li>
                            <li>Cierre: Centralizado</li>
                            <li>Catalítico: SI</li>
                            <li>Combustible: Bencina</li>
                            <li>Llantas: SI</li>
                            <li>Puertas: 4</li>
                            <li>Alarma: SI</li>
                            <li>Techo: Eléctrico</li>
                        </ul>
                        <h3 class="h3"><strong id="price">Precio $ 12.990.000</strong></h3>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-lg pf_button" data-dismiss="modal" style="border: 0px">
                    Cerrar
                </button>
            </div>
        </div><!-- end modal_content -->
    </div> <!-- end modal dialog -->
</div> <!-- end modal -->
