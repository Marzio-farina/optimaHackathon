<nav class="navbar navbar-expand-lg shadow-sm">
    <div class="container-fluid px-4 d-flex align-items-center">
        <a class="navbar-brand fw-bold" href="/">🎵 EventiLive</a>
        <div class="search-container">
            <form class="d-flex w-100 justify-content-center" role="search">
                <input class="form-control me-2" type="search" placeholder="Cerca artisti o eventi..." aria-label="Cerca" />
                <button class="btn btn-outline-primary" type="submit">Cerca</button>
            </form>
        </div>

        <!-- Profilo utente come link -->
        <div class="user-profile d-none d-lg-block ms-3">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                            Logout
                        </a></li>
                        <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
                    </ul>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, utente!
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                        <hr class="dropdown-divider">
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                    </ul>
                </li>
            @endauth
        </div>
    </div>
</nav>