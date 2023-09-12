<nav class="navbar navbar -expand-lg navbar-dark bg-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbar" aria-controls="navbar" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Página Inicial</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdow-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cliente</a>
                <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="">Cadastrar Cliente</a>
                <a class="dropdown-item" href="">Listar Cliente</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdow-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consulta</a>
                <div class="dropdown-menu" aria-labelledby="dropdown10">
                <a class="dropdown-item" href="">Cadastrar Consulta</a>
                <a class="dropdown-item" href="">Listar Consultas Pendentes</a>
                <a class="dropdown-item" href="">Listar Consultas Feitas</a>
                </div>
            </li>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav ms-auto">
                </ul>
                    @guest 
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">{{__('Acessar')}}</a>
                            </li>
                        @endif
                        @if(Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}">{{__('Registrar')}}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-bs-toggle="dropdown" aria-haspoup="true" aria-expanded="false" v-pre>
                              {{Auth::user()->name}}
                            </a>
                            <div class="dropdow-menu dropdow-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('logout')}}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{__('Logout')}}
                                </a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
    </div>
</nav>

