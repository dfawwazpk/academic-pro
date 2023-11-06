<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.15/tailwind.min.css">
<section class="flex flex-col md:flex-row h-screen items-center">

    <div class="bg-black hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
      <img src="https://if.fsm.undip.ac.id/id//assets/img/slider_home/slide1.png" alt="" class="w-full h-full object-cover">
    </div>
  
    <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">
  
      <div class="w-full h-100">
        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12 text-center">AcademicPro</h1>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/login" class="mt-6"  method="POST">
            @csrf
            <div>
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" @error('email') is-invalid @enderror" id="email" placeholder="Masukan Email Anda" @error('email') is-invalid @enderror" autofocus value="{{ old('email') }}" autocomplete required>
          </div>
  
          <div class="mt-4">
            <label class="block text-gray-700">Password</label>
            <input type="password" name="password" class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 id="password" placeholder="Enter Password" minlength="6" 
                  focus:bg-white focus:outline-none" required>
          </div>
          <button type="submit" class="w-full block bg-black hover:bg-zinc-400 focus:bg-zinc-400 text-white font-semibold rounded-lg
                px-4 py-3 mt-6">Log In</button>
        </form>
  
        <hr class="my-6 border-gray-300 w-full">

    </div>
  
  </section>