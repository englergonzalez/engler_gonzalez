 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a class="navbar-brand" href="{{url('/')}}"><img src="{{ url('img/logo.png') }}" alt="" class="img-fluid"><span style="font-size:15pt"></span>
        Consintiendo mi Mascota</a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        <li class="nav-item {{  Request::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('/')}}">
                Inicio
            </a>
        </li>
        
        </li>
        <li class="drop-down nav-item" >
            <a class="nav-link" href="#">
                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                Catálogo
            </a>
          <ul>
            <li class="nav-item {{  Request::is('servicios/habitaciones') ? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/catalogo/perros')}}"><span>&#10010</span> Perros</a>
                </li>
                <li class="nav-item"><a href="{{url('/catalogo/gatos')}}"><span>&#10010</span>
                Gatos</a></li>
            </ul>
        </li>
        <li><a href="{{url('/pqr')}}">PQR?</a></li>
        <li><a href="{{url('/estudiante')}}">Estudiante</a></li>
          <!--@if( true || Auth::check() )
            <li class="nav-item">
                <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                    <a class="nav-link" >
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Cerrar sesión
                    </a> 
                    </button>
                </form>
            </li>
        @endif-->
        </ul>
      </nav>
    </div>
  </header>
