<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand text-white" href="/">AcademicPro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white {{ ($title === "Dashboard") ? 'active' : '' }}" href="/">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ ($title === "Daftar Mahasiswa") ? 'active' : '' }}" href="/">Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ ($title === "Daftar Dosen") ? 'active' : '' }}" href="/">Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ ($title === "Buat Akun Mahasiswa") ? 'active' : '' }}" href="/">Buat Akun Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ ($title === "Buat Akun Dosen") ? 'active' : '' }}" href="/">Buat Akun Dosen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>