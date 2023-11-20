<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>AcademicPro</title>
</head>
<body>
    {{-- Sidebar Operator --}}
    <div class="flex bg-base-200">
        @auth
        @if (auth()->user()->role_id == 1)
        <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <a class="flex flex-col items-center mx-4 text-white text-3xl font-bold">AcademicPro</a>
            </a>
    
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a href="/dashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('dashboard') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path color=white stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                          </svg>
                        <span class="mx-4 font-medium text-color=white">Dashboard</span>
                    </a>

                    <a href="/daftar/mahasiswa" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/mahasiswa') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="mx-4 font-medium">Daftar Mahasiswa</span>
                    </a>

                    <a href="/daftar/dosen" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span href="/daftar/dosen" class="mx-4 font-medium">Daftar Dosen</span>
                    </a>

                    <a href="/buat/mahasiswa"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('buat/mahasiswa') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                          </svg>
                          

                        <span class="flex items-center mx-4 font-medium text-color=white">Buat Akun Mahasiswa</span>
                    </a>

                    <a href="/buat/dosen"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('buat/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                          </svg>
                          

                        <span href="/buat/dosen" class="flex items-center mx-4 text-color=white font-medium">Buat Akun Dosen</span>
                    </a>
                </nav>
    
                <a href="#" class="flex items-center px-4 -mx-2">
    
                    <div class="flex flex-col items-center mt-4">
                        
                      <div class="h-16 w-16 rounded-full overflow-hidden ">
                            <img src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13" alt="John Doe">
                        </div>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-200" src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13">{{ $loggedInAccount->value('nama') }}</span>
                        <div class="flex space-x-2 mt-2">
                            <a href="/edit-akun" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>

                            <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                        </div>
                    </div>
                </a>
    
            </div>
        </aside>
        
        {{--<main class="flex-1 flex justify-center items-center"> --}}
        <main class="flex-1 mx-2 max-h-screen max-w-screen overflow-y-scroll">
            {{-- //Content --}}
           {{-- <div class="flex-1 flex justify-center items-center">--}}
            @yield('container')
            </div>
        </main>
  
    </div>
        {{-- Sidebar Departemen --}}  
        @elseif (auth()->user()->role_id == 2)
        <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <a class="flex flex-col items-center mx-4 text-3xl font-bold">AcademicPro</a>
            </a>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a href="/dashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('dashboard') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>

                    <a href="/departemen/daftar/mahasiswa" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/mahasiswa') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path color=white stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                          </svg>
                        <span class="mx-4 font-medium">Daftar Mahasiswa</span>
                    </a>

                    <a href="/departemen/daftar/dosen" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span href="/daftar/dosen" class="mx-4 font-medium">Daftar Dosen</span>
                    </a>

                </nav>

                <a href="#" class="flex items-center px-4 -mx-2">

                    <div class="flex flex-col items-center mt-4">
                        
                    <div class="h-16 w-16 rounded-full overflow-hidden ">
                            <img src="https://via.placeholder.com/150" alt="John Doe">
                        </div>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-200">jondo</span>
                        <div class="flex space-x-2 mt-2">
                            <a href="#" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>
                            <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                        </div>
                    </div>
                </a>

            </div>
         </aside>

    {{--<main class="flex-1 flex justify-center items-center"> --}}
    <main class="flex-1 mx-5 max-h-screen overflow-y-scroll">
        {{-- //Content --}}
       {{-- <div class="flex-1 flex justify-center items-center">--}}
        @yield('container')
        </main>  
    </div>
    {{-- Sidebar Dosen --}}
    @elseif (auth()->user()->role_id == 3)
    <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <a href="#">
            <a class="flex flex-col items-center mx-4 text-white text-3xl font-bold">AcademicPro</a>
        </a>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a href="/dashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('dashboard') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                    <span class="mx-4 font-medium text-color=white">Dashboard</span>
                </a>

                <a href="/progress-mahasiswa" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('progress-mahasiswa') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                      </svg>
                      
                    <span class="mx-4 font-medium">Progress Mahasiswa</span>
                </a>

                <a href="/rekap/pkl" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('rekap/pkl') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span href="/daftar/dosen" class="mx-4 font-medium">PKL</span>
                </a>

                <a href="/rekap/skripsi"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('rekap/skripsi') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span class="flex items-center mx-4 font-medium text-color=white">Skripsi</span>
                </a>

                <a href="/verifikasi/irs"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('verifikasi/irs') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span class="flex items-center mx-4 text-color=white font-medium">Verifikasi IRS</span>
                </a>

                <a href="/verifikasi/khs"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('verifikasi/khs') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span class="flex items-center mx-4 text-color=white font-medium">Verifikasi KHS</span>
                </a>

                <a href="/verifikasi/pkl"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('verifikasi/pkl') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span class="flex items-center mx-4 text-color=white font-medium">Verifikasi PKL</span>
                </a>

                <a href="/verifikasi/skripsi"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('verifikasi/skripsi') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span class="flex items-center mx-4 text-color=white font-medium">Verifikasi Skripsi</span>
                </a>
            </nav>

            <a href="#" class="flex items-center px-4 -mx-2">

                <div class="flex flex-col items-center mt-4">
                    
                  <div class="h-16 w-16 rounded-full overflow-hidden ">
                        <img src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13" alt="John Doe">
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-200" src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13">{{ $loggedInAccount->value('nama') }}</span>
                    <div class="flex space-x-2 mt-2">
                        <a href="/edit-akun" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>

                        <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                    </div>
                </div>
            </a>

        </div>
    </aside>
    
        {{--<main class="flex-1 flex justify-center items-center"> --}}
            <main class="flex-1 mx-2 max-h-screen max-w-screen overflow-y-scroll">
                {{-- //Content --}}
               {{-- <div class="flex-1 flex justify-center items-center">--}}
                @yield('container')
                </div>
            </main>    

    {{-- Sidebar Mahasiswa --}}
    @elseif (auth()->user()->role_id == 4)
    <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
        <a href="#">
            <a class="flex flex-col items-center mx-4 text-white text-3xl font-bold">AcademicPro</a>
        </a>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a href="/dashboard" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('dashboard') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                    <span class="mx-4 font-medium text-color=white">Dashboard</span>
                </a>

                <a href="/riwayat/irs" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('riwayat/irs') || request()->is('buat/irs') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="mx-4 font-medium">IRS</span>
                </a>

                <a href="/riwayat/khs" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('riwayat/khs') || request()->is('buat/khs') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <span href="/daftar/dosen" class="mx-4 font-medium">KHS</span>
                </a>

                <a href="/riwayat/pkl"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('riwayat/pkl') || request()->is('buat/pkl') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span class="flex items-center mx-4 font-medium text-color=white">PKL</span>
                </a>

                <a href="/riwayat/skripsi"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('riwayat/skripsi') || request()->is('buat/skripsi') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path color=white stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                      </svg>
                      

                    <span href="/buat/dosen" class="flex items-center mx-4 text-color=white font-medium">Skripsi</span>
                </a>
            </nav>

            <a href="#" class="flex items-center px-4 -mx-2">

                <div class="flex flex-col items-center mt-4">
                    
                  <div class="h-16 w-16 rounded-full overflow-hidden ">
                        <img src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13" alt="John Doe">
                    </div>
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-200" src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13">{{ $loggedInAccount->value('nama') }}</span>
                    <div class="flex space-x-2 mt-2">
                        <a href="/edit-akun" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>

                        <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                    </div>
                </div>
            </a>

        </div>
    </aside>
    
    {{--<main class="flex-1 flex justify-center items-center"> --}}
    <main class="flex-1 mx-2 max-h-screen max-w-screen overflow-y-scroll">
        {{-- //Content --}}
       {{-- <div class="flex-1 flex justify-center items-center">--}}
        @yield('container')
        </div>
    </main>
</div>



   
        
@endif
@endauth
        
</body>
</html>
