<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Tambah Siswa | BK Care SMK Budi Bakti Ciwidey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Google Font: Plus Jakarta Sans -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    * {
      font-family: "Plus Jakarta Sans", sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: radial-gradient(circle at 0% 0%, rgba(79, 141, 184, 0.08) 0%, transparent 50%),
                  radial-gradient(circle at 100% 0%, rgba(111, 174, 217, 0.08) 0%, transparent 50%),
                  radial-gradient(circle at 100% 100%, rgba(79, 141, 184, 0.06) 0%, transparent 50%),
                  radial-gradient(circle at 0% 100%, rgba(111, 174, 217, 0.06) 0%, transparent 50%),
                  linear-gradient(145deg, #f8fcff 0%, #f0f7fc 100%);
    }

    /* Glassmorphism Effects */
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

    /* Text Gradient - BRAND COLORS */
    .text-gradient {
      background: linear-gradient(145deg, #17235b 0%, #2a4a7a 50%, #4f8db8 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-size: 200% auto;
      animation: shine 8s linear infinite;
    }

    @keyframes shine {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    /* Floating Animation */
    .floating {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-8px); }
    }

    /* Form Styles */
    .form-input:focus {
      border-color: #4F8DB8;
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
    <div class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/10 rounded-full blur-3xl floating"></div>
    <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/10 rounded-full blur-3xl floating" style="animation-delay: -3s"></div>
  </div>

  <!-- MAIN CONTAINER - tanpa sidebar -->
  <div class="flex min-h-screen relative">
    <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 relative z-10">
      
      <!-- TOP BAR -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-3 md:p-5 flex flex-wrap items-center justify-between gap-3 border border-white/40 shadow-xl">
        <div class="flex items-center gap-2 md:gap-3">
          <div class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-lg md:text-xl shadow-lg">
            <i class="fa-solid fa-user-plus"></i>
          </div>
          <div>
            <h2 class="font-extrabold text-[#17235b] text-base md:text-xl">
              <span class="text-gradient">Tambah Siswa</span>
            </h2>
            <p class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-2">
              <i class="fa-regular fa-folder-open text-[#4F8DB8]"></i>
              <span>Form input data siswa</span>
            </p>
          </div>
        </div>

        <!-- BREADCRUMB -->
        <div class="flex items-center gap-2 text-xs text-gray-400 self-end sm:self-auto">
          <span>Admin</span>
          <i class="fa-solid fa-chevron-right text-[10px]"></i>
          <span>Data Master</span>
          <i class="fa-solid fa-chevron-right text-[10px]"></i>
          <a href="datasiswa.html" class="hover:text-[#4F8DB8] transition underline decoration-dotted underline-offset-2">Data Siswa</a>
          <i class="fa-solid fa-chevron-right text-[10px]"></i>
          <span class="text-[#4F8DB8] font-medium">Tambah Siswa</span>
        </div>
      </div>

      {{-- FORM TAMBAH SISWA --}}
      <form action="{{ route('data-siswa.store') }}" method="POST">
        @csrf
        <div class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/40 shadow-xl max-w-4xl mx-auto">
          
          <!-- HEADER CARD -->
          <div class="flex items-center gap-3 mb-6 pb-4 border-b border-[#4F8DB8]/20">
            <div class="w-10 h-10 bg-[#4F8DB8]/10 rounded-lg flex items-center justify-center">
              <i class="fa-solid fa-id-card text-[#4F8DB8] text-lg"></i>
            </div>
            <div>
              <h3 class="font-bold text-[#17235b]">Form Biodata Siswa</h3>
              <p class="text-xs text-gray-500">Isi data dengan lengkap dan benar</p>
            </div>
          </div>

          <!-- FORM BIODATA GRID -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
            
            {{-- wali kelas --}}
            <div class="md:col-span-2">
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-solid fa-chalkboard-teacher text-[#4F8DB8] mr-1"></i> Wali Kelas <span class="text-red-500">*</span>
              </label>

              <div class="relative">
                <select name="walikelas_id" required
                  class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-[#4F8DB8] focus:outline-none">
                  
                  <option value="">-- Pilih Wali Kelas --</option>
                  @foreach($walikelas as $wk)
                    <option value="{{ $wk->id }}"
                      {{ old('walikelas_id', $siswa->walikelas_id ?? '') == $wk->id ? 'selected' : '' }}>
                      {{ $wk->nama_guru }}
                    </option>
                  @endforeach
                </select>

                <i class="fa-solid fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
              </div>
            </div>

            <!-- Nama Siswa -->
            <div class="md:col-span-2">
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-solid fa-user text-[#4F8DB8] mr-1"></i> Nama Lengkap <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-20"></div>
                <input
                  type="text"
                  name="nama_siswa"
                  placeholder="Masukkan nama lengkap"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-white/50 bg-white/90 backdrop-blur-sm text-gray-700 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all"
                />
              </div>
            </div>

            <!-- NIPD -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-id-card text-[#4F8DB8] mr-1"></i> NIPD <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <input
                  type="number"
                  name="nipd"
                  placeholder="198234234"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm placeholder:text-gray-400"
                />
              </div>
            </div>

            <!-- Kelas -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-building text-[#4F8DB8] mr-1"></i> Kelas <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <input
                  type="text"
                  name="kelas"
                  placeholder="XI RPL 1"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm placeholder:text-gray-400"
                />
              </div>
            </div>

            <!-- Jurusan -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-code text-[#4F8DB8] mr-1"></i> Jurusan <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <select
                  name="jurusan"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm appearance-none text-gray-700"
                >
                  <option value="" selected disabled>Pilih jurusan</option>
                  <option value="RPL">Rekayasa Perangkat Lunak</option>
                  <option value="BDP">Bisnis Daring Pemasaran</option>
                  <option value="DKV">Desain Komunikasi Visual</option>
                </select>
                <i class="fa-solid fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
              </div>
            </div>

            <!-- Jenis Kelamin -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-venus-mars text-[#4F8DB8] mr-1"></i> Jenis Kelamin <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <select
                  name="jk"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm appearance-none text-gray-700"
                >
                  <option value="" selected disabled>Pilih jenis kelamin</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
                <i class="fa-solid fa-chevron-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 text-xs pointer-events-none"></i>
              </div>
            </div>

            <!-- Tempat Lahir -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-location-dot text-[#4F8DB8] mr-1"></i> Tempat Lahir <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <input
                  type="text"
                  name="tempat_lahir"
                  placeholder="Bandung"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm placeholder:text-gray-400"
                />
              </div>
            </div>

            <!-- Tanggal Lahir -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-calendar text-[#4F8DB8] mr-1"></i> Tanggal Lahir <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <input
                  type="date"
                  name="tanggal_lahir"
                  required
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm text-gray-700"
                />
              </div>
            </div>

            <!-- Email -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-envelope text-[#4F8DB8] mr-1"></i> Email<span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <input
                  type="email"
                  name="email"
                  required
                  placeholder="siswa@gmail.com"
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm placeholder:text-gray-400"
                />
              </div>
            </div>

            <!-- No HP -->
            <div>
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-phone text-[#4F8DB8] mr-1"></i> No HP<span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <input
                  type="text"
                  name="no_hp"
                  required
                  placeholder="081234567890"
                  class="relative w-full h-10 px-4 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm placeholder:text-gray-400"
                />
              </div>
            </div>

            <!-- Alamat - Full Width -->
            <div class="md:col-span-2">
              <label class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-2">
                <i class="fa-regular fa-address-book text-[#4F8DB8] mr-1"></i> Alamat <span class="text-red-500">*</span>
              </label>
              <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-10"></div>
                <textarea
                  name="alamat"
                  rows="2"
                  placeholder="Jl. Merdeka No. 10, Ciwidey, Kab. Bandung"
                  required
                  class="relative w-full px-4 py-2 rounded-lg border border-gray-200 bg-white/90 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent transition-all text-sm placeholder:text-gray-400 resize-none"
                ></textarea>
              </div>
            </div>
          </div>

          <!-- BUTTON ACTION -->
          <div class="mt-8 pt-6 border-t border-[#4F8DB8]/20 flex flex-col sm:flex-row gap-3 sm:gap-4">
            <a href="{{ route('data-siswa.index') }}" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 hover:border-gray-400 transition-all duration-200 text-sm font-medium">
              <i class="fa-solid fa-arrow-left"></i>
              Kembali
            </a>
            <button type="submit" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white hover:shadow-lg hover:shadow-[#4F8DB8]/30 transition-all duration-300 hover:scale-[1.02] text-sm font-medium">
              <i class="fa-regular fa-floppy-disk"></i>
              Simpan
            </button>
          </div>
        </div>
      </form>

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

  <script>
    // Tidak ada fungsi sidebar karena sidebar dihapus
    document.addEventListener('DOMContentLoaded', function() {
      console.log('Halaman tambah siswa siap');
    });
  </script>
</body>
</html>