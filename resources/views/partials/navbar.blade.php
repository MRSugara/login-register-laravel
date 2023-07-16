<nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary" >
    <div class="container">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Dashboard' ? 'active' : '' }}" aria-current="page"
                        href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'About' ? 'active' : '' }}" href="/About">About</a>
                </li>
                
            </ul>
            <ul class="navbar-nav">
                @auth
                <li class="nav-item dropdown" >
                    <a class="nav-link dropdown-toggle " href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item" >
                                    <i class="bi bi-box-arrow-left"></i>&nbsp; Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                        <li class="nav-item ml-3">
                            <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login" ><i class="bi bi-box-arrow-in-right"></i>
                                Login
                            </a>
                        </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
