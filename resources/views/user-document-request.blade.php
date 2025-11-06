<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Document Request Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
   /* Background blur + brightness when modal is open */
body.modal-open #pageContent {
  filter: blur(1px) brightness(1);
  transition: all 0.3s ease-in-out;
  pointer-events: none;
}

/* Semi-transparent white overlay behind the modal */
.modal-backdrop {
  position: fixed;
  inset: 0;
  background: white; /* light white overlay */
  backdrop-filter: blur(7px);
  transition: all 0.3s ease-in-out;
  z-index: 40;

    }
    /* allow pointer events for form elements inside modals (so inputs still work) */
    .modal-inner * { pointer-events: auto; }

    /* ensure dropdown z-index under modal overlay */
    #dropdownMenu { z-index: 30; }
  </style>
</head>
<body class="bg-[#f6f3ee] font-sans">

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

  <!-- PAGE CONTENT (will be blurred when modal is open) -->
  <div id="pageContent" class="max-w-6xl mx-auto p-8">
    <!-- Status Cards -->
    <div class="grid grid-cols-3 gap-6 mb-10 text-center h-[100px]">

      <div class="bg-[#A2C4D9] border border-[#134573CC] rounded-lg py-6 shadow">
        <h2 class="text-4xl font-bold text-black">1</h2>
        <p class="font-bold text-black mt-2">PENDING</p>
      </div>
      <div class="bg-[#A2C4D9] border border-[#134573CC] rounded-lg py-6 shadow">
        <h2 class="text-4xl font-bold text-black">0</h2>
        <p class="font-bold text-black mt-2">IN PROGRESS</p>
      </div>
      <div class="bg-[#A2C4D9] border border-[#134573CC] rounded-lg py-6 shadow">
        <h2 class="text-4xl font-bold text-black">2</h2>
        <p class="font-bold text-black mt-2">COMPLETED</p>
      </div>
    </div>
    

    <div class="flex justify-between items-center mb-3 relative">
      <h3 class="text-lg font-semibold text-gray-800">List of Document Request</h3>

      <!-- Dropdown container -->
      <div class="relative inline-block text-left">
        <button id="dropdownButton" class="bg-[#A2C4D9] text-black px-4 py-2 rounded-md font-medium hover:bg-[#cbd4e0] focus:outline-none">
          Document Request ▼
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-52 bg-white border border-gray-300 rounded-md shadow-lg">
          <ul class="text-gray-700 text-sm">
            <li class="px-4 py-2 hover:bg-[#A2C4D9] hover:text-white cursor-pointer" onclick="openModal('modalCertificate')">Barangay Certificate</li>
            <li class="px-4 py-2 hover:bg-[#A2C4D9] hover:text-white cursor-pointer" onclick="openModal('modalClearance')">Barangay Clearance</li>
            <li class="px-4 py-2 hover:bg-[#A2C4D9] hover:text-white cursor-pointer" onclick="openModal('modalIndigency')">Barangay Indigency</li>
            <li class="px-4 py-2 hover:bg-[#A2C4D9] hover:text-white cursor-pointer" onclick="openModal('modalResident')">Barangay Residency</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto mb-6">
      <table class="w-full border border-gray-300 rounded-md">
        <thead class="bg-[#134573CC]">
          <tr class="text-left text-sm font-semibold text-white">
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
          <tr class="text-sm">
            <td class="px-4 py-2 border">DOC-RC-I7391</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">Resident Certificate</td>
            <td class="px-4 py-2 border">Employment</td>
            <td class="px-4 py-2 border">10/20/2025</td>
            <td class="px-4 py-2 border text-yellow-600 font-medium">Pending</td>
          </tr>
          <tr class="text-sm bg-gray-50">
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
          <div id="backButton" class="flex justify-end mt-6">
      <button class="bg-[#A2C4D9] hover:bg-[#94B8CC] text-m text-black font-bold px-6 py-1 rounded-2xl transition-all duration-200 shadow-sm">
        BACK
      </button>
    </div>
      </div> 

  <!-- =============================== -->
  <!-- MODALS -->
  <!-- =============================== -->

 <!-- MODAL 1: Barangay Certificate -->
<div id="modalCertificate" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-2 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

    <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-2 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-8 h-8 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-bold text-sm">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-lg font-bold mb-8 text-gray-800">
          APPLICATION FORM FOR BARANGAY CERTIFICATE
        </h2>
           <br>
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Length of Residency <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. 5 years" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Valid ID Number <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. 123456789" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Registered Voter <span class="text-red-500">*</span></label>
            <select class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
              <option>Select</option><option>Yes</option><option>No</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. Employment Requirement" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-start mt-4">
            <input type="checkbox" class="mt-1.5 mr-2 border-gray-400 rounded">
            <label class="text-xs text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

      <!-- Footer buttons -->
      <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalCertificate')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-1 rounded-md text-xs font-medium transition">CANCEL</button>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-1 rounded-md text-xs font-medium transition">SUBMIT</button>
      </div>

    </div>
  </div>
</div>


  <!-- MODAL 2: Barangay Clearance -->
  <div id="modalClearance" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-2 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

    <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-2 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-8 h-8 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-bold text-sm">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-lg font-bold mb-8 text-gray-800">
          APPLICATION FORM FOR BARANGAY CLEARANCE
        </h2>
           <br>
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Length of Residency <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. 5 years" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Valid ID Number <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. 123456789" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Registered Voter <span class="text-red-500">*</span></label>
            <select class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
              <option>Select</option><option>Yes</option><option>No</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. Employment Requirement" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-start mt-4">
            <input type="checkbox" class="mt-1.5 mr-2 border-gray-400 rounded">
            <label class="text-xs text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

      <!-- Footer buttons -->
      <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalClearance')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-1 rounded-md text-xs font-medium transition">CANCEL</button>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-1 rounded-md text-xs font-medium transition">SUBMIT</button>
      </div>

    </div>
  </div>
</div>
<!-- MODAL 3: Indigency -->
<div id="modalIndigency" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="modal-inner bg-[#f5f0e8] border-2 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden">
    <div class="bg-[#2e5478] flex items-center px-4 py-2 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-8 h-8 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-bold text-sm">Barangay Daang Bakal</h1>
    </div>

    <div class="px-8 py-6 text-left h-[calc(100%-50px)] flex flex-col justify-between">
      <div>
        <h2 class="text-center text-lg font-bold mb-6 text-gray-800">APPLICATION FORM FOR BARANGAY INDIGENCY</h2>
        <br>
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">
                Certificate of being<br>
                <span class="text-gray-800 inline">Indigent</span><span class="text-red-500 inline">*</span>
            </label>
            <select class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
              <option>Select</option>
              <option>Medical</option>
              <option>Educational</option>
              <option>Burial</option>
              <option>Legal</option>
              <option>Financial</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Other Purpose <span class="text-red-500">*</span></label>
            <input type="text" placeholder="Personal Purposes" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Requirement <span class="text-red-500">*</span></label>
            <input type="file" class="w-[57%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request <span class="text-red-500">*</span></label>
            <input type="text" placeholder="To use for family matters..." class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-start mt-2">
            <input type="checkbox" class="mt-1.5 mr-2 border-gray-400 rounded">
            <label class="text-xs text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

      <div class="flex justify-end gap-2 mt-4">
        <button type="button" onclick="closeModal('modalIndigency')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-1 rounded-md text-xs font-medium transition">CANCEL</button>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-1 rounded-md text-xs font-medium transition">SUBMIT</button>
      </div>
    </div>
  </div>
</div>


  <!-- MODAL 4: Barangay Resident -->
  <div id="modalResident" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/50">
  <div class="bg-[#f5f0e8] border-2 border-black w-[500px] h-[550px] rounded-3xl overflow-hidden flex flex-col">

    <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-2 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-8 h-8 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-bold text-sm">Barangay Daang Bakal</h1>
    </div>

    <!-- Body -->
    <div class="px-8 py-6 text-left flex-1 flex flex-col justify-between">
    
 
      <div>
        <h2 class="text-center text-lg font-bold mb-8 text-gray-800">
          APPLICATION FORM FOR BARANGAY RESIDENCY
        </h2>
           <br>
        <form class="space-y-8">
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Length of Residency <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. 5 years" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Valid ID Number <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. 123456789" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Registered Voter <span class="text-red-500">*</span></label>
            <select class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
              <option>Select</option><option>Yes</option><option>No</option>
            </select>
          </div>

          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Purpose of Request <span class="text-red-500">*</span></label>
            <input type="text" placeholder="e.g. Employment Requirement" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm focus:ring-blue-500 focus:outline-none">
          </div>

          <div class="flex items-start mt-4">
            <input type="checkbox" class="mt-1.5 mr-2 border-gray-400 rounded">
            <label class="text-xs text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>
        </form>
      </div>

      <!-- Footer buttons -->
      <div class="flex justify-end gap-2 mt-6">
        <button type="button" onclick="closeModal('modalResident')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-1 rounded-md text-xs font-medium transition">CANCEL</button>
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-1 rounded-md text-xs font-medium transition">SUBMIT</button>
      </div>

    </div>
  </div>
</div>

  <!-- =============================== -->
  <!-- JavaScript -->
  <!-- =============================== -->
  <script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');

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

    // Open modal: show modal and add blur to background
    function openModal(id) {
      document.getElementById(id).classList.remove('hidden');
      document.body.classList.add('modal-open');
      dropdownMenu.classList.add('hidden');
    }

    // Close modal: hide modal and remove blur
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden');
      // if no other modals are visible, remove modal-open
      const anyOpen = Array.from(document.querySelectorAll('[id^="modal"]')).some(mod => !mod.classList.contains('hidden'));
      if (!anyOpen) document.body.classList.remove('modal-open');
    }

    // Close modal if user clicks on overlay outside modal content
    document.querySelectorAll('[id^="modal"]').forEach(modal => {
      modal.addEventListener('click', (e) => {
        if (e.target === modal) {
          closeModal(modal.id);
        }
      });
    });


  document.addEventListener('DOMContentLoaded', () => {
    const profileIcon = document.getElementById('profileIcon');
    if (profileIcon) {
      profileIcon.addEventListener('click', () => {
        console.log('Profile icon clicked! Redirecting...');
        window.location.href = 'user-profile';
      });
    } else {
      console.error('No element with id="profileIcon" found!');
    }
  });

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
