<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
    body { }
    .fade-in { animation: fadeIn 0.3s ease-in-out; }
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 relative"> 

  <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
       style="background-image: url('https://media.karousell.com/media/photos/products/2025/3/4/lot_for_sale_in_barangay_daang_1741074654_b1a72035');">
    <div class="absolute inset-0 bg-white/70"></div> 
  </div>

  <div class="relative z-20 flex flex-col md:flex-row w-full max-w-4xl rounded-3xl overflow-hidden shadow-2xl border border-white/20 backdrop-blur-md bg-white/10">

    <div class="hidden md:flex md:w-1/2 relative">
      <img src="https://mir-s3-cdn-cf.behance.net/projects/404/a2e3f3195425217.Y3JvcCwyMzAxLDE4MDAsNDUwLDA.jpg"  alt="Left Background" class="absolute inset-0 w-full h-full object-cover" />
      <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/50 to-black/60"></div>
      <div class="relative z-10 p-8 text-center text-white flex flex-col justify-center items-center">
        <h1 class="text-3xl font-bold mb-3 tracking-wide">Welcome Back!</h1>
        <p class="text-base opacity-80 leading-relaxed">
          Sign in to continue accessing seamless document requests and efficient service management.
        </p>
      </div>
    </div>

    <div class="w-full md:w-1/2 p-8" style="background-color: #F7F2EB;"> 
      <h2 class="text-2xl font-bold text-center mb-5 text-gray-900">Login</h2>

      <form id="loginForm" action="{{ route('login.post') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label for="username" class="block text-gray-700 mb-1 font-medium text-sm">Username or Email</label>
          <input type="text" id="username" name="username" placeholder="Enter your username or email" required
            class="w-full border border-gray-300 rounded-xl px-3 py-2.5 text-[#00000080]
                   focus:outline-none focus:ring-4 focus:ring-blue-200 focus:border-blue-500 transition duration-150" />
        </div>

                <div>
        <label for="password" class="block text-gray-700 mb-1 font-medium text-sm">Password</label>
        <div class="relative">
            <input type="password" id="password" name="password" placeholder="••••••••" required
                 class="w-full border border-gray-300 rounded-xl px-3 py-2.5 pr-10 text-[#00000080] 
                    focus:outline-none focus:ring-4 focus:ring-blue-200 focus:border-blue-500 transition duration-150" />
            <button type="button" id="togglePassword" 
            class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 transition">
            👁
            </button>
        </div>
        </div>

        <button type="submit"
          class="w-full py-2.5 rounded-xl font-semibold shadow-md hover:bg-blue-700
                 focus:outline-none focus:ring-4 focus:ring-blue-300 transition transform hover:scale-[1.02] active:scale-[0.98]"
          style="background-color: #A2C4D9C7; color: #000000;"> 
          Sign In
        </button>

        <p class="text-center text-[#00000080] text-sm mt-4 pt-3 border-t border-gray-200">
          Don’t have an account? 
          <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-600 font-semibold hover:underline transition duration-150">
            Create one
          </a>
        </p>

        <p class="text-center mt-3 text-sm">
          <a href="{{ url('/') }}" class="text-[#00000080] hover:text-gray-900 hover:underline transition duration-150">
            &larr; Back to Home
          </a>
        </p>
      </form>
    </div>
  </div>

  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', () => {
      const type = passwordInput.type === 'password' ? 'text' : 'password';
      passwordInput.type = type;
      togglePassword.textContent = type === 'password' ? '👁' : '🙈';
    });
  </script>

</body>
</html>
