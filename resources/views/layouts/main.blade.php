<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AcademicPro | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    {{-- <main class=" d-flex flex-nowrap justify-content-between" style="width: 100%">
        <div class="" style="width: fit-content">
            <h1 class="visually-hidden">Sidebars examples</h1>
            {{-- sidebar s--}}
            @auth
                <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
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
            @endauth
        </div>
        @yield('container')
        <div class="b-example-divider b-example-vr">

        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
