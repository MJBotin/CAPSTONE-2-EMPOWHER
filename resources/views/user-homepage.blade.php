<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Homepage</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-[#f5efe7] font-sans min-h-screen flex flex-col" style="font-family: 'Poppins', sans-serif;">

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
        <h1  style="font-family: 'Barlow Semi Condensed', sans-serif;" class="text-lg font-bold leading-tight">Barangay Daang Bakal</h1>
        <p  style="font-family: 'Barlow Semi Condensed', sans-serif;" class="text-base font-bold leading-tight">Mandaluyong City</p>
      </div>
    </div>


    <!-- Notification Bell -->
 <div class="flex items-center space-x-5">
<div x-data="{ open: false }" class="relative">
  <!-- Bell Icon Button -->
  <button @click="open = !open" class="relative p-2 rounded-full hover:bg-gray-300">
    <!-- Bell Icon -->
    <svg xmlns="http://www.w3.org/2000/svg" 
         class="h-6 w-6 text-white-700" 
         fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 
           6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 
           6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 
           1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
    </svg>

    <!-- Red unread dot -->
    <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
  </button>

  <!-- Dropdown Panel -->
  <div
    x-show="open"
    @click.outside="open = false"
    class="absolute right-0 mt-3 w-80 bg-white shadow-lg rounded-xl border border-gray-100 overflow-hidden z-50">

    <div class="p-4 border-b">
      <h3 class="text-lg font-semibold text-gray-700">Notifications</h3>
    </div>

    <div class="max-h-96 overflow-y-auto">

      <!-- Notification Item -->
      <div class="p-4 border-b hover:bg-gray-50">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 flex items-center justify-center bg-yellow-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 8v4l3 3" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-800">
              Your complaint (CMP-T8634) has been received and is currently being processed.
            </p>
            <p class="text-xs text-gray-500 mt-1">Date Filed: 10/22/2025</p>
          </div>
        </div>
      </div>

      <!-- Another Item -->
      <div class="p-4 border-b hover:bg-gray-50">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-800">
              Your document request is pending. Please wait for admin approval.
            </p>
            <p class="text-xs text-gray-500 mt-1">Date Requested: 10/20/2025</p>
          </div>
        </div>
      </div>

      <!-- Completed Item -->
      <div class="p-4 hover:bg-gray-50">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 flex items-center justify-center bg-green-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600"
              fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-800">
              Your document request has been completed. You may now claim it.
            </p>
            <p class="text-xs text-gray-500 mt-1">Date Completed: 09/15/2025</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

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
<section class="w-full max-w-3xl bg-[#A2C4D9] rounded-3xl shadow-md py-3 px-5 border-2 border-[#134573CC] mx-auto">
  <h2 class="text-5xl font-bold text-[#1e2e3d]">Welcome, Juan Dela Cruz!</h2>
  <p class="text-black text-sm mt-1 font-"> Access your barangay services quickly and easily here!</p>
  <div class="flex items-center gap-4 mt-1 text-gray-600 text-m flex-wrap">
    <div class="flex items-center gap-1 text-black">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 11c.6 0 1.1-.5 1.1-1.1S12.6 8.8 12 8.8s-1.1.5-1.1 1.1.5 1.1 1.1 1.1z"/>
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 10c0 6.075-9 12-9 12S3 16.075 3 10a9 9 0 1118 0z"/>
      </svg>
      <span class="text-xs">45-B Sen. Neptali Gonzales St. Brgy. Daang Bakal Mandaluyong City</span>
    </div>
    <div class="flex items-center gap-0.5 text-black">
       <span class=" w-4 h-6" fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 28 28">✉</span>
       <span class="text-xs">RS-00001</span>       
    </div>
  </div>
</section>

    <!-- Recent Activity (scrollable, 3 examples visible) -->
    <section class="w-full max-w-4xl bg-white shadow-md rounded-xl border p-5 overflow-y-auto" style="max-height: 250px;">
      <h3 class="flex items-center text-base font-semibold text-[#1e2e3d] mb-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-700" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 6h13M8 12h13m-13 6h13M3 6h.01M3 12h.01M3 18h.01"/>
        </svg>
        Recent Activity
      </h3>

      <div class="space-y-1.5">
        <div class="flex justify-between items-center bg-gray-100 p-2.5 rounded-md">
          <div>
            <p class="font-normal text-sm">Complaint - Noise Disturbance</p>
            <p class="text-xs text-gray-500">CMP-T9634 | Date Filed: 10/22/2025</p>
          </div>
          <span class="text-sm font-normal text-blue-600">In Progress</span>
        </div>

        <div class="flex justify-between items-center bg-gray-100 p-2.5 rounded-md">
          <div>
            <p class="font-normal text-sm">Document Request - Resident Certificate</p>
            <p class="text-xs text-gray-500">DOC-RC-17391 | Date Requested: 10/20/2025</p>
          </div>
          <span class="text-sm font-medium text-yellow-600">Pending</span>
        </div>

        <div class="flex justify-between items-center bg-gray-100 p-2.5 rounded-md">
          <div>
            <p class="font-normal text-sm">Document Request - Barangay Certificate</p>
            <p class="text-xs text-gray-500">DOC-BC-X2057 | Date Requested: 09/15/2025</p>
          </div>
          <span class="text-sm font-medium text-green-600">Completed</span>
        </div>

        <!-- Hidden items scrollable -->
        <div class="flex justify-between items-center bg-gray-100 p-2.5 rounded-md">
          <div>
            <p class="font-normal text-sm">Document Request - Barangay Clearance</p>
            <p class="text-xs text-gray-500">DOC-BCL-M4812 | Date Requested: 08/02/2025</p>
          </div>
          <span class="text-sm font-medium text-green-600">Completed</span>
        </div>
      </div>
    </section>


 <!-- Action Buttons -->
<div class="flex justify-center gap-6 mt-4 flex-wrap">
  <button id="requestDocumentBtn" 
    class="bg-[#A2C4D9] hover:bg-[#134573CC] text-[#1e2e3d] font-bold px-4 py-2 rounded-full shadow border-2 border-[#134573CC] text-sm transition duration-200 w-60 h-10">
    Request a Document →
  </button>

  <button id="fileComplaintBtn" 
    class="bg-[#A2C4D9] hover:bg-[#134573CC] text-[#1e2e3d] font-bold px-4 py-2 rounded-full shadow border-2 border-[#134573CC] text-sm transition duration-200 w-60 h-10">
    File a Complaint →
  </button>
</div>


  </main>















   <!-- =============================== -->
  <!-- JavaScript -->
  <!-- =============================== -->
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

       const fileComplaintBtn = document.getElementById('fileComplaintBtn');
      if (fileComplaintBtn) {
        fileComplaintBtn.addEventListener('click', () => {
          window.location.href = 'user-complaint';
        });
      }

    });
  
  </script>

</body>
</html>
