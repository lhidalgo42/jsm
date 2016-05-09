<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <title>JSMAutos.cl</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Styles -->
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="/css/font-awesome.css" media="screen">
    <!-- Awesome Icons Styles -->
    <link type="text/css" rel="stylesheet" href="/css/et-line.css" media="screen">
    <!-- Css Styles -->
    <link type="text/css" rel="stylesheet" href="/css/style.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/css/style-portfolio.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/css/pro-bars.min.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/css/animate.min.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/css/rotator.css" media="screen">
    <!-- Custom styles for this template -->
    <link href="/css/carousel.css" rel="stylesheet">
    <!-- Google Font Styles -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Subrayada:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Nothing+You+Could+Do' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

    <!-- Support for HTML5 -->
    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Enable media queries on older bgeneral_rowsers -->
    <!--[if lt IE 9]>
    <script src="/js/respond.min.js"></script>  <![endif]-->
    <style>li{
            line-height:  1.3;
        }
        input::-webkit-input-placeholder {
            color: #4a4a4a !important;
        }

        input:-moz-placeholder { /* Firefox 18- */
            color: #4a4a4a !important;
        }

        input::-moz-placeholder {  /* Firefox 19+ */
            color: #4a4a4a !important;
        }

        input:-ms-input-placeholder {
            color: #4a4a4a !important;
        }
    </style>
    <!-- Main Scripts-->
    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/jquery.nav.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/rotator.js"></script>
    <script src="Imagecow.js" type="text/javascript" charset="utf-8"></script>

    <script type="text/javascript">
        Imagecow.init();
    </script>
</head>
<body id="custom">
<div class="animationload">
    <div class="loader">Loading...</div>
</div>

<div class="makeborder-top"></div>
<div class="makeborder-bottom"></div>
<div class="makeborder-left"></div>
<div class="makeborder-right"></div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="searchform" role="form">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <input type="text" class="form-control" placeholder="What you are looking for?">
            </form>
        </div>
    </div>
</div>

@yield('content')


<script>

    function handleFileSelect(evt){
        $("#preview").html("");
        var files = evt.files;

        for(var i = 0,f; f = files[i];i++){
            if(!f.type.match('image.*')){
                continue;
            }
            var reader = new FileReader();

            reader.onload = (function(theFile) {
                return function(e) {
                    $("#preview").append('<div class="col-xs-3"><img style="width: 100%;padding-bottom: 15px;" class="img-rounded" ' +
                            'src="'+e.target.result+ '" title=' + escape(theFile.name)+ '"/></div>');

                };
            })(f);
            reader.readAsDataURL(f);
        }
    }
    $("#files").change(function(){
        handleFileSelect(this);
    })
</script>
<script>
    $("#btn-finance").click(function () {
        $("#finance").modal("show");
    })
</script>

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

<script type="text/javascript">
    $('li > a').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
</script>
<script>
    $(document).ready(function () {
        $('#nav').onePageNav();

        $('.do').click(function (e) {
            $('#section-4').append('<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>');
            e.preventDefault();
        });
    });
</script>
<script type="text/javascript">$(document).on('click', '.panel-heading span.clickable', function (e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    });
    $(document).on('click', '.panel div.clickable', function (e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    });
    $(document).ready(function () {
        $('.panel-heading span.clickable').click();
        $('.panel div.clickable').click();
    });
</script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    $("#rot1").textrotator({
        animation: "flipCube", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 5000 // How many milliseconds until the next word show.
    });
    $("#rot2").textrotator({
        animation: "flipCube", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2500 // How many milliseconds until the next word show.
    });
</script>
<script type="text/javascript">
    // Close the navbar if collapsed (small screen) when clicking on a menu link
    // From edit 2 on
    // http://stackoverflow.com/questions/14203279/bootstrap-close-responsive-menu-on-click/23171593#23171593
    $(function () {
        $('.navbar-collapse ul li a:not(.dropdown-toggle)').bind('click touchstart', function () {
            $('.navbar-toggle:visible').click();
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76042355-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    $("#financemo").click(function () {
        $("#finance").modal("show");
    });
    $("#myCarousel").carousel({
        interval:10000
    })
</script>


</body>
</html>
