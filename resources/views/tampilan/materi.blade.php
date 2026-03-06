<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDUCATIONS | BK Care</title>

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

      .service-card {
        transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
      }

      .service-card:hover {
        transform: translateY(-8px) scale(1.01);
        box-shadow: 0 30px 50px -15px rgba(79, 141, 184, 0.3);
      }

      .hero-blob {
        position: absolute;
        width: 300px;
        height: 300px;
        background: radial-gradient(
          circle at center,
          rgba(79, 141, 184, 0.2) 0%,
          transparent 70%
        );
        border-radius: 50%;
        filter: blur(60px);
      }

      /* Custom scrollbar */
      ::-webkit-scrollbar {
        width: 8px;
      }
      ::-webkit-scrollbar-track {
        background: #f1f5f9;
      }
      ::-webkit-scrollbar-thumb {
        background: #4f8db8;
        border-radius: 4px;
      }
      ::-webkit-scrollbar-thumb:hover {
        background: #2a4a7a;
      }

      .content-paragraph {
        position: relative;
        padding-left: 1.5rem;
        border-left: 3px solid transparent;
        border-image: linear-gradient(to bottom, #4f8db8, #6faed9);
        border-image-slice: 1;
        transition: all 0.3s ease;
      }

      .content-paragraph:hover {
        border-left-color: #4f8db8;
        background: linear-gradient(
          to right,
          rgba(79, 141, 184, 0.02),
          transparent
        );
      }
    </style>
  </head>

  <body class="font-sans text-gray-700 overflow-x-hidden relative">
    <!-- DECORATIVE -->
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
        class="absolute top-60 left-1/4 w-16 h-16 border-4 border-[#17235b]/10 rounded-full"
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
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-[#17235b] rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <a
            href="{{ url('/materi') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-graduation-cap text-xs"></i> EDUCATIONS
            <span
              class="absolute -bottom-2 left-0 w-2 h-2 bg-[#17235b] rounded-full"
            ></span>
            <span
              class="absolute -bottom-2 left-0 w-8 h-0.5 bg-gradient-to-r from-[#17235b] to-transparent rounded-full"
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

          <!-- BUTTON - WHITE -->
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

    <!-- ===== HERO ===== -->
    <section class="relative pt-40 pb-10 overflow-hidden">
      <!-- Background -->
      <div
        class="absolute inset-0 bg-gradient-to-b from-transparent to-white/30 pointer-events-none"
      ></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <!-- Breadcrumb-->
        <div
          class="flex items-center gap-2 text-sm mb-8 glass-card inline-flex px-5 py-2.5 rounded-full"
        >
          <a href="#" class="text-[#4F8DB8] hover:text-[#17235b] transition"
            >Home</a
          >
          <i class="fa-solid fa-chevron-right text-xs text-gray-400"></i>
          <a href="#" class="text-[#4F8DB8] hover:text-[#17235b] transition"
            >Edukasi</a
          >
          <i class="fa-solid fa-chevron-right text-xs text-gray-400"></i>
          <span class="text-gray-600 font-semibold"
            >Kesehatan Mental Remaja</span
          >
        </div>

        <!-- Image  -->
        <div class="relative group floating" style="animation-duration: 8s">
          <div
            class="absolute -inset-4 bg-gradient-to-r from-[#4F8DB8]/40 to-[#6FAED9]/40 rounded-[3rem] blur-2xl opacity-70 group-hover:opacity-100 transition-all duration-700"
          ></div>

          <!-- Decorative elements -->
          <div
            class="absolute -top-8 -right-8 w-32 h-32 bg-[#17235b]/10 rounded-full blur-2xl"
          ></div>
          <div
            class="absolute -bottom-8 -left-8 w-40 h-40 bg-[#6FAED9]/20 rounded-full blur-2xl"
          ></div>

          <!-- Main -->
          <div
            class="relative rounded-[2.5rem] overflow-hidden shadow-2xl transform transition-all duration-700 group-hover:scale-[1.02] group-hover:rotate-1"
          >
            <div
              class="absolute inset-0 bg-gradient-to-tr from-[#17235b]/20 via-transparent to-[#6FAED9]/20 mix-blend-overlay z-10"
            ></div>
            <img
              src="img/materi.jpg"
              alt="Kesehatan Mental Remaja"
              class="w-full h-[450px] object-cover transition-all duration-700 group-hover:scale-110"
              onerror="
                this.src =
                  'https://images.unsplash.com/photo-1499209974431-9dddcece7f88?w=1200&auto=format&fit=crop'
              "
            />

            <!-- Floating badges -->
            <div
              class="absolute bottom-6 left-6 glass-card-deep rounded-2xl px-6 py-3 shadow-2xl flex items-center gap-3 transform transition-all duration-500 hover:scale-105 z-20"
            >
              <div
                class="w-3 h-3 bg-emerald-500 rounded-full animate-pulse"
              ></div>
              <span class="font-bold text-[#17235b]">Materi Terbaru 2026</span>
            </div>

            <div
              class="absolute top-6 right-6 glass-card-deep rounded-2xl px-6 py-3 shadow-2xl flex items-center gap-3 z-20"
            >
              <i class="fa-regular fa-clock text-[#4F8DB8]"></i>
              <span class="font-bold text-[#17235b]">8 Menit Membaca</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== DETAIL MATERI ===== -->
    <section class="relative py-16">
      <div class="max-w-7xl mx-auto px-6">
        <!-- Header Materi dengan Gradient Text -->
        <div class="max-w-4xl mx-auto text-center mb-12">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4 border border-white/50"
          >
            <i class="fa-solid fa-graduation-cap mr-2"></i> MATERI EDUKASI
          </span>
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6">
            <span class="text-gradient">Kesehatan Mental</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >& Pengembangan Diri</span
            >
          </h1>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Memahami emosi, mengelola stres, dan membangun kepercayaan diri
            untuk remaja yang lebih tangguh.
          </p>
        </div>

        <!-- Progress -->
        <div class="max-w-4xl mx-auto mb-12 glass-card rounded-full p-1">
          <div class="flex items-center gap-4">
            <div class="flex-1 h-3 bg-gray-200/50 rounded-full overflow-hidden">
              <div
                class="w-full h-full bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-full"
              ></div>
            </div>
            <span class="text-sm font-bold text-[#17235b] px-4"
              >100% Lengkap</span
            >
          </div>
        </div>

        <!-- ===== CARD 1 ===== -->
        <div class="group relative service-card mb-10">
          <!-- Glow effect -->
          <div
            class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"
          ></div>

          <div class="relative glass-card-deep rounded-3xl p-8 md:p-10">
            <!-- Header Card -->
            <div class="flex items-center gap-4 mb-8">
              <div
                class="w-16 h-16 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transform group-hover:rotate-6 transition-all duration-500"
              >
                <i class="fa-solid fa-brain"></i>
              </div>
              <div>
                <span
                  class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
                  >Modul 1</span
                >
                <h2 class="text-2xl md:text-3xl font-bold text-[#17235b]">
                  Pengembangan Diri & Mental
                </h2>
              </div>
            </div>

            <div class="space-y-8">
              <!-- Sub-bab 1 -->
              <div class="content-paragraph pl-6 group/item">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#4F8DB8]/30 transition"
                  >
                    <span class="text-[#4F8DB8] font-bold text-sm">1</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Mengenal Emosi Diri
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#4F8DB8]">Emosi</span> adalah
                  perasaan yang muncul sebagai respons terhadap suatu keadaan
                  atau pengalaman. Pada bagian ini, siswa mempelajari berbagai
                  jenis emosi seperti senang, sedih, marah, kecewa, takut, dan
                  cemas. Siswa diajak untuk memahami bahwa setiap emosi adalah
                  hal yang wajar dan bisa dialami oleh siapa saja.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Selain mengenali jenis emosi, siswa juga belajar
                  mengidentifikasi situasi yang memicu munculnya emosi tersebut,
                  baik di lingkungan sekolah, keluarga, maupun pergaulan. Dengan
                  mengenal emosi diri, siswa dapat lebih memahami reaksi yang
                  muncul dan tidak mudah terbawa perasaan secara berlebihan.
                </p>
                <div
                  class="bg-[#4F8DB8]/5 rounded-xl p-4 mt-3 ml-11 border-l-4 border-[#4F8DB8]"
                >
                  <p class="text-sm italic text-gray-600">
                    <i class="fa-solid fa-lightbulb text-[#4F8DB8] mr-2"></i>
                    <span class="font-semibold">Tips:</span> Coba tulis jurnal
                    emosi setiap hari untuk mengenali pola perasaanmu!
                  </p>
                </div>
              </div>

              <!-- Sub-bab 2 -->
              <div class="content-paragraph pl-6 group/item">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#4F8DB8]/30 transition"
                  >
                    <span class="text-[#4F8DB8] font-bold text-sm">2</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Cara Mengelola Emosi
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#4F8DB8]"
                    >Mengelola emosi</span
                  >
                  berarti mampu mengendalikan perasaan agar tidak berdampak
                  negatif pada diri sendiri maupun orang lain. Pada bagian ini,
                  siswa mempelajari cara menenangkan diri saat emosi muncul,
                  seperti menarik napas dalam, memberi jeda sebelum bertindak,
                  dan mengekspresikan perasaan dengan cara yang tepat.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Materi ini juga membahas cara menghadapi stres, tekanan tugas,
                  konflik dengan teman, serta kekecewaan dengan sikap yang lebih
                  positif. Siswa diajak untuk mencari solusi atas masalah yang
                  dihadapi, bukan menghindarinya, serta belajar mengambil
                  keputusan dengan kepala dingin.
                </p>
                <div class="flex flex-wrap gap-3 mt-3 ml-11">
                  <span
                    class="bg-white/70 backdrop-blur-sm px-4 py-2 rounded-full text-xs font-semibold border border-white/50 shadow-sm"
                  >
                    <i class="fa-regular fa-lungs text-[#4F8DB8] mr-1"></i>
                    Tarik Napas Dalam
                  </span>
                  <span
                    class="bg-white/70 backdrop-blur-sm px-4 py-2 rounded-full text-xs font-semibold border border-white/50 shadow-sm"
                  >
                    <i class="fa-regular fa-clock text-[#4F8DB8] mr-1"></i> Jeda
                    10 Detik
                  </span>
                  <span
                    class="bg-white/70 backdrop-blur-sm px-4 py-2 rounded-full text-xs font-semibold border border-white/50 shadow-sm"
                  >
                    <i class="fa-regular fa-pen text-[#4F8DB8] mr-1"></i> Tulis
                    Perasaan
                  </span>
                </div>
              </div>

              <!-- Sub-bab 3 -->
              <div class="content-paragraph pl-6 group/item">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center flex-shrink-0 group-hover/item:bg-[#4F8DB8]/30 transition"
                  >
                    <span class="text-[#4F8DB8] font-bold text-sm">3</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Menjadi Lebih Percaya Diri
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#4F8DB8]">Percaya diri</span>
                  adalah sikap yakin terhadap kemampuan diri sendiri. Pada
                  bagian ini, siswa mempelajari cara mengenali kelebihan dan
                  potensi yang dimiliki, serta menerima kekurangan sebagai
                  bagian dari proses belajar.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Materi ini mendorong siswa untuk berani mencoba hal baru,
                  mengemukakan pendapat, dan tidak takut melakukan kesalahan.
                  Dengan rasa percaya diri yang baik, siswa diharapkan mampu
                  bersikap lebih mandiri, bertanggung jawab, dan siap menghadapi
                  tantangan di sekolah maupun dunia kerja.
                </p>
              </div>
            </div>

            <!-- Footer Card -->
            <div
              class="mt-8 pt-6 border-t border-white/30 flex flex-wrap items-center justify-between gap-4"
            >
              <div class="flex items-center gap-2">
                <i class="fa-regular fa-circle-check text-[#4F8DB8]"></i>
                <span class="text-sm text-gray-600"
                  >Sudah dipelajari
                  <span class="font-bold text-[#17235b]"
                    >2.450+ siswa</span
                  ></span
                >
              </div>
              <div class="flex items-center gap-3">
                <button
                  class="flex items-center gap-2 bg-white/80 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-semibold text-[#4F8DB8] border border-white/50 hover:bg-[#4F8DB8] hover:text-white transition-all"
                >
                  <i class="fa-regular fa-bookmark"></i> Simpan
                </button>
                <button
                  class="flex items-center gap-2 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] px-5 py-2.5 rounded-full text-sm font-semibold text-white hover:shadow-lg transition-all"
                >
                  <i class="fa-regular fa-download"></i> Unduh PDF
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- ===== CARD 2 ===== -->
        <div class="group relative service-card mb-10">
          <!-- Glow effect -->
          <div
            class="absolute -inset-0.5 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"
          ></div>

          <div class="relative glass-card-deep rounded-3xl p-8 md:p-10">
            <!-- Header Card -->
            <div class="flex items-center gap-4 mb-8">
              <div
                class="w-16 h-16 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transform group-hover:-rotate-6 transition-all duration-500"
              >
                <i class="fa-solid fa-clock"></i>
              </div>
              <div>
                <span
                  class="text-sm font-bold text-[#17235b] uppercase tracking-wider"
                  >Modul 2</span
                >
                <h2 class="text-2xl md:text-3xl font-bold text-[#17235b]">
                  Akademik & Manajemen Waktu
                </h2>
              </div>
            </div>

            <div class="space-y-8">
              <!-- Sub-bab 1 -->
              <div class="content-paragraph pl-6">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#17235b]/20 rounded-lg flex items-center justify-center"
                  >
                    <span class="text-[#17235b] font-bold text-sm">1</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Tips Belajar Efektif
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#17235b]"
                    >Belajar efektif</span
                  >
                  bukan tentang belajar lebih lama, tetapi belajar dengan cara
                  yang tepat. Pada bagian ini, siswa mempelajari cara memahami
                  materi pelajaran sesuai gaya belajar masing-masing, seperti
                  membaca, mencatat, berdiskusi, atau praktik langsung. Siswa
                  juga diajak untuk membuat catatan yang rapi dan mudah dipahami
                  agar materi dapat dipelajari kembali dengan lebih cepat.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Selain itu, materi ini membahas pentingnya fokus saat belajar,
                  mengurangi gangguan seperti penggunaan ponsel, serta membagi
                  waktu belajar dengan istirahat yang cukup. Dengan cara belajar
                  yang efektif, siswa dapat memahami materi dengan lebih baik
                  dan tidak mudah merasa lelah atau bosan.
                </p>
              </div>

              <!-- Sub-bab 2 -->
              <div class="content-paragraph pl-6">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#17235b]/20 rounded-lg flex items-center justify-center"
                  >
                    <span class="text-[#17235b] font-bold text-sm">2</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Mengatur Waktu Belajar
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#17235b]"
                    >Mengatur waktu belajar</span
                  >
                  membantu siswa agar tidak menunda pekerjaan dan mampu
                  menyeimbangkan antara sekolah, tugas, dan waktu istirahat.
                  Pada bagian ini, siswa mempelajari cara menyusun jadwal
                  belajar harian maupun mingguan sesuai dengan kegiatan yang
                  dimiliki.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Materi ini juga membahas cara menentukan prioritas tugas,
                  mengatur waktu belajar secara konsisten, serta membiasakan
                  diri untuk disiplin terhadap jadwal yang telah dibuat. Dengan
                  manajemen waktu yang baik, siswa dapat menyelesaikan tugas
                  tepat waktu dan mengurangi stres akibat menumpuknya pekerjaan.
                </p>
              </div>

              <!-- Sub-bab 3 -->
              <div class="content-paragraph pl-6">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#17235b]/20 rounded-lg flex items-center justify-center"
                  >
                    <span class="text-[#17235b] font-bold text-sm">3</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Persiapan Menghadapi Ujian
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#17235b]"
                    >Persiapan ujian</span
                  >
                  yang baik dimulai jauh sebelum hari ujian. Pada bagian ini,
                  siswa mempelajari cara merencanakan waktu belajar menjelang
                  ujian, mengulang materi secara bertahap, dan mengerjakan
                  latihan soal untuk mengukur pemahaman.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Selain persiapan akademik, materi ini juga membahas persiapan
                  mental dan fisik, seperti menjaga pola tidur, mengatur pola
                  makan, dan mengelola rasa cemas saat ujian. Dengan persiapan
                  yang matang, siswa diharapkan dapat menghadapi ujian dengan
                  lebih tenang, percaya diri, dan hasil yang maksimal.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- ===== CARD 3 ===== -->
        <div class="group relative service-card">
          <!-- Glow effect -->
          <div
            class="absolute -inset-0.5 bg-gradient-to-r from-[#6FAED9] to-[#4F8DB8] rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"
          ></div>

          <div class="relative glass-card-deep rounded-3xl p-8 md:p-10">
            <!-- Header Card -->
            <div class="flex items-center gap-4 mb-8">
              <div
                class="w-16 h-16 bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transform group-hover:rotate-6 transition-all duration-500"
              >
                <i class="fa-solid fa-handshake"></i>
              </div>
              <div>
                <span
                  class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
                  >Modul 3</span
                >
                <h2 class="text-2xl md:text-3xl font-bold text-[#17235b]">
                  Sosial, Etika & Karier
                </h2>
              </div>
            </div>

            <div class="space-y-8">
              <!-- Sub-bab 1 -->
              <div class="content-paragraph pl-6">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center"
                  >
                    <span class="text-[#4F8DB8] font-bold text-sm">1</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Etika Pergaulan di Sekolah
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#4F8DB8]"
                    >Etika pergaulan</span
                  >
                  adalah sikap dan perilaku yang mencerminkan sopan santun serta
                  saling menghargai antar sesama. Pada bagian ini, siswa
                  mempelajari cara berinteraksi dengan teman, guru, dan warga
                  sekolah lainnya secara baik dan bertanggung jawab. Materi ini
                  menekankan pentingnya bersikap jujur, menghormati perbedaan,
                  serta menggunakan bahasa yang sopan dalam komunikasi
                  sehari-hari.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Selain itu, siswa juga diajak memahami batasan dalam
                  pergaulan, baik secara langsung maupun di media sosial. Dengan
                  menerapkan etika pergaulan yang baik, suasana sekolah menjadi
                  lebih nyaman, aman, dan mendukung proses belajar.
                </p>
              </div>

              <!-- Sub-bab 2 -->
              <div class="content-paragraph pl-6">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center"
                  >
                    <span class="text-[#4F8DB8] font-bold text-sm">2</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Menghindari Perundungan
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#4F8DB8]"
                    >Perundungan atau bullying</span
                  >
                  adalah perilaku menyakiti orang lain, baik secara fisik,
                  verbal, maupun melalui media digital. Pada bagian ini, siswa
                  mempelajari berbagai bentuk perundungan serta dampaknya
                  terhadap korban maupun pelaku.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Materi ini juga membahas cara mencegah dan menghindari
                  perundungan, seperti bersikap empati, tidak ikut-ikutan
                  melakukan tindakan negatif, serta berani melapor kepada pihak
                  yang dipercaya jika melihat atau mengalami perundungan. Siswa
                  diajak untuk menciptakan lingkungan sekolah yang saling
                  mendukung dan bebas dari kekerasan.
                </p>
                <div
                  class="bg-red-50/70 backdrop-blur-sm rounded-xl p-4 mt-3 ml-11 border-l-4 border-red-400"
                >
                  <p class="text-sm text-gray-700">
                    <i
                      class="fa-solid fa-triangle-exclamation text-red-500 mr-2"
                    ></i>
                    <span class="font-semibold">Lapor!</span> Jika kamu atau
                    temanmu mengalami perundungan, segera hubungi guru BK atau
                    konselor BK Care.
                  </p>
                </div>
              </div>

              <!-- Sub-bab 3 -->
              <div class="content-paragraph pl-6">
                <div class="flex items-start gap-3 mb-3">
                  <div
                    class="w-8 h-8 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center"
                  >
                    <span class="text-[#4F8DB8] font-bold text-sm">3</span>
                  </div>
                  <h3 class="text-xl font-bold text-[#17235b]">
                    Pilihan Minat dan Karier
                  </h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4 pl-11">
                  <span class="font-semibold text-[#4F8DB8]"
                    >Pada bagian ini</span
                  >, siswa diajak untuk mengenal minat, bakat, dan potensi diri
                  sebagai dasar dalam menentukan pilihan karier. Materi ini
                  membahas pentingnya memahami kemampuan diri, jurusan yang
                  diambil, serta peluang karier yang sesuai di dunia kerja
                  maupun pendidikan lanjutan.
                </p>
                <p class="text-gray-600 leading-relaxed mb-3 pl-11">
                  Siswa juga dibimbing untuk mempertimbangkan berbagai pilihan
                  karier secara realistis, termasuk kesiapan keterampilan, sikap
                  kerja, dan perencanaan masa depan. Dengan pemahaman yang baik
                  tentang minat dan karier, siswa diharapkan mampu membuat
                  keputusan yang tepat dan bertanggung jawab untuk masa
                  depannya.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- ===== RESOURCES ===== -->
        <div class="mt-16 grid md:grid-cols-3 gap-6">
          <div
            class="glass-card rounded-2xl p-6 flex items-center gap-4 service-card"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-xl"
            >
              <i class="fa-regular fa-file-pdf"></i>
            </div>
            <div>
              <h4 class="font-bold text-[#17235b]">Modul Lengkap</h4>
              <p class="text-xs text-gray-500 mb-1">E-book 45 halaman</p>
              <a
                href="#"
                class="text-sm text-[#4F8DB8] font-semibold hover:underline"
                >Unduh PDF →</a
              >
            </div>
          </div>

          <div
            class="glass-card rounded-2xl p-6 flex items-center gap-4 service-card"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-xl flex items-center justify-center text-white text-xl"
            >
              <i class="fa-regular fa-video"></i>
            </div>
            <div>
              <h4 class="font-bold text-[#17235b]">Video Pembelajaran</h4>
              <p class="text-xs text-gray-500 mb-1">4 video, total 25 menit</p>
              <a
                href="#"
                class="text-sm text-[#4F8DB8] font-semibold hover:underline"
                >Putar sekarang →</a
              >
            </div>
          </div>

          <div
            class="glass-card rounded-2xl p-6 flex items-center gap-4 service-card"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] rounded-xl flex items-center justify-center text-white text-xl"
            >
              <i class="fa-regular fa-clipboard"></i>
            </div>
            <div>
              <h4 class="font-bold text-[#17235b]">Lembar Kerja</h4>
              <p class="text-xs text-gray-500 mb-1">Worksheet interaktif</p>
              <a
                href="#"
                class="text-sm text-[#4F8DB8] font-semibold hover:underline"
                >Download →</a
              >
            </div>
          </div>
        </div>

        <!-- ===== REKOMENDASI MATERI ===== -->
        <div class="mt-20">
          <h3
            class="text-2xl font-bold text-[#17235b] mb-8 flex items-center gap-3"
          >
            <i class="fa-solid fa-book-open text-[#4F8DB8]"></i>
            Rekomendasi Materi Lainnya
          </h3>

          <div class="grid md:grid-cols-3 gap-6">
            <a
              href="#"
              class="glass-card rounded-2xl p-5 service-card group block"
            >
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center text-[#4F8DB8] group-hover:scale-110 transition"
                >
                  <i class="fa-solid fa-heart"></i>
                </div>
                <div>
                  <h4
                    class="font-bold text-[#17235b] group-hover:text-[#4F8DB8] transition"
                  >
                    Membangun Relasi Sehat
                  </h4>
                  <p class="text-xs text-gray-500">Pertemanan positif</p>
                </div>
              </div>
            </a>

            <a
              href="#"
              class="glass-card rounded-2xl p-5 service-card group block"
            >
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center text-[#4F8DB8] group-hover:scale-110 transition"
                >
                  <i class="fa-solid fa-bullseye"></i>
                </div>
                <div>
                  <h4
                    class="font-bold text-[#17235b] group-hover:text-[#4F8DB8] transition"
                  >
                    Goal Setting
                  </h4>
                  <p class="text-xs text-gray-500">Menentukan tujuan hidup</p>
                </div>
              </div>
            </a>

            <a
              href="#"
              class="glass-card rounded-2xl p-5 service-card group block"
            >
              <div class="flex items-center gap-3">
                <div
                  class="w-12 h-12 bg-[#4F8DB8]/20 rounded-lg flex items-center justify-center text-[#4F8DB8] group-hover:scale-110 transition"
                >
                  <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                  <h4
                    class="font-bold text-[#17235b] group-hover:text-[#4F8DB8] transition"
                  >
                    Komunikasi Efektif
                  </h4>
                  <p class="text-xs text-gray-500">Bicara & mendengar</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CTA  ===== -->
    <section class="relative py-20 my-10">
      <div
        class="absolute inset-0 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] rounded-3xl max-w-7xl mx-auto left-6 right-6"
      ></div>
      <div
        class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute bottom-0 left-0 w-64 h-64 bg-[#4F8DB8]/20 rounded-full blur-3xl"
      ></div>

      <div class="relative max-w-4xl mx-auto px-6 text-center">
        <div
          class="glass-card-deep rounded-3xl p-10 border-white/20 bg-white/10 backdrop-blur-md"
        >
          <h3 class="text-3xl md:text-4xl font-extrabold text-white mb-4">
            Butuh Bantuan Lebih Lanjut?
          </h3>
          <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
            Konselor kami siap mendengarkan dan membantu kamu secara
            profesional. Gratis untuk siswa.
          </p>
          <div class="flex flex-wrap gap-4 justify-center">
            <a
              href="#"
              class="group bg-white text-[#17235b] font-bold px-8 py-4 rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-500 flex items-center gap-3"
            >
              <i class="fa-regular fa-comments"></i>
              Yuk Mulai Konseling
              <i
                class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"
              ></i>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER  ===== -->
    <footer class="relative py-16 mt-10">
      <div class="absolute inset-0 bg-[#0A2540] rounded-t-3xl"></div>
      <div
        class="absolute top-0 left-20 w-64 h-64 bg-[#4F8DB8]/20 rounded-full blur-3xl"
      ></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <div
          class="glass-card-deep rounded-4xl p-10 border-white/20 bg-white/5 backdrop-blur-md"
        >
          <div
            class="grid lg:grid-cols-12 gap-8 pb-10 border-b border-white/10"
          >
            <div class="lg:col-span-4">
              <img
                src="img/LOGO BK.png"
                alt="BK CARE"
                class="h-14 w-auto mb-4 brightness-0 invert"
                onerror="
                  this.src =
                    'https://via.placeholder.com/150x60/ffffff/0A2540?text=BK+CARE'
                "
              />
              <p class="text-sm text-white/70 leading-relaxed max-w-xs">
                BK Care merupakan platform bimbingan dan konseling yang
                mendukung kesejahteraan siswa secara akademik, sosial, dan
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
                  <i class="fa-brands fa-twitter text-white"></i>
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
                  <i class="fa-brands fa-linkedin-in text-white"></i>
                </a>
              </div>
            </div>

            <div class="lg:col-span-2">
              <h4
                class="text-white font-bold mb-4 text-sm uppercase tracking-wider"
              >
                Menu
              </h4>
              <ul class="space-y-2 text-sm">
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Beranda</a
                  >
                </li>
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Tentang BK Care</a
                  >
                </li>
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Materi Edukasi</a
                  >
                </li>
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Konseling</a
                  >
                </li>
              </ul>
            </div>

            <div class="lg:col-span-2">
              <h4
                class="text-white font-bold mb-4 text-sm uppercase tracking-wider"
              >
                Informasi
              </h4>
              <ul class="space-y-2 text-sm">
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Tentang Kami</a
                  >
                </li>
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Kebijakan Privasi</a
                  >
                </li>
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Kontak</a
                  >
                </li>
                <li>
                  <a href="#" class="text-white/70 hover:text-white transition"
                    >Layanan</a
                  >
                </li>
              </ul>
            </div>

            <div class="lg:col-span-4">
              <h4
                class="text-white font-bold mb-4 text-sm uppercase tracking-wider"
              >
                Kontak
              </h4>
              <ul class="space-y-3 text-sm">
                <li class="flex items-start gap-3">
                  <i class="fa-regular fa-envelope text-[#4F8DB8] mt-1"></i>
                  <span class="text-white/70">bkcare@smkbudibakti.sch.id</span>
                </li>
                <li class="flex items-start gap-3">
                  <i class="fa-regular fa-phone text-[#4F8DB8] mt-1"></i>
                  <span class="text-white/70">+62 812-3456-7890</span>
                </li>
                <li class="flex items-start gap-3">
                  <i class="fa-regular fa-location-dot text-[#4F8DB8] mt-1"></i>
                  <span class="text-white/70 leading-relaxed">
                    SMK Budi Bakti Ciwidey,<br />Jl. Raya Ciwidey No. 45,
                    Bandung
                  </span>
                </li>
              </ul>
            </div>
          </div>

          <div
            class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm"
          >
            <p class="text-white/60">
              © 2026 BK Care for School Life — SMK Budi Bakti Ciwidey. All
              rights reserved.
            </p>
            <div class="flex gap-6">
              <a href="#" class="text-white/60 hover:text-white transition"
                >Kebijakan Privasi</a
              >
              <a href="#" class="text-white/60 hover:text-white transition"
                >Syarat & Ketentuan</a
              >
              <a href="#" class="text-white/60 hover:text-white transition"
                >FAQ</a
              >
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
