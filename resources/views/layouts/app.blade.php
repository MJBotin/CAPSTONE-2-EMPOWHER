<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Barangay Daang Bakal</title>

  <!-- 1. Import both Poppins and Barlow Semi Condensed -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- UPDATED: Added Barlow Semi Condensed to the same link for efficiency -->
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- 2. Configure Tailwind with both font families -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            // 'sans' will remain the default font (Poppins)
            sans: ['Poppins', 'sans-serif'],
            // ADDED: A new 'barlow' utility for Barlow Semi Condensed
            barlow: ['Barlow Semi Condensed', 'sans-serif'],
          }
        }
      }
    }
  </script>

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100 bg-base-200 font-sans"> <!-- Poppins will be the default font for the whole page -->
  @yield('content')
</body>

</html>