<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Home</span></a></li>
            <li><a href="{{ url('live') }}"><i class='fa fa-link'></i> <span>En viu</span></a></li>
            <li><a href="{{ url('history/AAPL') }}"><i class='fa fa-link'></i> <span>Historic</span></a></li>
            <li><a href="{{ url('download_info') }}"><i class='fa fa-link'></i><span>Descarregar informació</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Simulador/Calculadora</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('calc') }}">Calculadora</a></li>
                    <li><a href="{{ url('calc_history') }}">Historial de la Calculadora</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
