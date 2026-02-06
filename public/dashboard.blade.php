<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin - Tasty Food</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
        :root {
            --primary-blue: #3498db;
            --primary-dark: #2c3e50;
            --primary-purple: #9b59b6;
            --primary-green: #27ae60;
            --gradient-bg: linear-gradient(135deg, var(--primary-blue), var(--primary-purple));
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
.sidebar {
    background: var(--gradient-bg);
    color: white;
    width: 250px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 20px;
    box-shadow: 3px 0 10px rgba(0,0,0,0.2);
    z-index: 1000;
    overflow-y: auto;

}

.sidebar .nav-link {
    color: rgba(255,255,255,0.8);
    padding: 12px 20px;
    margin: 5px 0;
    border-radius: 5px;
    transition: all 0.3s;
}

.sidebar .nav-link:hover,
.sidebar .nav-link.active {
    background-color: rgba(255,255,255,0.2);
    color: white;
}

.sidebar .nav-link i {
    margin-right: 10px;
    width: 20px;
    text-align: center;
}

.main-content {
    margin-left: 250px;
    padding: 20px;
    position: relative;
    z-index: 1; /* pastikan sidebar tetap di atas */
}
        .topbar {
            background-color: white;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
    .card-dashboard { border-radius: 10px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: transform 0.3s; }
.card-dashboard:hover { transform: translateY(-5px); }
.card-berita { border-bottom: 4px solid var(--primary-blue); }
.card-galeri { border-bottom: 4px solid var(--primary-purple); }
.card-kontak { border-bottom: 4px solid var(--primary-dark); }
.card-user { border-bottom: 4px solid var(--primary-green); }
.dashboard-icon { font-size: 2.5rem; opacity: 0.8; transition: transform 0.3s; }
.dashboard-icon:hover { transform: scale(1.2) rotate(10deg); }

.btn-purple { background-color: var(--primary-purple); color: white; }
.btn-purple:hover { background-color: #8e44ad; color: white; }

.logo-text { font-weight: 700; font-size: 1.5rem; margin-bottom: 30px; padding: 0 20px; color: white; }

.user-info { padding: 15px 20px; border-top: 1px solid rgba(255,255,255,0.2); margin-top: auto; }

.content-section { display: none; }
.content-section.active { display: block; animation: fadeIn 0.5s; }

@keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
        
        .notification-badge {
  position: absolute;
  top: -5px;
  right: -5px;
  background-color: #dc3545; /* merah */
  color: white;
  border-radius: 50%;
  width: 18px;
  height: 18px;
  font-size: 11px;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 4px rgba(0,0,0,0.2);
}

.nav-link .icon-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  gap: 8px;
}


        
            .active-sub {
        background: rgba(255, 255, 255, 0.1); /* efek blur mirip main menu */
        backdrop-filter: blur(25px);
        color: white !important;
        border-radius: 0.25rem;
    }
    .active-sub i {
        color: white;
    }

    /* Glassmorphism effect for cards */
.glass-card {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}
.glass-card:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.15); }

/* Micro Cards */
.micro-card {
    border-left: 5px solid #9b59b6;
}

/* Gradient headers */
.bg-gradient {
    background: linear-gradient(135deg, #3498db, #9b59b6);
}

/* Count-up animation style */
.count-up {
    font-weight: 700;
}

/* Dashboard Icons hover */
.dashboard-icon {
    transition: transform 0.3s;
}
.dashboard-icon:hover {
    transform: scale(1.2) rotate(10deg);
}
/* Kalender Unik dengan dots */
#calendar {
    max-width: 100%;
    margin: 0 auto;
    font-family: 'Poppins', sans-serif;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    border-radius: 12px;
    padding: 10px;
}

.fc .fc-toolbar-title {
    font-size: 1.2rem;
    font-weight: 600;
}

.fc-daygrid-day {
    transition: all 0.3s;
    border-radius: 6px;
    position: relative;
}
.fc-daygrid-day:hover {
    background-color: rgba(155,89,182,0.1);
}
.fc-daygrid-day.fc-day-today {
    background-color: rgba(155,89,182,0.3);
    box-shadow: 0 0 10px rgba(155,89,182,0.7);
}

/* Event Styles */
.fc-event {
    border-radius: 6px;
    font-size: 0.85rem;
    color: white;
    padding: 2px 4px;
    display: flex;
    align-items: center;
    gap: 4px;
}
.fc-event.meeting { background-color: #9b59b6; }
.fc-event.event { background-color: #3498db; }
.fc-event.deadline { background-color: #e74c3c; }

/* Dot indicators */
.fc-event::before {
    content: "•";
    font-size: 1.2rem;
    margin-right: 4px;
}

.hover-scale {
  transition: transform 0.2s, background 0.2s;
  cursor: pointer;
  border-radius: 8px;
}
.hover-scale:hover {
  transform: translateY(-3px);
  background: rgba(90, 62, 191, 0.1);
}
.list-group-item i {
  min-width: 25px;
  text-align: center;
}

/* Sidebar responsive untuk tablet & HP */
@media (max-width: 991.98px) {
    .sidebar {
        position: fixed;
        top: 0;
        left: -250px; /* sembunyikan awal */
        width: 220px;
        height: 100vh;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        transition: left 0.3s ease;
        z-index: 1050;
    }

    .sidebar.show {
        left: 0;
    }

    .main-content {
        margin-left: 0;
        padding: 15px;
        transition: margin-left 0.3s ease;
    }

    /* Overlay saat sidebar terbuka */
    .sidebar-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        z-index: 1040;
        display: none;
    }

    .sidebar-overlay.show {
        display: block;
    }

    /* Toggle button di topbar */
    .topbar::before {
        content: "\f0c9"; /* Font Awesome bars */
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        font-size: 1.5rem;
        cursor: pointer;
        margin-right: 15px;
        display: inline-block;
    }
}

/* Cards & list-group responsive */
@media (max-width: 767.98px) {
    .card-dashboard { margin-bottom: 1rem; }
    .list-group-item .text-end {
        max-width: 100% !important;
        white-space: normal;
    }
    #calendar { height: auto !important; font-size: 0.85rem; }
    canvas { width: 100% !important; height: auto !important; }
}
</style>
    
    
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <!-- Sidebar -->
<div class="col-md-3 col-lg-2 sidebar">
    <div class="logo-text">
        <i class="fas fa-utensils"></i> TASTY FOOD
    </div>

    <ul class="nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
               href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt"></i> DASHBOARD
            </a>
        </li>

        <!-- Tentang Dropdown -->
        @php
            $isTentangActive = request()->routeIs('admin.tentang.*');
        @endphp
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center {{ $isTentangActive ? 'active' : '' }}"
               data-bs-toggle="collapse" href="#tentangSubmenu" role="button"
               aria-expanded="{{ $isTentangActive ? 'true' : 'false' }}"
               aria-controls="tentangSubmenu">
                <span><i class="fas fa-image"></i> TENTANG</span>
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse {{ $isTentangActive ? 'show' : '' }}" id="tentangSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.tentang.artikel.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.tentang.artikel.index') }}">
                           <i class="fas fa-file-alt me-1"></i> Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.tentang.visi.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.tentang.visi.index') }}">
                           <i class="fas fa-eye me-1"></i> Visi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.tentang.misi.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.tentang.misi.index') }}">
                           <i class="fas fa-bullseye me-1"></i> Misi
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Berita Dropdown -->
        @php
            $isBeritaActive = request()->routeIs('admin.berita.*');
        @endphp
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center {{ $isBeritaActive ? 'active' : '' }}" 
               data-bs-toggle="collapse" href="#beritaSubmenu" role="button"
               aria-expanded="{{ $isBeritaActive ? 'true' : 'false' }}"
               aria-controls="beritaSubmenu">
                <span><i class="fas fa-newspaper"></i> BERITA</span>
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse {{ $isBeritaActive ? 'show' : '' }}" id="beritaSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.berita.artikel.*') ? 'active-sub' : '' }}" 
                           href="{{ route('admin.berita.artikel.index') }}">
                           <i class="fas fa-file-alt me-1"></i> Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.berita.card.*') ? 'active-sub' : '' }}" 
                           href="{{ route('admin.berita.card.index') }}">
                           <i class="fas fa-th-large me-1"></i> Card
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Galeri Dropdown -->
        @php
            $isGaleriActive = request()->routeIs('admin.galeri.*');
        @endphp
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center {{ $isGaleriActive ? 'active' : '' }}"
               data-bs-toggle="collapse" href="#galeriSubmenu" role="button"
               aria-expanded="{{ $isGaleriActive ? 'true' : 'false' }}"
               aria-controls="galeriSubmenu">
                <span><i class="fas fa-image"></i> GALERI</span>
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse {{ $isGaleriActive ? 'show' : '' }}" id="galeriSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.galeri.card.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.galeri.card.index') }}">
                           <i class="fas fa-th-large me-1"></i> Card
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.galeri.carousel.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.galeri.carousel.index') }}">
                           <i class="fas fa-sync-alt me-1"></i> Carousel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.galeri.homegaleri.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.galeri.homegaleri.index') }}">
                           <i class="fas fa-home me-1"></i> HomeGaleri
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Kontak Dropdown -->
        @php
            $isKontakActive = request()->routeIs('admin.kontak.*');
        @endphp
        <li class="nav-item">
            <a class="nav-link d-flex justify-content-between align-items-center {{ $isKontakActive ? 'active' : '' }}"
               data-bs-toggle="collapse" href="#kontakSubmenu" role="button"
               aria-expanded="{{ $isKontakActive ? 'true' : 'false' }}"
               aria-controls="kontakSubmenu">
                <span><i class="fas fa-address-book"></i> KONTAK</span>
                <i class="fas fa-caret-down"></i>
            </a>
            <div class="collapse {{ $isKontakActive ? 'show' : '' }}" id="kontakSubmenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.kontak.info.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.kontak.info.index') }}">
                           <i class="fas fa-info-circle me-1"></i> Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('admin.kontak.pesan.*') ? 'active-sub' : '' }}"
                           href="{{ route('admin.kontak.pesan.index') }}">
                           <i class="fas fa-envelope me-1"></i> Pesan
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- View Histories -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.history') }}">
                <i class="fas fa-history"></i> HISTORY ADMIN
            </a>
        </li>

        <!-- View Website -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}">
                <i class="fas fa-cog"></i> VIEW WEBSITE
            </a>
        </li>
    </ul>

    <!-- User Info -->
    <div class="user-info mt-auto">
<div class="user-info mt-auto text-center">
    <!-- Klik foto/username → Info Admin Modal -->
    <a href="#" data-bs-toggle="modal" data-bs-target="#adminInfoModal" class="d-block mb-2">
        <img src="{{ $admin->profile_photo ? asset('storage/'.$admin->profile_photo) : 'https://ui-avatars.com/api/?name=' . $admin->full_name }}" 
             class="rounded-circle shadow-sm" 
             width="80" height="80" 
             alt="Admin" 
             style="cursor:pointer; object-fit: cover; border: 2px solid #6b21a8;">
    </a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#adminInfoModal" class="text-white fw-bold d-block">{{ $admin->full_name }}</a>
    <small class="text-white-50">{{ $admin->username }}</small>
</div>


        <div class="mt-3">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-light w-100">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </form>
        </div>
    </div>
</div>


        <!-- Main Content -->
<div class="col-md-9 col-lg-10 main-content">
    <!-- Top Bar -->
    <div class="topbar">
        <h4 class="mb-0">DASHBOARD ADMIN TASTY FOOD</h4>
        <div class="d-flex align-items-center">
    
<a class="nav-link d-flex justify-content-between align-items-center {{ request()->routeIs('admin.kontak.pesan.*') ? 'active-sub' : '' }}"
   href="{{ route('admin.kontak.pesan.index') }}">
   <div class="icon-wrapper">
      <i class="fas fa-bell fs-5 position-relative">
         @if($unreadMessages > 0)
            <span class="notification-badge">
               {{ $unreadMessages }}
            </span>
         @endif
      </i>
      <span>Pesan Masuk!</span>
   </div>
</a>


        </div>
    </div>

<!-- Import Lottie + Animate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.0/lottie.min.js"></script>
<script
  src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.1/dist/dotlottie-wc.js"
  type="module"
></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<div class="row align-items-stretch mb-4">
  <!-- 🟣 Kartu Sambutan -->
  <div class="col-md-8 mb-3">
  <div class="card shadow-sm glass-card border-0 p-4 d-flex align-items-center h-100"
       style="background: linear-gradient(90deg, #9b59b6, #3498db); border-radius: 18px;">
    <div class="d-flex align-items-center w-100">
      
      <!-- Lottie Admin -->
      <div class="me-4 d-flex align-items-center justify-content-center" 
           style="width: 200px; height: 200px; flex-shrink: 0;">
<dotlottie-wc
  src="https://lottie.host/d83dff76-edf8-41b3-8376-a5cf876bbcd4/DpJw2GADW6.lottie"
  style="width: 300px;height: 300px"
  autoplay
  loop
></dotlottie-wc>
      </div>

      <!-- Teks Sambutan -->
      <div class="text-white">
        <h2 class="fw-bold mb-2 animate__animated animate__fadeInDown">
          Selamat datang kembali, Admin Siska!
        </h2>
        <p class="animate__animated animate__fadeInUp animate__delay-1s mb-0">
          Semoga harimu penuh semangat dan produktivitas!
        </p>
      </div>

    </div>
  </div>
</div>


  <!-- 🔵 Kartu Cuaca Hari Ini -->
  <div class="col-md-4 mb-3">
    <div class="card shadow-sm border-0 p-4 d-flex flex-column align-items-center justify-content-center text-center glass-card h-100"
         style="border-radius: 18px; backdrop-filter: blur(8px); background-color: rgba(237, 237, 237, 0.7);">
         
      <!-- Ikon Cuaca -->
      <div id="weather-icon" style="font-size: 4rem;" class="animate__animated animate__fadeIn"></div>

      <h5 class="fw-bold mb-1 mt-2">Cuaca Hari Ini</h5>
      <p class="text-muted mb-1" id="weather-text">Memuat...</p>
      <small class="text-muted" id="weather-desc"></small>
    </div>
  </div>
</div>

<!-- SCRIPT CUACA -->
<script>
document.addEventListener("DOMContentLoaded", function () {
  const iconEl = document.getElementById("weather-icon");
  const textEl = document.getElementById("weather-text");
  const descEl = document.getElementById("weather-desc");

  // 🕐 Ambil waktu WIB (Asia/Jakarta)
  const now = new Date().toLocaleString("en-US", { timeZone: "Asia/Jakarta" });
  const hour = new Date(now).getHours();

  let icon = "";
  let kondisi = "";
  let deskripsi = "";

  if (hour >= 5 && hour < 10) {
    icon = "🌤️";
    kondisi = "Pagi Cerah";
    deskripsi = "Waktu yang pas buat mulai kerja 💪";
  } else if (hour >= 10 && hour < 15) {
    icon = "☀️";
    kondisi = "Siang Terik";
    deskripsi = "Jangan lupa minum air putih ya 💧";
  } else if (hour >= 15 && hour < 18) {
    icon = "🌥️";
    kondisi = "Sore Teduh";
    deskripsi = "Waktu santai sebentar ☕";
  } else if (hour >= 18 && hour < 23) {
    icon = "🌙";
    kondisi = "Malam Tenang";
    deskripsi = "Waktunya istirahat setelah hari panjang 😴";
  } else {
    icon = "🌌";
    kondisi = "Dini Hari";
    deskripsi = "Masih sepi, tapi penuh ide 💡";
  }

  iconEl.textContent = icon;
  textEl.textContent = `Bandung - ${kondisi}`;
  descEl.textContent = deskripsi;
});
</script>





    <!-- Dashboard Cards -->
    <div class="row mb-4">
        <!-- Main Cards -->
        <div class="col-md-3 mb-3">
            <div class="card glass-card card-dashboard card-berita">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Berita</h5>
                            <h2 class="card-text count-up" data-count="{{ $totalBerita }}">0</h2>
                            <p class="card-text text-muted">Total Berita</p>
                        </div>
                        <div>
                            <i class="fas fa-newspaper dashboard-icon text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card glass-card card-dashboard card-galeri">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Galeri</h5>
                            <h2 class="card-text count-up" data-count="{{ $totalGaleri }}">0</h2>
                            <p class="card-text text-muted">Total Gambar</p>
                        </div>
                        <div>
                            <i class="fas fa-image dashboard-icon text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card glass-card card-dashboard card-kontak">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Kontak</h5>
                            <h2 class="card-text count-up" data-count="{{ $pesanCount }}">0</h2>
                            <p class="card-text text-muted">Pesan Masuk</p>
                        </div>
                        <div>
                            <i class="fas fa-envelope dashboard-icon text-dark"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card glass-card card-dashboard card-user">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title">Admin</h5>
                            <h2 class="card-text count-up" data-count="{{ $adminCount }}">0</h2>
                            <p class="card-text text-muted">Total Admin</p>
                        </div>
                        <div>
                            <i class="fas fa-users dashboard-icon text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Pesan & Kalender -->
<div class="row mb-4">

  <!-- 📨 Card Pesan Masuk -->
  <div class="col-md-8 mb-3">
    <div class="card shadow-sm border-0 h-100">
      <div class="card-header text-white" 
           style="background: linear-gradient(90deg, #9b59b6, #3498db);">
        <i class="fas fa-envelope me-2"></i> Pesan Masuk Terbaru
      </div>

      <div class="card-body p-0">
        @if($latestMessages->count() > 0)
          <ul class="list-group list-group-flush">
            @foreach($latestMessages as $pesan)
              <li class="list-group-item d-flex justify-content-between align-items-start">
                <div>
                  <div class="fw-bold">{{ $pesan->name }}</div>
                  <small class="text-muted">{{ Str::limit($pesan->message, 50) }}</small>
                </div>
                @if(!$pesan->is_read)
                  <span class="badge bg-danger rounded-pill">Baru</span>
                @else
                  <span class="badge bg-secondary rounded-pill">Dibaca</span>
                @endif
              </li>
            @endforeach
          </ul>

          <div class="text-center py-3">
            <a href="{{ route('admin.kontak.pesan.index') }}" 
               class="btn btn-purple px-4">
              Lihat Semua Pesan
            </a>
          </div>
        @else
          <p class="text-center text-muted py-4 m-0">Belum ada pesan masuk.</p>
        @endif
      </div>
    </div>
  </div>

  <!-- 📅 Card Kalender -->
  <div class="col-md-4 mb-3">
    <div class="card glass-card card-dashboard shadow-sm border-0 h-100">
      <div class="card-header bg-gradient text-black fw-bold" 
           style="background: linear-gradient(90deg, #c2e9fb, #a1c4fd);">
        <i class="fas fa-calendar-alt me-2"></i> Kalender
      </div>
      <div class="card-body">
        <div id="calendar"></div>
      </div>
    </div>
  </div>

</div>


    <!-- Pesan & Informasi Kontak -->
    <!-- Tambahan History Admin -->
<div class="row">
    <div class="col-md-12 mb-3">
        <div class="card glass-card">
            <div class="card-header text-white" 
           style="background: linear-gradient(90deg, #9b59b6, #3498db);">
                <h5 class="mb-0">History Admin Terbaru</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($histories as $history)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>{{ $history->description }}</span>
                        <small class="text-muted">{{ $history->created_at->format('d M Y, H:i') }}</small>
                    </li>
                    @endforeach
                    @if($histories->isEmpty())
                    <li class="list-group-item text-center text-muted">Belum ada aktivitas terbaru</li>
                    @endif
                </ul>
                <div class="text-center mt-3">
                    <a href="{{ route('admin.history') }}" class="btn btn-purple">Lihat Semua History</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
{{-- Popup Flash Message --}}
@if (session('success'))
<div id="popup-success"
     class="fixed inset-0 flex items-center justify-center bg-black/40 z-50 opacity-0 pointer-events-none transition-opacity duration-500">
    <div class="bg-green-500 text-white px-8 py-6 rounded-lg shadow-lg text-center max-w-md w-full">
        <p class="text-lg font-semibold">{{ session('success') }}</p>
    </div>
</div>
@endif


<!-- Modal Info Admin Stylish -->
<div class="modal fade" id="adminInfoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow-lg border-0">

      <!-- Header -->
      <div class="modal-header p-3" style="background: linear-gradient(90deg, #6b21a8, #3b82f6); color: white;">
        <h5 class="modal-title"><i class="fa fa-user-circle me-2"></i>Info Admin</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body text-center py-5 px-5"> <!-- padding atas-bawah lebih lega -->

        <!-- Foto -->
        <img src="{{ $admin->profile_photo ? asset('storage/'.$admin->profile_photo) : 'https://ui-avatars.com/api/?name=' . $admin->full_name }}" 
             class="rounded-circle shadow-sm mb-4" width="120" height="120" style="object-fit: cover; border: 3px solid #6b21a8;">
        <h5 class="fw-bold mb-5">{{ $admin->full_name }}</h5>

        <!-- Info List -->
        <div class="list-group text-start">
          @php
            $iconColor = 'text-indigo-600';
            $items = [
              ['icon'=>'fa-user','label'=>'Username','value'=>$admin->username],
              ['icon'=>'fa-envelope','label'=>'Email','value'=>$admin->email ?? '-'],
              ['icon'=>'fa-phone','label'=>'Phone','value'=>$admin->phone ?? '-'],
              ['icon'=>'fa-calendar','label'=>'Tanggal Lahir','value'=>$admin->birth_date ?? '-'],
              ['icon'=>'fa-map-marker-alt','label'=>'Alamat','value'=>$admin->address ?? '-'],
            ];
          @endphp

          @foreach($items as $item)
            <div class="list-group-item d-flex justify-content-between align-items-center px-4 py-3 mb-3 rounded-3 shadow-sm hover-scale" 
                 style="transition: 0.2s; background-color:#f8f8ff;">
              <div class="d-flex align-items-center gap-3">
                <i class="fa {{ $item['icon'] }} {{ $iconColor }}"></i>
                <strong>{{ $item['label'] }}:</strong>
              </div>
              <div class="text-end flex-shrink-1" style="max-width:70%;">
                {{ $item['value'] }}
              </div>
            </div>
          @endforeach
        </div>

      </div>

      <!-- Footer -->
      <div class="modal-footer border-0 px-5 pb-4">
        <button class="btn fw-bold w-100" 
                style="background: linear-gradient(90deg, #6b21a8, #3b82f6); color:white;" 
                data-bs-toggle="modal" data-bs-target="#adminProfileModal" data-bs-dismiss="modal">
          <i class="fa fa-edit me-2"></i>Edit Info
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Modal Edit Admin Compact -->
<div class="modal fade" id="adminProfileModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 shadow-lg border-0">
      <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Header -->
        <div class="modal-header p-3" style="background: linear-gradient(90deg, #6b21a8, #3b82f6); color: white;">
          <h5 class="modal-title"><i class="fa fa-edit me-2"></i>Edit Info Admin</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>

        <!-- Body -->
        <div class="modal-body py-5 px-5">
          <div class="row g-4">

            <!-- Foto -->
            <div class="col-md-3 text-center">
              <img id="profilePreview" 
                   src="{{ $admin->profile_photo ? asset('storage/'.$admin->profile_photo) : 'https://ui-avatars.com/api/?name=' . $admin->full_name }}" 
                   class="rounded-circle shadow-sm mb-3" 
                   width="120" height="120" 
                   style="object-fit: cover; border: 3px solid #6b21a8;">
              <input type="file" name="profile_photo" class="form-control form-control-sm mt-2" onchange="previewProfilePhoto(event)">
            </div>

            <!-- Form Inputs -->
            <div class="col-md-9">
              <div class="row g-3">

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-bold">Nama Lengkap</label>
                  <input type="text" name="full_name" value="{{ $admin->full_name }}" class="form-control" placeholder="Masukkan nama lengkap">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-bold">Username</label>
                  <input type="text" value="{{ $admin->username }}" class="form-control bg-gray-200" disabled>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-bold">Email</label>
                  <input type="email" name="email" value="{{ $admin->email }}" class="form-control" placeholder="Masukkan email">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-bold">Nomor HP</label>
                  <input type="text" name="phone" value="{{ $admin->phone }}" class="form-control" placeholder="Masukkan nomor HP">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-bold">Tanggal Lahir</label>
                  <input type="date" name="birth_date" value="{{ $admin->birth_date }}" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label fw-bold">Alamat</label>
                  <input type="text" name="address" value="{{ $admin->address }}" class="form-control" placeholder="Masukkan alamat">
                </div>

              </div>
            </div>

          </div>
        </div>

        <!-- Footer -->
        <div class="modal-footer border-0 px-5 pb-4">
          <button type="submit" class="btn fw-bold w-100" 
                  style="background: linear-gradient(90deg, #6b21a8, #3b82f6); color:white;">
            <i class="fa fa-save me-2"></i>Simpan Perubahan
          </button>
        </div>

      </form>
    </div>
  </div>
</div>



<!-- Sidebar click -->
<a href="#" data-bs-toggle="modal" data-bs-target="#adminInfoModal">
  <img src="{{ $admin->profile_photo ? asset('storage/'.$admin->profile_photo) : 'https://ui-avatars.com/api/?name=' . $admin->full_name }}" class="rounded-circle" width="40" height="40">
</a>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif

<script>
function previewProfilePhoto(event) {
    var reader = new FileReader();
    reader.onload = function(){
        document.getElementById('profilePreview').src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

    <script>
        $(document).ready(function() {
            // Logout button
            $('#logoutBtn').on('click', function(e) {
                e.preventDefault();
                if (confirm('Apakah Anda yakin ingin logout?')) {
                    alert('Logout berhasil!');
                    // Redirect to login page
                    window.location.href = 'login.html';
                }
            });
        });
    </script>

<script>
// Count Up Animation
document.querySelectorAll('.count-up').forEach(el => {
    let count = 0;
    let target = parseInt(el.dataset.count);
    let step = Math.ceil(target / 100);
    let interval = setInterval(() => {
        count += step;
        if(count >= target) count = target;
        el.innerText = count;
        if(count >= target) clearInterval(interval);
    }, 15);
});

// Chart Statistik
const ctx = document.getElementById('statsChart').getContext('2d');
const statsChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'],
        datasets: [{
            label: 'Pengunjung',
            data: [12,19,14,18,20,15,25],
            borderColor: '#9b59b6',
            backgroundColor: 'rgba(155,89,182,0.2)',
            tension: 0.4,
            fill: true
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } }
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 350,
        dayMaxEvents: true,
        events: [
            { title: 'Meeting', start: new Date(), classNames: ['meeting'], extendedProps: { description: 'Team meeting jam 10:00' } },
            { title: 'Event Launch', start: new Date(new Date().setDate(new Date().getDate()+2)), classNames: ['event'], extendedProps: { description: 'Launching produk baru' } },
            { title: 'Deadline', start: new Date(new Date().setDate(new Date().getDate()+4)), classNames: ['deadline'], extendedProps: { description: 'Submit laporan bulanan' } }
        ],
        eventDidMount: function(info) {
            info.el.setAttribute('title', info.event.extendedProps.description);
        }
    });
    calendar.render();
});
</script>

<script>
const popupSuccess = document.getElementById('popup-success');
if(popupSuccess) {
    popupSuccess.style.opacity = 1;
    popupSuccess.style.pointerEvents = 'auto';
    setTimeout(() => {
        popupSuccess.style.opacity = 0;
        popupSuccess.style.pointerEvents = 'none';
    }, 3000);
}
</script>

<script>
// Sidebar toggle + overlay
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar');
    const overlay = document.querySelector('.sidebar-overlay');
    const toggleBtn = document.getElementById('sidebarToggle');

    if(toggleBtn && sidebar && overlay){
        toggleBtn.addEventListener('click', function() {
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        });

        overlay.addEventListener('click', function() {
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
    }
});

</script>

</body>
</html>