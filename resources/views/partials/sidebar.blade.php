<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

       
    </head>
    <body>
        <div class="sidebar">
            <div class="flex flex-col">
                <div class="flex flex-1">
                    <div class="flex flex-col bg-gray-200 h-screen w-64 gap-2">
                        <button class="flex flex-col bg-neutral-950 h-16 items-center justify-center rounded-ee-xl font-black">AcademicPro</button>
                        <button href="" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Dashboard</button>
                        <button href="" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">IRS</button>
                        <button href="" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">KHS</button>
                        <button href="" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">PKL</button>
                        <button href="" class="bg-zinc-700 w-full h-10 flex items-center justify-center rounded-r-xl">Skripsi</button>
            
                        <div class="bg-zinc-700 h-24 m-2 flex flex-col rounded-xl mt-80">
                            <div class="flex items-center">
                                <div class="box-content h-5 w-5 p-5">
                                    <img src="public/img/Screenshot (44).png" alt="Kubo">
                                </div>
                                <div class="text-xs ml-2">
                                    <div>Nama Mahasiswa</div>
                                    <div>Nim Mahasiswa</div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl ml-5">Edit Profile</button>
                                <button class="bg-zinc-50 m-1 h-5 w-24 text-xs flex items-center justify-center rounded-xl mr-5">Keluar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
