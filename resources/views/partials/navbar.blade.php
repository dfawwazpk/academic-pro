<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand gittext-white" href="/">AcademicPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                @if(auth()->guard('operator')->check())
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Daftar Mahasiswa") ? 'active' : '' }}" href="/daftar/mahasiswa">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Daftar Dosen") ? 'active' : '' }}" href="/daftar/dosen">Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Buat Akun Mahasiswa") ? 'active' : '' }}" href="/buat/mahasiswa">Buat Akun Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Buat Akun Dosen") ? 'active' : '' }}" href="/buat/dosen">Buat Akun Dosen</a>
                </li>
                @endif

                @if(auth()->guard('dosen')->check())
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Progress Mahasiswa") ? 'active' : '' }}" href="/">Progress Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "PKL") ? 'active' : '' }}" href="/">PKL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Skripsi") ? 'active' : '' }}" href="/">Skripsi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Verifikasi IRS") ? 'active' : '' }}" href="/">Verifikasi IRS</a>
                </li>
                @endif

                @if(auth()->guard('mahasiswa')->check())
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Dashboard") ? 'active' : '' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "IRS") ? 'active' : '' }}" href="/">IRS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "KHS") ? 'active' : '' }}" href="/">KHS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "PKL") ? 'active' : '' }}" href="/">PKL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Skripsi") ? 'active' : '' }}" href="/">Skripsi</a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->nama_lengkap }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/edit-akun">Edit akun</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
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