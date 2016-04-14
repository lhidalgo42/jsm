<div id="faq">
    <div class="container">
        <div class="title text-center">
            <h3 class="title-text faq-text">Preguntas Frecuentes</h3>
            <hr>
            <em class="lead">Aqui esta la Respuesta, para las preguntas mas comunes.</em>
        </div>

        @foreach(FaqType::all() as $type)
        <div class="col-md-12 col-sm-12 col-xs-12 wow animated zoomIn">
            <h3 class="title-panel text-center">{{$type->name}}</h3>
            <hr>
            @foreach(Faq::where('faq_types_id','=',$type->id)->get() as $faq)
            <div class="panel panel-default">
                <div class="panel-heading clickable">
                    <h3 class="panel-title">
                        {{$faq->ask}} </h3>
                    <span class="pull-right "><i class="glyphicon glyphicon-chevron-up"></i></span>
                </div>
                <div class="panel-body">
                    <p>
                        {{$faq->response}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>