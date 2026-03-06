<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informasi Layanan BK | BK Care — Profesional</title>

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

      .info-list-item {
        position: relative;
        padding-left: 1.75rem;
        margin-bottom: 0.75rem;
        transition: all 0.3s ease;
      }

      .info-list-item:hover {
        transform: translateX(5px);
        color: #17235b;
      }

      .info-list-item::before {
        content: "";
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 8px;
        height: 8px;
        background: linear-gradient(135deg, #4f8db8, #6faed9);
        border-radius: 50%;
        transition: all 0.3s ease;
      }

      .info-list-item:hover::before {
        transform: scale(1.5);
        box-shadow: 0 0 10px rgba(79, 141, 184, 0.5);
      }

      .step-number {
        width: 28px;
        height: 28px;
        background: linear-gradient(135deg, #4f8db8, #6faed9);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        font-weight: bold;
        flex-shrink: 0;
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
    </style>
  </head>

  <body class="font-sans text-gray-700 overflow-x-hidden relative">
    <!-- DECORATIVE BACKGROUND -->
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
            href="{{ url('/') }}"
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
              class="absolute -bottom-2 left-1/2 w-2 h-2 bg-[#17235b] rounded-full opacity-0 group-hover:opacity-100 group-hover:left-0 transition-all duration-300"
            ></span>
          </a>

          <a
            href="{{ url('/informasi') }}"
            class="relative group flex items-center gap-2 opacity-80 hover:opacity-100"
          >
            <i class="fa-solid fa-bullhorn text-xs"></i> INFORMATIONS
            <span
              class="absolute -bottom-2 left-0 w-2 h-2 bg-[#17235b] rounded-full"
            ></span>
            <span
              class="absolute -bottom-2 left-0 w-8 h-0.5 bg-gradient-to-r from-[#17235b] to-transparent rounded-full"
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
          <a href="{{ url('/') }}" class="flex items-center gap-2">
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
    <section class="relative pt-40 pb-16 overflow-hidden">
      <!-- Background gradient subtle -->
      <div
        class="absolute inset-0 bg-gradient-to-b from-transparent to-white/30 pointer-events-none"
      ></div>

      <div class="relative max-w-7xl mx-auto px-6">
        <!-- Breadcrumb -->
        <div
          class="flex items-center gap-2 text-sm mb-8 glass-card inline-flex px-5 py-2.5 rounded-full"
        >
          <a href="#" class="text-[#4F8DB8] hover:text-[#17235b] transition"
            >Home</a
          >
          <i class="fa-solid fa-chevron-right text-xs text-gray-400"></i>
          <span class="text-gray-600 font-semibold">Informasi Layanan</span>
        </div>

        <!-- Header -->
        <div class="max-w-4xl mx-auto text-center mb-12">
          <span
            class="inline-block glass-card px-6 py-3 rounded-full text-[#4F8DB8] font-bold text-sm mb-4 border border-white/50"
          >
            <i class="fa-solid fa-circle-info mr-2"></i> INFORMASI RESMI
          </span>
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6">
            <span class="text-gradient">Informasi Layanan</span><br />
            <span
              class="bg-gradient-to-r from-[#17235b] to-[#4F8DB8] bg-clip-text text-transparent"
              >Bimbingan & Konseling</span
            >
          </h1>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Tata cara pengisian konseling, aturan layanan, dan lokasi sekolah
            untuk kemudahan akses siswa.
          </p>
        </div>
      </div>
    </section>

    <!-- ===== CONTENT  ===== -->
    <section class="relative py-8 pb-20">
      <div class="max-w-7xl mx-auto px-6 space-y-10">
        <!-- ===== MAPS  ===== -->
        <div class="group relative service-card">
          <!-- Glow effect -->
          <div
            class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"
          ></div>

          <div class="relative glass-card-deep rounded-3xl p-8 md:p-10">
            <div class="flex items-center gap-4 mb-6">
              <div
                class="w-16 h-16 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transform group-hover:rotate-6 transition-all duration-500"
              >
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div>
                <span
                  class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
                  >Lokasi</span
                >
                <h2 class="text-2xl md:text-3xl font-bold text-[#17235b]">
                  Lokasi Sekolah
                </h2>
              </div>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-center">
              <div>
                <div class="flex items-start gap-3 mb-4">
                  <i
                    class="fa-solid fa-map-pin text-[#4F8DB8] mt-1 text-xl"
                  ></i>
                  <p class="text-gray-600 leading-relaxed font-medium">
                    Jl. Babakan Tiga No.82, Ciwidey, Kec. Ciwidey,
                    <br />Kabupaten Bandung, Jawa Barat 40973, Indonesia
                  </p>
                </div>

                <div class="flex flex-wrap gap-4 mt-6">
                  <div
                    class="flex items-center gap-3 bg-white/60 backdrop-blur-sm px-5 py-3 rounded-xl border border-white/50"
                  >
                    <i class="fa-regular fa-clock text-[#4F8DB8]"></i>
                    <div>
                      <span class="text-xs text-gray-500">Jam Operasional</span>
                      <p class="font-bold text-[#17235b]">
                        Senin - Sabtu, 08.00 - 16.00
                      </p>
                    </div>
                  </div>

                  <div
                    class="flex items-center gap-3 bg-white/60 backdrop-blur-sm px-5 py-3 rounded-xl border border-white/50"
                  >
                    <i class="fa-regular fa-calendar text-[#4F8DB8]"></i>
                    <div>
                      <span class="text-xs text-gray-500">Layanan Offline</span>
                      <p class="font-bold text-[#17235b]">Tersedia</p>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="rounded-2xl overflow-hidden shadow-2xl border-2 border-white/50 h-64"
              >
                <iframe
                  class="w-full h-full"
                  src="https://www.google.com/maps?q=SMK+Budi+Bakti+Ciwidey&output=embed"
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                  style="filter: grayscale(0.1) contrast(1.05)"
                >
                </iframe>
              </div>
            </div>
          </div>
        </div>

        <!-- ===== ATURAN ===== -->
        <div class="grid md:grid-cols-2 gap-8">
          <!-- ===== TATA CARA ===== -->
          <div class="group relative service-card h-full">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#17235b] to-[#2a3a7a] rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"
            ></div>

            <div
              class="relative glass-card-deep rounded-3xl p-8 h-full flex flex-col"
            >
              <div class="flex items-center gap-4 mb-8">
                <div
                  class="w-16 h-16 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transform group-hover:-rotate-6 transition-all duration-500"
                >
                  <i class="fa-solid fa-pen-to-square"></i>
                </div>
                <div>
                  <span
                    class="text-sm font-bold text-[#17235b] uppercase tracking-wider"
                    >Prosedur</span
                  >
                  <h2 class="text-2xl font-bold text-[#17235b]">
                    Tata Cara Pengisian Konseling
                  </h2>
                </div>
              </div>

              <div class="space-y-6 flex-grow">
                <div class="flex items-start gap-4 info-list-item">
                  <div class="step-number">1</div>
                  <div>
                    <h4 class="font-bold text-gray-800 mb-1">
                      Login ke Akun BK Care
                    </h4>
                    <p class="text-sm text-gray-600">
                      Siswa login menggunakan username dan password dari sekolah
                      untuk mengakses layanan konseling.
                    </p>
                  </div>
                </div>

                <div class="flex items-start gap-4 info-list-item">
                  <div class="step-number">2</div>
                  <div>
                    <h4 class="font-bold text-gray-800 mb-1">
                      Pilih Menu Konseling
                    </h4>
                    <p class="text-sm text-gray-600">
                      Pilih menu
                      <span class="font-semibold text-[#4F8DB8]"
                        >Konseling</span
                      >
                      atau
                      <span class="font-semibold text-[#4F8DB8]"
                        >Ajukan Konseling</span
                      >
                      pada halaman utama.
                    </p>
                  </div>
                </div>

                <div class="flex items-start gap-4 info-list-item">
                  <div class="step-number">3</div>
                  <div>
                    <h4 class="font-bold text-gray-800 mb-1">
                      Isi Formulir Konseling
                    </h4>
                    <div class="text-sm text-gray-600 space-y-1">
                      <p>• Jenis konseling</p>
                      <p>• Topik atau permasalahan</p>
                      <p>• Deskripsi singkat masalah</p>
                    </div>
                  </div>
                </div>

                <div class="flex items-start gap-4 info-list-item">
                  <div class="step-number">4</div>
                  <div>
                    <h4 class="font-bold text-gray-800 mb-1">
                      Pilih Metode & Jadwal
                    </h4>
                    <p class="text-sm text-gray-600">
                      Tentukan metode konseling
                      <span class="font-semibold text-[#4F8DB8]"
                        >(tatap muka / online)</span
                      >
                      dan jadwal yang tersedia.
                    </p>
                  </div>
                </div>

                <div class="flex items-start gap-4 info-list-item">
                  <div class="step-number">5</div>
                  <div>
                    <h4 class="font-bold text-gray-800 mb-1">
                      Kirim Pengajuan
                    </h4>
                    <p class="text-sm text-gray-600">
                      Periksa kembali data lalu klik
                      <span class="font-semibold text-[#4F8DB8]">Kirim</span>
                      atau
                      <span class="font-semibold text-[#4F8DB8]"
                        >Ajukan Konseling</span
                      >.
                    </p>
                  </div>
                </div>

                <div class="flex items-start gap-4 info-list-item">
                  <div class="step-number">6</div>
                  <div>
                    <h4 class="font-bold text-gray-800 mb-1">
                      Ikuti Sesi Konseling
                    </h4>
                    <p class="text-sm text-gray-600">
                      Siswa mengikuti sesi sesuai jadwal dengan sikap sopan,
                      terbuka, dan saling menghargai.
                    </p>
                  </div>
                </div>
              </div>

              <div class="mt-8 pt-6 border-t border-white/30">
                <div class="bg-[#4F8DB8]/10 rounded-xl p-4">
                  <p class="text-sm flex items-center gap-2">
                    <i class="fa-solid fa-circle-info text-[#4F8DB8]"></i>
                    <span class="font-medium text-gray-700"
                      >Pastikan data yang diisi lengkap dan benar untuk
                      mempercepat proses verifikasi.</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- ===== ATURAN & TATA TERTIB ===== -->
          <div class="group relative service-card h-full">
            <div
              class="absolute -inset-0.5 bg-gradient-to-r from-[#6FAED9] to-[#4F8DB8] rounded-3xl blur-xl opacity-30 group-hover:opacity-60 transition duration-500"
            ></div>

            <div
              class="relative glass-card-deep rounded-3xl p-8 h-full flex flex-col"
            >
              <div class="flex items-center gap-4 mb-8">
                <div
                  class="w-16 h-16 bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] rounded-2xl flex items-center justify-center text-white text-2xl shadow-lg transform group-hover:rotate-6 transition-all duration-500"
                >
                  <i class="fa-solid fa-scale-balanced"></i>
                </div>
                <div>
                  <span
                    class="text-sm font-bold text-[#4F8DB8] uppercase tracking-wider"
                    >Regulasi</span
                  >
                  <h2 class="text-2xl font-bold text-[#17235b]">
                    Aturan & Tata Tertib
                  </h2>
                </div>
              </div>

              <div class="space-y-3 flex-grow">
                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-check-circle text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Siswa wajib mengisi formulir konseling dengan data yang
                    benar, lengkap, dan sesuai dengan kondisi yang dialami.
                  </p>
                </div>

                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-check-circle text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Setiap pengajuan konseling harus menggunakan bahasa yang
                    sopan, jelas, dan mudah dipahami.
                  </p>
                </div>

                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-check-circle text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Permasalahan yang diajukan harus berkaitan dengan layanan
                    konseling, seperti masalah pribadi, akademik, sosial, atau
                    perencanaan karier.
                  </p>
                </div>

                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-check-circle text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Pengajuan konseling hanya dapat dilakukan sesuai jadwal dan
                    ketentuan yang telah ditetapkan.
                  </p>
                </div>

                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-check-circle text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Siswa wajib menunggu konfirmasi dari guru BK sebelum
                    mengikuti sesi konseling.
                  </p>
                </div>

                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-clock text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Apabila siswa berhalangan hadir, diharapkan memberikan
                    pemberitahuan atau mengajukan penjadwalan ulang sesuai
                    prosedur.
                  </p>
                </div>

                <div
                  class="flex items-start gap-3 bg-white/50 backdrop-blur-sm p-4 rounded-xl border border-white/50 hover:bg-white/80 transition-all"
                >
                  <i class="fa-solid fa-handshake text-[#4F8DB8] mt-0.5"></i>
                  <p class="text-sm text-gray-700">
                    Selama sesi konseling berlangsung, siswa diharapkan bersikap
                    tertib, terbuka, dan saling menghargai.
                  </p>
                </div>
              </div>

              <div class="mt-8 pt-6 border-t border-white/30">
                <div
                  class="bg-amber-50/80 backdrop-blur-sm rounded-xl p-4 border-l-4 border-amber-400"
                >
                  <p class="text-sm flex items-center gap-2">
                    <i
                      class="fa-solid fa-triangle-exclamation text-amber-500"
                    ></i>
                    <span class="font-medium text-gray-700"
                      >Ketidakpatuhan terhadap aturan dapat mengakibatkan
                      penundaan atau pembatalan sesi konseling.</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ===== INFORMASI ===== -->
        <div class="grid md:grid-cols-3 gap-6 mt-8">
          <div
            class="glass-card rounded-2xl p-6 service-card flex items-start gap-4"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-xl flex-shrink-0"
            >
              <i class="fa-regular fa-headset"></i>
            </div>
            <div>
              <h4 class="font-bold text-[#17235b] mb-1">Layanan Darurat</h4>
              <p class="text-xs text-gray-500 mb-2">24/7 untuk krisis</p>
              <a
                href="#"
                class="text-sm text-[#4F8DB8] font-semibold hover:underline flex items-center gap-1"
              >
                <i class="fa-solid fa-phone"></i> (022) 5928-4567
              </a>
            </div>
          </div>

          <div
            class="glass-card rounded-2xl p-6 service-card flex items-start gap-4"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#17235b] to-[#2a3a7a] rounded-xl flex items-center justify-center text-white text-xl flex-shrink-0"
            >
              <i class="fa-regular fa-envelope"></i>
            </div>
            <div>
              <h4 class="font-bold text-[#17235b] mb-1">Email Resmi</h4>
              <p class="text-xs text-gray-500 mb-2">Respons 1x24 jam</p>
              <a
                href="#"
                class="text-sm text-[#4F8DB8] font-semibold hover:underline"
                >bkcare.contact@gmail.com</a
              >
            </div>
          </div>

          <div
            class="glass-card rounded-2xl p-6 service-card flex items-start gap-4"
          >
            <div
              class="w-14 h-14 bg-gradient-to-br from-[#6FAED9] to-[#4F8DB8] rounded-xl flex items-center justify-center text-white text-xl flex-shrink-0"
            >
              <i class="fa-regular fa-clock"></i>
            </div>
            <div>
              <h4 class="font-bold text-[#17235b] mb-1">Jam Operasional</h4>
              <p class="text-xs text-gray-500 mb-2">Konseling Offline</p>
              <p class="text-sm font-semibold text-gray-700">
                Senin - Sabtu, 08.00 - 16.00
              </p>
            </div>
          </div>
        </div>

        <!-- ===== FAQ ===== -->
        <div class="glass-card rounded-3xl p-8 mt-8">
          <h3
            class="text-xl font-bold text-[#17235b] mb-6 flex items-center gap-3"
          >
            <i class="fa-solid fa-circle-question text-[#4F8DB8]"></i>
            Pertanyaan Umum Seputar Layanan
          </h3>

          <div class="grid md:grid-cols-2 gap-6">
            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
              >
                <i class="fa-solid fa-question text-xs text-[#4F8DB8]"></i>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800 text-sm">
                  Apakah layanan konseling gratis?
                </h4>
                <p class="text-xs text-gray-500 mt-1">
                  Ya, seluruh layanan konseling untuk siswa SMK Budi Bakti
                  Ciwidey TIDAK DIPUNGUT BIAYA.
                </p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
              >
                <i class="fa-solid fa-question text-xs text-[#4F8DB8]"></i>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800 text-sm">
                  Berapa lama menunggu konfirmasi?
                </h4>
                <p class="text-xs text-gray-500 mt-1">
                  Maksimal 2x24 jam kerja. Jika lebih, silakan hubungi guru BK
                  via WhatsApp.
                </p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
              >
                <i class="fa-solid fa-question text-xs text-[#4F8DB8]"></i>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800 text-sm">
                  Apakah orang tua bisa mendampingi?
                </h4>
                <p class="text-xs text-gray-500 mt-1">
                  Bisa, dengan persetujuan siswa dan pemberitahuan sebelumnya ke
                  guru BK.
                </p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div
                class="w-6 h-6 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5"
              >
                <i class="fa-solid fa-question text-xs text-[#4F8DB8]"></i>
              </div>
              <div>
                <h4 class="font-semibold text-gray-800 text-sm">
                  Bisa ganti jadwal sesudah submit?
                </h4>
                <p class="text-xs text-gray-500 mt-1">
                  Bisa, melalui menu "Riwayat Konseling" atau hubungi BK Care
                  langsung.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== CTA KONSELING ===== -->
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
            Siap Mengajukan Konseling?
          </h3>
          <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
            Ikuti tata cara di atas dan mulailah sesi konselingmu sekarang.
            Gratis dan terpercaya.
          </p>
          <div class="flex flex-wrap gap-4 justify-center">
            <a
              href="#"
              class="group bg-white text-[#17235b] font-bold px-8 py-4 rounded-full hover:shadow-2xl hover:scale-105 transition-all duration-500 flex items-center gap-3"
            >
              <i class="fa-regular fa-calendar-check"></i>
              Ajukan Konseling
              <i
                class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"
              ></i>
            </a>
            <a
              href="#"
              class="group bg-transparent border-2 border-white text-white font-bold px-8 py-4 rounded-full hover:bg-white/10 hover:scale-105 transition-all duration-500 flex items-center gap-3"
            >
              <i class="fa-regular fa-circle-question"></i>
              Hubungi Kami
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ===== FOOTER ===== -->
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
                  <a href="{{ url('/home') }}" class="text-white/70 hover:text-white transition"
                    >Home</a
                  >
                </li>
                <li>
                  <a href="{{ url('/tentang') }}" class="text-white/70 hover:text-white transition"
                    >Tentang BK Care</a
                  >
                </li>
                <li>
                  <a href="{{ url('/materi') }}" class="text-white/70 hover:text-white transition"
                    >Materi Edukasi</a
                  >
                </li>
                <li>
                  <a href="{{ url('/informasi') }}" class="text-white/70 hover:text-white transition"
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
