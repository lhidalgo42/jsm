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
                    <h1 class="page-header"><i class="fa fa-home"></i> Inicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row" style="background-color: whitesmoke;opacity: 1">
                <table class="table table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Estado</th>
                    </tr>
                    <tbody>
                    @foreach($cars as $car)
                        <?php $spec = Specification::find($car->id); ?>
                        <tr>
                            <td>{{$spec->marca}} {{$spec->modelo}} - {{$spec->version}}</td>
                            <td>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary @if($car->active == 1) active @endif" data-id="{{$car->id}}">
                                        <input type="radio" name="options" autocomplete="off" value="1"
                                               @if($car->active == 1) checked @endif> SI
                                    </label>
                                    <label class="btn btn-primary @if($car->active == 0) active @endif" data-id="{{$car->id}}">
                                        <input type="radio" name="options" autocomplete="off" value="0"
                                               @if($car->active == 0) checked @endif> NO
                                    </label></div>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <script>
                $(".btn-group > label").click(function(){
                    $.ajax({
                        url:"/car/active",
                        type:"POST",
                        data:{
                            id:$(this).attr('data-id'),
                            value:$(this).children().val()
                        },
                        success:function(data){

                        }
                    })
                });
            </script>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

@stop