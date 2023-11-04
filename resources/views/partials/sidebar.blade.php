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
                <a class="flex flex-col items-center mx-4 font-bold">AcademicPro</a>
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
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="flex items-center mx-4 font-medium">Buat Akun Mahasiswa</span>
                    </a>

                    <a href="/buat/dosen"class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('buat/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span href="/buat/dosen" class="flex items-center mx-4 font-medium">Buat Akun Dosen</span>
                    </a>
                </nav>
    
                <a href="#" class="flex items-center px-4 -mx-2">
    
                    <div class="flex flex-col items-center mt-4">
                        
                      <div class="h-16 w-16 rounded-full overflow-hidden ">
                            <img src="https://via.placeholder.com/150" alt="John Doe">
                        </div>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</span>
                        <div class="flex space-x-2 mt-2">
                            <a href="#" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>
                            <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                        </div>
                    </div>
                </a>
    
            </div>
        </aside>
        
        {{--<main class="flex-1 flex justify-center items-center"> --}}
        <main class="flex-1 mx-5">
            {{-- //Content --}}
           {{-- <div class="flex-1 flex justify-center items-center">--}}
            @yield('container')
            </div>
        </main>
    </div>
    @endif
    @endauth
    {{-- Sidebar Departemen --}}   
    <div class="flex bg-base-200">
    @auth
        @if (auth()->user()->role_id == 2)  
        <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <a class="flex flex-col items-center mx-4 font-bold">AcademicPro</a>
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

                </nav>
    
                <a href="#" class="flex items-center px-4 -mx-2">
    
                    <div class="flex flex-col items-center mt-4">
                        
                      <div class="h-16 w-16 rounded-full overflow-hidden ">
                            <img src="https://via.placeholder.com/150" alt="John Doe">
                        </div>
                        <span class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</span>
                        <div class="flex space-x-2 mt-2">
                            <a href="#" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>
                            <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                        </div>
                    </div>
                </a>
    
            </div>
        </aside>

        {{--<main class="flex-1 flex justify-center items-center"> --}}
        <main class="flex-1 mx-5">
            {{-- //Content --}}
           {{-- <div class="flex-1 flex justify-center items-center">--}}
            @yield('container')
        </main>  
    </div> 
    @endif
    @endauth

    {{-- Sidebar Dosen --}}
    <div class="flex bg-base-200">
        @auth
            @if (auth()->user()->role_id == 3)  
            <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
                <a href="#">
                    <a class="flex flex-col items-center mx-4 font-bold">AcademicPro</a>
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
    
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/mahasiswa') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="mx-4 font-medium">Progress Mahasiswa</span>
                        </a>
    
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
    
                            <span href="/daftar/dosen" class="mx-4 font-medium">PKL</span>
                        </a>
                        
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
    
                            <span href="/daftar/dosen" class="mx-4 font-medium">Skripsi</span>
                        </a>
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
    
                            <span href="/daftar/dosen" class="mx-4 font-medium">Verifikasi IRS</span>
                        </a>
    
                    </nav>
        
                    <a href="#" class="flex items-center px-4 -mx-2">
        
                        <div class="flex flex-col items-center mt-4">
                            
                          <div class="h-16 w-16 rounded-full overflow-hidden ">
                                <img src="https://via.placeholder.com/150" alt="John Doe">
                            </div>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</span>
                            <div class="flex space-x-2 mt-2">
                                <a href="#" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>
                                <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                            </div>
                        </div>
                    </a>
        
                </div>
            </aside>
    
            {{--<main class="flex-1 flex justify-center items-center"> --}}
            <main class="flex-1 mx-5">
                {{-- //Content --}}
               {{-- <div class="flex-1 flex justify-center items-center">--}}
                @yield('container')
            </main>  
        </div> 
        @endif
        @endauth
    {{-- Sidebar Mahasiswa --}}    
    <div class="flex bg-base-200">
        @auth
            @if (auth()->user()->role_id == 4)  
            <aside class="flex flex-col w-64 h-screen px-4 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
                <a href="#">
                    <a class="flex flex-col items-center mx-4 font-bold">AcademicPro</a>
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
    
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/mahasiswa') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="mx-4 font-medium">IRS</span>
                        </a>
    
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
    
                            <span href="/daftar/dosen" class="mx-4 font-medium">KHS</span>
                        </a>
                        
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
    
                            <span href="/daftar/dosen" class="mx-4 font-medium">PKL</span>
                        </a>
                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 {{ request()->is('daftar/dosen') ? 'bg-gray-200 dark:bg-gray-800' : '' }}" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
    
                            <span href="/daftar/dosen" class="mx-4 font-medium">Skripsi</span>
                        </a>
    
                    </nav>
        
                    <a href="#" class="flex items-center px-4 -mx-2">
        
                        <div class="flex flex-col items-center mt-4">
                            
                          <div class="h-16 w-16 rounded-full overflow-hidden ">
                                <img src="https://via.placeholder.com/150" alt="John Doe">
                            </div>
                            <span class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</span>
                            <div class="flex space-x-2 mt-2">
                                <a href="#" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Edit Profile</a>
                                <a href="/logout" class="bg-gray-200 text-gray-700 px-2 py-1 rounded-md text-sm font-medium hover-bg-gray-300">Logout</a>
                            </div>
                        </div>
                    </a>
        
                </div>
            </aside>
    
            {{--<main class="flex-1 flex justify-center items-center"> --}}
            <main class="flex-1 mx-5">
                {{-- //Content --}}
               {{-- <div class="flex-1 flex justify-center items-center">--}}
                @yield('container')
            </main>  
        </div> 
        @endif
        @endauth         
</body>
</html>
