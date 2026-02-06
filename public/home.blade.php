  <!DOCTYPE html>

<html lang="en" class="scroll-smooth">

<head class="text-gray-900 antialiased">

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @vite(['resources/css/app.css'])

  <title>Tasty Food - Home</title>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



  <style>

    .fade-in-up, .fade-in-left, .fade-in-right {

      opacity: 0;

      transition: opacity 0.8s ease, transform 0.8s ease;

    }

    .fade-in-up   { transform: translateY(30px); }

    .fade-in-left { transform: translateX(-30px); }

    .fade-in-right{ transform: translateX(30px); }



    .show {

      opacity: 1;

      transform: translate(0,0);

    }



    .flip-x {

  opacity: 0;

  transform: rotateX(90deg);

  transition: opacity 0.8s ease, transform 0.8s ease;

}

.flip-x.show {

  opacity: 1;

  transform: rotateX(0);

}



.flip-y {

  opacity: 0;

  transform: rotateY(90deg);

  transition: opacity 0.8s ease, transform 0.8s ease;

}

.flip-y.show {

  opacity: 1;

  transform: rotateY(0);

}



.slide-up {

  opacity: 0;

  transform: translateY(40px);

  transition: opacity 0.8s ease, transform 0.8s ease;

}

.slide-up.show {

  opacity: 1;

  transform: translateY(0);

}



.slide-down {

  opacity: 0;

  transform: translateY(-40px);

  transition: opacity 0.8s ease, transform 0.8s ease;

}

.slide-down.show {

  opacity: 1;

  transform: translateY(0);

}



.slide-left {

  opacity: 0;

  transform: translateX(40px);

  transition: opacity 0.8s ease, transform 0.8s ease;

}

.slide-left.show {

  opacity: 1;

  transform: translateX(0);

}



.slide-right {

  opacity: 0;

  transform: translateX(-40px);

  transition: opacity 0.8s ease, transform 0.8s ease;

}

.slide-right.show {

  opacity: 1;

  transform: translateX(0);

}





    .delay-100 { transition-delay: 0.1s; }

    .delay-200 { transition-delay: 0.2s; }

    .delay-300 { transition-delay: 0.3s; }

    .delay-400 { transition-delay: 0.4s; }

    .delay-500 { transition-delay: 0.5s; }

  </style>



</head>

<body class="overflox-x-hidden">



  @php

  

    $containerWidth = 'max-w-7xl';

    $containerPadding = 'px-4 sm:px-6 lg:px-6'; 

  @endphp



<nav class="h-screen bg-gray-100 overflow-hidden">

    {{-- NAV CONTAINER --}}

    <div class="{{ $containerWidth }} mx-auto {{ $containerPadding }}">

      <div class="relative flex h-16 items-center justify-between">

        <div class="sm:hidden">

        <button id="burgerBtn" class="text-black ml-4 focus:outline-none z-[60] fixed top-6 left-4">

        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"

          xmlns="http://www.w3.org/2000/svg">

          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"

            d="M4 6h16M4 12h16M4 18h16"></path>

        </svg>

      </button>

    </div>

        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start mt-30 -translate-x-4 fade-in-up">

          <div class="flex shrink-0 items-center -translate-y-10 translate-x-35 lg:-translate-y-0 lg:translate-x-0 md:-translate-y-5 md:translate-x-0">

            <h1 class="text-3xl lg:text-4xl font-bold font-montserrat">TASTY FOOD</h1>

          </div>

        <div class="hidden ml-17 sm:block md:translate-y-12 md:-translate-x-73 lg:translate-y-0 lg:-translate-x-10">

  <div class="flex space-x-2 font-montserrat items-center">

    <a href="home" class="relative rounded-md px-3 py-3 text-md font-medium text-black transition after:block after:absolute after:h-[2px] after:bg-black after:w-0 after:bottom-1 after:left-0 after:transition-all after:duration-300 hover:after:w-1/2">

      HOME

    </a>

    <a href="tentang" class="relative rounded-md px-3 py-3 text-md font-medium text-black transition after:block after:absolute after:h-[2px] after:bg-black after:w-0 after:bottom-1 after:left-0 after:transition-all after:duration-300 hover:after:w-1/2">

      TENTANG

    </a>

    <a href="berita" class="relative rounded-md px-3 py-3 text-md font-medium text-black transition after:block after:absolute after:h-[2px] after:bg-black after:w-0 after:bottom-1 after:left-0 after:transition-all after:duration-300 hover:after:w-1/2">

      BERITA

    </a>

    <a href="galeri" class="relative rounded-md px-3 py-3 text-md font-medium text-black transition after:block after:absolute after:h-[2px] after:bg-black after:w-0 after:bottom-1 after:left-0 after:transition-all after:duration-300 hover:after:w-1/2">

      GALERI

    </a>

    <a href="kontak" class="relative rounded-md px-3 py-3 text-md font-medium text-black transition after:block after:absolute after:h-[2px] after:bg-black after:w-0 after:bottom-1 after:left-0 after:transition-all after:duration-300 hover:after:w-1/2">

      KONTAK

    </a>



   

  </div>

</div>



        

        </div>

  



        <div class="relative w-18 h-0.5 bg-white-800 ml-12 mt-87"></div>



        {{--image--}}

        <img src="/img/img-4-2000x2000.png" alt="" class="translate-x-10 translate-y-50 w-100 lg:w-230 lg:mt-125 lg:ml-174 lg:absolute md:-translate-x-63 lg:-translate-x-0 md:translate-y-30 lg:-translate-y-0 md:w-130 fade-in-left delay-200">

      </div>



      <div class="mt-40 lg:flex-row items-center justify-between gap-12 -translate-x-2">

      <div class="w-full md:w-1/2 text-left translate-y-[-2rem] md:translate-y-0 lg:translate-y-0 lg:text-left md:text-left transition-all duration-300">

          <div class="w-20 h-1 bg-gray-800 mb-12 mx-auto lg:mx-0 md:-translate-x-79 lg:-translate-x-0 fade-in-left delay-200"></div>

          <h1 class="lg:text-6xl text-4xl font-base text-black-900 mb-5 font-montserrat fade-in-up delay-100">HEALTHY</h1>

          <h1 class="lg:text-6xl text-4xl font-extrabold text-black-900 mt-2 lg:mb-6 mb-5 md:mb-10 font-montserrat fade-in-left">TASTY FOOD</h1>

          <p class="text-md xl:w-163 xl:text-left md:text-left lg:text-left sm:text-left xl:-ml-0 md:-ml-0 sm:-ml-10 xl:mt-3 sm:mt-0 text-black-600 lg:mb-10 lg:text-base sm:text-xl leading-relaxed md:mb-10 mb-5 font-poppins fade-in-left">

              @foreach ($tentangs as $index => $tentang)

            {{ Str::limit($tentang->deskripsi, 300) }}

            @endforeach

          </p>

        <div class="flex items-center gap-4 mt-6">

  <!-- Tombol TENTANG KAMI -->

  <a href="tentang" 

     class="px-20 py-4 bg-black text-white font-bold hover:bg-gray-700 transition duration-300 transform hover:scale-105 font-montserrat fade-in-up delay-200">

    TENTANG KAMI

  </a>

@php

    // Cek siapa yang login

    $userGuard = Auth::guard('admin')->check() ? 'admin' :

                 (Auth::guard('customer')->check() ? 'customer' : null);

@endphp



@if($userGuard)

    {{-- Kalau admin atau customer sudah login --}}

    <form action="{{ route('logout') }}" method="POST" class="inline">

        @csrf

        <button type="submit"

                class="px-25 py-4 bg-gray-100 text-red-500 border border-red-500 font-bold font-montserrat fade-in-up delay-200

                       hover:scale-105 hover:shadow-md transition duration-300 flex items-center justify-center gap-2">

            <i class="fas fa-sign-out-alt"></i> LOGOUT

        </button>

    </form>

@else

    {{-- Kalau belum login --}}

    <a href="{{ route('login.show') }}"

       class="px-25 py-4 bg-gray-100 text-black border border-black font-bold font-montserrat fade-in-up delay-200

              hover:scale-105 hover:shadow-md transition duration-300 flex items-center justify-center gap-2">

        <i class="fas fa-sign-in-alt"></i> LOGIN

    </a>

@endif
</div>
        </div>

      </div>

    </div>

  </nav>

  



  <!-- Mobile Menu Dropdown -->

  <div id="mobileMenu" class="fixed top-0 left-0 w-full h-full bg-white z-40 hidden opacity-0 translate-y-[-20px] transition-all duration-500 ease-in-out sm:hidden">



            <!-- Burger Close Icon (Pojok Kanan Atas) -->

            <div class="absolute top-10 left-10">

              <svg id="burger-close-icon" class="size-6 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="black">

                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />

              </svg>

            </div>



    <!-- ===== MOBILE NAV ===== -->

        <div id="mobileMenuContent" class="flex flex-col items-center justify-center h-full space-y-8 font-montserrat">

          <a href="home" class="group relative flex items-center gap-2 px-4 py-3 text-2xl font-semibold text-black after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-black after:transition-all after:duration-300 hover:after:w-full">

            <!-- Icon Home Solid -->

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-yellow-500" viewBox="0 0 20 20">

              <path d="M10.707 1.293a1 1 0 00-1.414 0L2 8.586V18a2 2 0 002 2h4v-6h4v6h4a2 2 0 002-2V8.586l-7.293-7.293z" />

            </svg>

            HOME

          </a>

          <a href="tentang" class="group relative flex items-center gap-2 px-4 py-3 text-2xl font-semibold text-black after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-black after:transition-all after:duration-300 hover:after:w-full">

            <!-- Icon Info Solid -->

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-colors duration-300 group-hover:text-yellow-500 fill-current" viewBox="0 0 20 20">

              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.75-11.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.25 9a.75.75 0 000 1.5h.5v4a.75.75 0 001.5 0v-4a.75.75 0 00-.75-.75h-1.25z" clip-rule="evenodd" />

            </svg>

            TENTANG

          </a>

        <a href="berita" class="group relative flex items-center gap-2 px-4 py-3 text-2xl font-semibold text-black after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-black after:transition-all after:duration-300 hover:after:w-full">

            <!-- Icon News Solid -->

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-colors duration-300 group-hover:text-yellow-500 fill-current" viewBox="0 0 20 20">

              <path d="M4 3a2 2 0 00-2 2v10a4 4 0 004 4h8a4 4 0 004-4V5a2 2 0 00-2-2H4zm0 2h12v10a2 2 0 01-2 2H6a2 2 0 01-2-2V5z" />

            </svg>

            BERITA

          </a>

          <a href="galeri" class="group relative flex items-center gap-2 px-4 py-3 text-2xl font-semibold text-black after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-black after:transition-all after:duration-300 hover:after:w-full">

            <!-- Icon Gallery Solid -->

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-colors duration-300 group-hover:text-yellow-500 fill-current" viewBox="0 0 20 20">

              <path d="M4 3a2 2 0 00-2 2v3h16V5a2 2 0 00-2-2H4zm-2 9v3a2 2 0 002 2h12a2 2 0 002-2v-3H2z" />

            </svg>

            GALERI

          </a>

          <a href="kontak" class="group relative flex items-center gap-2 px-4 py-3 text-2xl font-semibold text-black after:content-[''] after:absolute after:left-0 after:bottom-0 after:w-0 after:h-[2px] after:bg-black after:transition-all after:duration-300 hover:after:w-full">

            <!-- Icon Contact Solid -->

            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-colors duration-300 group-hover:text-yellow-500 fill-current" viewBox="0 0 20 20">

              <path d="M2.003 5.884l8 4.8 8-4.8A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />

              <path d="M18 8.118l-8 4.8-8-4.8V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />

            </svg>

            KONTAK

          </a>

        </div>



  </div>

</div>



</section>
  <!-- SCRIPT -->

<script>
  const burgerButton = document.getElementById('burgerBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const burgerCloseIcon = document.getElementById('burger-close-icon');

  // Open Menu
  burgerButton.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
    mobileMenu.classList.add('z-40');
    setTimeout(() => {
      mobileMenu.classList.remove('opacity-0', 'translate-y-[-20px]');
      mobileMenu.classList.add('opacity-100', 'translate-y-0');
    }, 10);
  });

  // Close Menu
  burgerCloseIcon.addEventListener('click', () => {
    mobileMenu.classList.add('opacity-0', 'translate-y-[-20px]');
    mobileMenu.classList.remove('opacity-100', 'translate-y-0');
    setTimeout(() => {
      mobileMenu.classList.add('hidden');
      mobileMenu.classList.remove('z-40');
    }, 300);
  });
</script>






  {{-- TENTANG KAMI SECTION --}}
  <section class="bg-white h-auto text-center flex flex-col items-center">
    <div class="{{ $containerWidth }} mx-auto {{ $containerPadding }}">
        @foreach ($tentangs as $index => $tentang)
      <div class="text-3xl font-bold text-black mt-20 font-montserrat fade-in-up delay-200">
        TENTANG KAMI
      </div>
      <p class="text-md text-black max-w-3xl mt-5 text-center font-poppins mb-5 fade-in-up delay-300">
      {{ Str::limit($tentang->deskripsi, 300) }}
      </p>
      <div class="flex justify-center w-full">
        <div class="mt-5 w-24 h-0.5 bg-gray-800 mb-20"></div>
      </div>
      @endforeach
    </div>
  </section>

  {{-- CARD SECTION --}}
  <section class="relative py-30">
    <div class="absolute inset-0">
      <img src="img/galeri6.jpg" class="h-full w-full object-cover" alt="" />
      <div class="absolute inset-0 bg-black opacity-40"></div>
    </div>

  {{-- KONTANIER CARD --}}
<div class="relative {{ $containerWidth }} mx-auto {{ $containerPadding }}">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="relative bg-white rounded-xl shadow-md p-7 text-center pt-35 my-8 lg:my-0 w-full max-w-[320px] mx-auto fade-in-left delay-400">
      <img src="img/img-1.png" alt="Menu 1"
        class="absolute -top-20 left-1/2 transform -translate-x-1/2 w-[200px] h-[200px] object-cover rounded-full transition-transform duration-500 hover:-translate-y-5" />
      <div>
        <h4 class="text-3xl font-bold mb-3 font-montserrat">LOREM IPSUM</h4>
        <p class="text-base text-black-700 mb-5 font-poppins">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.        </p>
      </div>
    </div>

    <div class="relative bg-white rounded-xl shadow-md p-7 text-center pt-35 my-8 lg:my-0 w-full max-w-[320px] mx-auto fade-in-left delay-200">
      <img src="img/img-2.png" alt="Menu 2"
        class="absolute -top-20 left-1/2 transform -translate-x-1/2 w-[200px] h-[200px] object-cover rounded-full transition-transform duration-500 hover:-translate-y-5" />
      <div>
        <h4 class="text-3xl font-bold mb-3 font-montserrat">LOREM IPSUM</h4>
        <p class="text-base text-black-700 mb-5 font-poppins">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.        </p>
      </div>
    </div>

    <div class="relative bg-white rounded-xl shadow-md p-7 text-center pt-35 my-8 lg:my-0 w-full max-w-[320px] mx-auto fade-in-right delay-200">
      <img src="img/img-3.png" alt="Menu 3"
        class="absolute -top-20 left-1/2 transform -translate-x-1/2 w-[200px] h-[200px] object-cover rounded-full transition-transform duration-500 hover:-translate-y-5" />
      <div>
        <h4 class="text-3xl font-bold mb-3 font-montserrat">LOREM IPSUM</h4>
        <p class="text-base text-black-700 mb-5 font-poppins">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.        </p>
      </div>
    </div>

    <div class="relative bg-white rounded-xl shadow-md p-7 text-center pt-35 my-8 lg:my-0 w-full max-w-[320px] mx-auto fade-in-right delay-400">
      <img src="img/img-4.png" alt="Menu 4"
        class="absolute -top-20 left-1/2 transform -translate-x-1/2 w-[200px] h-[200px] object-cover rounded-full transition-transform duration-500 hover:-translate-y-5" />
      <div>
        <h4 class="text-3xl font-bold mb-3 font-montserrat">LOREM IPSUM</h4>
        <p class="text-base text-black-700 mb-5 font-poppins">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.        </p>
      </div>
    </div>

  </div>
</div>

  </section>

  <div class="bg-gray-100 py-20">
    {{-- KONTANIER BERITA --}}
    <div class="{{ $containerWidth }} mx-auto {{ $containerPadding }}">
      <h2 class="text-center text-3xl font-bold mb-8 font-montserrat">BERITA KAMI</h2>

      <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
@if ($oldest)
        <div class="lg:col-span-2">
          <div class="bg-white rounded-xl overflow-hidden shadow-lg flex flex-col h-full w-full max-w-full flip-y delay-400">
          <img src="{{asset('storage/'.$oldest->image)}}"
           alt="{{ $oldest->title }}"
          class="h-[400px] w-full object-cover">
            
            <div class="p-5 flex flex-col flex-grow">
              <h3 class="text-xl font-bold leading-tight mb-4 font-montserrat">
                {{$oldest->title}}
              </h3>
              <p class="text-black-700 text-md flex-grow mb-6 text-left font-poppins">
                  {{ Str::limit($oldest->content, 800) }}</p>
              <div class="flex items-center justify-between">
                  <a href="bacaselengkapnya" class="text-md text-yellow-500 hover:underline font-poppins">Baca selengkapnya</a>
                  <!-- Tombol titik tiga + dropdown -->
      <div class="relative inline-block text-left">
        <button onclick="toggleMenu(this)" class="p-2 rounded-full hover:bg-gray-100">
          <!-- Icon titik tiga -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
               stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
        </button>

        <!-- Dropdown Menu -->
        <div class="hidden absolute right-0 bottom-10 mt-2 w-48 bg-white border rounded-lg shadow-lg z-50">
          <button onclick="copyLink('https://domainmu.com/berita-slug')" 
                  class="flex items-center gap-5 w-full text-left px-4 py-2 hover:bg-gray-200 hover:rounded-lg">
            <!-- Icon Link -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                 stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-600">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-6-4.5 6 6m0 0V6m0 6h-6"/>
            </svg>
            Salin Link
          </button>
          <button onclick="shareWhatsapp('https://domainmu.com/berita-slug')" 
                  class="flex items-center gap-5 w-full text-left px-4 py-2 hover:bg-gray-200 hover:rounded-lg">
            <!-- Icon WhatsApp -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
                 class="w-5 h-5 text-green-500">
              <path d="M20.52 3.48A11.84 11.84 0 0 0 12.05 0C5.4 0 0 5.4 0 12.05c0 2.13.56 4.21 1.62 6.04L0 24l6.12-1.6a12 12 0 0 0 5.93 1.55h.01c6.64 0 12.05-5.4 12.05-12.05 0-3.22-1.25-6.24-3.54-8.52zM12.05 22a9.9 9.9 0 0 1-5.06-1.39l-.36-.21-3.63.95.97-3.54-.23-.37a9.92 9.92 0 0 1-1.55-5.39c0-5.47 4.45-9.92 9.91-9.92 2.64 0 5.12 1.03 6.98 2.9a9.9 9.9 0 0 1 2.93 7.03c0 5.47-4.45 9.94-9.96 9.94zm5.48-7.44c-.3-.15-1.77-.87-2.05-.97-.28-.1-.48-.15-.68.15-.2.3-.78.97-.95 1.17-.18.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.5-1.78-1.68-2.08-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.68-1.65-.93-2.27-.24-.58-.48-.5-.68-.51h-.58c-.2 0-.52.07-.8.37-.28.3-1.05 1.02-1.05 2.5s1.08 2.9 1.23 3.1c.15.2 2.13 3.26 5.15 4.56.72.31 1.28.49 1.72.62.72.23 1.38.2 1.9.12.58-.08 1.77-.72 2.02-1.42.25-.7.25-1.32.18-1.47-.08-.15-.27-.23-.57-.38z"/>
            </svg>
            Bagikan ke WhatsApp
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endif

{{-- 4 card kecil --}}
        <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
@foreach ($beritas as $item)
  
          <div class="bg-white rounded-xl overflow-hidden shadow-lg flex flex-col flip-x delay-400">
          <img src="{{asset('storage/'.$item->image)}}"
           class="h-[220px] w-full object-cover" 
           alt="{{ $item->title }}">
            <div class="p-4 flex flex-col flex-grow">
              <h4 class="text-2xl font-bold mb-5 font-montserrat">{{$item->title}}</h4>
              <p class="text-md text-black-700 flex-grow mb-8 font-poppins">
                  {{ Str::limit($item->content, 120) }}</p>
              <div class="flex items-center justify-between mt-auto">
                    <a href="bacaselengkapnya" class="text-md text-yellow-500 hover:underline font-poppins">Baca selengkapnya</a>
                  <!-- Tombol titik tiga + dropdown -->
      <div class="relative inline-block text-left">
        <button onclick="toggleMenu(this)" class="p-2 rounded-full hover:bg-gray-100">
          <!-- Icon titik tiga -->
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
               stroke-width="2" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
        </button>

        <!-- Dropdown Menu -->
        <div class="hidden absolute right-0 bottom-10 mt-2 w-48 bg-white border rounded-lg shadow-lg z-50">
          <button onclick="copyLink('https://domainmu.com/berita-slug')" 
                  class="flex items-center gap-5 w-full text-left px-4 py-2 hover:bg-gray-200 hover:rounded-lg">
            <!-- Icon Link -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" 
                 stroke-width="2" stroke="currentColor" class="w-5 h-5 text-gray-600">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-6-4.5 6 6m0 0V6m0 6h-6"/>
            </svg>
            Salin Link
          </button>
          <button onclick="shareWhatsapp('https://domainmu.com/berita-slug')" 
                  class="flex items-center gap-5 w-full text-left px-4 py-2 hover:bg-gray-200 hover:rounded-lg">
            <!-- Icon WhatsApp -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" 
                 class="w-5 h-5 text-green-500">
              <path d="M20.52 3.48A11.84 11.84 0 0 0 12.05 0C5.4 0 0 5.4 0 12.05c0 2.13.56 4.21 1.62 6.04L0 24l6.12-1.6a12 12 0 0 0 5.93 1.55h.01c6.64 0 12.05-5.4 12.05-12.05 0-3.22-1.25-6.24-3.54-8.52zM12.05 22a9.9 9.9 0 0 1-5.06-1.39l-.36-.21-3.63.95.97-3.54-.23-.37a9.92 9.92 0 0 1-1.55-5.39c0-5.47 4.45-9.92 9.91-9.92 2.64 0 5.12 1.03 6.98 2.9a9.9 9.9 0 0 1 2.93 7.03c0 5.47-4.45 9.94-9.96 9.94zm5.48-7.44c-.3-.15-1.77-.87-2.05-.97-.28-.1-.48-.15-.68.15-.2.3-.78.97-.95 1.17-.18.2-.35.22-.65.07-.3-.15-1.27-.47-2.42-1.5-.9-.8-1.5-1.78-1.68-2.08-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.53.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.68-1.65-.93-2.27-.24-.58-.48-.5-.68-.51h-.58c-.2 0-.52.07-.8.37-.28.3-1.05 1.02-1.05 2.5s1.08 2.9 1.23 3.1c.15.2 2.13 3.26 5.15 4.56.72.31 1.28.49 1.72.62.72.23 1.38.2 1.9.12.58-.08 1.77-.72 2.02-1.42.25-.7.25-1.32.18-1.47-.08-.15-.27-.23-.57-.38z"/>
            </svg>
            Bagikan ke WhatsApp
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>        
  @endforeach
        </div>
      

      </div>
    </div>
  </div>

  {{-- GALLERY --}}
  <section class="bg-white py-20 overflow-hidden">
  <div class="{{ $containerWidth }} mx-auto {{ $containerPadding }}">
    <h2 class="text-3xl font-bold mb-14 text-center font-montserrat">GALERI KAMI</h2>

    <div id="gallery" class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-3">
@foreach ($homegaleris as $index => $homegaleri)
  <div class="overflow-hidden rounded-xl shadow-lg slide-right delay-100 
              {{ $index >= 6 ? 'extra-gallery hidden opacity-0 scale-90 translate-y-5 blur-md' : '' }}">
    <img src="{{ asset('storage/'.$homegaleri->image) }}"
         alt="Galeri {{ $index + 1 }}"
         class="w-full aspect-square object-cover">
  </div>
@endforeach

    </div>

    <div class="max-w-2xl mx-auto text-center mt-20 font-montserrat">
      <button id="toggleBtn" class="px-20 py-4 bg-black text-white font-bold hover:bg-gray-700 transition duration-300 transform hover:scale-105">
        LIHAT LEBIH BANYAK
      </button>
    </div>
  </div>
</section>

<script>
  const btn = document.getElementById('toggleBtn');
  const extraItems = document.querySelectorAll('.extra-gallery');
  let showCount = 0;
  const step = 3; // jumlah foto per klik
  let expanded = false; // status galeri

  function showImages() {
    const toShow = Array.from(extraItems).slice(showCount, showCount + step);

    toShow.forEach((item, i) => {
      setTimeout(() => {
        item.classList.remove('hidden');
        setTimeout(() => {
          item.classList.remove('opacity-0', 'scale-90', 'translate-y-5', 'blur-md');
        }, 50);
      }, i * 200);
    });

    // Scroll smooth ke foto terakhir
    if (toShow.length > 0) {
      setTimeout(() => {
        const lastItem = toShow[toShow.length - 1];
        const offset = lastItem.getBoundingClientRect().top + window.scrollY - 100;
        window.scrollTo({ top: offset, behavior: 'smooth' });
      }, toShow.length * 200 + 300);
    }

    showCount += toShow.length;

    if (showCount >= extraItems.length) {
      expanded = true;
      btn.textContent = 'LIHAT LEBIH SEDIKIT';
    }
  }

function hideImages() {
  const toHide = Array.from(extraItems).slice(0, showCount).reverse();

  toHide.forEach((item, i) => {
    setTimeout(() => {
      item.classList.add('opacity-0', 'scale-90', 'translate-y-5', 'blur-md');
      setTimeout(() => {
        item.classList.add('hidden');
      }, 500); // waktu animasi
    }, i * 150);
  });

  // Hitung waktu total animasi hide
  const totalDuration = toHide.length * 150 + 150;

  // Scroll smooth setelah semua item hilang
  setTimeout(() => {
    document.getElementById('gallery').scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }, totalDuration);

  // Reset state setelah animasi selesai
  setTimeout(() => {
    showCount = 0;
    expanded = false;
    btn.textContent = 'LIHAT LEBIH BANYAK';
  }, totalDuration + 400); // jeda biar pas
}

  btn.addEventListener('click', () => {
    if (!expanded) {
      showImages();
    } else {
      hideImages();
    }
  });
</script>


  {{-- FOOTER --}}
<footer class="bg-black text-gray-300 py-12 px-6 mt-10 lg:px-20">
  <div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 gap-10 mt-10 font-poppins fade-in-up delay-100">

    <!-- Column 1: Tasty Food -->
    <div class="lg:col-span-5 lg:ml-17">
      <h3 class="text-white text-3xl font-semibold mb-7 text-center sm:text-center lg:text-left">Tasty Food</h3>
      <p class="text-gray-300 text-md leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. Ut <br>enim ad minim veniam, quis nostrud <br>exercitation ullamco laboris nisi ut aliquip ex ea <br>commodo consequat.
      </p>
      <div class="flex space-x-2 mt-6 justify-center md:justify-start">
        <a href="#" class="hover:bg-blue-200 text-white rounded-full p-2">
          <img class="w-12 h-12" src="img/001-facebook.png" alt="">
        </a>
        <a href="#" class="hover:bg-blue-200 text-white rounded-full p-2">
          <img class="w-12 h-12" src="img/002-twitter.png" alt="">
        </a>
      </div>
    </div>

    <!-- Column 2: Useful Links -->
    <div class="lg:col-span-2">
      <h4 class="text-white text-2xl font-semibold mb-6 text-center sm:text-center lg:text-left">Useful links</h4>
      <ul class="space-y-4 text-md text-white">
        <li><a href="#" class="hover:text-white">Blog</a></li>
        <li><a href="#" class="hover:text-white">Hewan</a></li>
        <li><a href="#" class="hover:text-white">Galeri</a></li>
        <li><a href="#" class="hover:text-white">Testimonial</a></li>
      </ul>
    </div>

    <!-- Column 3: Privacy -->
    <div class="lg:col-span-2 ">
      <h4 class="text-white text-2xl font-semibold mb-6 text-center sm:text-center lg:text-left">Privacy</h4>
      <ul class="space-y-4 text-md text-white">
        <li><a href="#" class="hover:text-white">Karir</a></li>
        <li><a href="#" class="hover:text-white">Tentang Kami</a></li>
        <li><a href="#" class="hover:text-white">Kontak Kami</a></li>
        <li><a href="#" class="hover:text-white">Servis</a></li>
      </ul>
    </div>

    <!-- Column 4: Contact Info -->
    <div class="lg:col-span-3 ">
      <h4 class="text-white text-2xl font-semibold mb-6 text-center sm:text-center lg:text-left">Contact Info</h4>
      <ul class="text-white text-md space-y-4">
        <li class="flex items-center space-x-2">
          <img src="img/ic_markunread_24px.png" alt="">
          <span>{{ $kontak->email }}</span>
        </li>
        <li class="flex items-center space-x-2">
          <img src="img/ic_call_24px.png" alt="">
          <span>{{ $kontak->phone }}</span>
        </li>
        <li class="flex items-center space-x-2">
          <img src="img/ic_place_24px.png" alt="">
          <span>{{ $kontak->location }}</span>
        </li>
      </ul>
    </div>

  </div>

  <div class="text-center text-sm text-gray-400 mt-25">
    Copyright ©2023 All rights reserved
  </div>
</footer>

{{-- ANIMASI ON-SCROOL --}}
<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll(".fade-in-up, .fade-in-left, .fade-in-right, .flip-x, .flip-y, .slide-up, .slide-down, .slide-left, .slide-right")
    .forEach(el => observer.observe(el));
</script>


{{-- bagikan berita--}}
<script>
function toggleMenu(btn) {
  const menu = btn.nextElementSibling;
  const isOpen = !menu.classList.contains("hidden");


  document.querySelectorAll(".relative .absolute").forEach(m => m.classList.add("hidden"));

  if (!isOpen) {
    menu.classList.remove("hidden");
  }
}

document.addEventListener("click", function(event) {
  const isClickInside = event.target.closest(".relative");
  if (!isClickInside) {
    document.querySelectorAll(".relative .absolute").forEach(m => m.classList.add("hidden"));
  }
});
</script>

</body>
</html>