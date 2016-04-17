<div id="page_header">
    <?php
    $photos = PhotoFile::lists('name');
    $count = count($photos) -1;

    if($count!=0){
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


    <div class="container text-center header-part">
        <h2 class="header-text" style="font-size: 40px;"><span class="rotate">Una Familia Comprometida,Nuestro Compromiso no termina Aqui</span>
        </h2>
        <h2 class="header-text"><small style="color: whitesmoke;"><strong>Pagamos al Contado</strong></small></h2>

        <div class="angle-down">
            <a href="#Practice_Area">
                <i class="fa fa-angle-double-down fa-4x wow animated fadeInDown"
                   data-wow-iteration="infinite"></i>
            </a>
        </div>
    </div>
</div><!-- end page_header -->
