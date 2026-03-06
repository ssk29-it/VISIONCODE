<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - BK Care SMK Budi Bakti Ciwidey</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- Google Font: Plus Jakarta Sans -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    * {
      font-family: "Plus Jakarta Sans", sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: radial-gradient(circle at 0% 0%, rgba(79, 141, 184, 0.12) 0%, transparent 60%),
                  radial-gradient(circle at 100% 0%, rgba(111, 174, 217, 0.12) 0%, transparent 60%),
                  radial-gradient(circle at 100% 100%, rgba(79, 141, 184, 0.1) 0%, transparent 60%),
                  radial-gradient(circle at 0% 100%, rgba(111, 174, 217, 0.1) 0%, transparent 60%),
                  linear-gradient(145deg, #f8fcff 0%, #f0f7fc 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow-y: auto;
      padding: 20px;
    }

    .glass-card {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.6);
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

    .floating {
      animation: float 8s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-15px) rotate(0.5deg); }
    }

    .floating-slow {
      animation: float-slow 12s ease-in-out infinite;
    }

    @keyframes float-slow {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-10px) rotate(-0.5deg); }
    }

    .login-input {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.6);
      transition: all 0.3s ease;
    }

    .login-input:focus {
      background: white;
      border-color: #4F8DB8;
      box-shadow: 0 0 0 3px rgba(79, 141, 184, 0.2);
      outline: none;
    }

    /* Background elements*/
    .bg-elements {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      pointer-events: none;
      z-index: 0;
    }

    /* Animasi modal */
    @keyframes fadeInScale {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .animate-fadeInScale {
      animation: fadeInScale 0.25s ease-out forwards;
    }

    /* Style kontak card */
    .contact-card {
      background: linear-gradient(135deg, #f0f9ff 0%, #e6f0fa 100%);
      border: 1px solid rgba(79, 141, 184, 0.3);
    }
  </style>
</head>

<body class="font-sans relative">

<!-- DECORATIVE BACKGROUND ELEMENTS -->
<div class="bg-elements overflow-hidden pointer-events-none">
  <div class="absolute top-20 left-10 w-96 h-96 bg-[#4F8DB8]/20 rounded-full blur-3xl floating"></div>
  <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-[#6FAED9]/20 rounded-full blur-3xl floating-slow" style="animation-delay: -3s"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-[#4F8DB8]/10 to-[#6FAED9]/10 rounded-full blur-3xl"></div>
  <div class="absolute top-40 right-20 w-32 h-32 border-8 border-[#4F8DB8]/10 rounded-full"></div>
  <div class="absolute bottom-40 left-20 w-48 h-48 border-8 border-[#6FAED9]/10 rounded-full"></div>
  <div class="absolute top-60 left-1/4 w-16 h-16 border-4 border-[#17235b]/10 rounded-full floating-slow"></div>
</div>

<!-- BACKGROUND IMAGE DENGAN OVERLAY GLASS -->
<div class="fixed inset-0 -z-10 pointer-events-none">
  <img src="img/gambar1.jpg" class="w-full h-full object-cover" onerror="this.style.display='none'" alt="background" />
  <div class="absolute inset-0 bg-gradient-to-br from-[#17235b]/80 via-[#1e3a5f]/70 to-[#2a4a7a]/80 backdrop-blur-sm"></div>
</div>

<!-- MAIN CARD LOGIN -->
<div class="relative z-10 max-w-5xl w-full my-8">
  
  <!-- GLOW EFFECT -->
  <div class="absolute -inset-1 bg-gradient-to-r from-[#4F8DB8]/40 to-[#6FAED9]/40 rounded-3xl blur-xl opacity-70"></div>
  
  <!-- MAIN CARD -->
  <div class="relative glass-card-deep rounded-3xl overflow-hidden shadow-2xl border border-white/30">
    
    <div class="flex flex-col md:flex-row">
      
      <!-- ===== LEFT: FORM LOGIN ===== -->
      <div class="w-full md:w-1/2 p-8 lg:p-10 flex flex-col justify-center bg-white/90 backdrop-blur-md">
        
        <!-- LOGO & IDENTITAS SMK -->
        <div class="flex items-center gap-3 mb-6">
          <div class="relative group">
            <div class="absolute -inset-2 bg-gradient-to-r from-[#4F8DB8]/30 to-[#6FAED9]/30 rounded-full blur-xl opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <img src="img/LOGO BK.png" class="h-12 w-auto relative z-10" onerror="this.src='https://via.placeholder.com/120x48/17235b/ffffff?text=BK+CARE'" alt="BK Care Logo" />
          </div>
          <div class="flex flex-col">
            <span class="bg-yellow-400/20 text-[#17235b] text-[10px] px-2 py-1 rounded-full border border-yellow-400/50">
              SMK Budi Bakti Ciwidey
            </span>
          </div>
        </div>
        
        <div class="mb-6">
          <h2 class="text-2xl md:text-3xl font-extrabold text-[#17235b] mb-2">
            <span class="text-gradient">Selamat Datang</span>
          </h2>
          <p class="text-sm text-gray-600">
            Isi username dan password untuk masuk ke sistem BK Care Kami.
          </p>
        </div>
        
        <!-- FORM LOGIN -->
        <form method="POST" action="/login" class="space-y-4">
          @csrf
          <!-- Username -->
          <div class="space-y-1">
            <label class="text-xs font-semibold text-gray-700 uppercase tracking-wider flex items-center gap-1">
              <i class="fa-solid fa-id-card text-[#4F8DB8]"></i> USERNAME
            </label>
            <div class="relative group">
              <div class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300"></div>
              <div class="relative">
                <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-[#4F8DB8] text-sm"></i>
                <input
                  id="username"
                  type="text"
                  name="username"
                  placeholder="Masukkan Username"
                  class="login-input w-full pl-11 pr-4 py-3 rounded-lg text-gray-700 placeholder-gray-400 outline-none transition-all"
                />
              </div>
            </div>
          </div>

          <!-- Password -->
          <div class="space-y-1">
            <label class="text-xs font-semibold text-gray-700 uppercase tracking-wider flex items-center gap-1">
              <i class="fa-solid fa-lock text-[#4F8DB8]"></i> PASSWORD
            </label>
            <div class="relative group">
              <div class="absolute -inset-0.5 bg-gradient-to-r from-[#4F8DB8] to-[#6FAED9] rounded-lg blur opacity-30 group-hover:opacity-50 transition duration-300"></div>
              <div class="relative">
                <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-[#4F8DB8] text-sm"></i>
                <input
                  id="password"
                  type="password"
                  name="password"
                  placeholder="Masukkan Password"
                  class="login-input w-full pl-11 pr-12 py-3 rounded-lg text-gray-700 placeholder-gray-400 outline-none transition-all"
                />
                <button
                  type="button"
                  id="togglePassword"
                  class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-500 hover:text-[#4F8DB8] transition-colors"
                >
                  <i id="iconEye" class="fa-solid fa-eye"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Forgot Password -->
          <div class="flex justify-end">
            <a href="javascript:void(0)" onclick="openForgotModal()" class="text-xs text-[#4F8DB8] hover:text-[#17235b] font-medium hover:underline transition flex items-center gap-1">
              <i class="fa-regular fa-circle-question"></i> Lupa password?
            </a>
          </div>

          <!-- Login Button -->
          <button
            type="submit"
            class="relative overflow-hidden group w-full bg-gradient-to-r from-[#17235b] to-[#2a3a7a] text-white font-bold py-3 px-6 rounded-lg hover:shadow-2xl hover:shadow-[#17235b]/30 transition-all duration-300 hover:scale-[1.02] flex items-center justify-center gap-2"
          >
            <span class="relative z-10 flex items-center gap-2">
              <i class="fa-solid fa-arrow-right-to-bracket"></i>
              LOGIN
            </span>
            <span class="absolute inset-0 -translate-x-full bg-gradient-to-r from-transparent via-white/40 to-transparent group-hover:translate-x-full transition-transform duration-700"></span>
          </button>

          <!-- Back to Home Button -->
          <a
            href="{{ url('/') }}"
            class="flex items-center justify-center gap-2 w-full border border-gray-300 bg-white/80 backdrop-blur-sm text-gray-700 hover:bg-gray-100 hover:border-[#4F8DB8] hover:text-[#4F8DB8] py-3 px-6 rounded-lg font-semibold transition-all duration-300 group"
          >
            <i class="fa-solid fa-house transition-transform duration-300 group-hover:-translate-y-1"></i>
            KEMBALI KE BERANDA
          </a>
        </form>


        {{-- error username --}}
        <script>
const form = document.querySelector("form");
const username = document.getElementById("username");
const password = document.getElementById("password");

form.addEventListener("submit", function(e){

    let valid = true;

    if(username.value.trim() === ""){
        e.preventDefault();
        username.value = "";
        username.placeholder = "Username wajib diisi!";
        username.classList.add("border", "border-red-500");
        valid = false;
    }

    if(password.value.trim() === ""){
        e.preventDefault();
        password.value = "";
        password.placeholder = "Password wajib diisi!";
        password.classList.add("border", "border-red-500");
        valid = false;
    }

});


username.addEventListener("input", function(){
    username.placeholder = "Masukkan Username";
    username.classList.remove("border", "border-red-500");
});

password.addEventListener("input", function(){
    password.placeholder = "Masukkan Password";
    password.classList.remove("border", "border-red-500");
});
</script>

        <!-- Divider -->
        <div class="relative my-6">
          <div class="absolute inset-0 flex items-center">
            <div class="w-full border-t border-gray-200"></div>
          </div>
          <div class="relative flex justify-center text-xs">
            <span class="px-4 bg-white/90 backdrop-blur-sm text-gray-500">Layanan Khusus SMK Budi Bakti Ciwidey</span>
          </div>
        </div>

        <!-- Info Gratis -->
        <div class="bg-emerald-50/80 backdrop-blur-sm border border-emerald-200 rounded-xl p-3 flex items-start gap-3">
          <div class="w-8 h-8 bg-emerald-100 rounded-full flex items-center justify-center flex-shrink-0">
            <i class="fa-solid fa-gift text-emerald-600"></i>
          </div>
          <div>
            <p class="text-xs font-bold text-emerald-700">GRATIS 100% UNTUK SISWA</p>
            <p class="text-xs text-gray-600 mt-0.5">Seluruh layanan konseling tidak dipungut biaya. Gunakan NISN/NIPD untuk login.</p>
          </div>
        </div>
      </div>

      <!-- RIGHT: WELCOME CARD  -->
      <div class="w-full md:w-1/2 relative flex flex-col justify-center items-center p-8 lg:p-10 overflow-hidden min-h-[500px] md:min-h-full">
        <!-- Background Image -->
        <div class="absolute inset-0">
          <img src="img/gambar2.jpg" class="w-full h-full object-cover" onerror="this.style.display='none'" alt="background" />
          <div class="absolute inset-0 bg-gradient-to-br from-[#17235b]/90 via-[#1e3a5f]/85 to-[#2a4a7a]/90"></div>
          
          <!-- Decorative Elements -->
          <div class="absolute top-20 left-10 w-40 h-40 bg-[#4F8DB8]/30 rounded-full blur-3xl"></div>
          <div class="absolute bottom-20 right-10 w-60 h-60 bg-[#6FAED9]/30 rounded-full blur-3xl"></div>
          <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-white text-center w-full max-w-xs">
          <!-- Logo SMK -->
          <div class="flex justify-center mb-6">
            <div class="w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-500 rounded-2xl flex items-center justify-center shadow-2xl transform rotate-3 hover:rotate-6 transition-transform">
              <span class="text-[#17235b] font-bold text-3xl">SMK</span>
            </div>
          </div>

          <h2 class="text-2xl md:text-3xl font-extrabold mb-3">
            <span class="text-white">SMK Budi Bakti</span>
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-100">Ciwidey</span>
          </h2>

          <div class="w-20 h-1 bg-gradient-to-r from-yellow-400 to-yellow-500 mx-auto my-5 rounded-full"></div>

          <p class="text-white/90 text-sm leading-relaxed mb-6">
            "Ruang aman dan nyaman untuk berbagi cerita, mengatasi stres akademik, PKL, dan persiapan karir masa depanmu."
          </p>

          <!-- Badge Layanan -->
          <div class="flex flex-wrap gap-2 justify-center mb-6">
            <span class="bg-white/20 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold border border-white/30">
              <i class="fa-regular fa-clock mr-1"></i> 24/7 Online
            </span>
            <span class="bg-yellow-400/30 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold border border-yellow-400/50 text-yellow-100">
              <i class="fa-regular fa-building mr-1"></i> Offline
            </span>
            <span class="bg-emerald-500/30 backdrop-blur-sm px-3 py-1.5 rounded-full text-xs font-semibold border border-emerald-500/50">
              <i class="fa-regular fa-gift mr-1"></i> GRATIS
            </span>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-2 bg-white/10 backdrop-blur-sm rounded-xl p-3 border border-white/20">
            <div class="text-center">
              <div class="text-lg font-bold text-white">1.247</div>
              <div class="text-[10px] text-white/70 uppercase tracking-wider">Siswa</div>
            </div>
            <div class="text-center">
              <div class="text-lg font-bold text-white">8</div>
              <div class="text-[10px] text-white/70 uppercase tracking-wider">Konselor</div>
            </div>
            <div class="text-center">
              <div class="text-lg font-bold text-white">98%</div>
              <div class="text-[10px] text-white/70 uppercase tracking-wider">Puas</div>
            </div>
          </div>

          <!-- Contact -->
          <div class="mt-6 text-xs text-white/70 flex items-center justify-center gap-2">
            <i class="fa-solid fa-location-dot text-yellow-300"></i>
            Jl. Babakan Tiga No.82, Ciwidey
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer Copyright -->
  <div class="text-center mt-6 text-xs text-white/80">
    © 2026 BK Care for School Life — VISIONCODE. All rights reserved.
  </div>
</div>

<!-- MODAL LUPA PASSWORD -->
<div id="forgotModal" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden items-center justify-center z-50 p-4">
  <!-- Modal container dengan animasi -->
  <div class="bg-white rounded-3xl shadow-2xl w-full max-w-md overflow-hidden relative animate-fadeInScale border border-white/30">
    
    <!-- Header modal -->
    <div class="bg-gradient-to-r from-[#17235b] to-[#2a4a7a] px-6 py-5 flex justify-between items-center">
      <div class="flex items-center gap-3">
        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
          <i class="fa-solid fa-key text-white text-lg"></i>
        </div>
        <h3 class="text-white font-bold text-lg">Lupa Password?</h3>
      </div>
      <button onclick="closeForgotModal()" class="text-white/80 hover:text-white bg-white/10 hover:bg-white/20 w-8 h-8 rounded-full transition-colors flex items-center justify-center">
        <i class="fa-solid fa-xmark text-xl"></i>
      </button>
    </div>
    
    <!-- Body modal -->
    <div class="p-6">
      <!-- Pesan informasi -->
      <p class="text-gray-600 text-sm mb-5 flex items-start gap-2">
        <i class="fa-regular fa-circle-question text-[#4F8DB8] text-base mt-0.5"></i>
        <span>Tidak perlu khawatir! Hubungi admin sekolah melalui kontak di bawah ini untuk mereset password akun BK Care kamu.</span>
      </p>
      
      <!-- Kartu kontak admin -->
      <div class="contact-card rounded-xl p-4 mb-5 shadow-sm">
        <div class="flex items-center gap-3 mb-3">
          <div class="w-10 h-10 bg-[#4F8DB8]/20 rounded-full flex items-center justify-center">
            <i class="fa-solid fa-user-tie text-[#17235b]"></i>
          </div>
          <div>
            <p class="text-xs text-gray-500">Admin BK</p>
            <p class="font-semibold text-[#17235b]">Bapak/Ibu Dewi Lestari</p>
          </div>
        </div>
        
        <!-- WA dan Telepon -->
        <div class="grid grid-cols-2 gap-2">
          <a href="https://wa.me/6281234567890" target="_blank" class="flex items-center gap-2 bg-white/70 p-2 rounded-lg border border-green-200 hover:bg-green-50 transition-colors group">
            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-green-600 group-hover:bg-green-200">
              <i class="fa-brands fa-whatsapp"></i>
            </div>
            <div class="text-left">
              <p class="text-[10px] text-gray-500">WhatsApp</p>
              <p class="text-xs font-semibold text-gray-800">0812-3456-7890</p>
            </div>
          </a>
          <a href="tel:+6281234567890" class="flex items-center gap-2 bg-white/70 p-2 rounded-lg border border-blue-200 hover:bg-blue-50 transition-colors group">
            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 group-hover:bg-blue-200">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="text-left">
              <p class="text-[10px] text-gray-500">Telepon</p>
              <p class="text-xs font-semibold text-gray-800">0812-3456-7890</p>
            </div>
          </a>
        </div>
        
        <!-- Email admin -->
        <div class="mt-3 pt-3 border-t border-dashed border-[#4F8DB8]/30 flex items-center gap-2">
          <i class="fa-regular fa-envelope text-[#4F8DB8]"></i>
          <span class="text-xs text-gray-600">bk.smkbudibakti@sch.id</span>
          <button onclick="copyEmail()" class="ml-auto text-[#4F8DB8] hover:text-[#17235b] text-xs bg-white/80 px-2 py-1 rounded-full border border-[#4F8DB8]/30 transition" title="Salin email">
            <i class="fa-regular fa-copy mr-1"></i> Salin
          </button>
        </div>
      </div>
      
      <!-- Informasi tambahan -->
      <div class="bg-amber-50 border border-amber-200 rounded-xl p-3 flex gap-2">
        <i class="fa-regular fa-clock text-amber-600 text-sm mt-0.5"></i>
        <div>
          <p class="text-xs font-medium text-amber-800">Jam layanan admin: 07.30 - 15.30 WIB</p>
          <p class="text-xs text-amber-700/80 mt-1">Reset password biasanya diproses dalam 1x24 jam.</p>
        </div>
      </div>
    </div>
    
    <!-- Footer modal -->
    <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-end">
      <button onclick="closeForgotModal()" class="px-6 py-2 bg-gradient-to-r from-[#17235b] to-[#2a4a7a] text-white rounded-full text-sm font-semibold hover:shadow-lg transition-all hover:scale-[1.02]">
        Mengerti, Tutup
      </button>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
  // Toggle password visibility
  const toggle = document.getElementById("togglePassword");
const passwordInput = document.getElementById("password");
const icon = document.getElementById("iconEye");

if (toggle && passwordInput && icon) {
  toggle.addEventListener("click", () => {
    const show = passwordInput.type === "password";
    passwordInput.type = show ? "text" : "password";
    icon.className = show ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
  });
}

  // Modal functions
  const modal = document.getElementById("forgotModal");

  function openForgotModal() {
    modal.classList.remove("hidden");
    modal.classList.add("flex");
  }

  function closeForgotModal() {
    modal.classList.add("hidden");
    modal.classList.remove("flex");
  }

  // email function
  function copyEmail() {
    const email = "bk.smkbudibakti@sch.id";
    navigator.clipboard.writeText(email).then(() => {
      // Show feedback
      alert("Email berhasil disalin: " + email);
    }).catch(err => {
      console.error("Gagal menyalin email: ", err);
    });
  }

  // Close modal 
  window.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeForgotModal();
    }
  });
</script>

{{-- POP UP USERNAME SALAH --}}
@if ($errors->any())
<div id="errorModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50">
  <div class="bg-white rounded-2xl shadow-2xl p-6 w-[90%] max-w-sm text-center relative">
    
    <div class="w-14 h-14 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
      <i class="fa-solid fa-circle-xmark text-red-500 text-2xl"></i>
    </div>

    <h3 class="text-lg font-bold text-red-600 mb-2">
      Login Gagal
    </h3>

    <p class="text-sm text-gray-600 mb-4">
      {{ $errors->first() }}
    </p>

    <button onclick="closeErrorModal()" 
      class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg font-semibold transition">
      Coba Lagi
    </button>
  </div>
</div>
@endif

<script>
document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("errorModal");

    if (modal) {
        setTimeout(() => {
            modal.style.opacity = "0";
            modal.style.transition = "opacity 0.5s ease";

            setTimeout(() => {
                modal.style.display = "none";
            }, 500);

        }, 2000);
    }
});
</script>

{{-- POP UP WAJIB LOGIN --}}
@if(session('error'))
<div id="toast-wrapper"
     class="fixed inset-0 flex items-center justify-center bg-black/20 backdrop-blur-sm z-50">

    <div id="toast"
         class="bg-white w-[90%] max-w-sm rounded-xl shadow-lg p-5 transform scale-95 opacity-0 transition-all duration-200 ease-out border border-red-200">

        <div class="flex items-start gap-3">
            <div class="flex-shrink-0">
                <div class="w-8 h-8 flex items-center justify-center rounded-full bg-red-50 text-red-600 text-sm">
                    ⚠️
                </div>
            </div>
            <div class="flex-1 min-w-0">
                <h3 class="text-sm font-semibold text-red-700 mb-0.5">
                    AKSES DITOLAK!!
                </h3>
                <p class="text-xs text-red-600/80 leading-relaxed">
                    {{ session('error') }}
                </p>
            </div>
        </div>

        <div class="flex justify-end gap-2 mt-4">
            <button onclick="closeToast()"
               class="px-3 py-1.5 text-xs font-medium bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                TUTUP
            </button>
        </div>
    </div>
</div>

<script>
    const toast = document.getElementById('toast');
    const wrapper = document.getElementById('toast-wrapper');

    // animasi masuk
    setTimeout(() => {
        toast.classList.remove('scale-95', 'opacity-0');
        toast.classList.add('scale-100', 'opacity-100');
    }, 10);

    // auto close
    const timer = setTimeout(() => {
        closeToast();
    }, 4000);

    function closeToast() {
        clearTimeout(timer);
        toast.classList.add('scale-95', 'opacity-0');
        setTimeout(() => {
            if (wrapper) wrapper.remove();
        }, 200);
    }

    // click outside to close
    wrapper.addEventListener('click', function(e) {
        if (e.target === wrapper) {
            closeToast();
        }
    });
</script>
@endif

{{-- POP UP BERHASIL LOG OUT --}}
@if(session('success'))
<div id="toast-wrapper"
     class="fixed inset-0 flex items-center justify-center bg-black/40 backdrop-blur-sm z-50">

    <div id="toast"
         class="bg-white w-[90%] max-w-sm rounded-2xl shadow-2xl p-6 text-center transform scale-95 opacity-0 transition-all duration-300">

        <div class="flex justify-center mb-3">
            <div class="w-12 h-12 flex items-center justify-center rounded-full bg-green-100 text-green-600 text-2xl">
                ✅
            </div>
        </div>

        <h2 class="text-lg font-bold text-gray-800 mb-1">
            Berhasil Logout
        </h2>

        <p class="text-sm text-gray-500">
            {{ session('success') }}
        </p>
    </div>
</div>

<script>
    const toast = document.getElementById('toast');
    const wrapper = document.getElementById('toast-wrapper');

    setTimeout(() => {
        toast.classList.remove('scale-95', 'opacity-0');
        toast.classList.add('scale-100', 'opacity-100');
    }, 50);

    setTimeout(() => {
        toast.classList.add('scale-95', 'opacity-0');
        setTimeout(() => wrapper.remove(), 300);
    }, 2500);
</script>
@endif

</body>
</html>