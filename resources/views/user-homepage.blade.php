<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f5efe7] font-sans min-h-screen flex flex-col">

  <!-- Top Navbar -->
  <header class="bg-[#134573CC] text-white flex justify-between items-center px-6 py-3 flex-none">
    <div class="flex items-center space-x-3">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Mandaluyong_seal.svg/1024px-Mandaluyong_seal.svg.png" alt="Logo1" class="w-10 h-10">
      <div class="w-10 h-10 rounded-full overflow-hidden">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&s" 
             alt="Logo2" 
             class="w-full h-full object-cover">
      </div>

      <div>
        <h1 class="text-lg font-bold leading-tight">Barangay Daang Bakal</h1>
        <p class="text-sm text-gray-200">Mandaluyong City</p>
      </div>
    </div>

    <div class="flex items-center space-x-5">
      <button class="relative hover:text-gray-200 transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="2" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.857 17.657A4.001 4.001 0 0112 19a4.001 4.001 0 01-2.857-1.343M5 8a7 7 0 1114 0c0 3.387 1.095 5.387 1.905 6.495A1 1 0 0120 16H4a1 1 0 01-.905-1.505C4.905 13.387 6 11.387 6 8z" />
        </svg>
        <span class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full"></span>
      </button>

      <!-- Profile icon -->
      <div id="profileIcon" class="bg-white text-[#2e5478] p-2 rounded-full hover:bg-gray-100 transition cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="2" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 9A3.75 3.75 0 1112 5.25 3.75 3.75 0 0115.75 9zM4.5 19.5a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
        </svg>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow flex flex-col items-center justify-center space-y-12 px-6 py-5">

 <!-- Welcome Section (centered but same text alignment) -->
<section class="w-full max-w-3xl bg-[#A2C4D9] rounded-3xl shadow-md py-4 px-6 border-2 border-[#134573CC] mx-auto">
  <h2 class="text-5xl font-bold text-[#1e2e3d]">Welcome, Juan Dela Cruz!</h2>
  <p class="text-black mt-1 font-lg">Access your barangay services quickly and easily here!</p>
  <div class="flex items-center gap-4 mt-1 text-gray-600 text-m flex-wrap">
    <div class="flex items-center gap-1 text-black">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c.6 0 1.1-.5 1.1-1.1S12.6 8.8 12 8.8s-1.1.5-1.1 1.1.5 1.1 1.1 1.1z"/>
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 6.075-9 12-9 12S3 16.075 3 10a9 9 0 1118 0z"/>
      </svg>
      <span class="text-xs">45-B Sen. Neptali Gonzales St. Brgy. Daang Bakal Mandaluyong City</span>
    </div>
    <div class="flex items-center gap-1 text-black">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11.5v.01M10 16h4M7 8h10a2 2 0 012 2v8H5v-8a2 2 0 012-2z"/>
      </svg>
      <span class="text-xs">RS-00001</span>
    </div>
  </div>
</section>

    <!-- Recent Activity (scrollable, 3 examples visible) -->
    <section class="w-full max-w-4xl bg-white shadow-md rounded-xl border p-6 overflow-y-auto" style="max-height: 250px;">
      <h3 class="flex items-center text-lg font-semibold text-[#1e2e3d] mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13m-13 6h13M3 6h.01M3 12h.01M3 18h.01"/>
        </svg>
        Recent Activity
      </h3>

      <div class="space-y-3">
        <div class="flex justify-between items-center bg-gray-100 p-4 rounded-md">
          <div>
            <p class="font-medium">Complaint - Noise Disturbance</p>
            <p class="text-xs text-gray-500">CMP-T9634 | Date Filed: 10/22/2025</p>
          </div>
          <span class="text-sm font-medium text-blue-600">In Progress</span>
        </div>

        <div class="flex justify-between items-center bg-gray-100 p-4 rounded-md">
          <div>
            <p class="font-medium">Document Request - Resident Certificate</p>
            <p class="text-xs text-gray-500">DOC-RC-17391 | Date Requested: 10/20/2025</p>
          </div>
          <span class="text-sm font-medium text-yellow-600">Pending</span>
        </div>

        <div class="flex justify-between items-center bg-gray-100 p-4 rounded-md">
          <div>
            <p class="font-medium">Document Request - Barangay Certificate</p>
            <p class="text-xs text-gray-500">DOC-BC-X2057 | Date Requested: 09/15/2025</p>
          </div>
          <span class="text-sm font-medium text-green-600">Completed</span>
        </div>

        <!-- Hidden items scrollable -->
        <div class="flex justify-between items-center bg-gray-100 p-4 rounded-md">
          <div>
            <p class="font-medium">Document Request - Barangay Clearance</p>
            <p class="text-xs text-gray-500">DOC-BCL-M4812 | Date Requested: 08/02/2025</p>
          </div>
          <span class="text-sm font-medium text-green-600">Completed</span>
        </div>
      </div>
    </section>


  <!-- Action Buttons -->
  <div class="flex justify-center gap-6">
    <button id="requestDocumentBtn" class="bg-[#A2C4D9] hover:bg-[#134573CC] text-[#1e2e3d] font-bold px-4 py-2 rounded-full shadow border-2 border-[#134573CC] text-sm transition duration-200">
      Request a Document →
    </button>
    <button class="bg-[#A2C4D9] hover:bg-[#134573CC] text-[#1e2e3d] font-bold px-4 py-2 rounded-full shadow border-2 border-[#134573CC] text-sm transition duration-200">
      File a Complaint →
    </button>
  </div>

  </main>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const profileIcon = document.getElementById('profileIcon');
      if (profileIcon) {
        profileIcon.addEventListener('click', () => {
          window.location.href = 'user-profile';
        });
      }

      const requestBtn = document.getElementById('requestDocumentBtn');
      if (requestBtn) {
        requestBtn.addEventListener('click', () => {
          window.location.href = 'user-document-request';
        });
      }
    });
  </script>

</body>
</html>
