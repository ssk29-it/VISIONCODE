<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="flex items-center justify-center min-h-screen relative font-sans">

  <!-- Background -->
  <div class="absolute inset-0">
    <img src="{{ asset('img/gambar1.jpg') }}" class="w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm"></div>
  </div>

  <!-- Card -->
  <div class="relative bg-gray-200 rounded-3xl shadow-2xl flex flex-col md:flex-row overflow-hidden max-w-4xl w-full mx-4">

    <!-- LEFT: LOGIN -->
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
      <h2 class="text-2xl font-bold mb-6 text-center">LOGIN</h2>

      <!-- FORM DUMMY -->
      <form class="space-y-4">

        <!-- Username -->
        <div class="relative">
          <i class="fa-solid fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-600"></i>
          <input type="text" placeholder="Username"
                 class="w-full pl-10 pr-4 py-2 rounded-lg border focus:ring-2 focus:ring-gray-500 outline-none">
        </div>

        <!-- Password -->
        <div class="relative">
          <i class="fa-solid fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-600"></i>
          <input id="password" type="password" placeholder="Password"
                 class="w-full pl-10 pr-10 py-2 rounded-lg border focus:ring-2 focus:ring-gray-500 outline-none">

          <button type="button" id="togglePassword"
                  class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-600">
            <i id="iconEye" class="fa-solid fa-eye"></i>
          </button>
        </div>

        <a href="#" class="text-sm text-blue-600 hover:underline block text-right">
          Forgot password?
        </a>

        <button type="button"
                class="w-full bg-gray-600 hover:bg-gray-800 text-white py-2 rounded-lg font-semibold transition">
          LOGIN
        </button>

        <a href="{{ url('/dashboardadmin') }}"
           class="w-full flex items-center justify-center gap-2 border border-gray-500 text-gray-700
                  hover:bg-gray-400 hover:text-black py-2 rounded-lg font-semibold transition">
          <i class="fa-solid fa-house"></i>
          BACK TO HOME
        </a>
      </form>
    </div>

    <!-- RIGHT: REGISTER INFO -->
    <div class="w-full md:w-1/2 relative flex flex-col justify-center items-center p-10 overflow-hidden">
      <img src="{{ asset('img/gambar2.jpg') }}" class="absolute inset-0 w-full h-full object-cover" />
      <div class="absolute inset-0 bg-black/50"></div>

      <div class="relative text-white text-center">
        <h2 class="text-3xl font-bold mb-2">Hello, Welcome!</h2>
      
      </div>
    </div>

  </div>

  <!-- JS: Toggle Password -->
  <script>
    const toggle = document.getElementById('togglePassword');
    const password = document.getElementById('password');
    const icon = document.getElementById('iconEye');

    toggle.addEventListener('click', () => {
      const show = password.type === 'password';
      password.type = show ? 'text' : 'password';
      icon.className = show ? 'fa-solid fa-eye-slash' : 'fa-solid fa-eye';
    });
  </script>

</body>
</html>
