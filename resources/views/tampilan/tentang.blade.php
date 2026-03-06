<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About - BK Care</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap");

      * {
        font-family: "Plus Jakarta Sans", sans-serif;
      }

      body {
        background:
          radial-gradient(
            circle at 0% 0%,
            rgba(79, 141, 184, 0.12) 0%,
            transparent 60%
          ),
          radial-gradient(
            circle at 100% 0%,
            rgba(111, 174, 217, 0.12) 0%,
            transparent 60%
          ),
          radial-gradient(
            circle at 100% 100%,
            rgba(79, 141, 184, 0.1) 0%,
            transparent 60%
          ),
          radial-gradient(
            circle at 0% 100%,
            rgba(111, 174, 217, 0.1) 0%,
            transparent 60%
          ),
          linear-gradient(145deg, #ffffff 0%, #f5faff 100%);
        position: relative;
      }

      body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%234F8DB8' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        pointer-events: none;
        opacity: 0.5;
      }

      .glass-card {
        background: rgba(255, 255, 255, 0.75);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.6);
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
        background: linear-gradient(
          145deg,
          #17235b 0%,
          #2a4a7a 50%,
          #4f8db8 100%
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-size: 200% auto;
        animation: shine 8s linear infinite;
      }

      @keyframes shine {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
      }

      .floating {
        animation: float 8s ease-in-out infinite;
      }

      @keyframes float {
        0%,
        100% {
          transform: translateY(0px) rotate(0deg);
        }
        50% {
          transform: translateY(-15px) rotate(0.5deg);
        }
      }

      .floating-slow {
        animation: float-slow 12s ease-in-out infinite;
      }

      @keyframes float-slow {
        0%,
        100% {
          transform: translateY(0px) rotate(0deg);
        }
        50% {
          transform: translateY(-10px) rotate(-0.5deg);
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

      .border-gradient {
        border: double 1px transparent;
        background-image:
          linear-gradient(white, white),
          radial-gradient(circle at top left, #4f8db8, #6faed9);
        background-origin: border-box;
        background-clip: padding-box, border-box;
      }

      .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        background: linear-gradient(145deg, #17235b, #4f8db8);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
      }

      .timeline-dot {
        position: relative;
      }

      .timeline-dot::before {
        content: "";
        position: absolute;
        left: -2.5rem;
        top: 0.5rem;
        width: 1rem;
        height: 1rem;
        background: linear-gradient(145deg, #4f8db8, #6faed9);
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 0 3px rgba(79, 141, 184, 0.2);
      }

      .timeline-dot::after {
        content: "";
        position: absolute;
        left: -2.1rem;
        top: 1.8rem;
        width: 2px;
        height: calc(100% + 1rem);
        background: linear-gradient(to bottom, #4f8db8, #6faed9, transparent);
      }

      .timeline-dot:last-child::after {
        display: none;
      }
    </style>
  </head>

  <body class="font-sans text-gray-700 overflow-x-hidden relative">
    <!-- DECORATIVE ELEMENTS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
      <!-- Large floating orbs -->
      <div
        class="absolute top-20 left-10 w-96 h-96 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full blur-3xl floating"
      ></div>
      <div
        class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-gradient-to-br from-[#6FAED9]/20 to-[#4F8DB8]/20 rounded-full blur-3xl floating-slow"
        style="animation-delay: -4s"
      ></div>
      <div
        class="absolute top-1/3 right-1/4 w-64 h-64 bg-[#17235b]/10 rounded-full blur-3xl floating"
        style="animation-delay: -2s"
      ></div>

      <!-- Abstract shapes -->
      <div
        class="absolute top-40 right-20 w-32 h-32 border-8 border-[#4F8DB8]/10 rounded-full"
      ></div>
      <div
        class="absolute bottom-40 left-20 w-48 h-48 border-8 border-[#6FAED9]/10 rounded-full"
      ></div>

      <!-- Dotted patterns -->
      <div class="absolute top-1/2 left-0 w-64 h-64 opacity-20">
        <div class="grid grid-cols-8 gap-4">
          <div class="w-2 h-2 bg-[#4F8DB8] rounded-full"></div>
          <div class="w-2 h-2 bg-[#4F8DB8] rounded-full"></div>
          <div class="w-2 h-2 bg-[#4F8DB8] rounded-full"></div>
          <div class="w-2 h-2 bg-[#4F8DB8] rounded-full"></div>
        </div>
      </div>
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
        <a href="index.html" class="flex items-center gap-3">
          <img
            src="img/LOGO BK.png"
            class="h-14 w-auto cursor-pointer transition-all duration-300 hover:-translate-y-1 hover:scale-105 drop-shadow-[0_0_6px_white]"
            onerror="
              this.src =
                'https://via.placeholder.com/150x60/17235b/ffffff?text=BK+CARE'
            "
          />
          <span
            class="hidden lg:inline-block text-gray-700 text-xs font-bold bg-white/20 px-3 py-1.5 rounded-full border border-gray"
          >
            SMK BUDI BAKTI CIWIDEY
          </span>
        </a>

        <!-- MENU -->
        <nav
          id="navMenu"
          class="hidden md:flex gap-10 text-sm font-bold text-gray-700 transition-colors duration-300"
        >
          <a
            href="{{ url('/home') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-house text-xs"></i>HOME
            <span
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-[#17235b] rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <a
            href="{{ url('/tentang') }}"
            class="relative group flex items-center gap-2 opacity-100"
          >
            <i class="fa-solid fa-circle-info text-xs"></i> ABOUT
            <span
              class="absolute -bottom-2 left-0 w-2 h-2 bg-[#17235b] rounded-full"
            ></span>
            <span
              class="absolute -bottom-2 left-0 w-8 h-0.5 bg-gradient-to-r from-[#17235b] to-transparent rounded-full"
            ></span>
          </a>

          <a
            href="{{ url('/materi') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-graduation-cap text-xs"></i> EDUCATIONS
            <span
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-[#17235b] rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <a
            href="{{ url('/informasi') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-bullhorn text-xs"></i> INFORMATIONS
            <span
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-[#17235b] rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <!-- BUTTON LOGIN -->
          <a
            id="loginBtn"
            href="{{ url('/login') }}"
            class="relative overflow-hidden group px-9 py-4 rounded-full text-sm font-bold bg-white text-[#4F8DB8] hover:scale-105 transition-all duration-300 flex items-center gap-2 shadow-lg"
          >
            <span class="relative z-10">START LOGIN</span>
            <i
              class="fa-solid fa-arrow-right-to-bracket relative z-10 transition-transform duration-300 group-hover:translate-x-1"
            ></i>
            <span
              class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/60 to-transparent group-hover:translate-x-full transition-transform duration-700"
            ></span>
          </a>
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
          <a href="{{ url('/home') }}" class="flex items-center gap-2">
            <i class="fa-solid fa-house text-xs"></i> HOME
          </a>
          <a href="{{ url('/tentang') }}" class="flex items-center gap-2">
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

          navMenu.classList.remove("text-gray-700");
          navMenu.classList.add("text-gray-800");

          navGlow.style.opacity = "0";

          loginBtn.classList.remove("bg-white", "text-[#4F8DB8]");
          loginBtn.classList.add("bg-[#4F8DB8]", "text-white");
        } else {
          navbar.style.transform = "translateX(-50%) scale(1)";
          navbar.style.top = "24px";

          navMain.classList.add("bg-white/20", "border-white/30");
          navMain.classList.remove("bg-white", "shadow-lg");

          navMenu.classList.add("text-gray-700");
          navMenu.classList.remove("text-gray-800");

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

    <!-- MAIN CONTENT -->
    <main class="max-w-7xl mx-auto px-6 md:px-14 pt-[160px] relative z-10">
      <!-- HERO SECTION -->
      <section class="py-12 grid md:grid-cols-2 gap-20 items-center">
        <!-- Image -->
        <div class="relative">
          <div
            class="absolute -top-10 -left-10 w-40 h-40 bg-[#4F8DB8]/20 rounded-full blur-3xl floating"
          ></div>
          <div
            class="absolute -bottom-10 -right-10 w-60 h-60 bg-[#6FAED9]/20 rounded-full blur-3xl floating-slow"
          ></div>

          <!-- Main image -->
          <div class="relative group perspective">
            <div
              class="relative rounded-[2.5rem] overflow-hidden shadow-2xl transform transition-all duration-700 group-hover:scale-[1.02] group-hover:rotate-1 group-hover:shadow-[#4F8DB8]/30"
            >
              <div
                class="absolute inset-0 bg-gradient-to-tr from-[#17235b]/30 via-transparent to-[#6FAED9]/30 mix-blend-overlay z-10"
              ></div>
              <img
                src="img/about1.png"
                class="w-full h-[450px] object-cover transition-all duration-700 group-hover:scale-110"
                onerror="
                  this.src =
                    'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=800&auto=format&fit=crop'
                "
              />

              <!-- Floating badges -->
              <div
                class="absolute top-6 left-6 bg-white/95 backdrop-blur-xl rounded-2xl px-6 py-3 shadow-2xl border border-white/50 flex items-center gap-3 transform transition-all duration-500 hover:scale-105 z-20"
              ></div>
            </div>
          </div>

          <!-- Thumbnail images -->
          <div
            class="absolute -bottom-8 -left-8 w-28 h-28 rounded-2xl overflow-hidden shadow-xl border-4 border-white transform rotate-6 hover:rotate-12 transition-all duration-500"
          >
            <img
              src="img/about2.png"
              class="w-full h-full object-cover"
              onerror="
                this.src =
                  'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=200&auto=format&fit=crop'
              "
            />
          </div>
          <div
            class="absolute -top-8 -right-8 w-28 h-28 rounded-2xl overflow-hidden shadow-xl border-4 border-white transform -rotate-6 hover:-rotate-12 transition-all duration-500"
          >
            <img
              src="img/about3.png"
              class="w-full h-full object-cover"
              onerror="
                this.src =
                  'https://images.unsplash.com/photo-1552664730-d307ca884978?w=200&auto=format&fit=crop'
              "
            />
          </div>
        </div>

        <!-- Hero Content -->
        <div class="space-y-8">
          <div
            class="inline-flex items-center gap-3 bg-white/80 backdrop-blur-xl px-6 py-3 rounded-full shadow-lg border border-white/60"
          >
            <i
              class="fa-solid fa-heart-circle-check text-[#4F8DB8] text-lg"
            ></i>
            <span class="text-sm font-bold text-[#17235b] tracking-wider"
              >#RuangAmanUntukSemua</span
            >
          </div>

          <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
            <span class="text-gradient block">About BK Care</span>
            <span
              class="bg-gradient-to-r from-[#17235b] via-[#2a4a7a] to-[#4F8DB8] bg-clip-text text-transparent"
              >SMK Budi Bakti Ciwidey</span
            >
          </h1>

          <div class="flex items-center gap-4">
            <div
              class="w-24 h-1.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-full"
            ></div>
            <div
              class="w-3 h-3 rotate-45 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9]"
            ></div>
            <span class="text-sm font-semibold text-[#4F8DB8]">Since 2026</span>
          </div>

          <p class="text-lg leading-relaxed text-gray-600 font-medium">
            BK Care hadir sebagai
            <span class="font-bold text-[#17235b]"
              >jembatan antara siswa dan guru BK</span
            >
            SMK Budi Bakti Ciwidey. Kami memahami bahwa setiap siswa memiliki
            cerita dan tantangan masing-masing. Dengan pendekatan yang humanis
            dan teknologi terkini, kami menciptakan
            <span class="font-bold text-[#4F8DB8]"
              >ruang konseling tanpa batas</span
            >
            yang dapat diakses kapan saja, di mana saja.
          </p>

          <!-- Trust badges -->
          <div class="flex flex-wrap gap-4 pt-4">
            <div
              class="flex items-center gap-2 bg-white/70 backdrop-blur px-4 py-2 rounded-full border border-white/50"
            >
              <i class="fa-solid fa-circle-check text-emerald-500"></i>
              <span class="text-sm font-semibold">Terpercaya</span>
            </div>
            <div
              class="flex items-center gap-2 bg-white/70 backdrop-blur px-4 py-2 rounded-full border border-white/50"
            >
              <i class="fa-solid fa-user-shield text-[#4F8DB8]"></i>
              <span class="text-sm font-semibold">Free Konseling</span>
            </div>
            <div
              class="flex items-center gap-2 bg-white/70 backdrop-blur px-4 py-2 rounded-full border border-white/50"
            >
              <i class="fa-solid fa-lock text-[#6FAED9]"></i>
              <span class="text-sm font-semibold">100% Privasi</span>
            </div>
          </div>
        </div>
      </section>

      <!-- STATISTICS SECTION -->
      <section class="py-16">
        <div class="glass-card-deep rounded-3xl p-10 relative overflow-hidden">
          <div
            class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full blur-3xl"
          ></div>
          <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-[#17235b]/20 to-[#4F8DB8]/20 rounded-full blur-3xl"
          ></div>

          <div class="relative z-10">
            <h2 class="text-3xl font-bold text-center mb-12 text-[#17235b]">
              Dampak BK Care
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
              <div class="text-center group">
                <div
                  class="text-5xl font-bold text-gradient mb-2 group-hover:scale-110 transition-transform"
                >
                  500+
                </div>
                <div class="text-sm font-semibold text-gray-600">
                  Siswa Terdaftar
                </div>
                <div class="text-xs text-gray-500 mt-1">
                  Aktif berkonsultasi
                </div>
              </div>
              <div class="text-center group">
                <div
                  class="text-5xl font-bold text-gradient mb-2 group-hover:scale-110 transition-transform"
                >
                  50+
                </div>
                <div class="text-sm font-semibold text-gray-600">
                  Tindak lanjut
                </div>
                <div class="text-xs text-gray-500 mt-1">Telah terealisasi</div>
              </div>
              <div class="text-center group">
                <div
                  class="text-5xl font-bold text-gradient mb-2 group-hover:scale-110 transition-transform"
                >
                  5+
                </div>
                <div class="text-sm font-semibold text-gray-600">Guru BK</div>
                <div class="text-xs text-gray-500 mt-1">Berpengalaman</div>
              </div>
              <div class="text-center group">
                <div
                  class="text-5xl font-bold text-gradient mb-2 group-hover:scale-110 transition-transform"
                >
                  98%
                </div>
                <div class="text-sm font-semibold text-gray-600">
                  Tingkat Kepuasan
                </div>
                <div class="text-xs text-gray-500 mt-1">Dari 300+ ulasan</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- LAYANAN KONSELING -->
      <section class="py-20">
        <div class="text-center mb-16">
          <span
            class="bg-white/80 backdrop-blur-xl px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm inline-block mb-4 shadow-lg border border-white/60"
          >
            <i class="fa-solid fa-headset mr-2"></i> PILIHAN LAYANAN FLEKSIBEL
          </span>
          <h2 class="text-4xl md:text-5xl font-bold mb-6">
            <span class="text-gradient">Konseling Online & Offline</span>
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Kami menyediakan
            <span class="font-bold text-[#17235b]">dua metode konseling</span>
            yang dapat disesuaikan dengan kebutuhan dan kenyamanan Anda. Bebas
            memilih, tetap didampingi.
          </p>
        </div>

        <!-- Main Service -->
        <div class="grid md:grid-cols-2 gap-10 mb-20">
          <!-- ONLINE -->
          <div class="group relative service-card">
            <!-- Glow effect -->
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur-xl opacity-30 group-hover:opacity-70 transition duration-500"
            ></div>

            <div
              class="relative glass-card-deep rounded-3xl p-8 h-full flex flex-col"
            >
              <!-- Header -->
              <div class="flex items-center gap-4 mb-6">
                <div
                  class="w-20 h-20 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-2xl flex items-center justify-center text-white text-3xl transform group-hover:rotate-6 transition-all duration-500 shadow-lg"
                >
                  <i class="fa-solid fa-laptop"></i>
                </div>
                <div>
                  <span
                    class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
                    >Fleksibel & Modern</span
                  >
                  <h3 class="text-3xl font-bold text-[#17235b]">
                    Konseling Online
                  </h3>
                </div>
              </div>

              <p class="text-gray-600 mb-6 text-lg">
                Lakukan sesi konseling dari mana saja melalui platform digital
                kami.
                <span class="font-bold"
                  >Privasi terjamin, jadwal fleksibel, tanpa batasan
                  geografis.</span
                >
              </p>

              <!-- Fitur -->
              <div class="space-y-5 mb-8 flex-grow">
                <h4 class="font-bold text-[#17235b] flex items-center gap-2">
                  <i class="fa-solid fa-circle-check text-[#4F8DB8]"></i>
                  FITUR LENGKAP ONLINE:
                </h4>

                <div class="grid grid-cols-1 gap-4">
                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i class="fa-solid fa-video text-xs text-[#4F8DB8]"></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800">Video Call HD</span>
                      <p class="text-sm text-gray-500">
                        Sesi tatap muka virtual dengan kualitas, fitur screen
                        sharing, dan rekaman sesi (opsional)
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i class="fa-solid fa-message text-xs text-[#4F8DB8]"></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Live Chat & Voice Note</span
                      >
                      <p class="text-sm text-gray-500">
                        Konseling berbasis teks dan voice note untuk kenyamanan
                        maksimal
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i
                        class="fa-solid fa-calendar-check text-xs text-[#4F8DB8]"
                      ></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Jadwal Fleksibel</span
                      >
                      <p class="text-sm text-gray-500">
                        Bebas pilih jam konseling, termasuk malam & akhir pekan.
                        Reschedule tanpa ribet
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i
                        class="fa-solid fa-file-pdf text-xs text-[#4F8DB8]"
                      ></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Materi & Jurnal Digital</span
                      >
                      <p class="text-sm text-gray-500">
                        Akses modul pengembangan diri, worksheet, dan catatan
                        konseling via dashboard
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i class="fa-solid fa-robot text-xs text-[#4F8DB8]"></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >AI Mood Tracker</span
                      >
                      <p class="text-sm text-gray-500">
                        Fitur pemantauan emosi harian dengan rekomendasi
                        konselor sesuai kebutuhan
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <a
                href="#"
                class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white font-bold py-4 px-6 rounded-xl hover:shadow-xl transition-all duration-500 hover:scale-105 group-hover:shadow-[#4F8DB8]/30"
              >
                <i class="fa-solid fa-headset"></i>
                MULAI KONSELING ONLINE
                <i
                  class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"
                ></i>
              </a>
            </div>
          </div>

          <!-- OFFLINE -->
          <div class="group relative service-card">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] rounded-3xl blur-xl opacity-30 group-hover:opacity-70 transition duration-500"
            ></div>

            <div
              class="relative glass-card-deep rounded-3xl p-8 h-full flex flex-col"
            >
              <div class="flex items-center gap-4 mb-6">
                <div
                  class="w-20 h-20 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-2xl flex items-center justify-center text-white text-3xl transform group-hover:-rotate-6 transition-all duration-500 shadow-lg"
                >
                  <i class="fa-solid fa-building"></i>
                </div>
                <div>
                  <span
                    class="text-sm font-bold text-[#17235b] uppercase tracking-wider"
                    >Personal & Mendalam</span
                  >
                  <h3 class="text-3xl font-bold text-[#17235b]">
                    Konseling Offline
                  </h3>
                </div>
              </div>

              <p class="text-gray-600 mb-6 text-lg">
                Sesi tatap muka langsung dengan konselor di ruang konseling yang
                nyaman dan
                <span class="font-bold"
                  >terjamin kerahasiaannya. Tersedia di 50+ sekolah mitra dan
                  klinik BK Care.</span
                >
              </p>

              <div class="space-y-5 mb-8 flex-grow">
                <h4 class="font-bold text-[#17235b] flex items-center gap-2">
                  <i class="fa-solid fa-circle-check text-[#17235b]"></i>
                  FASILITAS OFFLINE:
                </h4>

                <div class="grid grid-cols-1 gap-4">
                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i
                        class="fa-solid fa-person-chalkboard text-xs text-[#17235b]"
                      ></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Sesi Face-to-Face</span
                      >
                      <p class="text-sm text-gray-500">
                        Konseling langsung dengan metode pendekatan personal,
                        durasi 60-90 menit per sesi
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i class="fa-solid fa-couch text-xs text-[#17235b]"></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Ruang Konseling Premium</span
                      >
                      <p class="text-sm text-gray-500">
                        Ruangan kedap suara, pencahayaan nyaman, sofa ergonomis,
                        dan suhu ruangan ideal
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i
                        class="fa-solid fa-clipboard-list text-xs text-[#17235b]"
                      ></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Asesmen Psikologis</span
                      >
                      <p class="text-sm text-gray-500">
                        Tes minat bakat, tes kepribadian, dan asesmen mental
                        health oleh profesional
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i
                        class="fa-solid fa-people-arrows text-xs text-[#17235b]"
                      ></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Konseling Kelompok</span
                      >
                      <p class="text-sm text-gray-500">
                        Sesi berbagi dalam kelompok kecil (4-8 orang) dengan
                        tema spesifik
                      </p>
                    </div>
                  </div>

                  <div class="flex items-start gap-3">
                    <div
                      class="w-6 h-6 bg-[#17235b]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
                    >
                      <i
                        class="fa-solid fa-hand-holding-heart text-xs text-[#17235b]"
                      ></i>
                    </div>
                    <div>
                      <span class="font-bold text-gray-800"
                        >Rujukan Spesialis</span
                      >
                      <p class="text-sm text-gray-500">
                        Rekomendasi dan pendampingan ke psikolog/psikiater jika
                        diperlukan
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <a
                href="#"
                class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] text-white font-bold py-4 px-6 rounded-xl hover:shadow-xl transition-all duration-500 hover:scale-105 group-hover:shadow-[#17235b]/30"
              >
                <i class="fa-solid fa-calendar-check"></i>
                JADWAL KONSELING OFFLINE
                <i
                  class="fa-solid fa-arrow-right-long group-hover:translate-x-2 transition-transform"
                ></i>
              </a>
            </div>
          </div>
        </div>

        <!-- PERBANDINGAN DETAIL -->
        <div class="glass-card rounded-3xl p-8 mb-20">
          <h3 class="text-2xl font-bold text-[#17235b] mb-6 text-center">
            Bandingkan & Pilih Sesuai Kebutuhan
          </h3>
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="border-b-2 border-gray-200">
                  <th class="py-4 px-6 text-left">Aspek</th>
                  <th
                    class="py-4 px-6 text-center bg-[#4F8DB8]/10 rounded-t-2xl"
                  >
                    <i class="fa-solid fa-laptop mr-2 text-[#4F8DB8]"></i>
                    Konseling Online
                  </th>
                  <th
                    class="py-4 px-6 text-center bg-[#17235b]/10 rounded-t-2xl"
                  >
                    <i class="fa-solid fa-building mr-2 text-[#17235b]"></i>
                    Konseling Offline
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="border-b border-gray-100 bg-gray-50/50">
                  <td class="py-4 px-6 font-semibold">Durasi</td>
                  <td class="py-4 px-6 text-center">45 - 60 menit</td>
                  <td class="py-4 px-6 text-center">60 - 90 menit</td>
                </tr>
                <tr class="border-b border-gray-100">
                  <td class="py-4 px-6 font-semibold">Waktu Operasional</td>
                  <td class="py-4 px-6 text-center">
                    <span
                      class="bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm"
                      >Senin-Sabtu, 13.00-16.00</span
                    >
                  </td>
                  <td class="py-4 px-6 text-center">
                    <span
                      class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm"
                      >Senin-Sabtu, 08.00-11.00</span
                    >
                  </td>
                </tr>
                <tr class="border-b border-gray-100 bg-gray-50/50">
                  <td class="py-4 px-6 font-semibold">Media</td>
                  <td class="py-4 px-6 text-center">
                    WhatsApp, Zoom, Google Meet
                  </td>
                  <td class="py-4 px-6 text-center">Tatap muka langsung</td>
                </tr>
                <tr>
                  <td class="py-4 px-6 font-semibold">Privasi</td>
                  <td class="py-4 px-6 text-center">
                    <i class="fa-solid fa-shield text-emerald-500 mr-1"></i>
                    End-to-end encryption
                  </td>
                  <td class="py-4 px-6 text-center">
                    <i class="fa-solid fa-shield text-emerald-500 mr-1"></i>
                    Ruangan kedap suara
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </section>

      <!-- LAYANAN SPESIFIK -->
      <section
        class="py-16 bg-white/50 backdrop-blur-xl rounded-4xl mb-20 px-8"
      >
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold text-[#17235b] mb-4">
            Program Konseling Spesifik
          </h2>
          <p class="text-xl text-gray-600">
            Layanan yang dirancang untuk kebutuhan spesifik siswa
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
          <div
            class="group p-6 hover:bg-white/80 rounded-2xl transition-all duration-500 border border-transparent hover:border-[#4F8DB8]/30"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform"
            >
              <i class="fa-solid fa-brain"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Konseling Akademik
            </h3>
            <p class="text-gray-500 text-sm mb-3">
              Atasi kesulitan belajar, manajemen waktu, dan motivasi sekolah
            </p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Kesulitan memahami pelajaran
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Prokrastinasi & manajemen tugas
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Persiapan ujian
              </li>
            </ul>
          </div>

          <div
            class="group p-6 hover:bg-white/80 rounded-2xl transition-all duration-500 border border-transparent hover:border-[#4F8DB8]/30"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform"
            >
              <i class="fa-solid fa-user-group"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Konseling Sosial
            </h3>
            <p class="text-gray-500 text-sm mb-3">
              Teman sebaya, perundungan, dan keterampilan bersosialisasi
            </p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i> Konflik
                pertemanan
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Perundungan (bullying)
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Keterampilan komunikasi
              </li>
            </ul>
          </div>

          <div
            class="group p-6 hover:bg-white/80 rounded-2xl transition-all duration-500 border border-transparent hover:border-[#4F8DB8]/30"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform"
            >
              <i class="fa-solid fa-heart"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Konseling Pribadi
            </h3>
            <p class="text-gray-500 text-sm mb-3">
              Kesehatan mental, identitas diri, dan regulasi emosi
            </p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Kecemasan & stres
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i> Percaya
                diri & harga diri
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Manajemen emosi
              </li>
            </ul>
          </div>

          <div
            class="group p-6 hover:bg-white/80 rounded-2xl transition-all duration-500 border border-transparent hover:border-[#4F8DB8]/30"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#4F8DB8] to-[#17235b] rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform"
            >
              <i class="fa-solid fa-briefcase"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Konseling Karir
            </h3>
            <p class="text-gray-500 text-sm mb-3">
              Perencanaan masa depan dan peminatan
            </p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i> Tes
                minat bakat
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Pemilihan jurusan kuliah
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Persiapan karir
              </li>
            </ul>
          </div>

          <div
            class="group p-6 hover:bg-white/80 rounded-2xl transition-all duration-500 border border-transparent hover:border-[#4F8DB8]/30"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#6FAED9] to-[#17235b] rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform"
            >
              <i class="fa-solid fa-people-robbery"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Konseling Keluarga
            </h3>
            <p class="text-gray-500 text-sm mb-3">
              Melibatkan orang tua dalam proses konseling
            </p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Komunikasi orang tua-anak
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Ekspektasi akademik
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Dinamika keluarga
              </li>
            </ul>
          </div>

          <div
            class="group p-6 hover:bg-white/80 rounded-2xl transition-all duration-500 border border-transparent hover:border-[#4F8DB8]/30"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#17235b] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform"
            >
              <i class="fa-solid fa-hand-fist"></i>
            </div>
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Krisis & Darurat
            </h3>
            <p class="text-gray-500 text-sm mb-3">
              Respons cepat untuk situasi darurat
            </p>
            <ul class="space-y-2 text-sm">
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i> Trauma
                & krisis
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Kekerasan seksual
              </li>
              <li class="flex items-center gap-2">
                <i class="fa-solid fa-check text-[#4F8DB8] text-xs"></i>
                Kecenderungan bunuh diri
              </li>
            </ul>
          </div>
        </div>
      </section>

      <!-- TIM -->
      <section class="py-20">
        <div class="text-center mb-16">
          <span
            class="bg-white/80 backdrop-blur-xl px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm inline-block mb-4 shadow-lg border border-white/60"
          >
            <i class="fa-solid fa-user-tie mr-2"></i> BK CARE FOR SCHOOL LIFE
          </span>
          <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#17235b]">
            Guru BK SMK Budi Bakti Ciwidey
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Di dukung penuh oleh <span class="font-bold">sekolah</span> dan guru
            BK dengan latar belakang di bidang
            <span class="font-bold">konseling</span>
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="group relative">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur opacity-30 group-hover:opacity-60 transition"
            ></div>
            <div class="relative bg-white rounded-3xl p-6 text-center">
              <div
                class="w-28 h-28 mx-auto rounded-full bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] p-1 mb-4"
              >
                <img
                  src="https://randomuser.me/api/portraits/women/44.jpg"
                  class="w-full h-full rounded-full object-cover border-2 border-white"
                />
              </div>
              <h3 class="text-xl font-bold text-[#17235b]">
                Dr. Sarah Wijaya, M.Psi.
              </h3>
              <p class="text-[#4F8DB8] font-semibold text-sm mb-2">
                Psikolog Klinis
              </p>
              <p class="text-gray-500 text-xs mb-3">
                10+ tahun pengalaman • Alumni UI
              </p>
              <div class="flex justify-center gap-2">
                <span
                  class="bg-gray-100 px-3 py-1 rounded-full text-xs font-semibold"
                  >Online</span
                >
                <span
                  class="bg-gray-100 px-3 py-1 rounded-full text-xs font-semibold"
                  >Offline</span
                >
              </div>
            </div>
          </div>

          <div class="group relative">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur opacity-30 group-hover:opacity-60 transition"
            ></div>
            <div class="relative bg-white rounded-3xl p-6 text-center">
              <div
                class="w-28 h-28 mx-auto rounded-full bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] p-1 mb-4"
              >
                <img
                  src="https://randomuser.me/api/portraits/men/32.jpg"
                  class="w-full h-full rounded-full object-cover border-2 border-white"
                />
              </div>
              <h3 class="text-xl font-bold text-[#17235b]">
                Ahmad Fauzi, S.Psi., M.Ed.
              </h3>
              <p class="text-[#4F8DB8] font-semibold text-sm mb-2">
                Konselor Sekolah
              </p>
              <p class="text-gray-500 text-xs mb-3">
                8+ tahun pengalaman • Alumni UPI
              </p>
              <div class="flex justify-center gap-2">
                <span
                  class="bg-gray-100 px-3 py-1 rounded-full text-xs font-semibold"
                  >Online</span
                >
                <span
                  class="bg-gray-100 px-3 py-1 rounded-full text-xs font-semibold"
                  >Offline</span
                >
              </div>
            </div>
          </div>

          <div class="group relative">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur opacity-30 group-hover:opacity-60 transition"
            ></div>
            <div class="relative bg-white rounded-3xl p-6 text-center">
              <div
                class="w-28 h-28 mx-auto rounded-full bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] p-1 mb-4"
              >
                <img
                  src="https://randomuser.me/api/portraits/women/68.jpg"
                  class="w-full h-full rounded-full object-cover border-2 border-white"
                />
              </div>
              <h3 class="text-xl font-bold text-[#17235b]">
                Maria Lumintang, M.Psi.
              </h3>
              <p class="text-[#4F8DB8] font-semibold text-sm mb-2">
                Psikolog Anak & Remaja
              </p>
              <p class="text-gray-500 text-xs mb-3">
                12+ tahun pengalaman • Alumni UGM
              </p>
              <div class="flex justify-center gap-2">
                <span
                  class="bg-gray-100 px-3 py-1 rounded-full text-xs font-semibold"
                  >Online</span
                >
                <span
                  class="bg-gray-100 px-3 py-1 rounded-full text-xs font-semibold"
                  >Offline</span
                >
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ALUR KONSELING -->
      <section
        class="py-20 bg-white/30 backdrop-blur-xl rounded-4xl mb-20 px-8"
      >
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#17235b]">
            Bagaimana Cara Konseling?
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Mudah, cepat, dan terstruktur. Ikuti 4 langkah sederhana ini.
          </p>
        </div>

        <div class="grid md:grid-cols-4 gap-8 relative">
          <!-- Connector line -->
          <div
            class="hidden md:block absolute top-24 left-[15%] right-[15%] h-0.5 bg-gradient-to-r from-[#4F8DB8] via-[#6FAED9] to-[#4F8DB8]"
          ></div>

          <div class="text-center relative">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl flex items-center justify-center text-white text-3xl mb-6 rotate-3 hover:rotate-6 transition-transform"
            >
              <i class="fa-solid fa-pen-to-square"></i>
            </div>
            <span
              class="absolute top-0 right-1/4 w-8 h-8 bg-[#17235b] text-white rounded-full flex items-center justify-center font-bold"
              >1</span
            >
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Daftar & Pilih Layanan
            </h3>
            <p class="text-gray-500">
              Registrasi akun, pilih jenis konseling (online/offline) dan
              konselor
            </p>
          </div>

          <div class="text-center relative">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-r from-[#6FAED9] to-[#4F8DB8] rounded-3xl flex items-center justify-center text-white text-3xl mb-6 -rotate-3 hover:rotate-0 transition-transform"
            >
              <i class="fa-solid fa-calendar-check"></i>
            </div>
            <span
              class="absolute top-0 right-1/4 w-8 h-8 bg-[#17235b] text-white rounded-full flex items-center justify-center font-bold"
              >2</span
            >
            <h3 class="text-xl font-bold text-[#17235b] mb-2">Atur Jadwal</h3>
            <p class="text-gray-500">
              Tentukan waktu sesi yang sesuai dengan kesiapan Anda
            </p>
          </div>

          <div class="text-center relative">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-r from-[#4F8DB8] to-[#17235b] rounded-3xl flex items-center justify-center text-white text-3xl mb-6 rotate-3 hover:rotate-6 transition-transform"
            >
              <i class="fa-solid fa-headset"></i>
            </div>
            <span
              class="absolute top-0 right-1/4 w-8 h-8 bg-[#17235b] text-white rounded-full flex items-center justify-center font-bold"
              >3</span
            >
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Ikuti Sesi Konseling
            </h3>
            <p class="text-gray-500">
              Lakukan konseling sesuai metode yang dipilih (40-90 menit)
            </p>
          </div>

          <div class="text-center relative">
            <div
              class="w-20 h-20 mx-auto bg-gradient-to-r from-[#17235b] to-[#4F8DB8] rounded-3xl flex items-center justify-center text-white text-3xl mb-6 -rotate-3 hover:rotate-0 transition-transform"
            >
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <span
              class="absolute top-0 right-1/4 w-8 h-8 bg-[#17235b] text-white rounded-full flex items-center justify-center font-bold"
              >4</span
            >
            <h3 class="text-xl font-bold text-[#17235b] mb-2">
              Evaluasi & Tindak Lanjut
            </h3>
            <p class="text-gray-500">
              Dapatkan rekomendasi, jurnal, dan jadwal sesi berikutnya
            </p>
          </div>
        </div>
      </section>

      <!-- SEJARAH & PERKEMBANGAN -->
      <section class="py-20">
        <div class="grid md:grid-cols-2 gap-16 items-center">
          <div>
            <span
              class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
              >Sejarah Kami</span
            >
            <h2 class="text-4xl font-bold text-[#17235b] mb-6 mt-2">
              Perjalanan BK Care
            </h2>
            <div class="space-y-8">
              <div class="timeline-dot pl-8">
                <h3 class="text-xl font-bold text-[#17235b]">
                  2026 Januari - Awal Berdiri
                </h3>
                <p class="text-gray-600">
                  Didirikan oleh Tim VISIONCODE dengan tujuan memudahkan alur
                  bimbingan konseling disekolah SMK Budi Bakti Ciwidey.
                </p>
              </div>
              <div class="timeline-dot pl-8">
                <h3 class="text-xl font-bold text-[#17235b]">
                  2026 Februari - Perancangan modeling aplikasi
                </h3>
                <p class="text-gray-600">
                  Merancang fitur-fitur utama aplikasi konseling online dan
                  offline.
                </p>
              </div>
              <div class="timeline-dot pl-8">
                <h3 class="text-xl font-bold text-[#17235b]">
                  2026 Maret - Finalisasi & Peluncuran
                </h3>
                <p class="text-gray-600">
                  Menyelesaikan pengembangan aplikasi dan meluncurkan BK Care
                  secara resmi di SMK Budi Bakti Ciwidey.
                </p>
              </div>
              <div class="timeline-dot pl-8">
                <h3 class="text-xl font-bold text-[#17235b]">
                  2026 April - Penggunaan aplikasi secara aktif
                </h3>
                <p class="text-gray-600">
                  Aplikasi mulai digunakan secara aktif oleh siswa dan guru BK
                  di SMK Budi Bakti Ciwidey.
                </p>
              </div>
            </div>
          </div>

          <div class="relative">
            <div
              class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8]/30 to-[#6FAED9]/30 rounded-3xl blur-3xl"
            ></div>
            <img
              src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&auto=format&fit=crop"
              class="relative rounded-3xl shadow-2xl"
            />
          </div>
        </div>
      </section>

      <!-- TESTIMONI -->
      <section class="py-20">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-bold mb-6 text-[#17235b]">
            Kata Mereka Tentang BK Care
          </h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            98% pengguna merasa terbantu dan merekomendasikan layanan kami.
          </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="glass-card p-8 rounded-3xl">
            <div class="flex items-center gap-4 mb-4">
              <img
                src="https://randomuser.me/api/portraits/women/17.jpg"
                class="w-16 h-16 rounded-full object-cover"
              />
              <div>
                <h4 class="font-bold text-[#17235b]">Anisa Putri</h4>
                <p class="text-xs text-gray-500">Siswa SMA Negeri 1 Bandung</p>
              </div>
            </div>
            <div class="flex text-yellow-400 mb-3">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="text-gray-600 italic">
              "Awalnya takut untuk konseling, tapi ternyata konselor BK Care
              sangat ramah dan tidak menghakimi. Aku jadi lebih paham cara
              mengelola stres ujian."
            </p>
            <div class="mt-4 text-xs text-[#4F8DB8] font-semibold">
              <i class="fa-solid fa-laptop mr-1"></i> Konseling Online
            </div>
          </div>

          <div class="glass-card p-8 rounded-3xl">
            <div class="flex items-center gap-4 mb-4">
              <img
                src="https://randomuser.me/api/portraits/men/62.jpg"
                class="w-16 h-16 rounded-full object-cover"
              />
              <div>
                <h4 class="font-bold text-[#17235b]">Rizky Hidayat</h4>
                <p class="text-xs text-gray-500">Siswa SMK Negeri 2 Surabaya</p>
              </div>
            </div>
            <div class="flex text-yellow-400 mb-3">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="text-gray-600 italic">
              "Konseling offline di sekolah benar-benar membantu. Ruangannya
              nyaman, privasi terjaga. Sekarang aku lebih percaya diri memilih
              jurusan kuliah."
            </p>
            <div class="mt-4 text-xs text-[#17235b] font-semibold">
              <i class="fa-solid fa-building mr-1"></i> Konseling Offline
            </div>
          </div>

          <div class="glass-card p-8 rounded-3xl">
            <div class="flex items-center gap-4 mb-4">
              <img
                src="https://randomuser.me/api/portraits/women/50.jpg"
                class="w-16 h-16 rounded-full object-cover"
              />
              <div>
                <h4 class="font-bold text-[#17235b]">Dewi Lestari, S.Pd.</h4>
                <p class="text-xs text-gray-500">
                  Guru BK SMA Negeri 5 Yogyakarta
                </p>
              </div>
            </div>
            <div class="flex text-yellow-400 mb-3">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
            </div>
            <p class="text-gray-600 italic">
              "Platform BK Care memudahkan kami merujuk siswa ke konselor
              profesional. Fitur laporan perkembangannya sangat membantu untuk
              follow-up."
            </p>
            <div class="mt-4 text-xs text-[#4F8DB8] font-semibold">
              <i class="fa-solid fa-handshake mr-1"></i> Sekolah Mitra
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="py-10">
        <div class="glass-card-deep rounded-4xl p-12">
          <h2
            class="text-3xl md:text-4xl font-bold text-center text-[#17235b] mb-12"
          >
            Pertanyaan Umum
          </h2>

          <div class="grid md:grid-cols-2 gap-8">
            <div>
              <h3 class="font-bold text-[#17235b] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
                Apakah konseling dijamin privasinya?
              </h3>
              <p class="text-gray-600 mb-6">
                100% ya. Semua sesi konseling online dilindungi enkripsi
                end-to-end, dan ruang konseling offline kedap suara. Catatan
                konseling hanya bisa diakses oleh konselor dan siswa
                bersangkutan.
              </p>

              <h3 class="font-bold text-[#17235b] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
                Apakah siswa akan mendapatkan tindak lanjut setelah sesi
                konseling?
              </h3>
              <p class="text-gray-600 mb-6">
                Iya. Setelah sesi konseling, konselor dapat memberikan arahan
                atau tindak lanjut sesuai kebutuhan siswa. Tindak lanjut ini
                bertujuan membantu siswa menerapkan solusi yang telah dibahas.
              </p>

              <h3 class="font-bold text-[#17235b] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
                Bagaimana alur pengajuan konseling di website ini?
              </h3>
              <p class="text-gray-600 mb-6">
                Siswa mengisi formulir pengajuan konseling melalui website
                sesuai kebutuhan. Pengajuan akan diteruskan ke konselor untuk
                ditindaklanjuti sesuai jadwal yang tersedia.
              </p>
            </div>

            <div>
              <h3 class="font-bold text-[#17235b] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
                Bisa ganti konselor?
              </h3>
              <p class="text-gray-600 mb-6">
                Bisa. Anda bebas meminta ganti konselor kapan saja jika merasa
                tidak cocok, tanpa dikenakan biaya tambahan.
              </p>

              <h3 class="font-bold text-[#17235b] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
                Apakah orang tua bisa terlibat?
              </h3>
              <p class="text-gray-600 mb-6">
                Bisa, dengan persetujuan siswa. Tersedia program konseling
                keluarga yang melibatkan orang tua dalam sesi tertentu.
              </p>

              <h3 class="font-bold text-[#17235b] mb-2 flex items-center gap-2">
                <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
                Apakah siswa bisa memantau status pengajuan konseling?
              </h3>
              <p class="text-gray-600 mb-6">
                Bisa. Status pengajuan konseling dapat dipantau melalui sistem,
                mulai dari menunggu hingga diterima oleh konselor. Siswa juga
                akan mendapatkan informasi lanjutan jika diperlukan.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- FOOTER -->
    <footer class="relative mt-20 pb-10 z-10">
      <div class="max-w-7xl mx-auto px-6">
        <div class="glass-card-deep rounded-4xl p-12">
          <div class="grid md:grid-cols-4 gap-8 mb-12">
            <div class="col-span-1 md:col-span-1">
              <img
                src="img/LOGO BK.png"
                class="h-12 w-auto mb-4"
                onerror="
                  this.src =
                    'https://via.placeholder.com/120x48/17235b/ffffff?text=BK+CARE'
                "
              />
              <p class="text-sm text-gray-500 mb-4">
                Ruang aman dan nyaman untuk konseling siswa tanpa stigma.
              </p>
              <div class="flex gap-3">
                <a
                  href="#"
                  class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-[#4F8DB8] hover:text-white transition-all"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
                <a
                  href="#"
                  class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-[#4F8DB8] hover:text-white transition-all"
                  ><i class="fa-brands fa-twitter"></i
                ></a>
                <a
                  href="#"
                  class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-[#4F8DB8] hover:text-white transition-all"
                  ><i class="fa-brands fa-tiktok"></i
                ></a>
                <a
                  href="#"
                  class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-[#4F8DB8] hover:text-white transition-all"
                  ><i class="fa-brands fa-youtube"></i
                ></a>
              </div>
            </div>

            <div>
              <h4 class="font-bold text-[#17235b] mb-4">Layanan</h4>
              <ul class="space-y-2 text-sm">
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Konseling Online</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Konseling Offline</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Tes Minat Bakat</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Konseling Kelompok</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Program Sekolah</a
                  >
                </li>
              </ul>
            </div>

            <div>
              <h4 class="font-bold text-[#17235b] mb-4">Tentang</h4>
              <ul class="space-y-2 text-sm">
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Tentang Kami</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Tim Konselor</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Karir</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Blog</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="text-gray-500 hover:text-[#4F8DB8] transition"
                    >Mitra Sekolah</a
                  >
                </li>
              </ul>
            </div>

            <div>
              <h4 class="font-bold text-[#17235b] mb-4">Kontak</h4>
              <ul class="space-y-2 text-sm">
                <li class="flex items-center gap-2">
                  <i class="fa-solid fa-location-dot text-[#4F8DB8]"></i> Jl.
                  Konseling No. 45, Jakarta
                </li>
                <li class="flex items-center gap-2">
                  <i class="fa-solid fa-phone text-[#4F8DB8]"></i> 1500-225 (24
                  jam)
                </li>
                <li class="flex items-center gap-2">
                  <i class="fa-solid fa-envelope text-[#4F8DB8]"></i>
                  halo@bkcare.id
                </li>
              </ul>
            </div>
          </div>

          <div
            class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500"
          >
            <div>
              © 2026 BK Care for School Life — VISIONCODE. All rights reserved.
            </div>
            <div class="flex gap-6 mt-4 md:mt-0">
              <a href="#" class="hover:text-[#4F8DB8]">Kebijakan Privasi</a>
              <a href="#" class="hover:text-[#4F8DB8]">Syarat & Ketentuan</a>
              <a href="#" class="hover:text-[#4F8DB8]">FAQ</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
