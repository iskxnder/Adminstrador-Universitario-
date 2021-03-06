<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('admin/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('admin/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{active('home')}}">
                    <a href="{{ route('home') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                </li>
                <h3 class="menu-title">Modulos</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown {{active('students/create')}} {{active('students')}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-male"></i>Estudiantes</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li class=""><i class="fa fa-list"></i><a href="{{ route('students.index') }}">Lista</a></li>
                        <li><i class="fa fa-edit"></i><a href="{{ route('students.create') }}">Registro</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-suitcase"></i>Profesores</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-list"></i><a href="#">Lista</a></li>
                        <li><i class="fa fa-edit"></i><a href="#">Registro</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown {{active('carrers/create')}} {{active('carrers')}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Carreras</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-list"></i><a href="{{ route('carrers.index') }}">Lista</a></li>
                        <li><i class="menu-icon fa fa-edit"></i><a href="{{ route('carrers.create') }}">Registro</a></li>
                    </ul>
                </li>

                <h3 class="menu-title">Configuracion</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Usuarios</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-users"></i><a href="#">Lista de usuarios</a></li>
                        <li><i class="menu-icon fa fa-edit"></i><a href="#">Registrar Nuevo</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gears"></i>Mantenimiento</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-download"></i><a href="#">Respalo DB</a></li>
                        <li><i class="menu-icon fa fa-upload"></i><a href="#">Cargar DB</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->