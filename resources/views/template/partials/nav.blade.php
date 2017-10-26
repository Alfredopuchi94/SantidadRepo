<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SDD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navdd" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navdd">
    <ul class="navbar-nav">
      <li class="nav-item"> <a class="nav-link" href="{{ route('creyentes.index') }}">Nuevos Creyentes</a> </li>
      <li class="nav-item"> <a class="nav-link" href="{{ route('admin.servidores.index') }}">servidores</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">item 3</a> </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dd" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          item 4
        </a>
        <div class="dropdown-menu" aria-labelledby="dd">
          <a class="dropdown-item" href="#">item 4.1</a>
          <a class="dropdown-item" href="#">item 4.2</a>
          <a class="dropdown-item" href="#">item 4.3</a>
        </div>
      </li>
    </ul>
  </div>
</nav>