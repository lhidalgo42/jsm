<div id="page_header">
    <?php
    $photos = PhotoFile::lists('name');
    $count = count($photos) -1;

    if($count!=-1){
        $id = rand(0,$count);
    $photo = $photos[$id];
    $image= '/autos/'.$photo;
    }
    else{
        $image = '/images/5.jpg';
    }
        ?>

    <div id="parallax" class="parallax bgback bg" style="background: url('{{$image}}') no-repeat;background-size: 100%;"
         data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20"></div>
        <style>
            .oval {
                width: auto;
                min-height: 620px;
                -moz-border-radius: 60%;
                -webkit-border-radius: 60%;
                border-radius:60%;
                background: #1d84ba;
            }
        </style>
    <div class="container text-center header-part">
        <h2 class="" style="font-size: 60px;"><span class="rotate">{{Info::where('name','titulo1')->get()->first()->value}},{{Info::where('name','titulo2')->get()->first()->value}}</span>
        </h2>
        <h2 class="pull-right" style="font-size: 40px;"><span style="color: #f51200;" class="oval"><strong style="padding: 80px;">{{Info::where('name','subtitulo')->get()->first()->value}}</strong></span></h2>

        <div class="angle-down">
            <a href="#Practice_Area" style="color:#B5F1E3;padding-left: 370px;">
                <i class="fa fa-angle-double-down fa-4x wow animated fadeInDown"
                   data-wow-iteration="infinite"></i>
            </a>
        </div>
    </div>
</div><!-- end page_header -->
