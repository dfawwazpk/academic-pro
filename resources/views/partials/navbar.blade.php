<link rel="stylesheet" href="style.css">
<main class="d-flex flex-nowrap">
    <div class="container">
        <h1 class="visually-hidden">Sidebars examples</h1>

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="" />
                </svg>
                <span class="fs-4">AcademicPro</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

                @if (auth()->guard('operator')->check())
                    <li>
                        <a class="nav-link"{{ $title === 'Dashboard' ? 'active' : '' }}" href="/dashboard">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-white" {{ $title === 'Daftar Mahasiswa' ? 'active' : '' }}"
                            href="/">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table" />
                            </svg>
                            Daftar Mahasiswa
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-white" {{ $title === 'Daftar Dosen' ? 'active' : '' }}"
                            href="/">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            Daftar Dosen
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-white" {{ $title === 'Buat Akun Mahasiswa' ? 'active' : '' }}"
                            href="/">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#people-circle" />
                            </svg>
                            Buat Akun Mahasiswa
                        </a>
                    </li>
                    <li>
                        <a class="nav-link text-white" {{ $title === 'Buat Akun Dosen' ? 'active' : '' }}"
                            href="/">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#people-circle" />
                            </svg>
                            Buat Akun Dosen
                        </a>
                    </li>
                @endif
            </ul>
            <hr>

            <div class="div">
                <div class="div-2">
                    <div class="div-3"></div>
                    <div class="div-4">
                        @auth
                            <div class="div-5">
                                <a href="#" class="d-flex align-items-center text-black text-decoration-none"
                                    aria-expanded="false">
                                    {{ auth()->user()->nama_lengkap }}
                                </a>
                            </div>
                            <div class="div-6">NIP Operator</div>
                        </div>
                    </div>
                    <div class="div-7">
                        <div class="div-8">
                            <li><a class="d-flex align-items-center text-black text-decoration-none" href="#">Edit
                                    Profil</a></li>
                        </div>
                        <div class="div-10">
                            <li><a class="d-flex align-items-center text-black text-decoration-none"
                                    href="/logout">Keluar</a></li>
                        </div>
                    </div>
                @endauth

            </div>
        </div>
    </div>
    <div class="b-example-divider b-example-vr">
      
    </div>
</main>
