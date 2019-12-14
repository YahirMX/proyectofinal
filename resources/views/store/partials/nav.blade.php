<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand main-title" href="{{ route('home') }}">Marca</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse " id="navbarColor01">
        <ul class="nav navbar-nav ml-xl-5">
            <li class="nav-item"><a class="nav-link" href="#">My tienda en Laravel 6.x</a></li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="">Conocenos</a></li>
            <li class="nav-item"><a class="nav-link" href="">Contacto</a></li>

            <li class="nav-item dropdown">
                <a class="nav-dropdown nav-link dropdown-toggle" id="navbarDropdownRight" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownRight">
                    <li class="dropdown-item">
                        <a style="color:black;" class="nav-link" href="" data-ga-category="Navigation" data-ga-action="Resources" data-ga-label="GitHub project" rel="noopener nofollow" target="_blank">Iniciar Sesión<span class="caret"></span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>