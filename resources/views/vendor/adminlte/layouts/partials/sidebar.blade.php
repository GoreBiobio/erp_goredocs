<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
        <br>
        <!-- search form (Optional) -->
        <center><a href="/home"><img src="/img/logo_interno.fw.png" alt=""></a></center>
        <hr>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">GOREDOCS</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>Inicio</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-building-o'></i> <span>Oficina de Partes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Nuevo Documento</a></li>
                    <li><a href="#">Archivo Of. Partes</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-exchange'></i> <span>Seguimiento</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Iniciar Seguimiento</a></li>
                    <li><a href="#">Estado Seguimiento</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-folder-open'></i> <span>Recepción</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Recibir Documentos</a></li>
                    <li><a href="#">Documentos Recibidos</a></li>
                </ul>
            </li>
            <li class="header">ARCHIVO</li>
            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Personal</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Archivo Personal</a></li>
                    <li><a href="#">Archivo Unidad</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-archive'></i> <span>Repositorio</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Búsqueda Simple</a></li>
                    <li><a href="#">Búsqueda Avanzada</a></li>
                </ul>
            </li>
            <li class="header">CONFIGURACIONES</li>
            <li><a href="#"><i class='fa fa-gears'></i> <span>Mantenedores</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
