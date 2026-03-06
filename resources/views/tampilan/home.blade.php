<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BK CARE SMK BUDI BAKTI CIWIDEY</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- Google Font: Plus Jakarta Sans -->
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      * {
        font-family: "Plus Jakarta Sans", sans-serif;
      }

      body {
        background:
          radial-gradient(
            circle at 0% 0%,
            rgba(79, 141, 184, 0.08) 0%,
            transparent 50%
          ),
          radial-gradient(
            circle at 100% 0%,
            rgba(111, 174, 217, 0.08) 0%,
            transparent 50%
          ),
          radial-gradient(
            circle at 100% 100%,
            rgba(79, 141, 184, 0.06) 0%,
            transparent 50%
          ),
          radial-gradient(
            circle at 0% 100%,
            rgba(111, 174, 217, 0.06) 0%,
            transparent 50%
          ),
          linear-gradient(145deg, #f8fcff 0%, #f0f7fc 100%);
      }

      .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 20px 40px -15px rgba(79, 141, 184, 0.15);
      }

      .glass-card-deep {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 25px 50px -12px rgba(23, 35, 91, 0.25);
      }

      .text-gradient {
        background: linear-gradient(135deg, #17235b 0%, #2a3a7a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .text-gradient-blue {
        background: linear-gradient(135deg, #4f8db8 0%, #6faed9 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
      }

      .floating {
        animation: float 6s ease-in-out infinite;
      }

      @keyframes float {
        0%,
        100% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-15px);
        }
      }

      .floating-slow {
        animation: float-slow 8s ease-in-out infinite;
      }

      @keyframes float-slow {
        0%,
        100% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-10px);
        }
      }

      .pulse-glow {
        animation: pulse-glow 3s ease-in-out infinite;
      }

      @keyframes pulse-glow {
        0%,
        100% {
          box-shadow: 0 0 20px rgba(79, 141, 184, 0.3);
        }
        50% {
          box-shadow: 0 0 40px rgba(79, 141, 184, 0.6);
        }
      }

      .service-card {
        transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
      }

      .service-card:hover {
        transform: translateY(-10px) scale(1.02);
      }

      .bg-grid-pattern {
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234F8DB8' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      }

      .smk-badge {
        background: linear-gradient(145deg, #ffd700, #ffc107);
        color: #17235b;
      }
    </style>
  </head>

  <body class="font-sans text-gray-700 overflow-x-hidden relative">
    <!-- ===== DECORATIVE ===== -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
      <div
        class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/20 rounded-full blur-3xl floating"
      ></div>
      <div
        class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/20 rounded-full blur-3xl floating-slow"
        style="animation-delay: -3s"
      ></div>
      <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[#4F8DB8]/10 to-[#6FAED9]/10 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute top-40 right-20 w-32 h-32 border-8 border-[#4F8DB8]/10 rounded-full"
      ></div>
      <div
        class="absolute bottom-40 left-20 w-48 h-48 border-8 border-[#6FAED9]/10 rounded-full"
      ></div>

      <div
        class="absolute top-1/3 right-1/4 w-40 h-40 border-4 border-[#17235b]/10 rounded-full floating-slow"
      ></div>
      <div
        class="absolute bottom-1/3 left-1/4 w-56 h-56 border-4 border-[#4F8DB8]/10 rounded-full floating"
      ></div>
    </div>

    <!-- NAVIGASI -->
    <header
      id="navbar"
      class="fixed top-6 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-50 transition-all duration-500"
    >
      <!-- GLOW EFFECT -->
      <div
        id="navGlow"
        class="absolute inset-0 rounded-3xl bg-gradient-to-r from-[#4F8DB8]/40 to-[#6FAED9]/40 blur-xl opacity-0 -z-10 transition-opacity duration-500"
      ></div>

      <!-- MAIN NAVBAR -->
      <div
        id="navMain"
        class="px-8 py-4 flex items-center justify-between rounded-3xl bg-white/20 backdrop-blur-md border border-white/30 transition-all duration-500"
      >
        <!-- LOGO -->
        <a href="{{ url('/') }}" class="flex items-center gap-3">
          <img
            src="img/LOGO BK.png"
            class="h-14 w-auto cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:scale-105 drop-shadow-[0_0_6px_white]"
            onerror="
              this.src =
                'https://via.placeholder.com/150x60/17235b/ffffff?text=BK+CARE'
            "
          />
          <span
            class="hidden lg:inline-block text-white text-xs font-bold bg-white/20 px-3 py-1.5 rounded-full border border-white/30"
          >
            SMK BUDI BAKTI CIWIDEY
          </span>
        </a>

        <!-- MENU -->
        <nav
          id="navMenu"
          class="hidden md:flex gap-10 text-sm font-bold text-white transition-colors duration-300"
        >
          <a
            href="{{ url('/') }}"
            class="relative group flex items-center gap-2 opacity-100"
          >
            <i class="fa-solid fa-house text-xs"></i> HOME
            <span
              class="absolute -bottom-2 left-0 w-2 h-2 bg-white rounded-full"
            ></span>
            <span
              class="absolute -bottom-2 left-0 w-8 h-0.5 bg-gradient-to-r from-white to-transparent rounded-full"
            ></span>
          </a>

          <a
            href="{{ url('/tentang') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-circle-info text-xs"></i> ABOUT
            <span
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-white rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <a
            href="{{ url('/materi') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-graduation-cap text-xs"></i> EDUCATIONS
            <span
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-white rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <a
            href="{{ url('/informasi') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-bullhorn text-xs"></i> INFORMATIONS
            <span
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-white rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <!-- BUTTON - WHITE -->
@guest
<a
  href="{{ url('/login') }}"
  class="relative overflow-hidden group px-9 py-4 rounded-full text-sm font-bold bg-white text-[#4F8DB8] hover:scale-105 transition-all duration-300 flex items-center gap-2 shadow-lg"
>
  <span class="relative z-10">START LOGIN</span>
  <i class="fa-solid fa-arrow-right-to-bracket relative z-10"></i>
</a>
@endguest


@auth
<div class="flex items-center gap-4">

  {{-- DASHBOARD --}}
  @if(Auth::user()->role == 'admin')
      <a href="{{ url('/admin') }}"
         class="px-5 py-4 rounded-full text-sm font-bold bg-white text-[#4F8DB8] hover:scale-105 transition-all duration-300 shadow-lg flex items-center gap-2">
         <span>DASHBOARD</span>
         <i class="fa-solid fa-chart-line"></i>
      </a>
  @elseif(Auth::user()->role == 'guru_bk')
      <a href="{{ url('/guru_bk') }}"
         class="px-5 py-4 rounded-full text-sm font-bold bg-white text-[#4F8DB8] hover:scale-105 transition-all duration-300 shadow-lg flex items-center gap-2">
         <span>DASHBOARD</span>
         <i class="fa-solid fa-chart-line"></i>
      </a>
  @elseif(Auth::user()->role == 'siswa')
      <a href="{{ url('/siswa') }}"
         class="px-5 py-4 rounded-full text-sm font-bold bg-white text-[#4F8DB8] hover:scale-105 transition-all duration-300 shadow-lg flex items-center gap-2">
         <span>DASHBOARD</span>
         <i class="fa-solid fa-chart-line"></i>
      </a>
  @endif

  {{-- LOGOUT --}}
  <form action="{{ url('/logout') }}" method="POST">
      @csrf
      <button
        type="submit"
        class="px-9 py-4 rounded-full text-sm font-bold bg-white text-[#4F8DB8] hover:scale-105 transition-all duration-300 shadow-lg flex items-center gap-2">
        <span>LOGOUT</span>
        <i class="fa-solid fa-right-from-bracket"></i>
      </button>
  </form>

</div>
@endauth
        </nav>
        <!-- HAMBURGER BUTTON (MOBILE) -->
        <button
          id="menuToggle"
          class="md:hidden text-[#17235b] text-xl focus:outline-none"
        >
          <i class="fa-solid fa-bars"></i>
        </button>
      </div>

      <!-- MOBILE MENU -->
      <div
        id="mobileMenu"
        class="md:hidden mt-4 px-6 py-6 rounded-3xl bg-white/90 backdrop-blur-md border border-white/40 hidden transition-all duration-300"
      >
        <nav class="flex flex-col gap-5 text-sm font-bold text-gray-700">
          <a href="{{ url('/') }}" class="flex items-center gap-2">
            <i class="fa-solid fa-house text-xs"></i> HOME
          </a>
          <a href="{{ url('/tentang') }}"class="flex items-center gap-2">
            <i class="fa-solid fa-circle-info text-xs"></i> ABOUT
          </a>
          <a href="{{ url('/materi') }}" class="flex items-center gap-2">
            <i class="fa-solid fa-graduation-cap text-xs"></i> EDUCATIONS
          </a>
          <a href="{{ url('/informasi') }}" class="flex items-center gap-2">
            <i class="fa-solid fa-bullhorn text-xs"></i> INFORMATIONS
          </a>

          <a
            href="{{ url('/login') }}"
            class="mt-4 text-center py-3 rounded-full bg-[#4F8DB8] text-white font-bold"
          >
            START LOGIN
          </a>
        </nav>
      </div>
    </header>

    <script>
      // NAVBAR SCROLL EFFECT
      window.addEventListener("scroll", function () {
        const navbar = document.getElementById("navbar");
        const navMain = document.getElementById("navMain");
        const navMenu = document.getElementById("navMenu");
        const navGlow = document.getElementById("navGlow");
        const loginBtn = document.getElementById("loginBtn");

        if (window.scrollY > 50) {
          navbar.style.transform = "translateX(-50%) scale(0.95)";
          navbar.style.top = "12px";

          navMain.classList.remove("bg-white/20", "border-white/30");
          navMain.classList.add("bg-white", "shadow-lg");
          navMain.style.backdropFilter = "blur(12px)";

          navMenu.classList.remove("text-white");
          navMenu.classList.add("text-gray-700");

          navGlow.style.opacity = "0";

          loginBtn.classList.remove("bg-white", "text-[#4F8DB8]");
          loginBtn.classList.add("bg-[#4F8DB8]", "text-white");
        } else {
          navbar.style.transform = "translateX(-50%) scale(1)";
          navbar.style.top = "24px";

          navMain.classList.add("bg-white/20", "border-white/30");
          navMain.classList.remove("bg-white", "shadow-lg");

          navMenu.classList.add("text-white");
          navMenu.classList.remove("text-gray-700");

          navGlow.style.opacity = "1";

          loginBtn.classList.add("bg-white", "text-[#4F8DB8]");
          loginBtn.classList.remove("bg-[#4F8DB8]", "text-white");
        }
      });

      window.dispatchEvent(new Event("scroll"));
    </script>

    <script>
      const menuToggle = document.getElementById("menuToggle");
      const mobileMenu = document.getElementById("mobileMenu");

      menuToggle.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    </script>

    <!-- ===== HERO ===== -->
    <section class="relative pt-40 pb-24 overflow-hidden">
      <div
        class="absolute inset-0 bg-gradient-to-br from-[#0A2540] via-[#1e3a5f] to-[#2a4a7a]"
      ></div>

      <!-- Decorative blobs -->
      <div
        class="absolute top-20 left-10 w-64 h-64 bg-white/10 rounded-full blur-3xl floating"
      ></div>
      <div
        class="absolute bottom-10 right-10 w-80 h-80 bg-white/10 rounded-full blur-3xl floating-slow"
      ></div>
      <div
        class="absolute top-40 right-1/4 w-40 h-40 bg-[#6FAED9]/20 rounded-full blur-2xl floating"
      ></div>
      <div
        class="absolute bottom-40 left-1/3 w-56 h-56 bg-[#4F8DB8]/20 rounded-full blur-2xl floating-slow"
      ></div>

      <!-- Grid pattern overlay -->
      <div class="absolute inset-0 bg-grid-pattern opacity-20"></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <!-- Left Content -->
          <div class="space-y-8 text-white">
            <!-- Badge -->
            <div
              class="inline-flex items-center gap-3 glass-card px-6 py-3 rounded-full text-white border-white/20 backdrop-blur-sm"
            >
              <div
                class="w-3 h-3 bg-[#17235b] rounded-full animate-pulse"
              ></div>
              <span
                class="text-xs font-bold uppercase tracking-wider text-[#17235b]"
                >BK CARE • SMK BUDI BAKTI CIWIDEY</span
              >
              <span
                class="bg-[#17235b]/30 text-white px-3 py-1 rounded-full text-[10px] font-bold border border-white"
                >RESMI</span
              >
            </div>

            <h1
              class="text-5xl lg:text-6xl xl:text-7xl font-extrabold leading-tight"
            >
              <span class="text-white">Supporting Students</span><br />
              <span
                class="text-transparent bg-clip-text bg-gradient-to-r from-[#6FAED9] via-white to-blue-100"
              >
                Toward Better Solutions
              </span>
            </h1>

            <p class="text-lg text-white/90 max-w-xl leading-relaxed">
              BK Care hadir sebagai platform konseling digital untuk mendukung
              perkembangan dan kesejahteraan siswa. Ruang aman dan nyaman untuk
              berbagi cerita, mengatasi stres akademik, masalah pertemanan, dan
              perencanaan karir masa depanmu.
            </p>

            <!-- CTA Buttons - Dengan warna SMK -->
            <div class="flex flex-wrap gap-4">
              <a
                href="{{ url('/login') }}"
                class="group inline-flex items-center gap-3 px-8 py-4 bg-white/10 backdrop-blur-md text-white font-bold rounded-full border border-white/30 hover:bg-white/20 hover:scale-105 transition-all duration-300"
              >
                <i class="fa-regular fa-calendar-check text-lg"></i>
                Konseling Gratis untuk Siswa
                <i
                  class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"
                ></i>
              </a>
            </div>

            <!-- Stats spesifik SMK Budi Bakti -->
            <div class="flex items-center gap-8 pt-6">
              <div class="text-center">
                <div class="counter-number text-4xl font-bold text-white">
                  867
                </div>
                <div
                  class="text-xs text-white/70 uppercase tracking-wider mt-1 flex items-center gap-1"
                >
                  <i class="fa-solid fa-user-graduate"></i> Siswa Aktif
                </div>
              </div>
              <div class="w-px h-12 bg-white/30"></div>
              <div class="text-center">
                <div class="counter-number text-4xl font-bold text-white">
                  8
                </div>
                <div
                  class="text-xs text-white/70 uppercase tracking-wider mt-1 flex items-center gap-1"
                >
                  <i class="fa-solid fa-user-tie"></i> Konselor SMK
                </div>
              </div>
              <div class="w-px h-12 bg-white/30"></div>
              <div class="text-center">
                <div class="counter-number text-4xl font-bold text-white">
                  24/7
                </div>
                <div
                  class="text-xs text-white/70 uppercase tracking-wider mt-1 flex items-center gap-1"
                >
                  <i class="fa-solid fa-headset"></i> Layanan Online
                </div>
              </div>
            </div>

            <!-- Info -->
            <div class="flex items-center gap-3 pt-2 text-sm text-white/80">
              <i class="fa-solid fa-location-dot text-[#6FAED9]"></i>
              <span
                >Ruang BK SMK Budi Bakti Ciwidey, Jl. Babakan Tiga No.82</span
              >
            </div>
          </div>

          <!-- Right -->
          <div class="relative floating" style="animation-duration: 8s">
            <div
              class="absolute -inset-6 bg-gradient-to-r from-[#4F8DB8]/40 via-[#6FAED9]/40 to-[#4F8DB8]/40 rounded-[3rem] blur-3xl"
            ></div>
            <div
              class="absolute -inset-4 bg-gradient-to-r from-white/30 to-white/10 rounded-[3rem] blur-2xl"
            ></div>

            <!-- Main image -->
            <div
              class="relative rounded-[2.5rem] overflow-hidden shadow-2xl border-2 border-white-400/30 backdrop-blur-sm"
            >
              <div
                class="absolute inset-0 bg-gradient-to-tr from-[#17235b]/40 via-transparent to-[#4F8DB8]/40 mix-blend-overlay z-10"
              ></div>
              <img
                src="img/konseling online.png"
                alt="BK Care SMK Budi Bakti"
                class="w-full h-auto object-cover"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&auto=format&fit=crop'
                "
              />
            </div>

            <!-- Floating badges -->
            <div
              class="absolute -bottom-6 -left-6 glass-card-deep rounded-2xl px-6 py-4 shadow-2xl flex items-center gap-3"
            >
              <div
                class="w-3 h-3 bg-green-500 rounded-full animate-pulse"
              ></div>
              <div>
                <span class="font-bold text-[#17235b]">Konseling Gratis</span>
                <p class="text-xs text-gray-500">Untuk seluruh siswa SMK</p>
              </div>
            </div>

            <div
              class="absolute -top-6 -right-6 bg-white rounded-2xl px-5 py-3 shadow-2xl flex items-center gap-3"
            >
              <i class="fa-solid fa-crown text-[#17235b] text-lg"></i>
              <span class="font-bold text-[#17235b]">Eksklusif</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== BRANDING ===== -->
    <section class="py-12 relative">
      <div class="max-w-7xl mx-auto px-6">
        <div class="glass-card rounded-3xl py-8 px-10 relative overflow-hidden">
          <div
            class="absolute top-0 right-0 w-40 h-40 bg-yellow-400/10 rounded-full blur-3xl"
          ></div>
          <div
            class="absolute bottom-0 left-0 w-40 h-40 bg-[#4F8DB8]/10 rounded-full blur-3xl"
          ></div>

          <div
            class="relative z-10 flex flex-wrap items-center justify-between gap-6"
          >
            <div class="flex items-center gap-4">
              <div
                class="w-16 h-16 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg"
              >
                <span class="font-bold text-xl">SMK</span>
              </div>
              <div>
                <span
                  class="text-sm font-bold text-[#17235b] uppercase tracking-wider flex items-center gap-2"
                >
                  <i class="fa-solid fa-star text-yellow-500"></i>
                  <i class="fa-solid fa-star text-yellow-500"></i>
                  <i class="fa-solid fa-star text-yellow-500"></i> SEKOLAH
                  MENENGAH KEJURUAN
                </span>
                <h3 class="text-2xl md:text-3xl font-bold text-[#17235b]">
                  Budi Bakti Ciwidey
                </h3>
                <p class="text-sm text-gray-500">
                  Terakreditasi A - Berdiri sejak 1972
                </p>
              </div>
            </div>

            <div class="flex flex-wrap gap-4">
              <div
                class="bg-white/70 backdrop-blur-sm px-5 py-3 rounded-xl border border-white/50"
              >
                <span class="text-xs text-gray-500">Total Siswa</span>
                <p class="font-bold text-[#17235b] text-xl">
                  1.247
                  <span class="text-xs font-normal text-gray-500">siswa</span>
                </p>
              </div>
              <div
                class="bg-white/70 backdrop-blur-sm px-5 py-3 rounded-xl border border-white/50"
              >
                <span class="text-xs text-gray-500">Konselor BK</span>
                <p class="font-bold text-[#17235b] text-xl">
                  8 <span class="text-xs font-normal text-gray-500">orang</span>
                </p>
              </div>
              <div
                class="bg-[#4F8DB8] backdrop-blur-sm px-5 py-3 rounded-xl border border-[#17235b]"
              >
                <span class="text-xs text-white">Sesi Bulan Ini</span>
                <p class="font-bold text-white text-xl">
                  70
                  <span class="text-xs font-normal text-white">konseling</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== ABOUT ===== -->
    <section class="py-24 relative">
      <div class="max-w-7xl mx-auto px-6">
        <!-- Header -->
        <div class="max-w-3xl mx-auto text-center mb-16">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4 border border-white/50 pulse-glow"
          >
            <i class="fa-solid fa-heart mr-2 text-[#4F8DB8]"></i> LAYANAN KHUSUS
            SMK BUDI BAKTI CIWIDEY
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            <span class="text-gradient">BK Care untuk</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >SMK Budi Bakti Ciwidey</span
            >
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Layanan konseling yang terintegrasi langsung dengan kurikulum dan
            kegiatan siswa SMK Budi Bakti Ciwidey. Ruang aman untuk berbagi,
            tumbuh, dan berkembang.
          </p>
        </div>

        <!-- About Grid -->
        <div class="grid lg:grid-cols-2 gap-16 items-center">
          <!-- Left -->
          <div class="relative group">
            <div
              class="absolute -top-6 -left-6 w-full h-full bg-[#6FAED9]/30 rounded-[2.5rem] rotate-2"
            ></div>
            <div
              class="absolute -bottom-6 -right-6 w-full h-full bg-[#4F8DB8]/30 rounded-[2.5rem] -rotate-2"
            ></div>
            <div
              class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8]/20 to-transparent rounded-[2.5rem] blur-xl"
            ></div>
            <div
              class="relative rounded-[2.5rem] overflow-hidden shadow-2xl transition-all duration-500 group-hover:scale-[1.02]"
            >
              <img
                src="img/about.jpg"
                alt="Ruang BK SMK Budi Bakti"
                class="w-full h-[450px] object-cover"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&auto=format&fit=crop'
                "
              />

              <!-- Badge ruang BK -->
              <div
                class="absolute bottom-6 left-6 glass-card-deep rounded-2xl px-6 py-4 flex items-center gap-3"
              >
                <i class="fa-solid fa-building text-[#4F8DB8] text-xl"></i>
                <div>
                  <span class="font-bold text-[#17235b]">Ruang BK SMK</span>
                  <p class="text-xs text-gray-500">Lt. 1, Bawah Perpustakaan</p>
                </div>
              </div>

              <div
                class="absolute top-6 right-6 bg-white backdrop-blur-sm rounded-xl px-4 py-2 flex items-center gap-2 shadow-lg"
              >
                <i class="fa-solid fa-award text-[#17235b]"></i>
                <span class="font-bold text-[#17235b] text-sm"
                  >Terakreditasi A</span
                >
              </div>
            </div>
          </div>

          <!-- Right -->
          <div class="space-y-8">
            <div
              class="glass-card rounded-3xl p-8 hover:shadow-xl transition-all"
            >
              <div class="flex items-start gap-4">
                <div>
                  <h3 class="text-2xl font-bold text-[#17235b] mb-2">
                    BK Care SMK Budi Bakti Ciwidey
                  </h3>
                  <p class="text-gray-600 leading-relaxed">
                    BK Care for School Life hadir khusus untuk
                    <span class="font-bold text-[#4F8DB8]"
                      >1.247 siswa SMK Budi Bakti Ciwidey</span
                    >
                    sebagai platform konseling digital terintegrasi. Dirancang
                    sebagai ruang aman, nyaman, dan terpercaya untuk berbagi
                    cerita, perasaan, serta permasalahan yang dihadapi dalam
                    kehidupan sekolah.
                  </p>
                </div>
              </div>
            </div>

            <!-- Services Cards -->
            <div class="grid sm:grid-cols-2 gap-6">
              <div
                class="glass-card rounded-2xl p-6 service-card border-l-4 border-l-[#4F8DB8]"
              >
                <div
                  class="w-12 h-12 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white mb-4"
                >
                  <i class="fa-solid fa-laptop"></i>
                </div>
                <h4 class="text-lg font-bold text-[#17235b] mb-2">
                  Konseling Online
                </h4>
                <p class="text-sm text-gray-500 mb-3">
                  Khusus siswa SMK Budi Bakti. Video call dengan konselor
                  sekolah, chat privat, voice note.
                </p>
                <div class="flex items-center gap-2">
                  <span
                    class="inline-flex items-center gap-1 text-xs font-semibold text-[#4F8DB8] bg-[#4F8DB8]/10 px-3 py-1.5 rounded-full"
                  >
                    <i class="fa-regular fa-clock"></i> 24/7
                  </span>
                  <span
                    class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-100 px-3 py-1.5 rounded-full"
                  >
                    <i class="fa-regular fa-bolt"></i> GRATIS
                  </span>
                </div>
              </div>

              <div
                class="glass-card rounded-2xl p-6 service-card border-l-4 border-l-[#17235b]"
              >
                <div
                  class="w-12 h-12 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-xl flex items-center justify-center text-white mb-4"
                >
                  <i class="fa-solid fa-building"></i>
                </div>
                <h4 class="text-lg font-bold text-[#17235b] mb-2">
                  Konseling Offline
                </h4>
                <p class="text-sm text-gray-500 mb-3">
                  Tatap muka langsung di ruang BK SMK Budi Bakti. Asesmen karir
                  dan konseling pribadi.
                </p>
                <div class="flex items-center gap-2">
                  <span
                    class="inline-flex items-center gap-1 text-xs font-semibold text-[#17235b] bg-[#17235b]/10 px-3 py-1.5 rounded-full"
                  >
                    <i class="fa-regular fa-location-dot"></i> Ruang BK
                  </span>
                  <span
                    class="inline-flex items-center gap-1 text-xs font-semibold text-[#4F8DB8] bg-[#4F8DB8]/10 px-3 py-1.5 rounded-full"
                  >
                    <i class="fa-regular fa-users"></i> Kelompok
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== LAYANAN KHUSUS ===== -->
    <section class="py-24 bg-white/50 backdrop-blur-sm">
      <div class="max-w-7xl mx-auto px-6">
        <!-- Header -->
        <div class="max-w-3xl mx-auto text-center mb-16">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4"
          >
            <i class="fa-solid fa-headset mr-2"></i> LAYANAN EKSKLUSIF SMK
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            <span class="text-gradient">Pilih Metode Konseling</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >Online & Offline • GRATIS</span
            >
          </h2>
          <p class="text-lg text-gray-600">
            Seluruh layanan konseling untuk siswa SMK Budi Bakti Ciwidey
            <span class="font-bold text-emerald-600">TIDAK DIPUNGUT BIAYA</span
            >.
          </p>
        </div>

        <!-- Services Comparison - Spesifik SMK -->
        <div class="grid lg:grid-cols-2 gap-8">
          <!-- Online Service - Glass Card - GRATIS -->
          <div class="group relative service-card">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur-xl opacity-30 group-hover:opacity-70 transition duration-500"
            ></div>
            <div
              class="relative glass-card-deep rounded-3xl p-8 h-full flex flex-col"
            >
              <!-- Badge GRATIS -->
              <div
                class="absolute top-0 right-0 bg-[#6FAED9] text-white text-xs font-bold px-4 py-2 rounded-bl-2xl rounded-tr-3xl"
              >
                ⚡ GRATIS UNTUK SISWA
              </div>

              <div class="flex items-center gap-4 mb-6">
                <div
                  class="w-20 h-20 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-2xl flex items-center justify-center text-white text-3xl transform group-hover:rotate-6 transition-all duration-500 shadow-lg"
                >
                  <i class="fa-solid fa-wifi"></i>
                </div>
                <div>
                  <span
                    class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
                    >Online • SMK Budi Bakti</span
                  >
                  <h3 class="text-2xl font-bold text-[#17235b]">
                    Konseling Online
                  </h3>
                </div>
              </div>

              <div class="space-y-4 mb-8 flex-grow">
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Video Call dengan Konselor SMK</span
                    >
                    <p class="text-sm text-gray-500">
                      Bertemu langsung via Zoom/Google Meet dengan 8 konselor
                      sekolah
                    </p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Chat & Voice Note</span
                    >
                    <p class="text-sm text-gray-500">
                      Konsultasi kapan saja via WhatsApp/Telegram, respons
                      maksimal 2 jam
                    </p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Jadwal Fleksibel</span
                    >
                    <p class="text-sm text-gray-500">
                      Sesi sore & malam khusus siswa PKL/Izin praktik
                    </p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Konseling Karir SMK</span
                    >
                    <p class="text-sm text-gray-500">
                      Bimbingan pemilihan jurusan kuliah, BUMN, atau wirausaha
                    </p>
                  </div>
                </div>
              </div>

              <div class="mt-auto">
                <div class="flex items-center justify-between mb-4">
                  <span class="text-sm text-gray-500"
                    >Biaya untuk siswa SMK</span
                  >
                  <span class="text-3xl font-bold text-gradient-blue"
                    >GRATIS</span
                  >
                  <span class="text-sm text-gray-500">*eksklusif</span>
                </div>
                <a
                  href="#"
                  class="block w-full text-center bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white font-bold py-4 px-6 rounded-xl hover:shadow-xl hover:shadow-[#4F8DB8]/30 transition-all duration-500 hover:scale-[1.02]"
                >
                  <i class="fa-regular fa-calendar-check mr-2"></i> Ajukan
                  Konseling Online
                </a>
              </div>
            </div>
          </div>

          <!-- Offline -->
          <div class="group relative service-card">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] rounded-3xl blur-xl opacity-30 group-hover:opacity-70 transition duration-500"
            ></div>
            <div
              class="relative glass-card-deep rounded-3xl p-8 h-full flex flex-col"
            >
              <div
                class="absolute top-0 right-0 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] text-white text-xs font-bold px-4 py-2 rounded-bl-2xl rounded-tr-3xl"
              >
                👑 DI REKOMENDASIKAN
              </div>

              <div class="flex items-center gap-4 mb-6">
                <div
                  class="w-20 h-20 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-2xl flex items-center justify-center text-white text-3xl transform group-hover:-rotate-6 transition-all duration-500 shadow-lg"
                >
                  <i class="fa-solid fa-building"></i>
                </div>
                <div>
                  <span
                    class="text-sm font-bold text-[#17235b] uppercase tracking-wider"
                    >Offline • Ruang BK SMK</span
                  >
                  <h3 class="text-2xl font-bold text-[#17235b]">
                    Konseling Offline
                  </h3>
                </div>
              </div>

              <div class="space-y-4 mb-8 flex-grow">
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#17235b]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Tatap Muka Langsung</span
                    >
                    <p class="text-sm text-gray-500">
                      Konseling face-to-face dengan guru BK, durasi 60 menit
                    </p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#17235b]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Ruang BK Premium</span
                    >
                    <p class="text-sm text-gray-500">
                      Ruang konseling kedap suara, nyaman, dan terjamin
                      privasinya
                    </p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#17235b]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800">Tes Minat Bakat</span>
                    <p class="text-sm text-gray-500">
                      Asesmen psikologis untuk penjurusan dan perencanaan karir
                    </p>
                  </div>
                </div>
                <div class="flex items-start gap-3">
                  <div
                    class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                  >
                    <i class="fa-solid fa-check text-xs text-[#17235b]"></i>
                  </div>
                  <div>
                    <span class="font-bold text-gray-800"
                      >Konseling Kelompok</span
                    >
                    <p class="text-sm text-gray-500">
                      Sesi berbagi dengan teman sekelas, didampingi konselor
                    </p>
                  </div>
                </div>
              </div>

              <div class="mt-auto">
                <div class="flex items-center justify-between mb-4">
                  <span class="text-sm text-gray-500"
                    >Biaya untuk siswa SMK</span
                  >
                  <span class="text-3xl font-bold text-[#17235b]">GRATIS</span>
                  <span class="text-sm text-gray-500">*eksklusif</span>
                </div>
                <a
                  href="#"
                  class="block w-full text-center bg-gradient-to-r from-[#17235b] to-[#2a3a7a] text-white font-bold py-4 px-6 rounded-xl hover:shadow-xl hover:shadow-[#17235b]/30 transition-all duration-500 hover:scale-[1.02]"
                >
                  <i class="fa-regular fa-calendar mr-2"></i> Ajukan Konseling
                  Offline
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Info-->
        <div class="mt-12 glass-card rounded-2xl p-6">
          <div class="flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-3">
              <div
                class="w-12 h-12 bg-[#17235b]/10 rounded-xl flex items-center justify-center"
              >
                <i class="fa-solid fa-clock text-[#17235b] text-xl"></i>
              </div>
              <div>
                <span class="font-bold text-[#17235b]"
                  >Jam Layanan Ruang BK SMK Budi Bakti</span
                >
                <p class="text-sm text-gray-500">
                  Senin - Sabtu: 08.00 - 16.00
                </p>
              </div>
            </div>
            <div class="flex gap-2">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] px-4 py-2 rounded-full text-xs font-semibold border border-[#4F8DB8]/30"
              >
                <i class="fa-regular fa-location-dot mr-1"></i> Lt. 1 Gedung
                Utama
              </span>
              <span
                class="bg-[#17235b]/50 text-white px-4 py-2 rounded-full text-xs font-semibold border border-[#17235b]/30"
              >
                <i class="fa-regular fa-phone mr-1"></i> 0812-3456-7890 (BK)
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== PROGRAM KHUSUS SMK BUDI BAKTI ===== -->
    <section class="py-24 relative">
      <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4"
          >
            <i class="fa-solid fa-star mr-2"></i> PROGRAM UNGGULAN SMK
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            <span class="text-gradient">Program Khusus</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >Siswa SMK Budi Bakti Ciwidey</span
            >
          </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="glass-card rounded-3xl p-8 service-card text-center">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-2xl flex items-center justify-center text-white text-3xl mb-6"
            >
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-3">
              Bimbingan Karir & PKL
            </h3>
            <p class="text-gray-500 text-sm mb-4">
              Konseling persiapan Praktik Kerja Lapangan, pemilihan tempat PKL,
              dan strategi sukses di dunia industri.
            </p>
            <span
              class="inline-block bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs font-bold px-4 py-2 rounded-full"
            >
              Semua kelas dan jurusan
            </span>
          </div>

          <div class="glass-card rounded-3xl p-8 service-card text-center">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-2xl flex items-center justify-center text-white text-3xl mb-6"
            >
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-3">
              Persiapan Kuliah & Kerja
            </h3>
            <p class="text-gray-500 text-sm mb-4">
              Tes minat bakat, bimbingan SNBP/SNBT, dan persiapan interview
              kerja untuk lulusan SMK.
            </p>
            <span
              class="inline-block bg-[#17235b]/10 text-[#17235b] text-xs font-bold px-4 py-2 rounded-full"
            >
              Kelas XII • Semua jurusan
            </span>
          </div>

          <div class="glass-card rounded-3xl p-8 service-card text-center">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] rounded-2xl flex items-center justify-center text-white text-3xl mb-6"
            >
              <i class="fa-solid fa-hand-holding-heart"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-3">
              Peer Counseling
            </h3>
            <p class="text-gray-500 text-sm mb-4">
              Program konseling teman sebaya. Siswa dilatih menjadi pendengar
              aktif untuk membantu sesama.
            </p>
            <span
              class="inline-block bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs font-bold px-4 py-2 rounded-full"
            >
              Semua kelas dan jurusan
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== TIM ===== -->
    <section class="py-24 bg-white/50 backdrop-blur-sm">
      <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4"
          >
            <i class="fa-solid fa-user-tie mr-2"></i> TIM BK SMK BUDI BAKTI
            CIWIDEY
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            <span class="text-gradient">Konselor Profesional</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >Siap Membantumu</span
            >
          </h2>
          <p class="text-lg text-gray-600">
            Didampingi oleh 8 konselor lulusan Bimbingan Konseling yang siap
            mendengarkan dan membantu.
          </p>
        </div>

        <!-- Counselors Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="glass-card rounded-3xl p-8 text-center service-card">
            <div class="relative inline-block">
              <div
                class="w-28 h-28 mx-auto rounded-full bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] p-1 mb-4"
              >
                <img
                  src="img/guru.jpg"
                  class="w-full h-full rounded-full object-cover border-2 border-white"
                  onerror="
                    this.src =
                      'https://randomuser.me/api/portraits/women/50.jpg'
                  "
                />
              </div>
              <div
                class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-2 border-white flex items-center justify-center"
              >
                <i class="fa-solid fa-check text-white text-xs"></i>
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#17235b]">
              Denia Prasetya Dewi, S.Pd.
            </h3>
            <p class="text-[#4F8DB8] font-semibold text-sm mb-2">
              Koordinator BK
            </p>
            <p class="text-gray-500 text-xs mb-4">
              15+ tahun • Konseling Pribadi
            </p>
            <div class="flex justify-center gap-2">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] text-xs px-3 py-1.5 rounded-full font-semibold"
                >Online</span
              >
              <span
                class="bg-[#17235b]/20 text-[#17235b] text-xs px-3 py-1.5 rounded-full font-semibold"
                >Offline</span
              >
            </div>
          </div>

          <div class="glass-card rounded-3xl p-8 text-center service-card">
            <div class="relative inline-block">
              <div
                class="w-28 h-28 mx-auto rounded-full bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] p-1 mb-4"
              >
                <img
                  src="https://randomuser.me/api/portraits/men/32.jpg"
                  class="w-full h-full rounded-full object-cover border-2 border-white"
                />
              </div>
              <div
                class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-2 border-white flex items-center justify-center"
              >
                <i class="fa-solid fa-check text-white text-xs"></i>
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#17235b]">
              Drs. H. Ahmad Fauzi
            </h3>
            <p class="text-[#4F8DB8] font-semibold text-sm mb-2">
              Konseling Karir
            </p>
            <p class="text-gray-500 text-xs mb-4">20+ tahun • Bimbingan PKL</p>
            <div class="flex justify-center gap-2">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] text-xs px-3 py-1.5 rounded-full font-semibold"
                >Online</span
              >
              <span
                class="bg-[#17235b]/20 text-[#17235b] text-xs px-3 py-1.5 rounded-full font-semibold"
                >Offline</span
              >
            </div>
          </div>

          <div class="glass-card rounded-3xl p-8 text-center service-card">
            <div class="relative inline-block">
              <div
                class="w-28 h-28 mx-auto rounded-full bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] p-1 mb-4"
              >
                <img
                  src="https://randomuser.me/api/portraits/women/68.jpg"
                  class="w-full h-full rounded-full object-cover border-2 border-white"
                />
              </div>
              <div
                class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-2 border-white flex items-center justify-center"
              >
                <i class="fa-solid fa-check text-white text-xs"></i>
              </div>
            </div>
            <h3 class="text-xl font-bold text-[#17235b]">
              Rina Sugiarti, S.Psi.
            </h3>
            <p class="text-[#4F8DB8] font-semibold text-sm mb-2">
              Psikolog Remaja
            </p>
            <p class="text-gray-500 text-xs mb-4">8+ tahun • Mental Health</p>
            <div class="flex justify-center gap-2">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] text-xs px-3 py-1.5 rounded-full font-semibold"
                >Online</span
              >
              <span
                class="bg-[#17235b]/20 text-[#17235b] text-xs px-3 py-1.5 rounded-full font-semibold"
                >Offline</span
              >
            </div>
          </div>
        </div>

        <div class="text-center mt-10">
          <a
            href="#"
            class="inline-flex items-center gap-2 text-[#4F8DB8] font-bold hover:gap-3 transition-all"
          >
            Lihat Semua Konselor
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- ===== MATERI  ===== -->
    <section class="py-24 relative">
      <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-16">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4"
          >
            <i class="fa-solid fa-graduation-cap mr-2"></i> MATERI UNTUK SISWA
            SMK
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            <span class="text-gradient">Belajar, tumbuh,</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >dan sukses bersama BK Care</span
            >
          </h2>
        </div>

        <!-- Cards Grid - Spesifik SMK -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Card 1 - PKL -->
          <div
            class="group glass-card rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
          >
            <div
              class="h-48 overflow-hidden bg-gradient-to-br from-[#17235b] to-[#2a3a7a] flex items-center justify-center"
            >
              <i
                class="fa-solid fa-briefcase text-white text-6xl opacity-30"
              ></i>
            </div>
            <div class="p-6">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] text-xs font-bold px-3 py-1.5 rounded-full"
                >PKL & Industri</span
              >
              <h3 class="text-xl font-bold text-[#17235b] mt-3 mb-2">
                Sukses Praktik Kerja Lapangan
              </h3>
              <p class="text-gray-500 text-sm mb-4">
                Tips memilih tempat PKL, etika di dunia kerja, dan mengatasi
                stres saat praktik.
              </p>
              <a
                href="#"
                class="inline-flex items-center gap-1 text-[#4F8DB8] font-bold text-sm hover:gap-2 transition-all"
              >
                Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 2 - Karir -->
          <div
            class="group glass-card rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
          >
            <div
              class="h-48 overflow-hidden bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] flex items-center justify-center"
            >
              <i
                class="fa-solid fa-chart-line text-white text-6xl opacity-30"
              ></i>
            </div>
            <div class="p-6">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] text-xs font-bold px-3 py-1.5 rounded-full"
                >Karir</span
              >
              <h3 class="text-xl font-bold text-[#17235b] mt-3 mb-2">
                Pilihan Setelah Lulus SMK
              </h3>
              <p class="text-gray-500 text-sm mb-4">
                Kuliah, kerja, atau wirausaha? Kenali potensi diri dan peluang
                karir masa depan.
              </p>
              <a
                href="#"
                class="inline-flex items-center gap-1 text-[#4F8DB8] font-bold text-sm hover:gap-2 transition-all"
              >
                Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>

          <!-- Card 3 - Mental Health -->
          <div
            class="group glass-card rounded-3xl overflow-hidden hover:shadow-2xl transition-all duration-500 hover:-translate-y-2"
          >
            <div
              class="h-48 overflow-hidden bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] flex items-center justify-center"
            >
              <i class="fa-solid fa-heart text-white text-6xl opacity-30"></i>
            </div>
            <div class="p-6">
              <span
                class="bg-[#4F8DB8]/20 text-[#4F8DB8] text-xs font-bold px-3 py-1.5 rounded-full"
                >Mental Health</span
              >
              <h3 class="text-xl font-bold text-[#17235b] mt-3 mb-2">
                Stres Akademik & PKL
              </h3>
              <p class="text-gray-500 text-sm mb-4">
                Cara mengelola tekanan tugas, ujian, dan adaptasi di lingkungan
                industri.
              </p>
              <a
                href="#"
                class="inline-flex items-center gap-1 text-[#4F8DB8] font-bold text-sm hover:gap-2 transition-all"
              >
                Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="text-center mt-12">
          <a
            href="#"
            class="inline-flex items-center gap-2 glass-card-deep px-8 py-4 rounded-full text-[#17235b] font-bold hover:shadow-xl transition-all"
          >
            <i class="fa-regular fa-compass"></i>
            Lihat Semua Materi SMK
            <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- ===== GALLERY ===== -->
    <section class="py-24 bg-white/50 backdrop-blur-sm">
      <div class="max-w-7xl mx-auto px-6">
        <div class="max-w-3xl mx-auto text-center mb-12">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4"
          >
            <i class="fa-solid fa-camera mr-2"></i> DOKUMENTASI BK SMK BUDI
            BAKTI CIWIDEY
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold mb-6">
            <span class="text-gradient">Cerita dari</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >Ruang Konseling</span
            >
          </h2>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          <div
            class="glass-card rounded-2xl overflow-hidden aspect-square p-2 service-card"
          >
            <div class="relative w-full h-full rounded-xl overflow-hidden">
              <img
                src="img/5.jpg"
                class="w-full h-full object-cover"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&auto=format&fit=crop'
                "
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-3"
              >
                <span class="text-white text-xs font-semibold"
                  >Konseling individu</span
                >
              </div>
            </div>
          </div>

          <div
            class="glass-card rounded-2xl overflow-hidden aspect-square p-2 service-card"
          >
            <div class="relative w-full h-full rounded-xl overflow-hidden">
              <img
                src="img/6.jpg"
                class="w-full h-full object-cover"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=400&auto=format&fit=crop'
                "
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-3"
              >
                <span class="text-white text-xs font-semibold"
                  >Sesi kelompok</span
                >
              </div>
            </div>
          </div>

          <div
            class="glass-card rounded-2xl overflow-hidden aspect-square p-2 service-card"
          >
            <div class="relative w-full h-full rounded-xl overflow-hidden">
              <img
                src="img/7.jpg"
                class="w-full h-full object-cover"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&auto=format&fit=crop'
                "
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-3"
              >
                <span class="text-white text-xs font-semibold"
                  >Seminar karir</span
                >
              </div>
            </div>
          </div>

          <div
            class="glass-card rounded-2xl overflow-hidden aspect-square p-2 service-card"
          >
            <div class="relative w-full h-full rounded-xl overflow-hidden">
              <img
                src="img/8.jpg"
                class="w-full h-full object-cover"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=400&auto=format&fit=crop'
                "
              />
              <div
                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-end p-3"
              >
                <span class="text-white text-xs font-semibold">Ruang BK</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="py-20 relative">
      <div
        class="absolute inset-0 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] rounded-3xl max-w-7xl mx-auto left-6 right-6"
      ></div>
      <div
        class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute bottom-0 left-0 w-96 h-96 bg-[#4F8DB8]/20 rounded-full blur-3xl"
      ></div>

      <div class="relative max-w-4xl mx-auto px-6 text-center">
        <div
          class="glass-card-deep rounded-3xl p-12 border-white/20 bg-white/10 backdrop-blur-md"
        >
          <span
            class="inline-block bg-[#4F8DB8]-400/30 text-white px-5 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4 border border-[#4F8DB8]-400/50"
          >
            <i class="fa-regular fa-gift mr-1"></i> KHUSUS SISWA SMK BUDI BAKTI
            CIWIDEY
          </span>
          <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
            Butuh Teman Cerita?
          </h2>
          <p class="text-xl text-white/90 mb-10 max-w-2xl mx-auto">
            Konselor BK SMK Budi Bakti Ciwidey mendengarkan. Gratis, rahasia,
            dan tanpa penghakiman.
          </p>
          <div class="flex flex-wrap gap-6 justify-center">
            <a
              href="#"
              class="group bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white font-bold px-10 py-5 rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-500 flex items-center gap-3 shadow-xl"
            >
              <i class="fa-solid fa-comments"></i>
              Login & Chat Konselor Sekarang
              <i
                class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"
              ></i>
            </a>
          </div>
          <div
            class="flex items-center justify-center gap-6 mt-8 text-white/80 text-sm"
          >
            <span
              ><i class="fa-regular fa-circle-check mr-1"></i> GRATIS 100%</span
            >
            <span
              ><i class="fa-regular fa-lock mr-1"></i> Privasi terjamin</span
            >
            <span><i class="fa-regular fa-bolt mr-1"></i> Respons cepat</span>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER - SMK BUDI BAKTI CIWIDEY ===== -->
    <footer class="relative py-16 mt-10">
      <div class="absolute inset-0 bg-[#0A2540] rounded-t-3xl"></div>
      <div
        class="absolute top-0 left-20 w-64 h-64 bg-[#4F8DB8]/20 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute bottom-0 right-20 w-64 h-64 bg-[#6FAED9]/20 rounded-full blur-3xl"
      ></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <div
          class="glass-card-deep rounded-4xl p-12 border-white/20 bg-white/5 backdrop-blur-md"
        >
          <!-- Main Footer -->
          <div
            class="grid lg:grid-cols-12 gap-8 pb-12 border-b border-white/10"
          >
            <!-- Brand -->
            <div class="lg:col-span-4">
              <div class="flex items-center gap-3 mb-4">
                <img
                  src="img/LOGO BK.png"
                  alt="BK CARE"
                  class="h-12 w-auto brightness-0 invert"
                  onerror="
                    this.src =
                      'https://via.placeholder.com/120x48/ffffff/0A2540?text=BK+CARE'
                  "
                />
                <span
                  class="bg-blue-400/20 text-blue-100 text-xs px-3 py-1.5 rounded-full border border-blue-400/30"
                >
                  SMK Budi Bakti Ciwidey
                </span>
              </div>
              <p class="text-sm text-white/70 leading-relaxed max-w-xs">
                Layanan konseling resmi untuk
                <span class="font-bold text-blue-300"
                  >SMK Budi Bakti Ciwidey</span
                >. Mendukung kesejahteraan siswa secara akademik, sosial, dan
                personal.
              </p>
              <div class="flex gap-3 mt-6">
                <a
                  href="#"
                  class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-[#4F8DB8] transition-all"
                >
                  <i class="fa-brands fa-facebook-f text-white"></i>
                </a>
                <a
                  href="#"
                  class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-[#4F8DB8] transition-all"
                >
                  <i class="fa-brands fa-instagram text-white"></i>
                </a>
                <a
                  href="#"
                  class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-[#4F8DB8] transition-all"
                >
                  <i class="fa-brands fa-tiktok text-white"></i>
                </a>
                <a
                  href="#"
                  class="w-10 h-10 bg-white/10 rounded-xl flex items-center justify-center hover:bg-[#4F8DB8] transition-all"
                >
                  <i class="fa-brands fa-youtube text-white"></i>
                </a>
              </div>
            </div>

            <!-- Menu -->
            <div class="lg:col-span-2">
              <h4
                class="text-white font-bold mb-4 text-sm uppercase tracking-wider"
              >
                Menu
              </h4>
              <ul class="space-y-2 text-sm">
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Beranda SMK</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Tentang BK Care</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Materi SMK</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Jadwal Konseling</a
                  >
                </li>
              </ul>
            </div>

            <!-- Informasi -->
            <div class="lg:col-span-2">
              <h4
                class="text-white font-bold mb-4 text-sm uppercase tracking-wider"
              >
                Layanan SMK
              </h4>
              <ul class="space-y-2 text-sm">
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Konseling Online</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Konseling Offline</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span>
                    Bimbingan Karir</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-white/70 hover:text-white transition flex items-center gap-2"
                    ><span class="w-1 h-1 bg-[#4F8DB8] rounded-full"></span> Tes
                    Minat Bakat</a
                  >
                </li>
              </ul>
            </div>

            <!-- Kontak -->
            <div class="lg:col-span-4">
              <h4
                class="text-white font-bold mb-4 text-sm uppercase tracking-wider"
              >
                Kontak & Lokasi
              </h4>
              <ul class="space-y-4 text-sm">
                <li class="flex items-start gap-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center"
                  >
                    <i class="fa-regular fa-envelope text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="text-white/50 text-xs">Email BK</span>
                    <p class="text-white/90">bkcare.contact@gmail.com</p>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center"
                  >
                    <i class="fa-regular fa-phone text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="text-white/50 text-xs">Telepon Ruang BK</span>
                    <p class="text-white/90">(022) 5928-4567</p>
                    <p class="text-white/70 text-xs">
                      Ext. 112 (Senin-Sabtu, 08.00-16.00)
                    </p>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center"
                  >
                    <i class="fa-regular fa-location-dot text-[#4F8DB8]"></i>
                  </div>
                  <div>
                    <span class="text-white/50 text-xs">Alamat</span>
                    <p class="text-white/90 leading-relaxed">
                      SMK Budi Bakti Ciwidey<br />
                      Jl. Babakan Tiga No.82, Ciwidey<br />
                      Kab. Bandung, Jawa Barat 40973
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- Copyright -->
          <div
            class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm"
          >
            <p class="text-white/60">
              © 2026 BK Care for School Life — by VISIONCODE.
            </p>
            <div class="flex gap-6">
              <a
                href="#"
                class="text-white/60 hover:text-white transition text-xs"
                >Kebijakan Privasi</a
              >
              <a
                href="#"
                class="text-white/60 hover:text-white transition text-xs"
                >Syarat Layanan</a
              >
              <a
                href="#"
                class="text-white/60 hover:text-white transition text-xs"
                >FAQ Siswa</a
              >
              <a
                href="#"
                class="text-white/60 hover:text-white transition text-xs"
                >Hubungi BK</a
              >
            </div>
          </div>

          <div
            class="mt-6 text-center text-white/40 text-[10px] uppercase tracking-wider"
          >
            <i class="fa-regular fa-shield-heart mr-1"></i> LAYANAN KHUSUS SISWA
            SISWI SMK BUDI BAKTI CIWIDEY • GRATIS 100%
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
