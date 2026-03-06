<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Dashboard Guru | BK Care SMK Budi Bakti Ciwidey</title>
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
      background: radial-gradient(
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

    /* Chart Bar Animation - BRAND COLORS */
    .chart-bar {
      transition: height 0.8s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    .chart-bar::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(
        180deg,
        rgba(255, 255, 255, 0.3) 0%,
        rgba(255, 255, 255, 0) 100%
      );
    }

    /* Status Badges - CONSISTENT WITH BRAND */
    .badge-pending {
      background: #fef3c7;
      color: #92400e;
    }

    .badge-approved {
      background: #dbeafe;
      color: #1e40af;
    }

    .badge-completed {
      background: #d1fae5;
      color: #065f46;
    }

    .badge-rejected {
      background: #fee2e2;
      color: #991b1b;
    }

    /* Profile Card - BRAND NAVY */
    .profile-card {
      background: linear-gradient(145deg, #17235b, #1e3a5f);
      position: relative;
      overflow: hidden;
    }

    .profile-card::before {
      content: "";
      position: absolute;
      top: -50%;
      right: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(
        circle,
        rgba(79, 141, 184, 0.15) 0%,
        transparent 70%
      );
      animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(360deg);
      }
    }

    /* Popup Profile - BRAND THEMED */
    .profile-popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.9);
      width: 92%;
      max-width: 520px;
      z-index: 9999;
      opacity: 0;
      visibility: hidden;
      transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
      pointer-events: none;
    }

    .profile-popup.active {
      opacity: 1;
      visibility: visible;
      transform: translate(-50%, -50%) scale(1);
      pointer-events: all;
    }

    .popup-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(23, 35, 91, 0.6);
      backdrop-filter: blur(6px);
      z-index: 9998;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
    }

    .popup-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    /* Unique Card - BRAND STYLE */
    .unique-card {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(79, 141, 184, 0.3);
      border-radius: 32px;
      box-shadow: 0 30px 60px -20px rgba(23, 35, 91, 0.3);
    }

    /* Gradient Border Animation - BRAND COLORS */
    .gradient-border {
      position: relative;
      background: white;
      border-radius: 24px;
    }

    .gradient-border::before {
      content: "";
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(45deg, #4f8db8, #6faed9, #17235b, #4f8db8);
      border-radius: 26px;
      z-index: -1;
      background-size: 400% 400%;
      animation: gradient 6s ease infinite;
    }

    @keyframes gradient {
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

    /* Button Secondary - BRAND NAVY */
    .btn-secondary {
      background: linear-gradient(145deg, #17235b, #1e3a5f);
      color: white;
      transition: all 0.3s ease;
    }

    .btn-secondary:hover {
      background: linear-gradient(145deg, #0e1a3a, #17235b);
      box-shadow: 0 10px 20px -5px rgba(23, 35, 91, 0.4);
    }

    /* View Only Style untuk Guru */
    .view-only {
      cursor: default;
      opacity: 0.9;
    }

    .view-only:hover {
      transform: none !important;
    }

    /* RESPONSIVE FIXES */
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

    /* FIX: Sidebar Desktop agar responsif ke bawah */
    .sidebar-desktop {
      height: 100vh;
      position: sticky;
      top: 0;
      display: flex;
      flex-direction: column;
      background: transparent;
    }

    .sidebar-desktop .inner-sidebar {
      display: flex;
      flex-direction: column;
      height: 100%;
      max-height: 100vh;
      overflow-y: auto;
    }

    @media (max-width: 1024px) {
      .sidebar-desktop {
        display: none;
      }
    }

    @media (max-width: 768px) {
      .hide-on-mobile {
        display: none;
      }

      .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .chart-container {
        min-width: 300px;
      }
    }
  </style>
</head>

<body class="font-sans text-gray-700 overflow-x-hidden">
  <!-- PROFILE POPUP - BRAND THEMED -->
  <div id="profilePopup" class="profile-popup z-[9999]">
    <div class="unique-card p-6 md:p-8 relative overflow-hidden">
      <!-- Decorative Elements - BRAND COLORS -->
      <div
        class="absolute -top-20 -right-20 w-40 h-40 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute -bottom-20 -left-20 w-40 h-40 bg-gradient-to-br from-[#17235b]/10 to-[#2a4a7a]/10 rounded-full blur-3xl"
      ></div>

      <!-- Close Button -->
      <button
        onclick="closeProfilePopup()"
        class="absolute top-3 right-3 md:top-4 md:right-4 w-9 h-9 bg-white/90 rounded-full flex items-center justify-center text-gray-400 hover:text-[#4F8DB8] hover:bg-[#4F8DB8]/10 transition-all border border-white/50 shadow-md z-20"
      >
        <i class="fa-solid fa-xmark text-base md:text-lg"></i>
      </button>

      <div class="relative z-10">
        <!-- Header -->
        <div class="flex items-center gap-3 md:gap-4 mb-5 md:mb-6">
          <div
            class="w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-2xl flex items-center justify-center text-white text-xl md:text-2xl shadow-xl transform -rotate-3"
          >
            <i class="fa-solid fa-id-card"></i>
          </div>
          <div>
            <span
              class="text-[10px] md:text-xs font-bold text-[#4F8DB8] uppercase tracking-wider bg-[#4F8DB8]/10 px-2 md:px-3 py-1 md:py-1.5 rounded-full"
            >
              Identitas Guru BK
            </span>
            <h3 class="text-xl md:text-2xl font-extrabold text-[#17235b] mt-1">
              Profile Guru BK
            </h3>
          </div>
        </div>

        <!-- Avatar with Badge -->
        <div class="flex flex-col items-center mb-5 md:mb-6">
          <div class="relative group">
            <div
              class="absolute -inset-1 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-full blur-lg opacity-70 group-hover:opacity-100 transition"
            ></div>
            <div
              class="relative w-24 h-24 md:w-28 md:h-28 rounded-full bg-gradient-to-br from-[#17235b] to-[#2a4a7a] p-1"
            >
              <div
                class="w-full h-full rounded-full bg-white flex items-center justify-center overflow-hidden border-4 border-white"
              >
                <img
                  src="https://ui-avatars.com/api/?name=Bu+Denia&background=17235b&color=fff&size=120&bold=true"
                  alt="Guru BK"
                  class="w-full h-full object-cover"
                />
              </div>
            </div>
            <span
              class="absolute bottom-1 right-1 w-5 h-5 md:w-6 md:h-6 bg-emerald-500 border-3 border-white rounded-full flex items-center justify-center shadow-lg"
            >
              <i class="fa-solid fa-check text-white text-[10px] md:text-xs"></i>
            </span>
          </div>
          <h2 class="text-xl md:text-2xl font-bold text-[#17235b] mt-3 md:mt-4">
            Bu Denia
          </h2>
          <p class="text-xs md:text-sm text-gray-500 flex items-center gap-2">
            <i class="fa-solid fa-chalkboard-user text-[#4F8DB8]"></i>
            Guru BK
          </p>
          <span
            class="mt-2 smk-badge text-[10px] md:text-xs px-3 md:px-4 py-1 md:py-1.5 rounded-full font-semibold"
          >
            SMK Budi Bakti Ciwidey
          </span>
        </div>

        <!-- Info Grid - Responsive -->
        <div class="grid grid-cols-2 gap-3 md:gap-4 mb-5 md:mb-6">
          <div
            class="bg-[#4F8DB8]/5 rounded-xl md:rounded-2xl p-3 md:p-4 text-center border border-[#4F8DB8]/20"
          >
            <i class="fa-solid fa-user-tie text-[#4F8DB8] text-lg md:text-xl mb-1"></i>
            <p class="text-[10px] md:text-xs text-gray-500">NIP</p>
            <p class="font-bold text-[#17235b] text-xs md:text-sm truncate">
              198705122015011001
            </p>
          </div>
          <div
            class="bg-[#6FAED9]/5 rounded-xl md:rounded-2xl p-3 md:p-4 text-center border border-[#6FAED9]/20"
          >
            <i class="fa-solid fa-envelope text-[#6FAED9] text-lg md:text-xl mb-1"></i>
            <p class="text-[10px] md:text-xs text-gray-500">Email</p>
            <p class="font-bold text-[#17235b] text-xs md:text-sm truncate">
              bu.denia@smkbudibakti.sch.id
            </p>
          </div>
          <div
            class="bg-[#17235b]/5 rounded-xl md:rounded-2xl p-3 md:p-4 text-center border border-[#17235b]/20"
          >
            <i class="fa-solid fa-phone text-[#17235b] text-lg md:text-xl mb-1"></i>
            <p class="text-[10px] md:text-xs text-gray-500">Telepon</p>
            <p class="font-bold text-[#17235b] text-xs md:text-sm">
              +62 812-3456-7890
            </p>
          </div>
          <div
            class="bg-yellow-400/5 rounded-xl md:rounded-2xl p-3 md:p-4 text-center border border-yellow-400/20"
          >
            <i class="fa-solid fa-calendar text-yellow-600 text-lg md:text-xl mb-1"></i>
            <p class="text-[10px] md:text-xs text-gray-500">Bergabung</p>
            <p class="font-bold text-[#17235b] text-xs md:text-sm">
              12 Jan 2023
            </p>
          </div>
        </div>

        <!-- Activity Stats -->
        <div
          class="bg-gradient-to-r from-[#4F8DB8]/5 to-[#6FAED9]/5 rounded-xl md:rounded-2xl p-3 md:p-4 mb-5 md:mb-6 border border-[#4F8DB8]/20"
        >
          <h4
            class="text-xs md:text-sm font-bold text-[#17235b] mb-2 md:mb-3 flex items-center gap-2"
          >
            <i class="fa-solid fa-chart-line text-[#4F8DB8]"></i>
            Aktivitas 30 Hari Terakhir
          </h4>
          <div class="flex justify-between items-center">
            <div class="text-center">
              <p class="text-lg md:text-2xl font-bold text-[#17235b]">48</p>
              <p class="text-[10px] md:text-xs text-gray-500">Konseling</p>
            </div>
            <div class="w-px h-8 md:h-10 bg-gray-200"></div>
            <div class="text-center">
              <p class="text-lg md:text-2xl font-bold text-[#17235b]">32</p>
              <p class="text-[10px] md:text-xs text-gray-500">Tindak Lanjut</p>
            </div>
            <div class="w-px h-8 md:h-10 bg-gray-200"></div>
            <div class="text-center">
              <p class="text-lg md:text-2xl font-bold text-[#17235b]">12</p>
              <p class="text-[10px] md:text-xs text-gray-500">Jadwal</p>
            </div>
          </div>
        </div>

        <!-- Action Buttons - Responsive (Hanya Edit Profile, tanpa Create) -->
        <div class="flex flex-col sm:flex-row gap-2 md:gap-3">
          <button
            onclick="closeProfilePopup()"
            class="flex-1 btn-primary py-2.5 md:py-3 px-3 md:px-4 rounded-xl font-semibold text-xs md:text-sm shadow-lg flex items-center justify-center gap-2"
          >
            <i class="fa-solid fa-pen-to-square"></i>
            Edit Profile
          </button>
          <button
            onclick="logout()"
            class="flex-1 bg-white border-2 border-[#4F8DB8] text-[#4F8DB8] py-2.5 md:py-3 px-3 md:px-4 rounded-xl font-semibold text-xs md:text-sm hover:bg-[#4F8DB8] hover:text-white transition-all flex items-center justify-center gap-2"
          >
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            Logout
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- POPUP OVERLAY -->
  <div id="popupOverlay" class="popup-overlay" onclick="closeProfilePopup()"></div>

  <!-- MOBILE SIDEBAR OVERLAY -->
  <div id="mobileOverlay" class="mobile-overlay" onclick="toggleSidebar()"></div>

  <!-- MOBILE SIDEBAR -->
  <div id="mobileSidebar" class="sidebar-mobile">
    <div
      class="h-full w-full glass-card-deep rounded-r-2xl p-5 flex flex-col overflow-y-auto border-r border-white/40 shadow-2xl"
    >
      <!-- LOGO & IDENTITAS SMK -->
      <div class="flex items-center gap-3 pb-5 border-b border-[#4F8DB8]/20">
        <div class="relative group">
          <img
            src="img/LOGO BK.png"
            alt="BK Care Guru"
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

      <!-- MENU NAVIGASI MOBILE (GURU - Hanya Menu yang Diperlukan) -->
      <nav class="flex-1 overflow-y-auto py-5 space-y-1 text-sm">
        <a
          href="dashboardguru.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all menu-active"
        >
          <i class="fa-solid fa-chart-pie w-5 text-center text-white"></i>
          <span class="font-medium text-white">Dashboard</span>
        </a>

        <!-- Data Siswa (View Only) -->
        <a
          href="datasiswa.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        >
          <i class="fa-solid fa-user-graduate w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Data Siswa</span>
          <span
            class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full"
            >1.247</span
          >
        </a>

        <!-- Jadwal Konseling (Menu Langsung, tanpa dropdown) -->
        <a
          href="jadwal.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        >
          <i class="fa-solid fa-calendar-check w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Jadwal Konseling</span>
          <span
            class="ml-auto bg-green-100 text-green-700 text-[10px] px-1.5 py-0.5 rounded-full"
            >3</span
          >
        </a>

        <!-- Riwayat Konseling -->
        <a
          href="riwayat.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        >
          <i class="fa-solid fa-clock-rotate-left w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Riwayat Konseling</span>
        </a>

        <!-- Point Pelanggaran -->
        <a
          href="point.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        >
          <i class="fa-solid fa-triangle-exclamation w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Point Pelanggaran</span>
          <span
            class="ml-auto bg-orange-100 text-orange-700 text-[10px] px-2 py-0.5 rounded-full"
            >42</span
          >
        </a>

        <!-- Materi Edukasi (View Only) -->
        <a
          href="materi.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        >
          <i class="fa-solid fa-book-open w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">Materi Edukasi</span>
        </a>

        <!-- Menu Laporan di-HAPUS karena guru tidak bisa membuat laporan -->

        <div class="border-t border-[#4F8DB8]/20 my-4"></div>

        <a
          href="index.html"
          class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
        >
          <i class="fa-solid fa-globe w-5 text-center text-[#4F8DB8]"></i>
          <span class="font-medium">View Website</span>
        </a>
      </nav>

      <!-- PROFILE GURU MOBILE -->
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
                  src="https://ui-avatars.com/api/?name=Bu+Denia&background=17235b&color=fff&size=80&bold=true"
                  alt="Guru BK"
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
              <h4 class="text-white font-bold text-sm">Bu Denia</h4>
              <span
                class="bg-white/20 text-[10px] px-1.5 py-0.5 rounded-full text-white"
                >Guru BK</span
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
    </div>
  </div>

  <!-- MAIN CONTAINER - FLEX ROW -->
  <div class="flex min-h-screen relative">
    <!-- DECORATIVE BACKGROUND ELEMENTS - FIXED -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
      <div
        class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/10 rounded-full blur-3xl"
      ></div>
      <div
        class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/10 rounded-full blur-3xl"
        style="animation-delay: -3s"
      ></div>
      <div
        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[#4F8DB8]/5 to-[#6FAED9]/5 rounded-full blur-3xl"
      ></div>
    </div>

    <!-- ================= SIDEBAR DESKTOP - GURU (Sederhana) ================= -->
    <aside class="hidden lg:block sidebar-desktop z-10">
      <div
        class="inner-sidebar glass-card-deep rounded-2xl m-4 p-5 w-80 border border-white/40 shadow-2xl"
      >
        <div class="flex items-center gap-3 pb-5 border-b border-[#4F8DB8]/20">
          <div class="relative group">
            <div
              class="absolute -inset-2 bg-gradient-to-r from-[#4F8DB8]/30 to-[#6FAED9]/30 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity"
            ></div>
            <img
              src="img/LOGO BK.png"
              alt="BK Care Guru"
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

        <nav class="flex-1 overflow-y-auto py-5 space-y-1 text-sm">
          <a
            href="dashboardguru.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all menu-active"
          >
            <i class="fa-solid fa-chart-pie w-5 text-center text-white"></i>
            <span class="font-medium text-white">Dashboard</span>
          </a>

          <!-- Data Siswa (View Only) -->
          <a
            href="datasiswa.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
          >
            <i class="fa-solid fa-user-graduate w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Data Siswa</span>
            <span
              class="ml-auto bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-1.5 py-0.5 rounded-full"
              >1.247</span
            >
          </a>

          <!-- Jadwal Konseling (Menu Langsung) -->
          <a
            href="jadwal.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
          >
            <i class="fa-solid fa-calendar-check w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Jadwal Konseling</span>
            <span
              class="ml-auto bg-green-100 text-green-700 text-[10px] px-1.5 py-0.5 rounded-full"
              >3</span
            >
          </a>

          <!-- Riwayat Konseling -->
          <a
            href="riwayat.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
          >
            <i class="fa-solid fa-clock-rotate-left w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Riwayat Konseling</span>
          </a>

          <!-- Point Pelanggaran -->
          <a
            href="point.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
          >
            <i class="fa-solid fa-triangle-exclamation w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Point Pelanggaran</span>
            <span
              class="ml-auto bg-orange-100 text-orange-700 text-[10px] px-2 py-0.5 rounded-full"
              >42</span
            >
          </a>

          <!-- Materi Edukasi (View Only) -->
          <a
            href="materi.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
          >
            <i class="fa-solid fa-book-open w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">Materi Edukasi</span>
          </a>

          <!-- Menu Laporan DIHAPUS -->

          <div class="border-t border-[#4F8DB8]/20 my-4"></div>

          <a
            href="index.html"
            class="menu-item flex items-center gap-3 px-4 py-3 rounded-xl text-gray-700 hover:bg-[#4F8DB8]/10 transition-all"
          >
            <i class="fa-solid fa-globe w-5 text-center text-[#4F8DB8]"></i>
            <span class="font-medium">View Website</span>
          </a>
        </nav>

        <!-- PROFILE GURU - DESKTOP -->
        <div class="relative mt-2 group">
          <!-- PROFILE CARD - SIMPLE ELEGANT -->
          <div
            onclick="openProfilePopup()"
            class="relative overflow-hidden cursor-pointer rounded-2xl p-4 bg-white hover:bg-gray-50 border border-gray-200/80 hover:border-[#4F8DB8]/30 shadow-sm hover:shadow-md transition-all duration-300"
          >
            <div class="relative z-10 flex items-center gap-3">
              <!-- AVATAR - SIMPLE -->
              <div class="relative">
                <div
                  class="w-12 h-12 rounded-full bg-gradient-to-br from-[#4F8DB8]/10 to-[#6FAED9]/10 flex items-center justify-center overflow-hidden border border-[#4F8DB8]/20"
                >
                  <img
                    src="https://ui-avatars.com/api/?name=Bu+Denia&background=4F8DB8&color=fff&size=80&bold=true"
                    class="w-full h-full object-cover"
                    alt="Guru BK"
                  />
                </div>
                <span
                  class="absolute bottom-0 right-0 w-3 h-3 bg-emerald-500 border-2 border-white rounded-full"
                ></span>
              </div>

              <!-- INFO - SIMPLE -->
              <div class="flex-1">
                <div class="flex items-center gap-2">
                  <h4 class="text-gray-900 font-semibold text-sm">Bu Denia</h4>
                  <span
                    class="bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] px-2 py-0.5 rounded-full font-medium"
                  >
                    Guru BK
                  </span>
                </div>
                <div class="flex items-center gap-1 mt-0.5">
                  <i class="fa-solid fa-location-dot text-[#4F8DB8] text-[9px]"></i>
                  <span class="text-gray-400 text-[9px]"
                    >SMK Budi Bakti Ciwidey</span
                  >
                </div>
              </div>

              <!-- ARROW - SIMPLE -->
              <div
                class="w-6 h-6 bg-gray-100 rounded-full flex items-center justify-center text-gray-400 group-hover:bg-[#4F8DB8] group-hover:text-white transition-all duration-300"
              >
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
              </div>
            </div>
          </div>

          <!-- LOGOUT BUTTON - SIMPLE -->
          <button
            onclick="logout()"
            class="mt-2 w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl text-xs font-medium bg-white border border-gray-200 text-gray-600 hover:border-red-200 hover:bg-red-50 hover:text-red-600 transition-all duration-200"
          >
            <i class="fa-solid fa-right-from-bracket text-[11px]"></i>
            Logout
          </button>
        </div>
      </div>
    </aside>

    <!-- ================= MAIN CONTENT - RESPONSIVE ================= -->
    <main
      class="flex-1 overflow-y-auto p-4 md:p-6 space-y-4 md:space-y-6 relative z-10 lg:ml-0"
    >
      <!-- TOP BAR - RESPONSIVE -->
      <div
        class="glass-card-deep rounded-xl md:rounded-2xl p-3 md:p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-3 border border-white/40 shadow-xl"
      >
        <div class="flex items-center gap-2 md:gap-3">
          <!-- Mobile Menu Button -->
          <button
            onclick="toggleSidebar()"
            class="lg:hidden w-9 h-9 md:w-10 md:h-10 bg-white/80 backdrop-blur-sm rounded-xl border border-white/50 flex items-center justify-center text-[#17235b] hover:bg-[#4F8DB8] hover:text-white transition-all"
          >
            <i class="fa-solid fa-bars text-lg"></i>
          </button>

          <div
            class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-lg md:text-xl shadow-lg"
          >
            <i class="fa-solid fa-gauge-high"></i>
          </div>
          <div>
            <h2 class="font-extrabold text-[#17235b] text-base md:text-xl">
              <span class="text-gradient">Dashboard</span>
              <span class="hidden xs:inline">Guru BK</span>
            </h2>
            <p
              class="text-[10px] md:text-xs text-gray-500 flex items-center gap-1 md:gap-2"
            >
              <i class="fa-regular fa-calendar text-[#4F8DB8]"></i>
              <span class="hidden xs:inline">12 Februari 2026</span>
              <span class="xs:hidden">12/02/26</span>
              <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
              <i class="fa-regular fa-clock text-[#4F8DB8]"></i>
              <span id="liveClockMobile">--:--:--</span>
            </p>
          </div>
        </div>

        <!-- NOTIFICATION - RESPONSIVE (Hanya View) -->
        <div class="flex items-center gap-2 md:gap-3 self-end sm:self-auto">
          <button
            class="relative group flex items-center gap-1 md:gap-3 px-3 md:px-5 py-2 md:py-2.5 rounded-xl bg-white/80 backdrop-blur-sm border border-white/50 hover:bg-white transition-all shadow-lg"
          >
            <div class="relative">
              <i class="fa-regular fa-bell text-[#17235b] text-base md:text-xl"></i>
              <span
                class="absolute -top-2 -right-2 bg-gradient-to-r from-red-500 to-red-600 text-white text-[10px] w-4 h-4 md:w-5 md:h-5 flex items-center justify-center rounded-full border border-white font-bold"
              >
                3
              </span>
            </div>
            <span
              class="text-xs md:text-sm font-semibold text-gray-700 hidden sm:inline"
              >Notifikasi</span
            >
          </button>

          <!-- Tombol Plus dihilangkan karena guru tidak perlu create -->
        </div>
      </div>

      <!-- ================= card selamat datang ================= -->
      <div class="grid lg:grid-cols-3 gap-4 md:gap-6 items-stretch">
        <!-- Welcome Card -->
        <div
          class="lg:col-span-2 rounded-xl md:rounded-2xl p-4 md:p-6 flex flex-col sm:flex-row items-center sm:items-start gap-4 md:gap-6 border border-white/40 shadow-xl relative overflow-hidden gradient-border"
        >
          <div
            class="relative z-10 w-16 h-16 md:w-20 md:h-20 lg:w-24 lg:h-24 bg-gradient-to-br from-[#17235b] to-[#2a4a7a] rounded-xl md:rounded-2xl flex items-center justify-center text-white text-2xl md:text-3xl lg:text-4xl shadow-2xl transform rotate-3 flex-shrink-0"
          >
            <i class="fa-solid fa-hand-wave"></i>
          </div>

          <div class="relative z-10 text-center sm:text-left">
            <div
              class="flex flex-wrap items-center gap-2 mb-2 md:mb-3 justify-center sm:justify-start"
            >
              <span
                class="bg-[#4F8DB8]/10 text-[#4F8DB8] text-[10px] md:text-xs px-2 md:px-3 py-1 md:py-1.5 rounded-full font-semibold flex items-center gap-1"
              >
                <i class="fa-regular fa-calendar mr-1"></i>
                <span class="hidden xs:inline">12 Feb 2026</span>
                <span class="xs:hidden">12/02/26</span>
              </span>
              <span
                class="bg-[#17235b]/10 text-[#17235b] text-[10px] md:text-xs px-2 md:px-3 py-1 md:py-1.5 rounded-full font-semibold flex items-center gap-1"
              >
                <i class="fa-regular fa-clock"></i> Online
              </span>
            </div>
            <h3
              class="text-lg md:text-xl lg:text-2xl font-extrabold text-[#17235b] mb-1 md:mb-2"
            >
              Hallo, Bu Denia!
            </h3>
            <p class="text-xs md:text-sm text-gray-600 max-w-md">
              <span class="hidden sm:inline"
                >Selamat datang kembali di dashboard Guru BK
              </span>
              <span class="font-semibold text-[#4F8DB8]"
                >SMK Budi Bakti Ciwidey</span
              >.
              <span class="hidden sm:inline">Hari ini ada </span>
              <span
                class="font-bold text-[#4F8DB8] bg-[#4F8DB8]/10 px-1.5 py-0.5 rounded-full text-[10px] md:text-xs"
                >3 jadwal konseling</span
              >
            </p>
            <div
              class="flex items-center gap-3 md:gap-4 mt-3 md:mt-4 justify-center sm:justify-start"
            >
              <div class="flex items-center gap-1 md:gap-2">
                <div
                  class="w-1.5 h-1.5 md:w-2 md:h-2 bg-[#4F8DB8] rounded-full animate-pulse"
                ></div>
                <span class="text-[10px] md:text-xs text-gray-500"
                  >48 total</span
                >
              </div>
              <div class="flex items-center gap-1 md:gap-2">
                <div
                  class="w-1.5 h-1.5 md:w-2 md:h-2 bg-[#6FAED9] rounded-full"
                ></div>
                <span class="text-[10px] md:text-xs text-gray-500"
                  >32 selesai</span
                >
              </div>
            </div>
          </div>
        </div>

        <!-- CHART - RESPONSIVE -->
        <div
          class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/40 shadow-xl dashboard-card flex flex-col"
        >
          <div class="flex items-center justify-between mb-3 md:mb-4">
            <h3
              class="font-bold text-[#17235b] text-xs md:text-sm flex items-center gap-1 md:gap-2"
            >
              <i class="fa-solid fa-chart-simple text-[#4F8DB8]"></i>
              <span class="hidden xs:inline">Statistik Konseling</span>
              <span class="xs:hidden">Statistik</span>
            </h3>
            <span
              class="text-[9px] md:text-xs bg-[#4F8DB8]/10 text-[#4F8DB8] px-2 md:px-3 py-1 md:py-1.5 rounded-full font-semibold"
            >
              <i class="fa-regular fa-calendar mr-1"></i> Feb 2026
            </span>
          </div>

          <!-- Chart Bars - Responsive -->
          <div
            class="flex-1 flex items-end justify-around gap-2 md:gap-4 pt-2 md:pt-4 overflow-x-auto pb-2"
          >
            <div class="flex flex-col items-center group min-w-[50px]">
              <div class="relative">
                <div
                  class="w-7 md:w-8 lg:w-10 h-24 md:h-28 lg:h-32 bg-gradient-to-t from-[#4F8DB8] to-[#6FAED9] rounded-lg chart-bar shadow-lg"
                  style="height: 80px; min-height: 80px"
                ></div>
                <span
                  class="absolute -top-6 left-1/2 -translate-x-1/2 bg-[#17235b] text-white text-[9px] md:text-xs px-1.5 md:px-2 py-0.5 md:py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-lg z-20"
                >
                  18 sesi
                </span>
              </div>
              <span
                class="text-[10px] md:text-xs font-semibold text-gray-700 mt-2"
                >Akademik</span
              >
              <span class="text-[8px] md:text-[10px] text-gray-500">18</span>
            </div>

            <div class="flex flex-col items-center group min-w-[50px]">
              <div class="relative">
                <div
                  class="w-7 md:w-8 lg:w-10 h-20 md:h-24 lg:h-28 bg-gradient-to-t from-[#6FAED9] to-[#8EC7E0] rounded-lg chart-bar shadow-lg"
                  style="height: 60px; min-height: 60px"
                ></div>
                <span
                  class="absolute -top-6 left-1/2 -translate-x-1/2 bg-[#17235b] text-white text-[9px] md:text-xs px-1.5 md:px-2 py-0.5 md:py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity"
                >
                  14 sesi
                </span>
              </div>
              <span
                class="text-[10px] md:text-xs font-semibold text-gray-700 mt-2"
                >Pribadi</span
              >
              <span class="text-[8px] md:text-[10px] text-gray-500">14</span>
            </div>

            <div class="flex flex-col items-center group min-w-[50px]">
              <div class="relative">
                <div
                  class="w-7 md:w-8 lg:w-10 h-16 md:h-20 lg:h-24 bg-gradient-to-t from-[#8EC7E0] to-[#A8D8EA] rounded-lg chart-bar shadow-lg"
                  style="height: 40px; min-height: 40px"
                ></div>
                <span
                  class="absolute -top-6 left-1/2 -translate-x-1/2 bg-[#17235b] text-white text-[9px] md:text-xs px-1.5 md:px-2 py-0.5 md:py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity"
                >
                  10 sesi
                </span>
              </div>
              <span
                class="text-[10px] md:text-xs font-semibold text-gray-700 mt-2"
                >Sosial</span
              >
              <span class="text-[8px] md:text-[10px] text-gray-500">10</span>
            </div>

            <div class="flex flex-col items-center group min-w-[50px]">
              <div class="relative">
                <div
                  class="w-7 md:w-8 lg:w-10 h-14 md:h-16 lg:h-20 bg-gradient-to-t from-[#A8D8EA] to-[#C2E0F0] rounded-lg chart-bar shadow-lg"
                  style="height: 30px; min-height: 30px"
                ></div>
                <span
                  class="absolute -top-6 left-1/2 -translate-x-1/2 bg-[#17235b] text-white text-[9px] md:text-xs px-1.5 md:px-2 py-0.5 md:py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity"
                >
                  6 sesi
                </span>
              </div>
              <span
                class="text-[10px] md:text-xs font-semibold text-gray-700 mt-2"
                >Karir</span
              >
              <span class="text-[8px] md:text-[10px] text-gray-500">6</span>
            </div>
          </div>

          <!-- Total -->
          <div
            class="mt-2 md:mt-4 pt-3 md:pt-4 border-t border-[#4F8DB8]/20 flex justify-between items-center"
          >
            <span class="text-[9px] md:text-xs text-gray-500"
              >Total bulan ini</span
            >
            <div class="flex items-baseline gap-1">
              <p class="text-lg md:text-xl lg:text-2xl font-bold text-[#17235b]">
                48
              </p>
              <span class="text-[9px] md:text-xs text-gray-400">sesi</span>
              <span
                class="ml-1 md:ml-2 text-[8px] md:text-xs bg-[#4F8DB8]/10 text-[#4F8DB8] px-1.5 md:px-2 py-0.5 rounded-full"
                >+8%</span
              >
            </div>
          </div>
        </div>
      </div>

      <!-- ================= jumlah card ================= -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 md:gap-6">
        <!-- Jumlah Konseling -->
        <div
          class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 flex items-center gap-3 md:gap-4 border border-white/40 shadow-xl dashboard-card relative overflow-hidden group"
        >
          <div
            class="absolute inset-0 bg-gradient-to-r from-[#4F8DB8]/0 via-[#4F8DB8]/5 to-[#4F8DB8]/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"
          ></div>
          <div
            class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-[#4F8DB8] to-[#6FAED9] rounded-xl flex items-center justify-center text-white text-xl md:text-2xl shadow-lg flex-shrink-0"
          >
            <i class="fa-solid fa-comments"></i>
          </div>
          <div class="min-w-0">
            <p
              class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider font-semibold"
            >
              Konseling
            </p>
            <div class="flex items-baseline gap-1 md:gap-2">
              <h3
                class="text-xl md:text-2xl lg:text-3xl font-extrabold text-[#17235b]"
              >
                48
              </h3>
              <span
                class="text-[9px] md:text-xs text-[#4F8DB8] bg-[#4F8DB8]/10 px-1.5 md:px-2 py-0.5 rounded-full"
                >+8%</span
              >
            </div>
            <p class="text-[9px] md:text-xs text-gray-400 mt-0.5 truncate">
              Meningkat dari bulan lalu
            </p>
          </div>
        </div>

        <!-- Jumlah Tindak Lanjut -->
        <div
          class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 flex items-center gap-3 md:gap-4 border border-white/40 shadow-xl dashboard-card relative overflow-hidden group"
        >
          <div
            class="absolute inset-0 bg-gradient-to-r from-[#6FAED9]/0 via-[#6FAED9]/5 to-[#6FAED9]/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"
          ></div>
          <div
            class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-[#6FAED9] to-[#8EC7E0] rounded-xl flex items-center justify-center text-white text-xl md:text-2xl shadow-lg flex-shrink-0"
          >
            <i class="fa-solid fa-clipboard-check"></i>
          </div>
          <div class="min-w-0">
            <p
              class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider font-semibold"
            >
              Tindak Lanjut
            </p>
            <div class="flex items-baseline gap-1 md:gap-2">
              <h3
                class="text-xl md:text-2xl lg:text-3xl font-extrabold text-[#17235b]"
              >
                32
              </h3>
              <span
                class="text-[9px] md:text-xs text-[#6FAED9] bg-[#6FAED9]/10 px-1.5 md:px-2 py-0.5 rounded-full"
                >66.7%</span
              >
            </div>
            <p class="text-[9px] md:text-xs text-gray-400 mt-0.5 truncate">
              Dari total konseling
            </p>
          </div>
        </div>

        <!-- Jumlah Jadwal Hari Ini -->
        <div
          class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 flex items-center gap-3 md:gap-4 border border-white/40 shadow-xl dashboard-card relative overflow-hidden group sm:col-span-2 lg:col-span-1"
        >
          <div
            class="absolute inset-0 bg-gradient-to-r from-green-500/0 via-green-500/5 to-green-500/0 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"
          ></div>
          <div
            class="w-12 h-12 md:w-14 md:h-14 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center text-white text-xl md:text-2xl shadow-lg flex-shrink-0"
          >
            <i class="fa-solid fa-calendar-check"></i>
          </div>
          <div class="min-w-0">
            <p
              class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider font-semibold"
            >
              Jadwal Hari Ini
            </p>
            <div class="flex items-baseline gap-1 md:gap-2">
              <h3
                class="text-xl md:text-2xl lg:text-3xl font-extrabold text-[#17235b]"
              >
                3
              </h3>
              <span
                class="text-[9px] md:text-xs text-green-600 bg-green-100 px-1.5 md:px-2 py-0.5 rounded-full"
                >+2</span
              >
            </div>
            <p class="text-[9px] md:text-xs text-gray-400 mt-0.5 truncate">
              Konseling hari ini
            </p>
          </div>
        </div>
      </div>

      <!-- ================= TABLES & JADWAL - RESPONSIVE STACK ================= -->
      <div class="grid lg:grid-cols-2 gap-4 md:gap-6 items-stretch">
        <!-- TABLE DATA KONSELING TERJADWAL - RESPONSIVE (View Only) -->
        <div
          class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/40 shadow-xl flex flex-col h-full dashboard-card"
        >
          <div class="flex items-center justify-between mb-3 md:mb-5">
            <h3
              class="font-bold text-[#17235b] text-xs md:text-sm flex items-center gap-1 md:gap-2"
            >
              <i class="fa-solid fa-clock-rotate-left text-[#4F8DB8]"></i>
              <span class="hidden xs:inline">Konseling Terjadwal</span>
              <span class="xs:hidden">Konseling</span>
            </h3>
            <a
              href="#"
              class="text-[9px] md:text-xs text-[#4F8DB8] hover:text-[#17235b] font-semibold flex items-center gap-1 transition-all group"
            >
              <span class="hidden xs:inline">Lihat Semua</span>
              <span class="xs:hidden">Semua</span>
              <i
                class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform text-[10px]"
              ></i>
            </a>
          </div>

          <!-- Table Responsive dengan Scroll Horizontal (View Only - tanpa tombol aksi) -->
          <div
            class="overflow-x-auto -mx-4 md:-mx-6 px-4 md:px-6 pb-2 table-responsive"
          >
            <table class="w-full text-xs md:text-sm min-w-[600px]">
              <thead>
                <tr
                  class="border-b border-[#4F8DB8]/20 text-gray-500 text-[9px] md:text-xs uppercase tracking-wider"
                >
                  <th class="py-2 md:py-3 text-left font-semibold">
                    Nama Siswa
                  </th>
                  <th class="py-2 md:py-3 text-left font-semibold">Kelas</th>
                  <th class="py-2 md:py-3 text-left font-semibold">Jenis</th>
                  <th class="py-2 md:py-3 text-left font-semibold">Waktu</th>
                  <th class="py-2 md:py-3 text-left font-semibold">Status</th>
                </tr>
              </thead>

              <tbody class="divide-y divide-[#4F8DB8]/10">
                <tr class="hover:bg-[#4F8DB8]/5 transition-colors cursor-pointer">
                  <td class="py-2 md:py-3 font-medium text-gray-800">
                    <div class="flex items-center gap-2">
                      <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]"
                      >
                        <i
                          class="fa-solid fa-user-graduate text-[9px] md:text-xs"
                        ></i>
                      </div>
                      <span class="text-[11px] md:text-sm">Siska</span>
                    </div>
                  </td>
                  <td class="text-[11px] md:text-sm">XI RPL 2</td>
                  <td>
                    <span
                      class="px-1.5 md:px-2 py-0.5 md:py-1 bg-[#4F8DB8]/10 text-[#4F8DB8] text-[9px] md:text-xs rounded-full font-medium"
                      >Akademik</span
                    >
                  </td>
                  <td class="text-[11px] md:text-sm">09.00</td>
                  <td>
                    <span
                      class="px-1.5 md:px-3 py-0.5 md:py-1 text-[9px] md:text-xs rounded-full badge-pending font-semibold flex items-center gap-1 w-fit"
                    >
                      <span
                        class="w-1 h-1 md:w-1.5 md:h-1.5 bg-yellow-600 rounded-full"
                      ></span>
                      <span class="hidden xs:inline">Menunggu</span>
                      <span class="xs:hidden">Pending</span>
                    </span>
                  </td>
                </tr>
                <tr class="hover:bg-[#4F8DB8]/5 transition-colors cursor-pointer">
                  <td class="py-2 md:py-3 font-medium text-gray-800">
                    <div class="flex items-center gap-2">
                      <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]"
                      >
                        <i
                          class="fa-solid fa-user-graduate text-[9px] md:text-xs"
                        ></i>
                      </div>
                      <span class="text-[11px] md:text-sm">Muthy</span>
                    </div>
                  </td>
                  <td class="text-[11px] md:text-sm">XI RPL 2</td>
                  <td>
                    <span
                      class="px-1.5 md:px-2 py-0.5 md:py-1 bg-[#6FAED9]/10 text-[#6FAED9] text-[9px] md:text-xs rounded-full font-medium"
                      >Pribadi</span
                    >
                  </td>
                  <td class="text-[11px] md:text-sm">11.00</td>
                  <td>
                    <span
                      class="px-1.5 md:px-3 py-0.5 md:py-1 text-[9px] md:text-xs rounded-full badge-approved font-semibold flex items-center gap-1 w-fit"
                    >
                      <span
                        class="w-1 h-1 md:w-1.5 md:h-1.5 bg-blue-600 rounded-full"
                      ></span>
                      Disetujui
                    </span>
                  </td>
                </tr>
                <tr class="hover:bg-[#4F8DB8]/5 transition-colors cursor-pointer">
                  <td class="py-2 md:py-3 font-medium text-gray-800">
                    <div class="flex items-center gap-2">
                      <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]"
                      >
                        <i
                          class="fa-solid fa-user-graduate text-[9px] md:text-xs"
                        ></i>
                      </div>
                      <span class="text-[11px] md:text-sm">Revan</span>
                    </div>
                  </td>
                  <td class="text-[11px] md:text-sm">XI RPL 2</td>
                  <td>
                    <span
                      class="px-1.5 md:px-2 py-0.5 md:py-1 bg-[#8EC7E0]/10 text-[#2a4a7a] text-[9px] md:text-xs rounded-full font-medium"
                      >Sosial</span
                    >
                  </td>
                  <td class="text-[11px] md:text-sm">13.30</td>
                  <td>
                    <span
                      class="px-1.5 md:px-3 py-0.5 md:py-1 text-[9px] md:text-xs rounded-full badge-completed font-semibold flex items-center gap-1 w-fit"
                    >
                      <span
                        class="w-1 h-1 md:w-1.5 md:h-1.5 bg-green-600 rounded-full"
                      ></span>
                      Selesai
                    </span>
                  </td>
                </tr>
                <tr class="hover:bg-[#4F8DB8]/5 transition-colors cursor-pointer">
                  <td class="py-2 md:py-3 font-medium text-gray-800">
                    <div class="flex items-center gap-2">
                      <div
                        class="w-6 h-6 md:w-8 md:h-8 bg-gradient-to-br from-[#4F8DB8]/20 to-[#6FAED9]/20 rounded-full flex items-center justify-center text-[#4F8DB8]"
                      >
                        <i
                          class="fa-solid fa-user-graduate text-[9px] md:text-xs"
                        ></i>
                      </div>
                      <span class="text-[11px] md:text-sm">Kakaa</span>
                    </div>
                  </td>
                  <td class="text-[11px] md:text-sm">XI RPL 4</td>
                  <td>
                    <span
                      class="px-1.5 md:px-2 py-0.5 md:py-1 bg-[#8EC7E0]/10 text-[#2a4a7a] text-[9px] md:text-xs rounded-full font-medium"
                      >Karir</span
                    >
                  </td>
                  <td class="text-[11px] md:text-sm">14.30</td>
                  <td>
                    <span
                      class="px-1.5 md:px-3 py-0.5 md:py-1 text-[9px] md:text-xs rounded-full badge-pending font-semibold flex items-center gap-1 w-fit"
                    >
                      <span
                        class="w-1 h-1 md:w-1.5 md:h-1.5 bg-yellow-600 rounded-full"
                      ></span>
                      Menunggu
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Pagination - Responsive (View Only) -->
          <div
            class="mt-3 md:mt-4 pt-3 md:pt-4 border-t border-[#4F8DB8]/20 flex flex-col xs:flex-row items-center justify-between gap-2"
          >
            <span
              class="text-[9px] md:text-xs text-gray-500 flex items-center gap-1"
            >
              <i class="fa-regular fa-file-lines"></i>
              <span class="hidden xs:inline">Menampilkan</span> 4 dari 12
            </span>
            <div class="flex gap-1 md:gap-2">
              <button
                class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-white/50 hover:bg-[#4F8DB8] hover:text-white transition-all flex items-center justify-center"
              >
                <i class="fa-solid fa-chevron-left text-[9px] md:text-xs"></i>
              </button>
              <button
                class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-[#4F8DB8] text-white flex items-center justify-center text-[11px] md:text-sm font-bold shadow-md"
              >
                1
              </button>
              <button
                class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-white/50 hover:bg-[#4F8DB8] hover:text-white transition-all flex items-center justify-center text-[11px] md:text-sm"
              >
                2
              </button>
              <button
                class="w-6 h-6 md:w-8 md:h-8 rounded-lg bg-white/50 hover:bg-[#4F8DB8] hover:text-white transition-all flex items-center justify-center"
              >
                <i class="fa-solid fa-chevron-right text-[9px] md:text-xs"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- JADWAL KONSELING HARI INI - RESPONSIVE (View Only) -->
        <div
          class="glass-card-deep rounded-xl md:rounded-2xl p-4 md:p-6 border border-white/40 shadow-xl flex flex-col h-full dashboard-card"
        >
          <div class="flex items-center justify-between mb-3 md:mb-5">
            <h3
              class="font-bold text-[#17235b] text-xs md:text-sm flex items-center gap-1 md:gap-2"
            >
              <i class="fa-solid fa-calendar-day text-[#4F8DB8]"></i>
              <span class="hidden xs:inline">Jadwal Hari Ini</span>
              <span class="xs:hidden">Jadwal</span>
            </h3>
            <span
              class="text-[9px] md:text-xs bg-[#4F8DB8]/10 text-[#4F8DB8] px-2 md:px-3 py-1 md:py-1.5 rounded-full font-semibold flex items-center gap-1"
            >
              <i class="fa-regular fa-clock"></i>
              <span class="hidden xs:inline">12 Feb 2026</span>
              <span class="xs:hidden">12/02/26</span>
            </span>
          </div>

          <div
            class="space-y-3 md:space-y-4 flex-1 overflow-y-auto pr-1 custom-scrollbar max-h-[350px] md:max-h-none"
          >
            <div class="flex gap-2 md:gap-4 group">
              <div
                class="text-[11px] md:text-sm font-bold text-[#4F8DB8] w-12 md:w-14 bg-[#4F8DB8]/10 h-9 md:h-10 rounded-lg md:rounded-xl flex items-center justify-center flex-shrink-0"
              >
                09.00
              </div>
              <div
                class="flex-1 bg-gradient-to-r from-[#4F8DB8]/5 to-[#6FAED9]/5 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 border border-[#4F8DB8]/20 group-hover:shadow-lg transition-all"
              >
                <div
                  class="flex flex-col xs:flex-row xs:items-start justify-between gap-2"
                >
                  <div>
                    <div class="flex items-center gap-1 md:gap-2">
                      <p class="text-xs md:text-sm font-bold text-gray-800">
                        Siska
                      </p>
                      <span
                        class="text-[8px] md:text-[10px] bg-white px-1.5 md:px-2 py-0.5 rounded-full text-[#4F8DB8] font-semibold shadow-sm"
                      >
                        XI RPL 2
                      </span>
                    </div>
                    <p
                      class="text-[9px] md:text-xs text-gray-500 mt-0.5 flex items-center gap-1"
                    >
                      <i
                        class="fa-solid fa-book-open text-[8px] md:text-[10px] text-[#4F8DB8]"
                      ></i>
                      <span class="hidden xs:inline"
                        >Akademik • Kesulitan materi</span
                      >
                      <span class="xs:hidden">Akademik</span>
                    </p>
                  </div>
                  <span
                    class="px-2 md:px-3 py-1 md:py-1.5 text-[8px] md:text-xs rounded-full bg-[#4F8DB8]/10 text-[#4F8DB8] font-semibold flex items-center gap-1 w-fit"
                  >
                    <i class="fa-solid fa-building"></i>
                    <span class="hidden xs:inline">Tatap Muka</span>
                    <span class="xs:hidden">TM</span>
                  </span>
                </div>
                <div
                  class="mt-1 md:mt-2 flex items-center gap-2 md:gap-3 text-[8px] md:text-[10px] text-gray-400"
                >
                  <i class="fa-regular fa-user"></i> Bu Denia
                  <i
                    class="fa-regular fa-location-dot ml-1 md:ml-2 text-[#4F8DB8]"
                  ></i>
                  <span class="hidden xs:inline">Ruang BK</span>
                  <span class="xs:hidden">BK</span>
                </div>
              </div>
            </div>

            <div class="flex gap-2 md:gap-4 group">
              <div
                class="text-[11px] md:text-sm font-bold text-[#4F8DB8] w-12 md:w-14 bg-[#4F8DB8]/10 h-9 md:h-10 rounded-lg md:rounded-xl flex items-center justify-center flex-shrink-0"
              >
                11.00
              </div>
              <div
                class="flex-1 bg-gradient-to-r from-[#6FAED9]/5 to-[#8EC7E0]/5 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 border border-[#6FAED9]/20 group-hover:shadow-lg transition-all"
              >
                <div
                  class="flex flex-col xs:flex-row xs:items-start justify-between gap-2"
                >
                  <div>
                    <div class="flex items-center gap-1 md:gap-2">
                      <p class="text-xs md:text-sm font-bold text-gray-800">
                        Muthy
                      </p>
                      <span
                        class="text-[8px] md:text-[10px] bg-white px-1.5 md:px-2 py-0.5 rounded-full text-[#4F8DB8] font-semibold shadow-sm"
                      >
                        XI RPL 2
                      </span>
                    </div>
                    <p
                      class="text-[9px] md:text-xs text-gray-500 mt-0.5 flex items-center gap-1"
                    >
                      <i
                        class="fa-solid fa-heart text-[8px] md:text-[10px] text-[#6FAED9]"
                      ></i>
                      <span class="hidden xs:inline"
                        >Pribadi • Manajemen stres</span
                      >
                      <span class="xs:hidden">Pribadi</span>
                    </p>
                  </div>
                  <span
                    class="px-2 md:px-3 py-1 md:py-1.5 text-[8px] md:text-xs rounded-full bg-[#6FAED9]/10 text-[#6FAED9] font-semibold flex items-center gap-1 w-fit"
                  >
                    <i class="fa-solid fa-video"></i>
                    <span class="hidden xs:inline">Online</span>
                    <span class="xs:hidden">Online</span>
                  </span>
                </div>
                <div
                  class="mt-1 md:mt-2 flex items-center gap-2 md:gap-3 text-[8px] md:text-[10px] text-gray-400"
                >
                  <i class="fa-regular fa-user"></i> Bu Denia
                  <i class="fa-regular fa-video ml-1 md:ml-2 text-[#6FAED9]"></i>
                  Zoom
                </div>
              </div>
            </div>

            <div class="flex gap-2 md:gap-4 group">
              <div
                class="text-[11px] md:text-sm font-bold text-[#4F8DB8] w-12 md:w-14 bg-[#4F8DB8]/10 h-9 md:h-10 rounded-lg md:rounded-xl flex items-center justify-center flex-shrink-0"
              >
                13.30
              </div>
              <div
                class="flex-1 bg-gradient-to-r from-[#8EC7E0]/5 to-[#A8D8EA]/5 backdrop-blur-sm rounded-lg md:rounded-xl p-3 md:p-4 border border-[#8EC7E0]/20 group-hover:shadow-lg transition-all"
              >
                <div
                  class="flex flex-col xs:flex-row xs:items-start justify-between gap-2"
                >
                  <div>
                    <div class="flex items-center gap-1 md:gap-2">
                      <p class="text-xs md:text-sm font-bold text-gray-800">
                        Revan
                      </p>
                      <span
                        class="text-[8px] md:text-[10px] bg-white px-1.5 md:px-2 py-0.5 rounded-full text-[#4F8DB8] font-semibold shadow-sm"
                      >
                        XI RPL 2
                      </span>
                    </div>
                    <p
                      class="text-[9px] md:text-xs text-gray-500 mt-0.5 flex items-center gap-1"
                    >
                      <i
                        class="fa-solid fa-user-group text-[8px] md:text-[10px] text-[#8EC7E0]"
                      ></i>
                      <span class="hidden xs:inline">Sosial • Konflik</span>
                      <span class="xs:hidden">Sosial</span>
                    </p>
                  </div>
                  <span
                    class="px-2 md:px-3 py-1 md:py-1.5 text-[8px] md:text-xs rounded-full bg-[#8EC7E0]/10 text-[#2a4a7a] font-semibold flex items-center gap-1 w-fit"
                  >
                    <i class="fa-solid fa-building"></i>
                    <span class="hidden xs:inline">Tatap Muka</span>
                    <span class="xs:hidden">TM</span>
                  </span>
                </div>
                <div
                  class="mt-1 md:mt-2 flex items-center gap-2 md:gap-3 text-[8px] md:text-[10px] text-gray-400"
                >
                  <i class="fa-regular fa-user"></i> Bu Denia
                  <i
                    class="fa-regular fa-location-dot ml-1 md:ml-2 text-[#8EC7E0]"
                  ></i>
                  <span class="hidden xs:inline">Ruang BK</span>
                  <span class="xs:hidden">BK</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Tombol Atur Jadwal dihilangkan karena guru tidak perlu menambah jadwal -->
          <div class="mt-3 md:mt-4 pt-3 md:pt-4 border-t border-[#4F8DB8]/20">
            <p class="text-center text-[9px] md:text-xs text-gray-400">
              <i class="fa-regular fa-calendar-check mr-1"></i>
              3 jadwal tersisa hari ini
            </p>
          </div>
        </div>
      </div>

      <!-- ================= FOOTER GURU - RESPONSIVE ================= -->
      <div
        class="text-center text-[9px] md:text-xs text-gray-400 pt-3 md:pt-4 pb-1 md:pb-2 flex flex-wrap items-center justify-center gap-2 md:gap-4"
      >
        <span>© 2026 BK Care For School Life - VISIONCODE</span>
        <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
        <span class="text-[#4F8DB8] font-medium">SMK Budi Bakti Ciwidey</span>
        <span class="w-1 h-1 bg-gray-300 rounded-full hidden xs:inline"></span>
        <span class="text-gray-500 hidden xs:inline">Guru Dashboard v1.0</span>
      </div>
    </main>
  </div>

  <script>
    // TOGGLE MENU DESKTOP
    function toggleMenu(menuId) {
      const menu = document.getElementById(menuId);
      const chevron = document.getElementById(`chevron-${menuId}`);

      menu.classList.toggle("hidden");

      if (chevron) {
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

      menu.classList.toggle("hidden");

      if (chevron) {
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

      sidebar.classList.toggle("active");
      overlay.classList.toggle("active");

      if (sidebar.classList.contains("active")) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "auto";
      }
    }

    // PROFILE POPUP FUNCTIONS
    function openProfilePopup() {
      document.getElementById("profilePopup").classList.add("active");
      document.getElementById("popupOverlay").classList.add("active");
      document.body.style.overflow = "hidden";
    }

    function closeProfilePopup() {
      document.getElementById("profilePopup").classList.remove("active");
      document.getElementById("popupOverlay").classList.remove("active");
      document.body.style.overflow = "auto";
    }

    // LOGOUT FUNCTION
    function logout() {
      if (confirm("Apakah Anda yakin ingin logout?")) {
        window.location.href = "login.html";
      }
    }

    // LIVE CLOCK
    function updateClock() {
      const now = new Date();
      const hours = now.getHours().toString().padStart(2, "0");
      const minutes = now.getMinutes().toString().padStart(2, "0");
      const seconds = now.getSeconds().toString().padStart(2, "0");
      const timeString = `${hours}:${minutes}:${seconds}`;

      const desktopClock = document.getElementById("liveClock");
      const mobileClock = document.getElementById("liveClockMobile");

      if (desktopClock) desktopClock.innerHTML = timeString;
      if (mobileClock) mobileClock.innerHTML = timeString;
    }
    setInterval(updateClock, 1000);
    updateClock();

    // CLOSE POPUP WITH ESC KEY
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") {
        closeProfilePopup();

        const sidebar = document.getElementById("mobileSidebar");
        const overlay = document.getElementById("mobileOverlay");
        if (sidebar && sidebar.classList.contains("active")) {
          sidebar.classList.remove("active");
          overlay.classList.remove("active");
          document.body.style.overflow = "auto";
        }
      }
    });

    // ACTIVE MENU
    const menuItems = document.querySelectorAll(".menu-item");
    menuItems.forEach((item) => {
      item.addEventListener("click", function (e) {
        if (this.tagName === "BUTTON") return;

        menuItems.forEach((i) => {
          i.classList.remove("menu-active");
          i.classList.add("hover:bg-[#4F8DB8]/10");

          const icon = i.querySelector("i:first-child");
          if (icon && !i.classList.contains("fa-chevron-down")) {
            icon.style.color = "#4F8DB8";
          }
        });

        this.classList.add("menu-active");
        this.classList.remove("hover:bg-[#4F8DB8]/10");

        const icon = this.querySelector("i:first-child");
        if (icon) {
          icon.style.color = "white";
        }

        // Close mobile sidebar after click on mobile
        if (window.innerWidth < 1024) {
          const sidebar = document.getElementById("mobileSidebar");
          const overlay = document.getElementById("mobileOverlay");
          if (sidebar && sidebar.classList.contains("active")) {
            sidebar.classList.remove("active");
            overlay.classList.remove("active");
            document.body.style.overflow = "auto";
          }
        }
      });
    });

    // RESIZE HANDLER
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