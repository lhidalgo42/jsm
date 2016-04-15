<div id="page_header">
    <?php
    $count = PhotoFile::all()->count();
    if($count!=0){
        $id = rand(0,$count);
    $photo = PhotoFile::find($id);
    $image= 'autos/'.$photo->name;
    }
    else{
        $image = 'images/5.jpg';
    }?>
    <div id="parallax" class="parallax bgback bg" style="background-image: url({{$image}});"
         data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20"></div>


    <div class="container text-center header-part">
        <h2 class="header-text" style="font-size: 40px;"><span class="rotate">Una Familia Comprometida,Nuestro Compromiso no termina Aqui</span>
        </h2>

        <div class="angle-down">
            <a href="#Practice_Area">
                <i class="fa fa-angle-double-down fa-4x wow animated fadeInDown"
                   data-wow-iteration="infinite"></i>
            </a>
        </div>
    </div>
</div><!-- end page_header -->