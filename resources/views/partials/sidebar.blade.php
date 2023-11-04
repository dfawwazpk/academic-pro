<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>AcademicPro</title>
</head>
<body>
    <div class="sidebar">
                @auth
                <div class="flex flex-col bg-gray-200 h-screen w-64 gap-2">
                    {{-- SideBar Operator --}}
                    @if (auth()->user()->role_id == 1)
                    <a class="flex flex-col bg-neutral-950 h-16 items-center justify-center rounded-ee-xl font-black">AcademicPro</a>
                    <a href="/dashboard" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl" href="/dashboard">Dashboard</a>
                    <a href="/daftar/mahasiswa" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Daftar Mahasiswa</a>
                    <a href="/daftar/dosen" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Daftar Dosen</a>
                    <a href="#" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl"href="/buat/mahasiswa">Buat Akun Mahasiswa</a>
                    <a href="#" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Buat Akun Dosen</a>
                    
                    <div class="bg-zinc-700 h-24 m-2 flex flex-col rounded-xl mt-80">
                        <div class="flex items-center">
                            <div class="box-content h-5 w-5 p-5">
                                <img src="public/img/sekdep.png" alt="Aang">
                            </div>
                            <div class="text-xs ml-2">
                                {{auth()->user()->nama_lengkap  }} 
                                <div>Nip Operator</div>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl ml-5">Edit Profile</a>
                            <a href="/logout" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl mr-5">Keluar</a>
                        </div>
                    
                    </div>
                    @endif
                @endauth
                 {{-- SideBar Departemen --}}
                 @auth
                 @if (auth()->user()->role_id == 2)
                 <div class="flex flex-col bg-gray-200 h-screen w-64 gap-2">
                     <a class="flex flex-col bg-neutral-950 h-16 items-center justify-center rounded-ee-xl font-black">AcademicPro</a>
                     <a href="/dashboard" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Dashboard</a>
                     <a href="/daftar/mahasiswa" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Daftar Mahasiswa</a>
                     <a href="/daftar/dosen" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Daftar Dosen</a>

                 </div>
                 <div class="bg-zinc-700 h-24 m-2 flex flex-col rounded-xl mt-80">
                     <div class="flex items-center">
                         <div class="box-content h-5 w-5 p-5">
                             <img src="public/img/sekdep.png" alt="Aang">
                         </div>
                         <div class="text-xs ml-2">
                             {{ auth()->user()->nama_lengkap }}
                             <div>Nama Fakultas</div>
                         </div>
                     </div>
                     <div class="flex space-x-2">
                         <a href="#" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl ml-5">Edit Profile</a>
                         <a href="/logout" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl mr-5">Keluar</a>
                     </div>
                 </div>
                 @endif
                 @endauth
                    {{-- SideBar Dosen --}}
                    @auth
                    @if (auth()->user()->role_id == 3)
                    <div class="flex flex-col bg-gray-200 h-screen w-64 gap-2">
                        <a class="flex flex-col bg-neutral-950 h-16 items-center justify-center rounded-ee-xl font-black">AcademicPro</a>
                        <a href="/dashboard" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Dashboard</a>
                        <a href="/daftar/mahasiswa" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Progress Mahasiswa</a>
                        <a href="/daftar/dosen" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">PKL</a>
                        <a href="#" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Skripsi</a>
                        <a href="#" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Verifikasi IRS</a>
                    </div>
                    <div class="bg-zinc-700 h-24 m-2 flex flex-col rounded-xl mt-80">
                        <div class="flex items-center">
                            <div class="box-content h-5 w-5 p-5">
                                <img src="public/img/sekdep.png" alt="Aang">
                            </div>
                            <div class="text-xs ml-2">
                                {{ auth()->user()->nama_lengkap }}
                                <div>Nip Dosen</div>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl ml-5">Edit Profile</a>
                            <a href="/logout" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl mr-5">Keluar</a>
                        </div>
                    </div>
                    @endif
                    @endauth
                    {{-- SideBar Mahasiswa --}}
                    @auth
                    @if (auth()->user()->role_id == 4)
                    <div class="flex flex-col bg-gray-200 h-screen w-64 gap-2">
                        <a class="flex flex-col bg-neutral-950 h-16 items-center justify-center rounded-ee-xl font-black">AcademicPro</a>
                        <a href="/dashboard" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl" href="/dashboard">Dashboard</a>
                        <a href="/daftar/mahasiswa" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl"href="">IRS</a>
                        <a href="/daftar/dosen" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl"href="">KHS</a>
                        <a href="#" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl"href="">PKL</a>
                        <a href="#" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl"href="">Skripsi</a>
                    </div>
                    <div class="bg-zinc-700 h-24 m-2 flex flex-col rounded-xl mt-80">
                        <div class="flex items-center">
                            <div class="box-content h-5 w-5 p-5">
                                <img src="public/img/sekdep.png" alt="Aang">
                            </div>
                            <div class="text-xs ml-2">
                                {{ auth()->user()->nama_lengkap }}
                                <div>NIM Mahasiswa</div>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <a href="#" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl ml-5">Edit Profile</a>
                            <a href="/logout" class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl mr-5">Keluar</a>
                        </div>
                    </div>
                    @endif
                    @endauth
            </div>
        </div>
    </div>
</body>
</html>
