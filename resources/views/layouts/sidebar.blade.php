<!-- sidebar nav -->
<nav id="sidebar-nav">
    <ul class="nav nav-pills nav-stacked">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ambulancias <span class="caret"></span></a>
            <ul class="dropdown-menu forAnimate" role="menu">
                <li><a href="{{ url('/ambulancias') }}">Listar Ambulancias</a></li>
                <li class="divider"></li>
                <li><a href="{{ route('ambulancias.create') }}">Crear Ambulancia</a></li>
            </ul>
        </li>
    </ul>
</nav>