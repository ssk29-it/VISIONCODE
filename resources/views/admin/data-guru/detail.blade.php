<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Detail Guru BK | BK Care SMK Budi Bakti Ciwidey</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"
    />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome 6 -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />

    <!-- Google Font: Plus Jakarta Sans -->
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      * {
        font-family: "Plus Jakarta Sans", sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
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

      /* Glassmorphism Effects */
      .glass-card-deep {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.8);
        box-shadow: 0 25px 50px -12px rgba(23, 35, 91, 0.25);
      }

      /* Text Gradient - BRAND COLORS */
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

      /* Floating Animation */
      .floating {
        animation: float 6s ease-in-out infinite;
      }

      @keyframes float {
        0%,
        100% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-8px);
        }
      }

      /* Form Styles untuk readonly */
      .form-input[readonly] {
        background-color: #f8fafc;
        cursor: default;
      }

      .form-input:focus {
        border-color: #4f8db8;
        box-shadow: 0 0 0 3px rgba(79, 141, 184, 0.1);
      }

      /* Custom Scrollbar - BRAND BLUE */
      ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
      }

      ::-webkit-scrollbar-track {
        background: #f1f5f9;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb {
        background: #4f8db8;
        border-radius: 10px;
      }

      ::-webkit-scrollbar-thumb:hover {
        background: #17235b;
      }
    </style>
  </head>

  <body class="font-sans text-gray-700 overflow-x-hidden">
    <!-- DECORATIVE BACKGROUND ELEMENTS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
      <div
        class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/10 rounded-full blur-3xl floating"
      ></div>
      <div
        class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/10 rounded-full blur-3xl floating"
        style="animation-delay: -3s"
      ></div>
    </div>

    <!-- MAIN CONTAINER - tanpa sidebar -->
    <div class="flex min-h-screen relative">
      <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 relative z-10">
        <!-- TOP BAR -->
        <div class="glass-card-deep rounded-xl md:rounded-2xl p-3 md:p-5 flex flex-wrap items-center justify-between gap-3 border border-white/40 shadow-xl">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-lg md:text-xl shadow-lg">
              <i class="fa-solid fa-user-tie"></i>
            </div>
            <div>
              <h2 class="font-extrabold text-[#17235b] text-base md:text-xl">
                <span class="text-gradient">Detail Guru BK</span>
              </h2>
              <p class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-2">
                <i class="fa-regular fa-folder-open text-[#4F8DB8]"></i>
                <span>Informasi lengkap data guru BK</span>
              </p>
            </div>
          </div>

          <!-- BREADCRUMB -->
          <div class="flex items-center gap-2 text-xs text-gray-400 self-end sm:self-auto">
            <span>Admin</span>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span>Data Master</span>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <a href="dataguru.html" class="hover:text-[#4F8DB8] transition underline decoration-dotted underline-offset-2">Data Guru BK</a>
            <i class="fa-solid fa-chevron-right text-[10px]"></i>
            <span class="text-[#4F8DB8] font-medium">Detail Guru BK</span>
          </div>
        </div>

        {{-- FORM DETAIL (READONLY) --}}
        <div class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/40 shadow-xl max-w-4xl mx-auto">
          <!-- HEADER CARD -->
          <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#4F8DB8]/20">
            <div class="w-10 h-10 bg-[#4F8DB8]/10 rounded-lg flex items-center justify-center">
              <i class="fa-solid fa-id-card text-[#4F8DB8] text-lg"></i>
            </div>
            <div>
              <h3 class="font-bold text-[#17235b]">Biodata Guru BK</h3>
              <p class="text-xs text-gray-500">Data lengkap guru bimbingan konseling</p>
            </div>
          </div>

          <!-- LAYOUT: FOTO + DATA -->
          <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
            <!-- SECTION FOTO DENGAN PREVIEW -->
<div class="w-full lg:w-64 flex-shrink-0">
  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
    <i class="fa-solid fa-camera text-[#4F8DB8] mr-1"></i> Foto Guru BK
  </label>

  <div class="relative group">
    <div class="absolute -inset-1 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-xl blur opacity-30 group-hover:opacity-50 transition"></div>

    <div class="relative w-full aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-xl overflow-hidden border-2 border-white shadow-lg flex items-center justify-center">

      <img
        src="{{ $gurubk->image == 'default.jpg' 
                ? asset('img/default.jpg') 
                : asset('storage/'.$gurubk->image) }}"
        class="w-full h-full object-contain"
        alt="Foto Guru BK"
      >

    </div>
  </div>
</div>

            <!-- DATA BIODATA GRID (SEMUA FIELD READONLY) -->
            <div class="flex-1">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <!-- Nama Lengkap (Full Width) -->
                <div class="md:col-span-2">
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-solid fa-user text-[#4F8DB8] mr-1"></i> Nama Lengkap
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-20"></div>
                    <input
                        type="text"
                        value="{{ $gurubk->nama_gurubk }}"
                        readonly
                        class="form-input relative w-full h-10 px-4 rounded-lg border border-white/50 bg-white/90 backdrop-blur-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all"
                    />
                  </div>
                </div>

                <!-- NIP -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-id-card text-[#4F8DB8] mr-1"></i> NIP
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="text"
                      value="{{ $gurubk->nip }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- No HP -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-phone text-[#4F8DB8] mr-1"></i> No HP
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="text"
                      value="{{ $gurubk->no_hp }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- Email -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-envelope text-[#4F8DB8] mr-1"></i> Email
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="email"
                      value="{{ $gurubk->email }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- Jenis Kelamin -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-venus-mars text-[#4F8DB8] mr-1"></i> Jenis Kelamin
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="text"
                      value="{{ $gurubk->jk == 'L' ? 'Laki-laki' : 'Perempuan' }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- Tempat Lahir -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-location-dot text-[#4F8DB8] mr-1"></i> Tempat Lahir
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="text"
                      value="{{ $gurubk->tempat_lahir }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- Tanggal Lahir -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-calendar text-[#4F8DB8] mr-1"></i> Tanggal Lahir
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="text"
                      value="{{ \Carbon\Carbon::parse($gurubk->tanggal_lahir)->format('d F Y') }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- Pendidikan Terakhir -->
                <div>
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-graduation-cap text-[#4F8DB8] mr-1"></i> Pendidikan Terakhir
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <input
                      type="text"
                      value="{{ $gurubk->pendidikan_terakhir }}"
                      readonly
                      class="form-input relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm"
                    />
                  </div>
                </div>

                <!-- Alamat - Full Width -->
                <div class="md:col-span-2">
                  <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                    <i class="fa-regular fa-address-book text-[#4F8DB8] mr-1"></i> Alamat
                  </label>
                  <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                    <textarea
                      readonly
                      rows="2"
                      class="form-input relative w-full px-4 py-2 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm resize-none"
                    >{{ $gurubk->alamat }}</textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- BUTTON ACTION (HANYA KEMBALI) -->
          <div class="mt-8 pt-6 border-t border-[#4F8DB8]/20 flex justify-center">
            <a
              href="{{ route('data-guru.index') }}"
              class="w-full sm:w-auto px-8 py-3 flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white hover:shadow-lg hover:shadow-[#4F8DB8]/30 transition-all duration-300 hover:scale-[1.02] text-sm font-medium"
            >
              <i class="fa-solid fa-arrow-left"></i>
              Kembali ke Daftar Guru BK
            </a>
          </div>
        </div>

        <!-- FOOTER ADMIN -->
        <div class="text-center text-[9px] md:text-xs text-gray-400 pt-3 md:pt-4 pb-1 md:pb-2 flex flex-wrap items-center justify-center gap-2 md:gap-4">
          <span>© 2026 BK Care For School Life - VISIONCODE</span>
          <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
          <span class="text-[#4F8DB8] font-medium">SMK Budi Bakti Ciwidey</span>
          <span class="w-1 h-1 bg-gray-300 rounded-full hidden xs:inline"></span>
          <span class="text-gray-500 hidden xs:inline">Dashboard v2.0</span>
        </div>
      </main>
    </div>
  </body>
</html>