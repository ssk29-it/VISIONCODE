<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Siswa | BK Care SMK Budi Bakti Ciwidey</title>
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
    .badge-approved { background: #dbeafe; color: #1e40af; }
    .badge-completed { background: #d1fae5; color: #065f46; }
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
      <!-- Dashboard (active) -->
      <a
        href="dashboardsiswa.html"
        class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl transition-all menu-active"
        onclick="closeMobileSidebar()"
      >
        <i class="fa-solid fa-chart-pie w-5 text-center text-white"></i>
        <span class="font-medium text-white">Dashboard</span>
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
          <a href="pengajuankonseling_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9" onclick="closeMobileSidebar()">
            <i class="fa-solid fa-pen-to-square text-xs text-[#4F8DB8]"></i>
            <span class="text-sm">Pengajuan Konseling</span>
          </a>
          <a href="jadwalkonseling_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9" onclick="closeMobileSidebar()">
            <i class="fa-solid fa-calendar-check text-xs text-[#4F8DB8]"></i>
            <span class="text-sm">Jadwal Konseling</span>
          </a>
        </div>
      </div>

      <!-- Point Pelanggaran -->
      <a href="pointpelanggran_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all" onclick="closeMobileSidebar()">
        <i class="fa-solid fa-triangle-exclamation w-5 text-center text-[#4F8DB8]"></i>
        <span class="font-medium">Point Pelanggaran</span>
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
        <!-- Dashboard (active) -->
        <a
          href="dashboardsiswa.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl transition-all menu-active"
        >
          <i class="fa-solid fa-chart-pie w-5 text-center text-white"></i>
          <span class="font-medium text-white">Dashboard</span>
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
            <a href="pengajuankonseling_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <i class="fa-solid fa-pen-to-square text-xs text-[#4F8DB8]"></i>
              <span class="text-sm">Pengajuan Konseling</span>
            </a>
            <a href="jadwalkonseling_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <i class="fa-solid fa-calendar-check text-xs text-[#4F8DB8]"></i>
              <span class="text-sm">Jadwal Konseling</span>
            </a>
          </div>
        </div>

        <!-- Point Pelanggaran -->
        <a href="pointpelanggran_dbsiswa.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-triangle-exclamation w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Point Pelanggaran</span>
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
          <i class="fa-solid fa-gauge-high"></i>
        </div>
        <div>
          <h2 class="font-extrabold text-[#17235b] text-base md:text-xl"><span class="text-gradient">Dashboard </span><span class="hidden xs:inline">Siswa</span></h2>
          <p class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-2"><i class="fa-regular fa-calendar text-[#4F8DB8]"></i> Senin, 6 Mei 2024 · <i class="fa-regular fa-clock text-[#4F8DB8]"></i> <span id="liveClockMobile">--:--:--</span></p>
        </div>
      </div>
      <!-- BAGIAN NOTIFIKASI TELAH DIHAPUS -->
    </div>

    <!-- ================= KONTEN UTAMA (tanpa left profile) ================= -->
    <div class="space-y-6">

      <!-- ===== JADWAL KONSELING ===== -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 border border-white/40 shadow-xl">
        <div class="flex items-center justify-between mb-4">
          <div class="flex items-center gap-3">
            <div class="w-8 h-8 bg-[#4F8DB8]/20 text-[#4F8DB8] rounded-lg flex items-center justify-center">
              <i class="fa-regular fa-calendar"></i>
            </div>
            <p class="font-semibold text-[#17235b]">Jadwal Konseling</p>
          </div>
          <span class="bg-[#facc15] text-[#17235b] text-xs font-medium px-3 py-1.5 rounded-full flex items-center gap-1"><i class="fa-regular fa-clock"></i> Konseling Besok</span>
        </div>
        <!-- Card jadwal berikutnya -->
        <div class="bg-white/70 backdrop-blur-sm border border-[#4F8DB8]/20 rounded-xl p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div class="space-y-1">
            <div class="flex items-center gap-2 text-gray-800"><i class="fa-regular fa-calendar text-[#4F8DB8]"></i><span class="font-medium">Senin, 6 Mei 2024 | 09:00 AM</span></div>
            <p class="text-sm text-gray-600"><i class="fa-regular fa-user mr-1 text-[#4F8DB8]"></i>Konselor: Bapak Dedi Saputra, S.Pd.</p>
            <span class="inline-block mt-1 text-[10px] bg-[#4F8DB8]/10 text-[#4F8DB8] px-2 py-0.5 rounded-full">Tatap Muka · Ruang BK</span>
          </div>
          <button class="btn-primary px-5 py-2.5 rounded-xl text-sm font-medium shadow-md flex items-center gap-2 self-start sm:self-center">
            Lihat Detail <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>

      <!-- ===== CARD BAWAH: RIWAYAT PELANGGARAN & PENGAJUAN KONSELING ===== -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- ===== RIWAYAT PELANGGARAN ===== -->
        <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 border border-white/40 shadow-xl">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-8 h-8 bg-[#f59e0b]/20 text-[#f59e0b] rounded-lg flex items-center justify-center">
              <i class="fa-solid fa-triangle-exclamation"></i>
            </div>
            <p class="font-semibold text-[#17235b]">Riwayat Pelanggaran</p>
          </div>
          <div class="bg-white/70 backdrop-blur-sm border border-[#4F8DB8]/20 rounded-xl p-5">
            <!-- total poin -->
            <div class="flex items-center gap-4 mb-4">
              <p class="text-5xl font-bold text-[#17235b]">20</p>
              <div>
                <p class="text-gray-800 font-medium">Total Poin Pelanggaran</p>
                <p class="text-xs text-gray-500">Akumulasi seluruh pelanggaran</p>
              </div>
            </div>
            <!-- diagram lingkaran sederhana (conic) + legenda -->
            <div class="flex flex-wrap items-center gap-6 mb-5">
              <div class="w-24 h-24 rounded-full bg-gray-100 relative overflow-hidden">
                <div class="absolute w-full h-full" style="background: conic-gradient(#3b82f6 0% 30%, #facc15 30% 65%, #f87171 65% 100%);"></div>
                <div class="absolute w-10 h-10 bg-white rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-inner"></div>
              </div>
              <div class="space-y-1 text-sm">
                <p><span class="font-semibold text-blue-600">10</span> Pembinaan</p>
                <p><span class="font-semibold text-yellow-500">5</span> Ringan</p>
                <p><span class="font-semibold text-red-500">5</span> Berat</p>
              </div>
            </div>
            <!-- contoh pelanggaran terakhir -->
            <div class="border-t border-[#4F8DB8]/20 pt-4 flex items-center gap-3">
              <span class="w-6 h-6 flex items-center justify-center bg-red-100 text-red-600 text-xs rounded-full"><i class="fa-solid fa-shirt"></i></span>
              <p class="text-gray-700 text-sm">Tidak memakai seragam lengkap (21 Apr 2024)</p>
            </div>
          </div>
        </div>

        <!-- ===== PENGAJUAN KONSELING ===== -->
        <div class="glass-card-deep rounded-xl md:rounded-2xl p-5 border border-white/40 shadow-xl">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-8 h-8 bg-[#4F8DB8]/20 text-[#4F8DB8] rounded-lg flex items-center justify-center">
              <i class="fa-regular fa-clipboard"></i>
            </div>
            <p class="font-semibold text-[#17235b]">Pengajuan Konseling</p>
          </div>
          <div class="bg-white/70 backdrop-blur-sm border border-[#4F8DB8]/20 rounded-xl p-5 flex flex-col items-start gap-5">
            <p class="text-gray-700 text-sm leading-relaxed">
              Ajukan diri untuk konsultasi atau mengajukan pertanyaan pada guru BK. Tim BK kami siap membantu.
            </p>
            <button class="btn-primary px-6 py-3 rounded-xl text-sm font-medium shadow-md flex items-center gap-2 w-full sm:w-auto justify-center">
              <i class="fa-solid fa-plus"></i> Ajukan Konseling
            </button>
            <!-- Info ringan -->
            <div class="text-[10px] text-gray-400 flex items-center gap-2 mt-2">
              <i class="fa-regular fa-clock"></i> Tersedia jadwal 08.00 - 15.00
            </div>
          </div>
        </div>
      </div>

    </div> <!-- end konten utama -->

    <!-- FOOTER -->
    <div class="text-center text-[9px] md:text-xs text-gray-400 pt-3 md:pt-4 pb-1 flex flex-wrap items-center justify-center gap-2">
      <span>© 2026 BK Care For School Life - VISIONCODE</span>
      <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
      <span class="text-[#4F8DB8] font-medium">SMK Budi Bakti Ciwidey</span>
    </div>

  </main>
</div>

<!-- POPUP PROFILE (untuk menampilkan detail profile) -->
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
    if (el.classList.contains('hidden')) {
      el.classList.remove('hidden');
      if (chevron) chevron.style.transform = 'rotate(180deg)';
    } else {
      el.classList.add('hidden');
      if (chevron) chevron.style.transform = 'rotate(0deg)';
    }
  }

  // toggle dropdown menu mobile
  function toggleMobileMenu(id) {
    const el = document.getElementById(id);
    const chevron = document.getElementById('chevron-'+id);
    if (el.classList.contains('hidden')) {
      el.classList.remove('hidden');
      if (chevron) chevron.style.transform = 'rotate(180deg)';
    } else {
      el.classList.add('hidden');
      if (chevron) chevron.style.transform = 'rotate(0deg)';
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
