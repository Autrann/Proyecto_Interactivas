<style>
    .navbar {
    background: linear-gradient(90deg,#e74545, #dbb434);
    padding: 1rem 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: white;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                @if (session()->has('user_id'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pokemon.favorites') }}">Mis Pokemones Favoritos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('naruto.favorites') }}">Mis Personajes Favoritos de Naruto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pokemon.search') }}">Ver pokemones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('naruto.search') }}">Ver personajes</a>
                    </li>
                    
                @endif
            </ul>
            <div class="d-flex">
                @if (session()->has('user_id'))
                    <form action="{{ route('logout') }}" method="POST" class="d-flex">
                        @csrf
                        <button class="btn btn-outline-danger" type="submit">Log Out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-success">Iniciar Sesión</a>
                @endif
            </div>
        </div>
    </div>
</nav>
