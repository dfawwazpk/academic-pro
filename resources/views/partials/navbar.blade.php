<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand gittext-white" href="/">AcademicPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Daftar Mahasiswa") ? 'active' : '' }}" href="/">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Daftar Dosen") ? 'active' : '' }}" href="/">Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Buat Akun Mahasiswa") ? 'active' : '' }}" href="/">Buat Akun Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Buat Akun Dosen") ? 'active' : '' }}" href="/">Buat Akun Dosen</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Edit akun</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
            
        </div>
    </div>
</nav>