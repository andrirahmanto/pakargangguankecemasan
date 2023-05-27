<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container">
        @auth
            @if (auth()->user()->role == 'admin')
                <a class="navbar-brand" href="/admin" style="font-size: 20px;">Deteksi Gangguan Kecemasan</a>
            @else
                <a class="navbar-brand" href="/home" style="font-size: 20px;">Deteksi Gangguan Kecemasan</a>
            @endif
        @else
            <a class="navbar-brand" href="/landing" style="font-size: 20px;">Deteksi Gangguan Kecemasan</a>
        @endauth
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-top: 5px;">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Welcome' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    @auth
                        @if (auth()->user()->role != 'admin')
                            <a class="nav-link {{ $title === 'Diagnosa' ? 'active' : '' }}" href="/petunjuk">Diagnosa</a>
                        @endif
                    @endauth
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hallo, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu">
                            @if (auth()->user()->role == 'admin')
                                <li><a class="dropdown-item" href="/admin">Edit Gejala</a></li>
                                <li><a class="dropdown-item" href="/viewuser">View User</a></li>
                            @endif
                            @if (auth()->user()->role == 'user')
                                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            @endif
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active {{ $title === 'login' ? 'active' : '' }}" style="font-size: 18px"
                                aria-current="page" href="/login"><i class="bi bi-journal-arrow-up"
                                    style="padding: 0.2rem"></i>Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active {{ $title === 'register' ? 'active' : '' }}" style="font-size: 18px"
                                aria-current="page" href="/register"><i class="bi bi-journal-plus"
                                    style="padding: 0.2rem"></i>Register</a>
                        </li>
                    </ul>
                @endauth
            </ul>


        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
