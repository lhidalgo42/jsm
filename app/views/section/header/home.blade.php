<div id="page_header">
    <?php
    $photos = PhotoFile::lists('name');
    $count = count($photos) -1;
        $images = array();
        $photo = array();
    if($count!=-1){
        $id[0] = rand(0,$count);
        if($count >= 1)
        $id[1] = rand(0,$count);
        if($count >= 2)
        $id[2] = rand(0,$count);
        if($count >= 3)
        $id[3] = rand(0,$count);
        if($count >= 4)
        $id[4] = rand(0,$count);
        for($i=0;$i<count($id);$i++){
            $images[$i]= '/autos/'.$photos[$id[$i]];
        }

    }
    else{
        $images = ['/images/5.jpg'];
    }
        ?>
        <script>

        </script>
        <div id="myCarousel" class=" carousel slide" data-ride="carousel" style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;">

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="{{$images[0]}}" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 class="" style="font-size: 60px;"><span class="rotate" id="rot1">{{Info::where('name','titulo1')->get()->first()->value}},{{Info::where('name','titulo2')->get()->first()->value}}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="{{$images[1]}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 class="" style="font-size: 60px;color: #f51200">Compramos su<br> <span class="rotate" id="rot2">Auto,Camioneta,Furgon,4x4</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="{{$images[2]}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 class="" style="font-size: 60px;color: #f51200"><span class="rotate" id="rot3"><a href="/#contact">Contactenos</a></span> y al instante reciba una oferta
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="{{$images[3]}}" alt="Third slide">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div><!-- /.carousel -->


    <div class="container text-center header-part" style="padding-top: 100px;">

        <div class="angle-down">
            <a href="#Practice_Area" style="color:#B5F1E3;padding-top: 300px !important;" >
                <i class="fa fa-angle-double-down fa-4x wow animated fadeInDown"
                   data-wow-iteration="infinite"></i>
            </a>
        </div>
    </div>
</div><!-- end page_header -->
