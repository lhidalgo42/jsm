
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
                <a href="/admin"><i class="fa fa-home"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-list-ul"></i></i> Autos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li>
                         <a href="/sell#sell">Agregar Autos</a>
                    </li>
                    <li>
                        <a href="/edit">Editar Autos</a>
                    </li>
                    <li>
                        <a href="/accept">Acceptar Publicaciones</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-list-ul"></i></i> Preguntas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    @foreach(FaqType::all() as $type)
                    <li>
                        <a href="#"> {{$type->name}}<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="/add/ask/{{$type->id}}">CRUD <small>(Crear,Ver,Editar,Borrar)</small> Preguntas</a>
                            </li>

                        </ul>
                        <!-- /.nav-third-level -->
                    </li>
                    @endforeach
                        <li>
                            <a href="/add/new/FaqType">Agregar Nuevo Grupo</a>
                        </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-list-ul"></i></i> Financiamiento <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li>
                        <a href="/finance/list">Ver Postulaciones</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="/logout"><i class="fa fa-sign-out"></i> Cerrar Sesión </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->