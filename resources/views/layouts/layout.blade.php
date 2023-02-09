<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="{{route('/')}}">Inicio</a>
        <a class="nav-link" href="{{route('planta')}}">Empleados Planta</a>
        <a class="nav-link" href="{{route('contratista')}}">Empleados Contratista</a>
      </div>
    </div>
  </div>
</nav>
@yield('content')