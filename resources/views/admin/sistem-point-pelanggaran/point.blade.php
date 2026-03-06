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

    /* Card Hover Effects */
    .dashboard-card {
      transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    }

    .dashboard-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 30px 50px -15px rgba(79, 141, 184, 0.25);
    }

    /* Sidebar Menu Active - BRAND BLUE */
    .menu-active {
      background: linear-gradient(90deg, #4f8db8, #6faed9);
      color: white;
      box-shadow: 0 10px 20px -5px rgba(79, 141, 184, 0.3);
    }

    .menu-item {
      transition: all 0.3s ease;
      border-radius: 12px;
    }

    .menu-item:hover {
      background: rgba(79, 141, 184, 0.1);
      color: #17235b;
    }

    .submenu-item {
      transition: all 0.2s ease;
      border-radius: 8px;
      font-size: 0.8rem;
    }

    .submenu-item:hover {
      background: #f1f5f9;
      color: #4F8DB8;
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

    /* Floating Animation */
    .floating {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-8px); }
    }

    /* SMK Badge - BRAND YELLOW */
    .smk-badge {
      background: rgba(250, 204, 21, 0.15);
      color: #17235b;
      border: 1px solid rgba(250, 204, 21, 0.3);
    }

    /* Button Primary - BRAND BLUE */
    .btn-primary {
      background: linear-gradient(145deg, #4f8db8, #6faed9);
      color: white;
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(145deg, #3a6b8c, #4f8db8);
      box-shadow: 0 10px 20px -5px rgba(79, 141, 184, 0.4);
    }

    /* Table Styles */
    .table-header {
      background: #f8fafc;
      color: #475569;
      font-weight: 600;
      font-size: 0.75rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    .table-row {
      transition: all 0.2s ease;
    }

    .table-row:hover {
      background: rgba(79, 141, 184, 0.05);
    }

    .table-cell {
      padding: 0.75rem 1rem;
      font-size: 0.8rem;
      color: #334155;
      border-bottom: 1px solid #e2e8f0;
    }

    /* Point Badge */
    .point-badge {
      background: linear-gradient(145deg, #4f8db8, #6faed9);
      color: white;
      padding: 0.25rem 0.75rem;
      border-radius: 9999px;
      font-size: 0.7rem;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 0.25rem;
    }

    .point-high {
      background: #fee2e2;
      color: #991b1b;
    }

    .point-medium {
      background: #fef3c7;
      color: #92400e;
    }

    .point-low {
      background: #dbeafe;
      color: #1e40af;
    }

    /* RESPONSIVE FIXES */
    .sidebar-desktop {
      position: sticky;
      top: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .inner-sidebar {
      display: flex;
      flex-direction: column;
      height: 100%;
      max-height: 100vh;
      overflow-y: auto;
    }

    .sidebar-mobile {
      position: fixed;
      left: -100%;
      top: 0;
      width: 85%;
      max-width: 320px;
      height: 100vh;
      z-index: 50;
      transition: left 0.3s ease;
    }

    .sidebar-mobile.active {
      left: 0;
    }

    .mobile-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
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

    @media (max-width: 768px) {
      .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }
    }
  </style>
</head>

<body class="font-sans text-gray-700 overflow-x-hidden">

  <!-- PROFILE POPUP -->
  <div id="profilePopup" class="profile-popup z-[9999]" style="display: none;">
    <!-- Sama seperti dashboard admin -->
  </div>

  <!-- POPUP OVERLAY -->
  <div id="popupOverlay" class="popup-overlay" onclick="closeProfilePopup()" style="display: none;"></div>

  <!-- MOBILE SIDEBAR OVERLAY -->
  <div id="mobileOverlay" class="mobile-overlay" onclick="toggleSidebar()"></div>

  <!-- MOBILE SIDEBAR -->
  <div id="mobileSidebar" class="sidebar-mobile">
    <div class="h-full w-full glass-card-deep rounded-r-2xl p-5 flex flex-col overflow-y-auto border-r border-white/40 shadow-2xl">
      
      <!-- LOGO & IDENTITAS SMK -->
      <div class="flex items-center gap-3 pb-5 border-b border-[#4F8DB8]/20">
        <div class="relative group">
          <img src="img/LOGO BK CARE (1).png" alt="BK Care Admin" class="h-10 w-auto relative z-10"
               onerror="this.src='https://via.placeholder.com/120x48/17235b/ffffff?text=BK+CARE'" />
        </div>
        <div class="flex flex-col">
          <span class="text-sm font-extrabold text-[#17235b]">BK CARE</span>
          <span class="smk-badge text-[10px] px-2 py-0.5 rounded-full">
            SMK Budi Bakti Ciwidey
          </span>
        </div>
      </div>

      <!-- MENU NAVIGASI MOBILE -->
      <nav class="flex-1 overflow-y-auto py-5 space-y-1 text-sm">
        
        <!-- Dashboard -->
        <a href="dashboardadmin.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-chart-pie w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Dashboard</span>
        </a>

        <!-- Data Master -->
        <div class="space-y-1">
          <button onclick="toggleMobileMenu('dataMasterMobile')" 
            class="menu-item w-full flex items-center justify-between px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
            <div class="flex items-center gap-3">
              <i class="fa-solid fa-database w-5 text-center text-[#4F8DB8]"></i>
              <span class="font-medium">Data Master</span>
            </div>
            <i class="fas fa-chevron-down text-xs text-gray-500 transition-transform duration-300" id="chevron-dataMasterMobile"></i>
          </button>
          <div id="dataMasterMobile" class="ml-6 mt-1 space-y-1 hidden">
            <a href="dataguru.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <span class="text-sm">Data Guru BK</span>
              <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">8</span>
            </a>
            <a href="datawali.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <span class="text-sm">Data Wali Kelas</span>
              <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">24</span>
            </a>
            <a href="datasiswa.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <span class="text-sm">Data Siswa</span>
              <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">1.247</span>
            </a>
          </div>
        </div>

        <!-- Sistem Konseling -->
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
            <a href="pesankonseling.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <span class="text-sm">Pengajuan Konseling</span>
              <span class="ml-auto bg-red-500 text-white text-[10px] px-1.5 py-0.5 rounded-full">3</span>
            </a>
            <a href="jadwal.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <span class="text-sm">Jadwal Konseling</span>
              <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">8</span>
            </a>
            <a href="riwayat.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <span class="text-sm">Riwayat Konseling</span>
            </a>
          </div>
        </div>

        <!-- Point Pelanggaran - ACTIVE -->
        <a href="point.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all menu-active">
          <i class="fa-solid fa-triangle-exclamation w-5 text-center text-white"></i>
          <span class="font-medium text-white">Point Pelanggaran</span>
          <span class="ml-auto bg-white text-[#4F8DB8] text-[10px] px-2 py-0.5 rounded-full font-bold">42</span>
        </a>

        <a href="crudmateri.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-book-open w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Materi Edukasi</span>
        </a>

        <a href="laporan.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-file-lines w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Laporan Konseling</span>
        </a>

        <div class="border-t border-[#4F8DB8]/20 my-4"></div>

        <a href="index.html" target="_blank" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
          <i class="fa-solid fa-globe w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">View Website</span>
        </a>
      </nav>

      <!-- PROFILE ADMIN MOBILE -->
      <div onclick="openProfilePopup()" class="profile-card rounded-2xl p-4 mt-2 relative overflow-hidden cursor-pointer transition-all duration-300 hover:scale-[1.02] hover:shadow-2xl group"
           style="background: linear-gradient(145deg, #17235b, #1e3a5f);">
        <div class="relative z-10 flex items-center gap-3">
          <div class="relative">
            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] p-1">
              <div class="w-full h-full rounded-full bg-white flex items-center justify-center overflow-hidden">
                <img src="https://ui-avatars.com/api/?name=Admin+BK&background=17235b&color=fff&size=80&bold=true" alt="Admin" class="w-full h-full object-cover" />
              </div>
            </div>
            <span class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 border-2 border-white rounded-full flex items-center justify-center">
              <i class="fa-solid fa-check text-white text-[8px]"></i>
            </span>
          </div>
          <div class="flex-1">
            <div class="flex items-center gap-2">
              <h4 class="text-white font-bold text-sm">Admin BK</h4>
              <span class="bg-white/20 text-[10px] px-1.5 py-0.5 rounded-full text-white">Super</span>
            </div>
            <p class="text-white/80 text-xs mb-0.5 truncate">admin.bk@smkbudibakti.sch.id</p>
          </div>
          <div class="w-6 h-6 bg-white/20 rounded-full flex items-center justify-center text-white group-hover:bg-white/40 transition-all">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MAIN CONTAINER -->
  <div class="flex min-h-screen relative">
    
    <!-- DECORATIVE BACKGROUND ELEMENTS -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
      <div class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/10 rounded-full blur-3xl floating"></div>
      <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/10 rounded-full blur-3xl floating" style="animation-delay: -3s"></div>
      <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[#4F8DB8]/5 to-[#6FAED9]/5 rounded-full blur-3xl"></div>
    </div>

    <!-- ================= SIDEBAR DESKTOP  ================= -->
    <aside class="hidden lg:block sidebar-desktop z-10">
      <div class="inner-sidebar glass-card-deep rounded-2xl m-4 p-5 w-80 border border-white/40 shadow-2xl">
        
        <!-- LOGO & BRAND -->
        <div class="flex items-center gap-3 pb-5 border-b border-[#4F8DB8]/20">
          <div class="relative group">
            <div class="absolute -inset-2 bg-gradient-to-r from-[#4F8DB8]/30 to-[#6FAED9]/30 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <img src="img/LOGO BK.png" alt="BK Care Admin" class="h-10 w-auto relative z-10"
                 onerror="this.src='https://via.placeholder.com/120x48/17235b/ffffff?text=BK+CARE'" />
          </div>
          <div class="flex flex-col">
            <span class="smk-badge text-[10px] px-2 py-0.5 rounded-full">
              SMK Budi Bakti Ciwidey
            </span>
          </div>
        </div>

        <!-- MENU NAVIGASI DESKTOP  -->
        <nav class="flex-1 overflow-y-auto py-5 space-y-1 text-sm">
          
          <!-- Dashboard -->
          <a href="dashboardadmin.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
            <i class="fa-solid fa-chart-pie w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Dashboard</span>
          </a>

          <!-- Data Master -->
          <div class="space-y-1">
            <button onclick="toggleMenu('dataMaster')" 
              class="menu-item w-full flex items-center justify-between px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
              <div class="flex items-center gap-3">
                <i class="fa-solid fa-database w-5 text-center text-[#4F8DB8]"></i>
                <span class="font-medium">Data Master</span>
              </div>
              <i class="fas fa-chevron-down text-xs text-gray-500 transition-transform duration-300" id="chevron-dataMaster"></i>
            </button>
            <div id="dataMaster" class="ml-6 mt-1 space-y-1 hidden">
              <a href="dataguru.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span class="text-sm">Data Guru BK</span>
                <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">8</span>
              </a>
              <a href="datawali.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span class="text-sm">Data Wali Kelas</span>
                <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">24</span>
              </a>
              <a href="datasiswa.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span class="text-sm">Data Siswa</span>
                <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">1.247</span>
              </a>
            </div>
          </div>

          <!-- Sistem Konseling -->
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
              <a href="pesankonseling.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span class="text-sm">Pengajuan Konseling</span>
                <span class="ml-auto bg-red-500 text-white text-[10px] px-1.5 py-0.5 rounded-full">3</span>
              </a>
              <a href="jadwal.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span class="text-sm">Jadwal Konseling</span>
                <span class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full">8</span>
              </a>
              <a href="riwayat.html" class="submenu-item flex items-center gap-3 px-4 py-2.5 rounded-xl text-gray-600 hover:bg-[#4F8DB8]/10 transition-all pl-9">
                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                <span class="text-sm">Riwayat Konseling</span>
              </a>
            </div>
          </div>

          <!-- Point Pelanggaran - ACTIVE -->
          <a href="point.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all menu-active">
            <i class="fa-solid fa-triangle-exclamation w-5 text-center text-white"></i>
            <span class="font-medium text-white">Point Pelanggaran</span>
            <span class="ml-auto bg-white text-[#4F8DB8] text-[10px] px-2 py-0.5 rounded-full font-bold">42</span>
          </a>

          <a href="crudmateri.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
            <i class="fa-solid fa-book-open w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Materi Edukasi</span>
          </a>

          <a href="laporan.html" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
            <i class="fa-solid fa-file-lines w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Laporan Konseling</span>
          </a>

          <div class="border-t border-[#4F8DB8]/20 my-4"></div>

          <a href="index.html" target="_blank" class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all">
            <i class="fa-solid fa-globe w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">View Website</span>
          </a>
        </nav>

        <!-- PROFILE ADMIN - DESKTOP -->
        <div class="relative mt-2 group">
          <div onclick="openProfilePopup()" 
               class="relative overflow-hidden cursor-pointer rounded-2xl p-4 bg-white hover:bg-gray-50 border border-gray-200/80 hover:border-[#4F8DB8]/30 shadow-sm hover:shadow-md transition-all duration-300">
            <div class="relative z-10 flex items-center gap-3">
              <!-- AVATAR -->
              <div class="relative">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-[#4F8DB8]/10 to-[#6FAED9]/10 flex items-center justify-center overflow-hidden border border-[#4F8DB8]/20">
                  <img src="https://ui-avatars.com/api/?name=Admin+BK&background=4F8DB8&color=fff&size=80&bold=true" 
                       class="w-full h-full object-cover" alt="Admin BK" />
                </div>
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"></span>
              </div>

              <!-- INFO -->
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <h4 class="text-gray-900 font-semibold text-sm">Admin BK</h4>
                  <span class="bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-2 py-0.5 rounded-full font-medium">
                    Super
                  </span>
                </div>
                <div class="flex items-center gap-1 mt-0.5">
                  <i class="fa-solid fa-location-dot text-[#4F8DB8] text-[9px]"></i>
                  <span class="text-gray-400 text-[9px]">SMK Budi Bakti Ciwidey</span>
                </div>
              </div>

              <!-- ARROW -->
              <div class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 group-hover:bg-[#4F8DB8] group-hover:text-white transition-all duration-300">
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
              </div>
            </div>
          </div>

          <!-- LOGOUT BUTTON -->
          <button onclick="logout()" 
                  class="mt-2 w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl text-xs font-medium bg-white border border-gray-200 text-gray-600 hover:border-red-200 hover:bg-red-50 hover:text-red-600 transition-all duration-200">
            <i class="fa-solid fa-right-from-bracket text-[11px]"></i>
            Logout
          </button>
        </div>
      </div>
    </aside>

    <!-- ================= MAIN CONTENT - POINT PELANGGARAN ================= -->
    <main class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 relative z-10 lg:ml-0">
      
      <!-- TOP BAR -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-3 md:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-3 border border-white/40 shadow-xl">
        <div class="flex items-center gap-2 md:gap-3">
          <!-- Mobile Menu Button -->
          <button onclick="toggleSidebar()" class="lg:hidden w-9 h-9 md:w-10 md:h-10 bg-white/80 backdrop-blur-sm rounded-xl border border-white/50 flex items-center justify-center text-[#17235b] hover:bg-[#4F8DB8] hover:text-white transition-all">
            <i class="fa-solid fa-bars text-lg"></i>
          </button>

          <div class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-lg md:text-xl shadow-lg">
            <i class="fa-solid fa-triangle-exclamation"></i>
          </div>
          <div>
            <h2 class="font-extrabold text-[#17235b] text-base md:text-xl">
              <span class="text-gradient">Point Pelanggaran</span>
            </h2>
            <p class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-2">
              <i class="fa-regular fa-clipboard text-[#4F8DB8]"></i>
              <span>Data pelanggaran siswa SMK Budi Bakti Ciwidey</span>
            </p>
          </div>
        </div>

        <!-- BREADCRUMB -->
        <div class="flex items-center gap-2 text-xs text-gray-400 self-end sm:self-auto">
          <span>Admin</span>
          <i class="fa-solid fa-chevron-right text-[10px]"></i>
          <span class="text-[#4F8DB8] font-medium">Point Pelanggaran</span>
        </div>
      </div>

      <!-- STATISTICS CARD -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="glass-card-deep rounded-xl p-4 border border-white/40 shadow-md flex items-center gap-3">
          <div class="w-10 h-10 bg-red-500/10 rounded-lg flex items-center justify-center">
            <i class="fa-solid fa-triangle-exclamation text-red-600 text-lg"></i>
          </div>
          <div>
            <p class="text-xs text-gray-500">Total Pelanggaran</p>
            <p class="text-xl font-bold text-[#17235b]">42</p>
          </div>
        </div>
        <div class="glass-card-deep rounded-xl p-4 border border-white/40 shadow-md flex items-center gap-3">
          <div class="w-10 h-10 bg-orange-500/10 rounded-lg flex items-center justify-center">
            <i class="fa-solid fa-users text-orange-600 text-lg"></i>
          </div>
          <div>
            <p class="text-xs text-gray-500">Siswa Terlibat</p>
            <p class="text-xl font-bold text-[#17235b]">28</p>
          </div>
        </div>
        <div class="glass-card-deep rounded-xl p-4 border border-white/40 shadow-md flex items-center gap-3">
          <div class="w-10 h-10 bg-yellow-500/10 rounded-lg flex items-center justify-center">
            <i class="fa-solid fa-clock text-yellow-600 text-lg"></i>
          </div>
          <div>
            <p class="text-xs text-gray-500">Proses Tindak Lanjut</p>
            <p class="text-xl font-bold text-[#17235b]">12</p>
          </div>
        </div>
        <div class="glass-card-deep rounded-xl p-4 border border-white/40 shadow-md flex items-center gap-3">
          <div class="w-10 h-10 bg-green-500/10 rounded-lg flex items-center justify-center">
            <i class="fa-solid fa-circle-check text-green-600 text-lg"></i>
          </div>
          <div>
            <p class="text-xs text-gray-500">Selesai Ditangani</p>
            <p class="text-xl font-bold text-[#17235b]">30</p>
          </div>
        </div>
      </div>

      <!-- HEADER CARD + BUTTON TAMBAH -->
      <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
        <!-- FILTER & SEARCH -->
        <div class="flex-1 glass-card-deep rounded-xl p-4 border border-white/40 shadow-md w-full">
          <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
            
            <!-- SEARCH -->
            <div class="relative flex-1 w-full">
              <div class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-20"></div>
              <div class="relative flex items-center gap-2 bg-white rounded-lg px-4 py-2.5 border border-white/50 shadow-sm">
                <i class="fas fa-search text-[#4F8DB8] text-sm"></i>
                <input type="text" placeholder="Cari pelanggaran..." class="w-full outline-none text-sm text-gray-700 placeholder-gray-400 bg-transparent" />
              </div>
            </div>

            <!-- FILTER BUTTONS -->
            <div class="flex items-center gap-3 w-full md:w-auto">
              <select class="px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent">
                <option>Semua Kategori</option>
                <option>Ringan</option>
                <option>Sedang</option>
                <option>Berat</option>
              </select>
              <select class="px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#4F8DB8] focus:border-transparent">
                <option>Bulan Ini</option>
                <option>Bulan Lalu</option>
                <option>Tahun Ini</option>
                <option>Semua</option>
              </select>
            </div>
          </div>
        </div>

        <!-- BUTTON TAMBAH -->
        <button class="flex items-center gap-2 px-6 py-3.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white text-sm font-semibold rounded-xl hover:shadow-lg hover:shadow-[#4F8DB8]/30 transition-all duration-300 hover:scale-[1.02] shadow-md whitespace-nowrap">
          <i class="fas fa-plus-circle"></i>
          Tambah Pelanggaran
        </button>
      </div>

      <!-- TABLE PELANGGARAN -->
      <div class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/40 shadow-xl">
        
        <!-- TABLE RESPONSIVE -->
        <div class="overflow-x-auto -mx-4 md:-mx-6 px-4 md:px-6 pb-2 table-responsive">
          <table class="w-full text-sm border-separate border-spacing-0">
            <thead>
              <tr class="bg-gradient-to-r from-[#4F8DB8]/10 to-[#6FAED9]/10">
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider rounded-l-lg">No</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Nama Siswa</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Kelas</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Jenis Pelanggaran</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Tanggal</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Point</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Kategori</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider">Status</th>
                <th class="px-4 py-3 text-left text-xs font-semibold text-[#17235b] uppercase tracking-wider rounded-r-lg">Aksi</th>
              </tr>
            </thead>
            
            <tbody class="divide-y divide-gray-200">
              <tr class="hover:bg-[#4F8DB8]/5 transition-colors group">
                <td class="px-4 py-3 text-sm text-gray-700">1</td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]">
                      <i class="fa-solid fa-user-graduate text-xs"></i>
                    </div>
                    <span class="font-medium text-gray-800">Revan Nurfalah</span>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs rounded-full font-medium">XI RPL 2</span>
                </td>
                <td class="px-4 py-3 text-sm text-gray-600">Terlambat 3x</td>
                <td class="px-4 py-3 text-sm text-gray-600">15 Feb 2026</td>
                <td class="px-4 py-3">
                  <span class="point-badge point-high font-bold">25</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Berat</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full font-medium">Proses</span>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all" title="Edit">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-green-50 hover:text-green-600 transition-all" title="Detail">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-red-50 hover:text-red-600 transition-all" title="Hapus">
                      <i class="fa-regular fa-trash-can"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="hover:bg-[#4F8DB8]/5 transition-colors group">
                <td class="px-4 py-3 text-sm text-gray-700">2</td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]">
                      <i class="fa-solid fa-user-graduate text-xs"></i>
                    </div>
                    <span class="font-medium text-gray-800">Siska O.S</span>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs rounded-full font-medium">XI RPL 2</span>
                </td>
                <td class="px-4 py-3 text-sm text-gray-600">Tidak memakai atribut</td>
                <td class="px-4 py-3 text-sm text-gray-600">14 Feb 2026</td>
                <td class="px-4 py-3">
                  <span class="point-badge point-medium font-bold">15</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full font-medium">Sedang</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">Selesai</span>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all" title="Edit">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-green-50 hover:text-green-600 transition-all" title="Detail">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-red-50 hover:text-red-600 transition-all" title="Hapus">
                      <i class="fa-regular fa-trash-can"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="hover:bg-[#4F8DB8]/5 transition-colors group">
                <td class="px-4 py-3 text-sm text-gray-700">3</td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]">
                      <i class="fa-solid fa-user-graduate text-xs"></i>
                    </div>
                    <span class="font-medium text-gray-800">Muthy Chairunnisa</span>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs rounded-full font-medium">XI RPL 2</span>
                </td>
                <td class="px-4 py-3 text-sm text-gray-600">Membuang sampah sembarangan</td>
                <td class="px-4 py-3 text-sm text-gray-600">13 Feb 2026</td>
                <td class="px-4 py-3">
                  <span class="point-badge point-low font-bold">10</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-medium">Ringan</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full font-medium">Selesai</span>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all" title="Edit">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-green-50 hover:text-green-600 transition-all" title="Detail">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-red-50 hover:text-red-600 transition-all" title="Hapus">
                      <i class="fa-regular fa-trash-can"></i>
                    </button>
                  </div>
                </td>
              </tr>

              <tr class="hover:bg-[#4F8DB8]/5 transition-colors group">
                <td class="px-4 py-3 text-sm text-gray-700">4</td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]">
                      <i class="fa-solid fa-user-graduate text-xs"></i>
                    </div>
                    <span class="font-medium text-gray-800">Ridho Maulana</span>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-[#4F8DB8]/10 text-[#4F8DB8] text-xs rounded-full font-medium">XII TKJ 1</span>
                </td>
                <td class="px-4 py-3 text-sm text-gray-600">Berkelahi dengan teman</td>
                <td class="px-4 py-3 text-sm text-gray-600">10 Feb 2026</td>
                <td class="px-4 py-3">
                  <span class="point-badge point-high font-bold">50</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-red-100 text-red-700 text-xs rounded-full font-medium">Berat</span>
                </td>
                <td class="px-4 py-3">
                  <span class="px-2 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full font-medium">Proses</span>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center gap-2">
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-blue-50 hover:text-blue-600 transition-all" title="Edit">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-green-50 hover:text-green-600 transition-all" title="Detail">
                      <i class="fa-regular fa-eye"></i>
                    </button>
                    <button class="w-7 h-7 rounded-lg text-gray-400 hover:bg-red-50 hover:text-red-600 transition-all" title="Hapus">
                      <i class="fa-regular fa-trash-can"></i>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- FOOTER TABLE (PAGINATION) -->
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-6 pt-4 border-t border-[#4F8DB8]/20">
          
          <!-- SHOW ENTRIES -->
          <div class="flex items-center gap-2 text-sm text-gray-600">
            <span>Tampilkan</span>
            <select class="px-3 py-1.5 bg-white border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-[#4F8DB8]">
              <option>10</option>
              <option>25</option>
              <option>50</option>
              <option>100</option>
            </select>
            <span>data</span>
          </div>

          <!-- INFO -->
          <div class="text-sm text-gray-500">
            Menampilkan <span class="font-medium text-[#4F8DB8]">1-4</span> dari <span class="font-medium text-[#4F8DB8]">42</span> data
          </div>

          <!-- PAGINATION -->
          <div class="flex items-center gap-2">
            <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 hover:bg-[#4F8DB8] hover:text-white hover:border-[#4F8DB8] transition-all flex items-center justify-center text-gray-500">
              <i class="fa-solid fa-chevron-left text-xs"></i>
            </button>
            <button class="w-8 h-8 rounded-lg bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] text-white flex items-center justify-center text-sm font-bold shadow-md">1</button>
            <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 hover:bg-[#4F8DB8] hover:text-white hover:border-[#4F8DB8] transition-all flex items-center justify-center text-gray-700">2</button>
            <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 hover:bg-[#4F8DB8] hover:text-white hover:border-[#4F8DB8] transition-all flex items-center justify-center text-gray-700">3</button>
            <span class="text-gray-400">...</span>
            <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 hover:bg-[#4F8DB8] hover:text-white hover:border-[#4F8DB8] transition-all flex items-center justify-center text-gray-700">8</button>
            <button class="w-8 h-8 rounded-lg bg-white border border-gray-200 hover:bg-[#4F8DB8] hover:text-white hover:border-[#4F8DB8] transition-all flex items-center justify-center text-gray-500">
              <i class="fa-solid fa-chevron-right text-xs"></i>
            </button>
          </div>
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

  <script>
    // TOGGLE MENU DESKTOP
    function toggleMenu(menuId) {
      const menu = document.getElementById(menuId);
      const chevron = document.getElementById(`chevron-${menuId}`);

      if (menu && chevron) {
        menu.classList.toggle("hidden");

        if (menu.classList.contains("hidden")) {
          chevron.style.transform = "rotate(0deg)";
        } else {
          chevron.style.transform = "rotate(180deg)";
        }
      }
    }

    // TOGGLE MENU MOBILE
    function toggleMobileMenu(menuId) {
      const menu = document.getElementById(menuId);
      const chevron = document.getElementById(`chevron-${menuId}`);

      if (menu && chevron) {
        menu.classList.toggle("hidden");

        if (menu.classList.contains("hidden")) {
          chevron.style.transform = "rotate(0deg)";
        } else {
          chevron.style.transform = "rotate(180deg)";
        }
      }
    }

    // TOGGLE SIDEBAR MOBILE
    function toggleSidebar() {
      const sidebar = document.getElementById("mobileSidebar");
      const overlay = document.getElementById("mobileOverlay");

      if (sidebar && overlay) {
        sidebar.classList.toggle("active");
        overlay.classList.toggle("active");

        if (sidebar.classList.contains("active")) {
          document.body.style.overflow = "hidden";
        } else {
          document.body.style.overflow = "auto";
        }
      }
    }

    // PROFILE POPUP FUNCTIONS
    function openProfilePopup() {
      alert("Profile popup akan dibuka (integrasikan dengan komponen popup)");
    }

    function closeProfilePopup() {
      // Implementasi close popup
    }

    // LOGOUT FUNCTION
    function logout() {
      if (confirm("Apakah Anda yakin ingin logout?")) {
        window.location.href = "login.html";
      }
    }

    // CLOSE MOBILE SIDEBAR ON RESIZE
    window.addEventListener("resize", function () {
      if (window.innerWidth >= 1024) {
        const sidebar = document.getElementById("mobileSidebar");
        const overlay = document.getElementById("mobileOverlay");
        if (sidebar && sidebar.classList.contains("active")) {
          sidebar.classList.remove("active");
          overlay.classList.remove("active");
          document.body.style.overflow = "auto";
        }
      }
    });

  </script>

</body>
</html>