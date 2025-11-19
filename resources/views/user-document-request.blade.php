<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document Request Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">



</head>

<body class="bg-[#f6f3ee]" style="font-family: 'Poppins', sans-serif;">


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
        <button @click="open = !open" class="relative p-2 rounded-full hover:bg-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" 
               class="h-6 w-6 text-white" 
               fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 
                 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 
                 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 
                 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
          </svg>
          <span class="absolute top-1 right-1 w-2 h-2 bg-red-500 rounded-full"></span>
        </button>

        <div x-show="open" @click.outside="open = false"
             class="absolute right-0 mt-3 w-80 bg-white shadow-lg rounded-xl border border-gray-100 overflow-hidden z-50">
          <div class="p-4 border-b">
            <h3 class="text-lg font-semibold text-gray-700">Notifications</h3>
          </div>
          <div class="max-h-96 overflow-y-auto">
            <div class="p-4 border-b hover:bg-gray-50 flex items-start gap-3">
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
            <div class="p-4 border-b hover:bg-gray-50 flex items-start gap-3">
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
            <div class="p-4 hover:bg-gray-50 flex items-start gap-3">
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

      <div id="profileIcon" class="bg-white text-[#2e5478] p-2 rounded-full hover:bg-gray-100 cursor-pointer transition">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="2" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 9A3.75 3.75 0 1112 5.25 3.75 3.75 0 0115.75 9zM4.5 19.5a8.25 8.25 0 1115 0v.75H4.5v-.75z" />
        </svg>
      </div>
    </div>
  </header>

  <!-- PAGE CONTENT -->
    <div id="pageContent" class="max-w-6xl mx-auto p-8 mt-1 transition-all duration-300">
  <!-- Status Cards -->
  <div class="flex justify-center gap-12 mb-4 text-center">
    <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl py-3 shadow w-60">
      <h2 class="text-4xl font-bold text-black">1</h2>
      <p class="font-bold text-black mt-2">PENDING</p>
    </div>

    <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl py-3 shadow w-60">
      <h2 class="text-4xl font-bold text-black">0</h2>
      <p class="font-bold text-black mt-2">IN PROGRESS</p>
    </div>

    <div class="bg-[#A2C4D9] border-2 border-[#134573CC] rounded-xl py-3 shadow w-60">
      <h2 class="text-4xl font-bold text-black">2</h2>
      <p class="font-bold text-black mt-2">COMPLETED</p>
    </div>
  </div>

    <br>
    <!-- Dropdown and Table -->
    <div class="flex justify-between items-center mb-5 relative">
      <h3 class="text-lg font-bold text-gray-800">List of Document Request</h3>

      <div class="relative inline-block text-left">
        <button id="dropdownButton" class="bg-[#A2C4D9] text-black px-4 py-2 text-sm rounded-md font-semibold hover:bg-[#cbd4e0] focus:outline-none">
          Document Request⏷
        </button>
        
        <div id="dropdownMenu" class="hidden absolute mt-2 w-full bg-white border border-gray-300 rounded-md shadow-lg z-50">
          <ul class="text-gray-700 text-sm">
            <li class="px-4 py-2 hover:bg-white hover:text-[#A2C4D9] cursor-pointer" onclick="openModal('modalCertificate')">Barangay Certificate</li>
            <li class="px-4 py-2 hover:bg-white hover:text-[#A2C4D9] cursor-pointer" onclick="openModal('modalClearance')">Barangay Clearance</li>
            <li class="px-4 py-2 hover:bg-white hover:text-[#A2C4D9] cursor-pointer" onclick="openModal('modalIndigency')">Barangay Indigency</li>
            <li class="px-4 py-2 hover:bg-white hover:text-[#A2C4D9] cursor-pointer" onclick="openModal('modalResidency')">Barangay Residency</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto mb-6">
      <table class="w-full border border-gray-300 rounded-md">
        <thead class="bg-[#205E87] text-white text-sm font-thin text-left">
          <tr>
            <th class="px-4 py-2 border">TRANSACTION ID</th>
            <th class="px-4 py-2 border">LAST NAME</th>
            <th class="px-4 py-2 border">FIRST NAME</th>
            <th class="px-4 py-2 border">DOCUMENT TYPE</th>
            <th class="px-4 py-2 border">PURPOSE</th>
            <th class="px-4 py-2 border">DATE REQUESTED</th>
            <th class="px-4 py-2 border">STATUS</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-sm font-thin">
            <td class="px-4 py-2 border">DOC-RC-I7391</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">Resident Certificate</td>
            <td class="px-4 py-2 border">Employment</td>
            <td class="px-4 py-2 border">10/20/2025</td>
            <td class="px-4 py-2 border text-yellow-600 font-medium">Pending</td>
          </tr>
          <tr class="text-sm font-thin bg-gray-50 ">
            <td class="px-4 py-2 border">DOC-BC-X2057</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">Barangay Certificate</td>
            <td class="px-4 py-2 border">Good Moral Character</td>
            <td class="px-4 py-2 border">09/15/2025</td>
            <td class="px-4 py-2 border text-green-600 font-medium">Completed</td>
          </tr>
      </table>
    </div>

    <!-- Back Button -->
    <div id="backButton" class="flex justify-end mt-40">
      <button class="bg-[#A2C4D9] hover:bg-[#94B8CC] text-xs text-black font-extrabold px-6 py-1.5 rounded-md transition-all duration-200 shadow-sm">
        BACK
      </button>
    </div>
  </div>

  <!-- =============================== -->
  <!-- MODALS -->
  <!-- =============================== -->

 <!-- MODAL 1: Barangay Certificate -->
<div id="modalCertificate" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-1 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

    <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-3 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-10 h-10 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-sans font-bold">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-medium font-bold mb-10 text-gray-900">
          APPLICATION FORM FOR BARANGAY CERTIFICATE
        </h2>
      
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Length of Residency:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Valid ID Number:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Registered Voter:</span></label>
            <select id="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request:</span></label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>
        <br>
          <div class="flex items-start mb-6">
            <input type="checkbox" class="mt-1 mr-2 border-gray-400 rounded">
            <label class="text-[10px] text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>


      <!-- Footer buttons -->
      <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalCertificate')" class="bg-[#A2C4D9] hover:bg-gray-400 text-gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">CANCEL</button>
        <button type="button" onclick="submitRequest('modalCertificate')" class="bg-green-600 hover:bg-green-700 gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">SUBMIT</button>
      </div>

    </div>
  </div>
</div>


  <!-- MODAL 2: Barangay Clearance -->
  <div id="modalClearance" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-1 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

     <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-3 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-10 h-10 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-sans font-bold">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-medium font-bold mb-8 text-gray-800">
          APPLICATION FORM FOR BARANGAY CLEARANCE
        </h2>
           
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Length of Residency:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Valid ID Number:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Registered Voter:</span></label>
            <select id="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request:</span></label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>
        <br>
          <div class="flex items-start mb-6">
            <input type="checkbox" class="mt-1 mr-2 border-gray-400 rounded">
            <label class="text-[10px] text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

      <!-- Footer buttons -->
            <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalClearance')" class="bg-[#A2C4D9] hover:bg-gray-400 text-gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">CANCEL</button>
        <button type="button" onclick="submitRequest('modalClearance')" class="bg-green-600 hover:bg-green-700 gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">SUBMIT</button>
      </div>

    </div>
  </div>
</div>
<!-- MODAL 3: Indigency -->
 <div id="modalIndigency" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-1 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

   <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-3 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-10 h-10 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-sans font-bold">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-medium font-bold mb-8 text-gray-800">
          APPLICATION FORM FOR BARANGAY INDIGENCY
        </h2>

        <form class="space-y-8">

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">
                Certificate of being<br>
                <span class="text-gray-800 inline">Indigent:</span>
            </label>
            <select id="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Select</option>
              <option value="">Medical</option>
              <option value="">Educational</option>
              <option value="">Burial</option>
              <option value="">Legal</option>
              <option value="">Financial</option>
            </select>
          </div>
    
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Other Purpose: </label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Requirement:</label>
            <input type="file" class="w-[57%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>
          <br>
          <div class="flex items-start mt-2">
            <input type="checkbox" class="mt-1.5 mr-2 border-gray-400 rounded">
            <label class="text-[10px] text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

       <!-- Footer buttons -->
            <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalIndigency')" class="bg-[#A2C4D9] hover:bg-gray-400 text-gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">CANCEL</button>
        <button type="button" onclick="submitRequest('modalIndigency')" class="bg-green-600 hover:bg-green-700 gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">SUBMIT</button>
      </div>
    </div>
  </div>
</div>


  <!-- MODAL 4: Barangay Residency -->
  <div id="modalResidency" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-1 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

     <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-3 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-10 h-10 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-sans font-bold">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-medium font-bold mb-8 text-gray-800">
          APPLICATION FORM FOR BARANGAY RESIDENCY
        </h2>
           
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Length of Residency:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Valid ID Number:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Registered Voter:</span></label>
            <select id="levelOfUrgency" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Select</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request:</span></label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>
        <br>
          <div class="flex items-start mb-6">
            <input type="checkbox" class="mt-1 mr-2 border-gray-400 rounded">
            <label class="text-[10px] text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

      <!-- Footer buttons -->
            <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalResidency')" class="bg-[#A2C4D9] hover:bg-gray-400 text-gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">CANCEL</button>
        <button type="button" onclick="submitRequest('modalResidency')" class="bg-green-600 hover:bg-green-700 gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">SUBMIT</button>
      </div>

    </div>
  </div>
</div>

<!-- SUCCESS MODAL -->
<div id="successModal" class="hidden fixed inset-0 bg-black/30 backdrop-blur-none flex items-center justify-center z-50">

  <div class="bg-[#DDE1E5] w-[480px] rounded-2xl shadow-xl p-10 border-2 border-black relative z-50 text-center">

      <div class="flex justify-center mb-4">
        <div class="w-20 h-20 rounded-full border-4 border-green-700 flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-green-700" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </div>
      </div>

      <h2 class="font-extrabold text-xl mb-3 text-black tracking-wide">
        REQUEST SUBMITTED SUCCESSFULLY!
      </h2>

      <p class="text-sm text-black leading-relaxed mb-1">
        Thank you, your Document Request has been received.
      </p>

      <p class="text-sm text-black leading-relaxed">
        Your request will be processed within 1 day. You may claim your
        document at the barangay once it’s ready for release.
      </p>

      <button onclick="closeSuccessModal()" 
              class="mt-7 bg-[#A2C4D9] hover:bg-[#94B8CC] px-7 py-1 rounded-2xl text-sm font-semibold text-black transition">
        CLOSE
      </button>
  </div>

</div>














 <!-- =============================== -->
  <!-- JavaScript -->
  <!-- =============================== -->

<script>
const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');
const pageContent = document.getElementById('pageContent');

// Dropdown toggle
dropdownButton.addEventListener('click', (e) => {
  e.stopPropagation();
  dropdownMenu.classList.toggle('hidden');
});

// Close dropdown when clicking outside
window.addEventListener('click', (e) => {
  if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
    dropdownMenu.classList.add('hidden');
  }
});

// Open modal and add blur to background
function openModal(id) {
  const modal = document.getElementById(id);
  modal.classList.remove('hidden');
  pageContent.classList.add('blur-sm'); // Add slight blur
  dropdownMenu.classList.add('hidden');
}

// Close modal and remove blur if no other modals are open
function closeModal(id) {
  const modal = document.getElementById(id);
  modal.classList.add('hidden');

  // Check if any other modals are still open
  const anyOpen = Array.from(document.querySelectorAll('[id^="modal"]'))
                        .some(mod => !mod.classList.contains('hidden'));
  if (!anyOpen) {
    pageContent.classList.remove('blur-sm');
  }
}

// Close modal if user clicks outside modal content
document.querySelectorAll('[id^="modal"]').forEach(modal => {
  modal.addEventListener('click', (e) => {
    if (e.target === modal) {      
      closeModal(modal.id);
    }
  });
});

// Submit request: close modal and show success modal
function submitRequest(modalId) {
  closeModal(modalId);
  document.getElementById("successModal").classList.remove("hidden");
  pageContent.classList.add('blur-sm'); // keep blur while success modal is open
}

// Close success modal and remove blur
function closeSuccessModal() {
  document.getElementById("successModal").classList.add("hidden");
  pageContent.classList.remove('blur-sm');
}

// Profile icon redirect
document.addEventListener('DOMContentLoaded', () => {
  const profileIcon = document.getElementById('profileIcon');
  if (profileIcon) {
    profileIcon.addEventListener('click', () => {
      console.log('Profile icon clicked! Redirecting...');
      window.location.href = 'user-profile';
    });
  }
});

// Back button redirect
document.addEventListener('DOMContentLoaded', () => {
  const backButton = document.getElementById('backButton');
  if (backButton) {
    backButton.addEventListener('click', () => {
      window.location.href = 'user-homepage'; 
    });
  }
});
</script>



</body>

</html>
