<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Point Pelanggaran | BK Care SMK Budi Bakti Ciwidey</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes" />

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <!-- Google Font: Plus Jakarta Sans -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    * { font-family: "Plus Jakarta Sans", sans-serif; margin: 0; padding: 0; box-sizing: border-box; }
    body { background: radial-gradient(circle at 0% 0%, rgba(79,141,184,0.08) 0%, transparent 50%), radial-gradient(circle at 100% 0%, rgba(111,174,217,0.08) 0%, transparent 50%), radial-gradient(circle at 100% 100%, rgba(79,141,184,0.06) 0%, transparent 50%), radial-gradient(circle at 0% 100%, rgba(111,174,217,0.06) 0%, transparent 50%), linear-gradient(145deg, #f8fcff 0%, #f0f7fc 100%); }

    /* Glassmorphism & card */
    .glass-card-deep { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.8); box-shadow: 0 25px 50px -12px rgba(23,35,91,0.25); }
    .text-gradient { background: linear-gradient(145deg,#17235b 0%,#2a4a7a 50%,#4f8db8 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-size: 200% auto; animation: shine 8s linear infinite; }
    @keyframes shine { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
    .profile-card { background: linear-gradient(145deg, #17235b, #1e3a5f); position: relative; overflow: hidden; }
    .profile-card::before { content: ""; position: absolute; top: -50%; right: -50%; width: 200%; height: 200%; background: radial-gradient(circle, rgba(79,141,184,0.15) 0%, transparent 70%); animation: rotate 20s linear infinite; }
    @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    .smk-badge { background: rgba(250, 204, 21, 0.15); color: #17235b; border: 1px solid rgba(250, 204, 21, 0.3); }
    .btn-primary { background: linear-gradient(145deg, #4f8db8, #6faed9); color: white; transition: all 0.3s ease; }
    .btn-primary:hover { background: linear-gradient(145deg, #3a6b8c, #4f8db8); box-shadow: 0 10px 20px -5px rgba(79,141,184,0.4); }
    .menu-item { transition: all 0.3s ease; border-radius: 12px; }
    .menu-item:hover { background: rgba(79,141,184,0.1); color: #17235b; }
    .menu-active { background: linear-gradient(90deg, #4f8db8, #6faed9); color: white; box-shadow: 0 10px 20px -5px rgba(79,141,184,0.3); }
    ::-webkit-scrollbar { width: 6px; height: 6px; }
    ::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 10px; }
    ::-webkit-scrollbar-thumb { background: #4f8db8; border-radius: 10px; }

    /* sidebar penuh ke bawah */
    .sidebar-full { height: 100vh; position: sticky; top: 0; display: flex; flex-direction: column; background: transparent; }
    .sidebar-full .inner-sidebar { display: flex; flex-direction: column; height: 100%; max-height: 100vh; overflow-y: auto; }

    /* status badge untuk pelanggaran */
    .badge-ringan { background: #fef3c7; color: #92400e; }
    .badge-sedang { background: #fed7aa; color: #9a3412; }
    .badge-berat { background: #fee2e2; color: #991b1b; }
    .badge-selesai { background: #d1fae5; color: #065f46; }
    .badge-proses { background: #dbeafe; color: #1e40af; }

    /* Scrollable container untuk daftar pelanggaran */
    .scrollable-list {
      max-height: 400px;
      overflow-y: auto;
      padding-right: 4px;
    }

    /* Mobile sidebar styles */
    .mobile-sidebar {
      position: fixed;
      left: -100%;
      top: 0;
      width: 85%;
      max-width: 320px;
      height: 100vh;
      z-index: 50;
      transition: left 0.3s ease;
    }
    .mobile-sidebar.active {
      left: 0;
    }
    .mobile-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(23, 35, 91, 0.6);
      backdrop-filter: blur(4px);
      z-index: 40;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }
    .mobile-overlay.active {
      opacity: 1;
      visibility: visible;
    }
  </style>
</head>
<body class="font-sans text-gray-700 overflow-x-hidden">

<!-- MOBILE SIDEBAR OVERLAY -->
<div id="mobileOverlay" class="mobile-overlay" onclick="toggleMobileSidebar()"></div>

<!-- MOBILE SIDEBAR -->
<div id="mobileSidebar" class="mobile-sidebar">
  <div class="h-full w-full glass-card-deep rounded-r-2xl p-5 flex flex-col overflow-y-auto border-r border-white/40 shadow-2xl">
    
    <!-- LOGO & IDENTITAS SMK -->
    <div class="flex items-center gap-3 pb-5 border-b border-[#4F8DB8]/20">
      <div class="relative group">
        <img
          src="https://ui-avatars.com/api/?name=BK+Care&background=17235b&color=fff&size=120&bold=true"
          alt="BK Care Admin"
          class="h-10 w-auto relative z-10"
          onerror="this.src='https://via.placeholder.com/120x48/17235b/ffffff?text=BK+CARE'"
        />
      </div>
      <div class="flex flex-col">
        <span class="smk-badge text-[10px] px-2 py-0.5 rounded-full">
          SMK Budi Bakti Ciwidey
        </span>
      </div>
    </div>

    <!-- MENU NAVIGASI MOBILE -->
    <nav class="flex-1 overflow-y-auto py-5 space-y-1 text-sm">
      <!-- Dashboard -->
      <a
        href="dashboard-siswa.html"
        class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        onclick="closeMobileSidebar()"
      >
        <i class="fa-solid fa-chart-pie w-5 text-center text-[#4F8DB8]"></i>
        <span class="font-medium">Dashboard</span>
      </a>

      <!-- Sistem Konseling dropdown -->
      <div class="space-y-1">
        <button onclick="toggleMobileMenu('konselingMobile')" 
          class="menu-item w-full flex items-center justify-between px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <div class="flex items-center gap-3">
            <i class="fa-solid fa-headset w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Sistem Konseling</span>
          </div>
          <i class="fas fa-chevron-down text-xs text-gray-500 transition-transform duration-300" id="chevron-konselingMobile"></i>
        </button>
        <div id="konselingMobile" class="ml-6 mt-1 space-y-1 hidden">
          <a href="pengajuan-konseling.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9" onclick="closeMobileSidebar()">
            <i class="fa-solid fa-pen-to-square text-xs text-[#4F8DB8]"></i>
            <span class="text-sm">Pengajuan Konseling</span>
          </a>
          <a href="jadwal-konseling.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9" onclick="closeMobileSidebar()">
            <i class="fa-solid fa-calendar-check text-xs text-[#4F8DB8]"></i>
            <span class="text-sm">Jadwal Konseling</span>
          </a>
        </div>
      </div>

      <!-- Point Pelanggaran (active) -->
      <a href="pointpelanggran_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl transition-all menu-active" onclick="closeMobileSidebar()">
        <i class="fa-solid fa-triangle-exclamation w-5 text-center text-white"></i>
        <span class="font-medium text-white">Point Pelanggaran</span>
      </a>

      <!-- View Website -->
      <a href="#" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all" onclick="closeMobileSidebar()">
        <i class="fa-solid fa-globe w-5 text-center text-[#4F8DB8]"></i>
        <span class="font-medium">View Website</span>
      </a>

    </nav>

    <!-- PROFILE MOBILE -->
    <div
      onclick="openProfilePopup(); closeMobileSidebar();"
      class="profile-card rounded-2xl p-4 mt-2 relative overflow-hidden cursor-pointer transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl group"
    >
      <div class="relative z-10 flex items-center gap-3">
        <div class="relative">
          <div
            class="w-12 h-12 rounded-full bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] p-1"
          >
            <div
              class="w-full h-full rounded-full bg-white flex items-center justify-center overflow-hidden"
            >
              <img
                src="https://ui-avatars.com/api/?name=Siswa&background=17235b&color=fff&size=80&bold=true"
                alt="Siswa"
                class="w-full h-full object-cover"
              />
            </div>
          </div>
          <span
            class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 border-2 border-white rounded-full flex items-center justify-center"
          >
            <i class="fa-solid fa-check text-white text-[8px]"></i>
          </span>
        </div>
        <div class="flex-1">
          <div class="flex items-center gap-2">
            <h4 class="text-white font-bold text-sm">Siswa</h4>
            <span
              class="bg-white/20 text-[10px] px-1.5 py-0.5 rounded-full text-white"
              >Nama siswa</span
            >
          </div>
          <p class="text-white/80 text-xs mb-0.5 truncate">
            SMK Budi Bakti Ciwidey
          </p>
        </div>
        <div
          class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center text-white group-hover:bg-white/40 transition-all"
        >
          <i class="fa-solid fa-chevron-right text-xs"></i>
        </div>
      </div>
    </div>

    <!-- Logout button mobile -->
    <button onclick="logout()" class="mt-3 w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl text-xs font-medium bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 hover:border-red-200 hover:bg-red-50 hover:text-red-600 transition-all">
      <i class="fa-solid fa-right-from-bracket text-[11px]"></i> Logout
    </button>

  </div>
</div>

<!-- ================= MAIN WRAPPER ================= -->
<div class="flex min-h-screen relative">

  <!-- DECORATIVE BACKGROUND -->
  <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
    <div class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/10 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[#4F8DB8]/5 to-[#6FAED9]/5 rounded-full blur-3xl"></div>
  </div>

  <!-- ================= SIDEBAR DESKTOP ================= -->
  <aside class="hidden lg:block sidebar-full z-10 w-80 flex-shrink-0">
    <div class="inner-sidebar glass-card-deep rounded-2xl m-4 p-5 border border-white/40 shadow-2xl h-[calc(100vh-2rem)]">
      
      <!-- LOGO & IDENTITAS SMK -->
      <div class="flex items-center gap-3 pb-5 border-b border-[#4F8DB8]/20">
        <div class="relative group">
          <img
            src="https://ui-avatars.com/api/?name=BK+Care&background=17235b&color=fff&size=120&bold=true"
            alt="BK Care Admin"
            class="h-10 w-auto relative z-10"
            onerror="this.src='https://via.placeholder.com/120x48/17235b/ffffff?text=BK+CARE'"
          />
        </div>
        <div class="flex flex-col">
          <span class="smk-badge text-[10px] px-2 py-0.5 rounded-full">
            SMK Budi Bakti Ciwidey
          </span>
        </div>
      </div>

      <!-- MENU NAVIGASI DESKTOP -->
      <nav class="flex-1 overflow-y-auto py-5 space-y-1 text-sm">
        <!-- Dashboard -->
        <a href="dashboard-siswa.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-chart-pie w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Dashboard</span>
        </a>

        <!-- Sistem Konseling dropdown -->
        <div class="space-y-1">
          <button onclick="toggleMenu('konseling')" 
            class="menu-item w-full flex items-center justify-between px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-headset w-5 text-center text-[#4F8DB8]"></i>
              <span class="font-medium">Sistem Konseling</span>
            </div>
            <i class="fas fa-chevron-down text-xs text-gray-500 transition-transform duration-300" id="chevron-konseling"></i>
          </button>
          <div id="konseling" class="ml-6 mt-1 space-y-1 hidden">
            <a href="pengajuan-konseling.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <i class="fa-solid fa-pen-to-square text-xs text-[#4F8DB8]"></i>
              <span class="text-sm">Pengajuan Konseling</span>
            </a>
            <a href="jadwal-konseling.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <i class="fa-solid fa-calendar-check text-xs text-[#4F8DB8]"></i>
              <span class="text-sm">Jadwal Konseling</span>
            </a>
          </div>
        </div>

        <!-- Point Pelanggaran (active) -->
        <a href="pointpelanggran_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl transition-all menu-active">
          <i class="fa-solid fa-triangle-exclamation w-5 text-center text-white"></i>
          <span class="font-medium text-white">Point Pelanggaran</span>
        </a>

        <!-- View Website -->
        <a href="#" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-globe w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">View Website</span>
        </a>

      </nav>

      <!-- PROFILE DESKTOP -->
      <div
        onclick="openProfilePopup()"
        class="profile-card rounded-2xl p-4 mt-2 relative overflow-hidden cursor-pointer transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl group"
      >
        <div class="relative z-10 flex items-center gap-3">
          <div class="relative">
            <div
              class="w-12 h-12 rounded-full bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] p-1"
            >
              <div
                class="w-full h-full rounded-full bg-white flex items-center justify-center overflow-hidden"
              >
                <img
                  src="https://ui-avatars.com/api/?name=Siswa&background=17235b&color=fff&size=80&bold=true"
                  alt="Siswa"
                  class="w-full h-full object-cover"
                />
              </div>
            </div>
            <span
              class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 border-2 border-white rounded-full flex items-center justify-center"
            >
              <i class="fa-solid fa-check text-white text-[8px]"></i>
            </span>
          </div>
          <div class="flex-1">
            <div class="flex items-center gap-2">
              <h4 class="text-white font-bold text-sm">Siswa</h4>
              <span
                class="bg-white/20 text-[10px] px-1.5 py-0.5 rounded-full text-white"
                >Nama siswa</span
              >
            </div>
            <p class="text-white/80 text-xs mb-0.5 truncate">
              SMK Budi Bakti Ciwidey
            </p>
          </div>
          <div
            class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center text-white group-hover:bg-white/40 transition-all"
          >
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </div>
        </div>
      </div>

      <!-- Logout button desktop -->
      <button onclick="logout()" class="mt-3 w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl text-xs font-medium bg-white/80 backdrop-blur-sm border border-gray-200 text-gray-600 hover:border-red-200 hover:bg-red-50 hover:text-red-600 transition-all">
        <i class="fa-solid fa-right-from-bracket text-[11px]"></i> Logout
      </button>

    </div>
  </aside>

  <!-- ================= MAIN CONTENT ================= -->
  <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 relative z-10">

    <!-- TOP BAR (responsif) - TANPA NOTIFIKASI - DENGAN HAMBURGER MENU -->
    <div class="glass-card-deep rounded-xl md:rounded-2xl p-3 md:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-3 border border-white/40 shadow-xl">
      <div class="flex items-center gap-2 md:gap-3">
        <!-- Hamburger Menu Button untuk Mobile -->
        <button 
          onclick="toggleMobileSidebar()" 
          class="lg:hidden w-9 h-9 md:w-10 md:h-10 bg-white/80 backdrop-blur-sm rounded-xl border border-white/50 flex items-center justify-center text-[#17235b] hover:bg-[#4F8DB8] hover:text-white transition-all"
        >
          <i class="fa-solid fa-bars text-lg"></i>
        </button>

        <div class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-lg md:text-xl shadow-lg">
          <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <div>
          <h2 class="font-extrabold text-[#17235b] text-base md:text-xl"><span class="text-gradient">Point </span><span class="hidden xs:inline">Pelanggaran</span></h2>
          <p class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-2"><i class="fa-regular fa-calendar text-[#4F8DB8]"></i> Senin, 6 Mei 2024 · <i class="fa-regular fa-clock text-[#4F8DB8]"></i> <span id="liveClockMobile">--:--:--</span></p>
        </div>
      </div>
      
      <!-- Filter Tahun -->
      <div class="flex items-center gap-2 self-end sm:self-auto">
        <span class="text-xs text-gray-500 mr-1 hidden sm:inline">Tahun:</span>
        <select class="text-xs bg-white/80 border border-[#4F8DB8]/20 rounded-lg px-3 py-1.5 focus:outline-none focus:border-[#4F8DB8]">
          <option>2024</option>
          <option>2023</option>
          <option>2022</option>
        </select>
      </div>
    </div>

    <!-- ================= KONTEN UTAMA: POINT PELANGGARAN ================= -->
    <div class="space-y-6">

      <!-- Card: Ringkasan Point Pelanggaran dengan Grafik Lingkaran -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 md:p-6 border border-white/40 shadow-xl">
        <div class="flex items-center gap-3 mb-5 pb-3 border-b border-[#4F8DB8]/20">
          <div class="w-8 h-8 bg-[#f59e0b]/20 text-[#f59e0b] rounded-lg flex items-center justify-center">
            <i class="fa-solid fa-chart-pie"></i>
          </div>
          <h3 class="font-bold text-[#17235b]">Ringkasan Point Pelanggaran</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
          <!-- Grafik Lingkaran (Donut) -->
          <div class="flex flex-col items-center justify-center">
            <div class="relative w-40 h-40 md:w-48 md:h-48">
              <!-- Donut chart dengan conic-gradient -->
              <div class="absolute inset-0 rounded-full" style="background: conic-gradient(#facc15 0% 43%, #fb923c 43% 76%, #ef4444 76% 100%);"></div>
              <div class="absolute inset-4 bg-white rounded-full flex flex-col items-center justify-center">
                <span class="text-2xl md:text-3xl font-bold text-[#17235b]">42</span>
                <span class="text-[10px] text-gray-500">Total Point</span>
              </div>
            </div>
            
            <!-- Legenda -->
            <div class="flex gap-4 mt-4 text-xs">
              <div class="flex items-center gap-1">
                <span class="w-3 h-3 bg-yellow-400 rounded-full"></span>
                <span>Ringan <span class="font-semibold">18</span></span>
              </div>
              <div class="flex items-center gap-1">
                <span class="w-3 h-3 bg-orange-400 rounded-full"></span>
                <span>Sedang <span class="font-semibold">14</span></span>
              </div>
              <div class="flex items-center gap-1">
                <span class="w-3 h-3 bg-red-400 rounded-full"></span>
                <span>Berat <span class="font-semibold">10</span></span>
              </div>
            </div>
          </div>

          <!-- Statistik Cepat -->
          <div class="grid grid-cols-2 gap-3">
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 border border-[#4F8DB8]/20">
              <p class="text-xs text-gray-500">Total Pelanggaran</p>
              <p class="text-2xl font-bold text-[#17235b]">10</p>
              <span class="text-[10px] text-gray-400">kejadian</span>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 border border-[#4F8DB8]/20">
              <p class="text-xs text-gray-500">Point Tertinggi</p>
              <p class="text-2xl font-bold text-red-600">10</p>
              <span class="text-[10px] text-gray-400">Membawa rokok</span>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 border border-[#4F8DB8]/20">
              <p class="text-xs text-gray-500">Batas Point</p>
              <p class="text-2xl font-bold text-[#17235b]">100</p>
              <span class="text-[10px] text-gray-400">skorsing di 100</span>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 border border-[#4F8DB8]/20">
              <p class="text-xs text-gray-500">Sisa Point</p>
              <p class="text-2xl font-bold text-green-600">58</p>
              <span class="text-[10px] text-gray-400">hingga batas</span>
            </div>
          </div>
        </div>

        <!-- Progress bar -->
        <div class="mt-6">
          <div class="flex justify-between text-xs text-gray-600 mb-1">
            <span>Progress menuju batas skorsing (100 point)</span>
            <span>42%</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5">
            <div class="bg-gradient-to-r from-yellow-400 via-orange-500 to-red-600 h-2.5 rounded-full" style="width: 42%"></div>
          </div>
          <p class="text-[10px] text-gray-400 mt-2">Point akan direset setiap semester</p>
        </div>
      </div>

      <!-- Card: Daftar Lengkap Pelanggaran Sekolah (dapat di-scroll) -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 md:p-6 border border-white/40 shadow-xl">
        <div class="flex items-center gap-3 mb-5 pb-3 border-b border-[#4F8DB8]/20">
          <div class="w-8 h-8 bg-[#4F8DB8]/20 text-[#4F8DB8] rounded-lg flex items-center justify-center">
            <i class="fa-solid fa-book-open"></i>
          </div>
          <h3 class="font-bold text-[#17235b]">Daftar Lengkap Pelanggaran & Point (Sekolah)</h3>
          <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs px-3 py-1 rounded-full">35 pelanggaran</span>
        </div>

        <!-- Tab Kategori (filter) -->
        <div class="flex gap-2 mb-4 overflow-x-auto pb-2">
          <button class="px-4 py-1.5 text-xs rounded-full bg-[#4F8DB8] text-white">Semua</button>
          <button class="px-4 py-1.5 text-xs rounded-full bg-yellow-100 text-yellow-700 hover:bg-yellow-200">Ringan</button>
          <button class="px-4 py-1.5 text-xs rounded-full bg-orange-100 text-orange-700 hover:bg-orange-200">Sedang</button>
          <button class="px-4 py-1.5 text-xs rounded-full bg-red-100 text-red-700 hover:bg-red-200">Berat</button>
        </div>

        <!-- Daftar Pelanggaran (Scrollable) -->
        <div class="scrollable-list">
          <div class="space-y-2 pr-1">
            <!-- RINGAN (12 item) -->
            <div class="text-xs font-semibold text-yellow-600 sticky top-0 bg-white/80 backdrop-blur-sm py-2 z-10">KATEGORI RINGAN (1-3 point)</div>
            
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Terlambat masuk kelas (≤15 menit)</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Tidak membawa buku catatan</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Baju tidak dimasukkan / tidak rapi</p></div>
                <span class="font-bold text-yellow-600">1 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Tidak memakai sepatu hitam/putih sesuai ketentuan</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Rambut tidak rapi / gondrong (putra)</p></div>
                <span class="font-bold text-yellow-600">1 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Makan/minum di dalam kelas saat pelajaran</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Tidak mengerjakan PR (1-2 kali)</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membuang sampah tidak pada tempatnya</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Berkata kurang sopan antar teman</p></div>
                <span class="font-bold text-yellow-600">3 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Tidak mengikuti upacara (tanpa keterangan)</p></div>
                <span class="font-bold text-yellow-600">3 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Memakai aksesoris tidak diperbolehkan</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-yellow-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Catok rambut / styling berlebihan</p></div>
                <span class="font-bold text-yellow-600">2 point</span>
              </div>
            </div>

            <!-- SEDANG (12 item) -->
            <div class="text-xs font-semibold text-orange-600 sticky top-0 bg-white/80 backdrop-blur-sm py-2 mt-4 z-10">KATEGORI SEDANG (4-7 point)</div>
            
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Terlambat masuk kelas (>15 menit)</p></div>
                <span class="font-bold text-orange-600">4 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Tidak mengerjakan PR 3x berturut-turut</p></div>
                <span class="font-bold text-orange-600">5 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membuang sampah sembarangan (diulang)</p></div>
                <span class="font-bold text-orange-600">4 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membuat keributan di kelas / mengganggu KBM</p></div>
                <span class="font-bold text-orange-600">5 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membolos 1-2 jam pelajaran</p></div>
                <span class="font-bold text-orange-600">6 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Berbohong kepada guru / wali kelas</p></div>
                <span class="font-bold text-orange-600">5 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Meninggalkan kelas tanpa izin</p></div>
                <span class="font-bold text-orange-600">5 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membawa mainan / kartu / barang tidak relevan</p></div>
                <span class="font-bold text-orange-600">4 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Menggunakan HP saat pelajaran (tanpa izin)</p></div>
                <span class="font-bold text-orange-600">5 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Tidak memakai seragam lengkap (atribut)</p></div>
                <span class="font-bold text-orange-600">4 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Mengecat rambut / model aneh</p></div>
                <span class="font-bold text-orange-600">6 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-orange-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membawa motor tanpa SIM (jika membawa)</p></div>
                <span class="font-bold text-orange-600">7 point</span>
              </div>
            </div>

            <!-- BERAT (11 item) -->
            <div class="text-xs font-semibold text-red-600 sticky top-0 bg-white/80 backdrop-blur-sm py-2 mt-4 z-10">KATEGORI BERAT (8-15 point)</div>
            
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Terlibat perkelahian / tawuran</p></div>
                <span class="font-bold text-red-600">8 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membawa rokok / vape</p></div>
                <span class="font-bold text-red-600">10 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membawa senjata tajam / benda berbahaya</p></div>
                <span class="font-bold text-red-600">15 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Mencontek saat ujian / ulangan</p></div>
                <span class="font-bold text-red-600">7 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Melawan / berkata kasar kepada guru</p></div>
                <span class="font-bold text-red-600">12 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membolos 1 hari penuh</p></div>
                <span class="font-bold text-red-600">8 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Merusak fasilitas sekolah</p></div>
                <span class="font-bold text-red-600">10 point + ganti rugi</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Mengancam / mengintimidasi teman</p></div>
                <span class="font-bold text-red-600">9 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Membawa / mengakses konten dewasa</p></div>
                <span class="font-bold text-red-600">10 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Melakukan tindakan bullying</p></div>
                <span class="font-bold text-red-600">12 point</span>
              </div>
            </div>
            <div class="bg-white/70 backdrop-blur-sm rounded-xl p-3 border-l-4 border-red-400">
              <div class="flex justify-between items-start">
                <div><p class="font-medium text-sm">Kedapatan di luar sekolah saat jam pelajaran</p></div>
                <span class="font-bold text-red-600">8 point</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Catatan kaki -->
        <div class="mt-4 text-[10px] text-gray-400 flex items-center gap-2 bg-[#4F8DB8]/5 p-3 rounded-lg">
          <i class="fa-regular fa-circle-info text-[#4F8DB8]"></i>
          <span>Daftar lengkap pelanggaran berdasarkan Tata Tertib SMK Budi Bakti Ciwidey Tahun 2024. Point dapat berakumulasi dan dikenakan sanksi sesuai ketentuan.</span>
        </div>
      </div>

      <!-- Card: Riwayat Pelanggaran Saya (Tabel) -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 md:p-6 border border-white/40 shadow-xl">
        <div class="flex items-center gap-3 mb-5 pb-3 border-b border-[#4F8DB8]/20">
          <div class="w-8 h-8 bg-[#4F8DB8]/20 text-[#4F8DB8] rounded-lg flex items-center justify-center">
            <i class="fa-regular fa-clock-rotate-left"></i>
          </div>
          <h3 class="font-bold text-[#17235b]">Riwayat Pelanggaran Saya</h3>
          <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs px-3 py-1 rounded-full">7 pelanggaran</span>
        </div>

        <!-- Tabel Riwayat -->
        <div class="overflow-x-auto -mx-4 md:-mx-6 px-4 md:px-6 pb-2">
          <table class="w-full text-xs md:text-sm min-w-[800px]">
            <thead>
              <tr class="border-b border-[#4F8DB8]/20 text-gray-500 text-[9px] md:text-xs uppercase tracking-wider">
                <th class="py-3 text-left font-semibold">Tanggal</th>
                <th class="py-3 text-left font-semibold">Pelanggaran</th>
                <th class="py-3 text-left font-semibold">Kategori</th>
                <th class="py-3 text-left font-semibold">Point</th>
                <th class="py-3 text-left font-semibold">Status</th>
                <th class="py-3 text-left font-semibold">Tindakan</th>
                <th class="py-3 text-left font-semibold">Aksi</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-[#4F8DB8]/10">
              <tr class="hover:bg-[#4F8DB8]/5 transition-colors">
                <td class="py-3">2 Mei 2024</td>
                <td class="py-3">Terlambat masuk kelas</td>
                <td class="py-3"><span class="badge-ringan text-[10px] px-2 py-1 rounded-full">Ringan</span></td>
                <td class="py-3 font-bold text-yellow-600">3</td>
                <td class="py-3"><span class="badge-selesai text-[10px] px-2 py-1 rounded-full">Selesai</span></td>
                <td class="py-3">Peringatan lisan</td>
                <td class="py-3"><button class="text-[#4F8DB8] hover:text-[#17235b] text-xs"><i class="fa-regular fa-eye mr-1"></i>Detail</button></td>
              </tr>
              <tr class="hover:bg-[#4F8DB8]/5 transition-colors">
                <td class="py-3">25 April 2024</td>
                <td class="py-3">Tidak membawa buku catatan</td>
                <td class="py-3"><span class="badge-ringan text-[10px] px-2 py-1 rounded-full">Ringan</span></td>
                <td class="py-3 font-bold text-yellow-600">2</td>
                <td class="py-3"><span class="badge-selesai text-[10px] px-2 py-1 rounded-full">Selesai</span></td>
                <td class="py-3">Peringatan lisan</td>
                <td class="py-3"><button class="text-[#4F8DB8] hover:text-[#17235b] text-xs"><i class="fa-regular fa-eye mr-1"></i>Detail</button></td>
              </tr>
              <tr class="hover:bg-[#4F8DB8]/5 transition-colors">
                <td class="py-3">18 April 2024</td>
                <td class="py-3">Tidak mengerjakan PR 3x</td>
                <td class="py-3"><span class="badge-sedang text-[10px] px-2 py-1 rounded-full">Sedang</span></td>
                <td class="py-3 font-bold text-orange-600">5</td>
                <td class="py-3"><span class="badge-selesai text-[10px] px-2 py-1 rounded-full">Selesai</span></td>
                <td class="py-3">Panggilan orang tua</td>
                <td class="py-3"><button class="text-[#4F8DB8] hover:text-[#17235b] text-xs"><i class="fa-regular fa-eye mr-1"></i>Detail</button></td>
              </tr>
              <tr class="hover:bg-[#4F8DB8]/5 transition-colors">
                <td class="py-3">5 April 2024</td>
                <td class="py-3">Terlibat perkelahian</td>
                <td class="py-3"><span class="badge-berat text-[10px] px-2 py-1 rounded-full">Berat</span></td>
                <td class="py-3 font-bold text-red-600">8</td>
                <td class="py-3"><span class="badge-proses text-[10px] px-2 py-1 rounded-full">Dalam Proses</span></td>
                <td class="py-3">Pembinaan BK</td>
                <td class="py-3"><button class="text-[#4F8DB8] hover:text-[#17235b] text-xs"><i class="fa-regular fa-eye mr-1"></i>Detail</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Card: Informasi Sanksi -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 border border-white/40 shadow-xl bg-gradient-to-r from-[#17235b]/5 to-[#4F8DB8]/5">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 bg-[#f59e0b]/20 rounded-lg flex items-center justify-center text-[#f59e0b]">
            <i class="fa-regular fa-circle-info"></i>
          </div>
          <div class="flex-1">
            <h4 class="font-semibold text-[#17235b] text-sm">Informasi Sanksi Berdasarkan Akumulasi Point</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mt-3">
              <div class="bg-white/80 rounded-lg p-3 border border-yellow-200">
                <p class="font-bold text-yellow-600">20 - 40 Point</p>
                <p class="text-xs text-gray-600 mt-1">Peringatan lisan dan teguran tertulis</p>
              </div>
              <div class="bg-white/80 rounded-lg p-3 border border-orange-200">
                <p class="font-bold text-orange-600">41 - 60 Point</p>
                <p class="text-xs text-gray-600 mt-1">Panggilan orang tua & surat pernyataan</p>
              </div>
              <div class="bg-white/80 rounded-lg p-3 border border-red-200">
                <p class="font-bold text-red-600">61 - 100 Point</p>
                <p class="text-xs text-gray-600 mt-1">Skorsing & panggilan orang tua</p>
              </div>
            </div>
            <p class="text-[10px] text-gray-400 mt-3">*Point di atas 100 akan direkomendasikan untuk dikeluarkan</p>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER -->
    <div class="text-center text-[9px] md:text-xs text-gray-400 pt-3 md:pt-4 pb-1 flex flex-wrap items-center justify-center gap-2">
      <span>© 2026 BK Care For School Life - VISIONCODE</span>
      <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
      <span class="text-[#4F8DB8] font-medium">SMK Budi Bakti Ciwidey</span>
    </div>

  </main>
</div>

<!-- POPUP PROFILE -->
<div id="profilePopup" class="fixed inset-0 flex items-center justify-center z-50 hidden" onclick="closeProfilePopup()">
  <div class="bg-white rounded-2xl p-6 max-w-sm mx-4 shadow-2xl relative" onclick="event.stopPropagation()">
    <button onclick="closeProfilePopup()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600">
      <i class="fa-solid fa-xmark text-xl"></i>
    </button>
    <div class="text-center">
      <img src="https://ui-avatars.com/api/?name=Siswa&background=17235b&color=fff&size=120&bold=true" class="w-24 h-24 rounded-full mx-auto mb-3">
      <h3 class="text-xl font-bold text-[#17235b]">Siswa</h3>
      <p class="text-sm text-gray-500 mb-2">Nama siswa</p>
      <p class="text-xs text-gray-400">SMK Budi Bakti Ciwidey</p>
      <div class="mt-4 text-left text-sm space-y-2">
        <p><i class="fa-regular fa-envelope w-6 text-[#4F8DB8]"></i> siswa@student.sch.id</p>
        <p><i class="fa-solid fa-phone w-6 text-[#4F8DB8]"></i> +62 812-3456-7890</p>
      </div>
    </div>
  </div>
</div>

<script>
  // toggle dropdown menu desktop
  function toggleMenu(id) {
    const el = document.getElementById(id);
    const chevron = document.getElementById('chevron-'+id);
    if (el) {
      if (el.classList.contains('hidden')) {
        el.classList.remove('hidden');
        if (chevron) chevron.style.transform = 'rotate(180deg)';
      } else {
        el.classList.add('hidden');
        if (chevron) chevron.style.transform = 'rotate(0deg)';
      }
    }
  }

  // toggle dropdown menu mobile
  function toggleMobileMenu(id) {
    const el = document.getElementById(id);
    const chevron = document.getElementById('chevron-'+id);
    if (el) {
      if (el.classList.contains('hidden')) {
        el.classList.remove('hidden');
        if (chevron) chevron.style.transform = 'rotate(180deg)';
      } else {
        el.classList.add('hidden');
        if (chevron) chevron.style.transform = 'rotate(0deg)';
      }
    }
  }

  // toggle mobile sidebar
  function toggleMobileSidebar() {
    const sidebar = document.getElementById('mobileSidebar');
    const overlay = document.getElementById('mobileOverlay');
    
    sidebar.classList.toggle('active');
    overlay.classList.toggle('active');
    
    if (sidebar.classList.contains('active')) {
      document.body.style.overflow = 'hidden';
    } else {
      document.body.style.overflow = 'auto';
    }
  }

  // close mobile sidebar
  function closeMobileSidebar() {
    const sidebar = document.getElementById('mobileSidebar');
    const overlay = document.getElementById('mobileOverlay');
    
    sidebar.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = 'auto';
  }

  // live clock
  function updateClock() {
    const now = new Date();
    const time = now.toLocaleTimeString('id-ID', { hour12: false });
    const mobile = document.getElementById('liveClockMobile');
    if (mobile) mobile.innerHTML = time;
  }
  setInterval(updateClock, 1000);
  updateClock();

  // logout simulasi
  function logout() {
    if (confirm('Logout dari akun siswa?')) window.location.href = '#';
  }

  // profile popup
  function openProfilePopup() {
    document.getElementById('profilePopup').classList.remove('hidden');
  }
  function closeProfilePopup() {
    document.getElementById('profilePopup').classList.add('hidden');
  }

  // close mobile sidebar on resize if screen becomes large
  window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024) {
      closeMobileSidebar();
    }
  });

  // close popup with ESC key
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeProfilePopup();
      closeMobileSidebar();
    }
  });
</script>
</body>
</html>
