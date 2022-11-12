<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img  src="../img/logo.png" width="200 px" height="50 px"  alt=". . .">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
           
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seguridad::codificar("principal")."&m=".seguridad::codificar("index") ?>">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo "index.php?c=".seguridad::codificar("usuario")."&m=".seguridad::codificar("login") ?>">Login</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nombre de usuario
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Editar perfil</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
                    </ul>
                </li>

                <div class="input-group rounded">
  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <span class="input-group-text border-0" id="search-addon">
    <i class="fas fa-search"></i>
  </span>
</div>
                
            </ul>
            
        </div>
    </div>
</nav>