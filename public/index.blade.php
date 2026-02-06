<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Galeri Carousel - Tasty Food Admin</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
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
            <div class="topbar">
                <h4 class="mb-0">Kelola Carousel</h4>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('admin.galeri.carousel.create') }}" class="btn btn-purple">
                    <i class="fas fa-plus me-1"></i> Tambah Foto
                </a>
            </div>

            <div class="row g-4">
                @forelse($carousels as $carousel)


                
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/'.$carousel->image) }}" class="card-img-top" style="height:200px;" alt="Foto Galeri">
                            <div class="card-body d-flex flex-column justify-content-end">
                                <div class="action-buttons mt-2 d-flex justify-content-between">
                                    <a href="{{ route('admin.galeri.carousel.edit', $carousel->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit me-1"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="showDeleteModal('{{ route('admin.galeri.carousel.destroy', $carousel->id) }}')">
                                        <i class="fas fa-trash me-1"></i> Hapus
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            Belum ada foto carousel.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>


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

<!-- Modal Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title"><i class="fas fa-trash me-2"></i>Konfirmasi Hapus</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin menghapus foto galeri ini? Aksi ini tidak bisa dibatalkan.
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <form id="deleteForm" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // Logout
        $('#logoutBtn').on('click', function(e){
            e.preventDefault();
            if(confirm('Apakah Anda yakin ingin logout?')){
                alert('Logout berhasil!');
                window.location.href = 'login.html';
            }
        });

        // Search
        $('#searchButton').on('click', function(){
            const searchTerm = $('#searchInput').val();
            if(searchTerm) alert('Melakukan pencarian: ' + searchTerm);
        });
        $('#searchInput').on('keypress', function(e){
            if(e.which === 13) $('#searchButton').click();
        });

        // Delete Modal
        function showDeleteModal(actionUrl){
            const deleteForm = document.getElementById('deleteForm');
            deleteForm.action = actionUrl;
            const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }

        // SweetAlert2 Notifikasi
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Sukses!',
                    text: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 2000,
                    timerProgressBar: true,
                    position: 'center'
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'error',
                    title: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
            @endif
        });
    </script>
</body>
</html>
