<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Super Admin User Feature</title>
  <script src="https://cdn.tailwindcss.com"></script>
   <script src="//unpkg.com/alpinejs" defer></script>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body class="bg-[#f6f3ee] font-sans" style="font-family: 'Poppins', sans-serif;">

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

    <!-- Profile icon with an ID added -->
    <div id="profileIcon" class="bg-white text-[#2e5478] p-2 rounded-full hover:bg-gray-100 transition cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
           stroke-width="2" stroke="currentColor" class="w-5 h-5">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M15.75 9A3.75 3.75 0 1112 5.25 3.75 3.75 0 0115.75 9zM4.5 19.5a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
      </svg>
    </div>
  </div>
</header>

  <div class="flex">
    <!-- SIDEBAR -->
    <aside class="w-55 bg-[#B7CCDB] h-screen p-4 text-[14px] font-bold">
      <div class="flex items-center justify-between px-1 mb-6 text-xl">
        <span class="cursor-pointer">...</span>
        <div class="flex space-x-2">
          <span class="cursor-pointer" img src="c:\Users\Blessie\Downloads\f2f7199a83c321abf14c0cb792f36726b8fe39ac.png"></span>

        </div>
      </div>
      <ul class="space-y-4 mt-4">
        <li class="flex items-center space-x-3"><img src="C:\Users\Blessie\Downloads\a869d4c4440db1534549bc1e2b3ba73659ab3640.png" class="h-6" /><span>Dashboard</span></li>
        <li class="flex items-center space-x-3"><img src="icons/users.png" class="h-6" /><span>Users</span></li>
        <li class="flex items-center space-x-3"><img src="icons/document.png" class="h-6" /><span>Document Request</span></li>
        <li class="flex items-center space-x-3"><img src="icons/complaint.png" class="h-6" /><span>Complaints</span></li>
        <li class="flex items-center space-x-3"><img src="icons/staffs.png" class="h-6" /><span>Staffs</span></li>
        <li class="flex items-center space-x-3"><img src="icons/officials.png" class="h-6" /><span>Barangay Officials</span></li>
        <li class="flex items-center space-x-3"><img src="icons/announce.png" class="h-6" /><span>Announcements</span></li>
        <li class="flex items-center space-x-3"><img src="icons/analytics.png" class="h-6" /><span>Reports & Analytics</span></li>
        <li class="flex items-center space-x-3"><img src="icons/audit.png" class="h-6" /><span>Audit Logs</span></li>
      </ul>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-10">
      <h1 class="text-3xl font-bold mb-8">USERS</h1>

      <!-- CARDS -->
      <div class="grid grid-cols-4 gap-6 mb-10">
        <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl p-4 text-center">
          <p class="text-4xl font-bold">7</p>
          <p class="text-sm font-bold">TOTAL USERS</p>
        </div>
        <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl p-4 text-center">
          <p class="text-4xl font-bold">3</p>
          <p class="text-sm font-bold">MALE</p>
        </div>
        <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl p-4 text-center">
          <p class="text-4xl font-bold">1</p>
          <p class="text-sm font-bold">FEMALE</p>
        </div>
        <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl p-4 text-center">
          <p class="text-4xl font-bold">3</p>
          <p class="text-sm font-bold">ARCHIVED ACCOUNTS</p>
        </div>
      </div>

      <!-- SEARCH + FILTERS -->
      <div class="flex items-center space-x-4 mb-6">
        <input type="text" placeholder="🔍 Search..." class="w-80 h-7 border border-gray-400 rounded-lg px-3 text-sm" />
        <select class="h-7 w-73 border border-gray-400 rounded-lg px-3 text-xs font-semibold">
          <option>GENDER</option>
           <option>Male</option>
           <option>Female</option>
        </select>
        <select class="h-7 w-73 border border-gray-400 rounded-lg px-3 text-xs font-semibold">
          <option>STATUS</option>
           <option>Pending</option>
           <option>In Progress</option>
           <option>Completed </option>
        </select>
      </div>

      <!-- TABLE -->
      <table class="w-full border-collapse text-sm">
        <thead>
          <tr class="bg-[#205E87] text-white">
            <th class="p-2 border">TRANSACTION ID</th>
            <th class="p-2 border">LAST NAME</th>
            <th class="p-2 border">FIRST NAME</th>
            <th class="p-2 border">TYPE</th>
            <th class="p-2 border">DESCRIPTION</th>
            <th class="p-2 border">DATE</th>
            <th class="p-2 border">DATE COMPLETED</th>
            <th class="p-2 border">STATUS</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white">
            <td class="p-2 border">CMP-T9634</td>
            <td class="p-2 border">Dela Cruz</td>
            <td class="p-2 border">Juan</td>
            <td class="p-2 border">Complaint</td>
            <td class="p-2 border">Noise Disturbance</td>
            <td class="p-2 border">10/22/2025</td>
            <td class="p-2 border"></td>
            <td class="p-2 border">In Progress</td>
          </tr>
          <tr>
            <td class="p-2 border">DOC-RC-17391</td>
            <td class="p-2 border">Dela Cruz</td>
            <td class="p-2 border">Juan</td>
            <td class="p-2 border">Document Request</td>
            <td class="p-2 border">Employment</td>
            <td class="p-2 border">10/20/2025</td>
            <td class="p-2 border">10/20/2025</td>
            <td class="p-2 border">Completed</td>
          </tr>
          <tr class="bg-white">
            <td class="p-2 border">DOC-BC-X2057</td>
            <td class="p-2 border">Dela Cruz</td>
            <td class="p-2 border">Juan</td>
            <td class="p-2 border">Document Request</td>
            <td class="p-2 border">Good Moral Character</td>
            <td class="p-2 border">09/15/2025</td>
            <td class="p-2 border">09/15/2025</td>
            <td class="p-2 border">Completed</td>
          </tr>
          <tr>
            <td class="p-2 border">DOC-BCL-M4812</td>
            <td class="p-2 border">Dela Cruz</td>
            <td class="p-2 border">Juan</td>
            <td class="p-2 border">Document Request</td>
            <td class="p-2 border">Loan Application</td>
            <td class="p-2 border">08/22/2025</td>
            <td class="p-2 border">08/22/2025</td>
            <td class="p-2 border">Completed</td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>
</body>
</html>
