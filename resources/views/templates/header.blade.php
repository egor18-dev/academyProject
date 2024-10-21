<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Nom</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html" class="active">Inicio<br></a></li>
          <li><a href="about.html">Sobre nosotros</a></li>
          <li class="dropdown"><a href="#"><span>Servicios</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Trading</a></li>
              <li><a href="#">Escuela</a></li>
              <li><a href="#">Mentoría</a></li>
            </ul>
          </li>
          <li><a>Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="{{ route('users.create') }}">Empezar</a>

    </div>
  </header>