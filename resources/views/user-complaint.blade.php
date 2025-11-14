<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Complaint Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>

<style>
  
    body.modal-open #pageContent {
      filter: blur(1px) brightness(1);
      transition: all 0.3s ease-in-out;
      pointer-events: none;
    }     

    .modal-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(255, 255, 255, 0.6); 
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      z-index: 40;
    }

    .modal-inner * { pointer-events: auto; }

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
        <p class="font-bold text-black mt-2">OPEN CASE</p>
      </div>
      <div class="bg-[#A2C4D9] border border-[#134573CC] rounded-lg py-6 shadow">
        <h2 class="text-4xl font-bold text-black">0</h2>
        <p class="font-bold text-black mt-2">IN PROGRESS</p>
      </div>
      <div class="bg-[#A2C4D9] border border-[#134573CC] rounded-lg py-6 shadow">
        <h2 class="text-4xl font-bold text-black">2</h2>
        <p class="font-bold text-black mt-2">CASERESOLVED</p>
      </div>
    </div>
    

    <div class="flex justify-between items-center mb-3 relative">
      <h3 class="text-lg font-semibold text-gray-800">List of Complaints</h3>

      <!-- Dropdown container -->
      <div class="relative inline-block text-left">
        <button id="dropdownButton" class="bg-[#A2C4D9] text-black px-4 py-2 rounded-md font-medium hover:bg-[#cbd4e0] focus:outline-none">
          Complaint ▼
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-52 bg-white border border-gray-300 rounded-md shadow-lg">
          <ul class="text-gray-700 text-sm">
            <li class="px-4 py-2 hover:bg-[#A2C4D9] hover:text-white cursor-pointer" onclick="openModal('modalGeneralComplaint')">General Complaint</li>
            <li class="px-4 py-2 hover:bg-[#A2C4D9] hover:text-white cursor-pointer" onclick="openModal('modalVAWC')">VAWC</li>
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
            <th class="px-4 py-2 border">COMPLAINT TYPE</th>
            <th class="px-4 py-2 border">DESCRIPTION</th>
            <th class="px-4 py-2 border">DATE FILLED</th>
            <th class="px-4 py-2 border">STATUS</th>
          </tr>
        </thead>
        <tbody>
          <tr class="text-sm">
            <td class="px-4 py-2 border">CMP-GEN-T9634</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">General Complaint</td>
            <td class="px-4 py-2 border">Community Issue</td>
            <td class="px-4 py-2 border">10/20/2025</td>
            <td class="px-4 py-2 border text-yellow-600 font-medium">Pending</td>
          </tr>
          <tr class="text-sm bg-gray-50">
            <td class="px-4 py-2 border">CMP-VWC-X2057</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">VAWC</td>
            <td class="px-4 py-2 border">Physical Violence</td>
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

<!-- MODAL 1: General Complaint -->
<div id="modalGeneralComplaint" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/40">
  <div class="bg-[#f5f0e8] w-[520px] rounded-3xl  border-1 border-black overflow-hidden flex flex-col">


    <!-- Header -->
    <div class="bg-[#2e5478] flex items-center px-4 py-3 rounded-t-3xl">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxqDxTyUPRaADhPEUlOlFYUnvFckf-ruIw5Q&sg" class="w-10 h-10 rounded-full border-2 border-white object-cover mr-3">
      <h1 class="text-white font-sans font-bold">Barangay Daang Bakal</h1>
    </div>

    <!-- BODY -->
    <div class="px-8 py-6 flex-1 overflow-y-auto">
      <h2 class="text-center text-lg font-bold text-gray-800 mb-6 tracking-wide">
        GENERAL COMPLAINT FORM
      </h2>

      <form class="space-y-4">

        <!-- Incident Date -->
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-800 w-[45%]">
            Incident Date <span class="text-red-500">*</span>
          </label>
          <input type="date" 
                 class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
        </div>

        <!-- Incident Time --> 
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-800 w-[45%]">
            Incident Time <span class="text-red-500">*</span>
          </label>
          <input type="time" 
                 class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
        </div>

        <!-- Appellant -->
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-800 w-[45%]">
            Defendant's Name <span class="text-red-500">*</span>
          </label>
          <input type="text" 
                 placeholder="" 
                 class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
        </div>

        <!-- Address -->
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-800 w-[45%]">
            Defendant's Address<span class="text-red-500">*</span> 
          </label>
          <input type="text" 
                 class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
        </div>

        <!-- Level of Urgency -->
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-800 w-[45%]">
            Level of Urgency <span class="text-red-500">*</span>
          </label>
          <select id="levelOfUrgency" 
              class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Select</option>
              <option value="normal">Normal</option>
              <option value="moderate">Moderate</option>
              <option value="priority">Priority</option>
          </select>
        </div>

              <!-- Description -->
        <div class="flex items-center justify-between">
          <label for="description" class="text-sm font-medium text-gray-800 w-[45%]">
            Description <span class="text-red-500">*</span>
          </label>
          <select id="description" name="description"
            class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
            onchange="toggleSpecifyField(); this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
            <option value="" disabled selected hidden>Types of General Complaints</option>
            <option value="Community Issues">Community Issues (e.g., noise, garbage, vandalism)</option>
            <option value="Neighbor Disputes">Neighbor Disputes (e.g., arguments, boundary issues, property damage)</option>
            <option value="Money Problems">Money Problems (e.g., unpaid debts, rent issues, loan disputes)</option>
            <option value="Minor Fights">Minor Fights or Misbehavior (e.g., insults, threats, small fights)</option>
            <option value="Others">Others (please specify)</option>
          </select>
        </div>

        <!-- Hidden “Others” input -->
        <div id="specifyField" class="hidden mt-1.5 ml-[45%] w-[55%]">
          <input type="text" id="specifyInput" name="specifyInput"
                class="border-b border-gray-400 focus:border-black-500 w-full outline-none transition-all duration-300"
                placeholder="Please specify..."
                onfocus="removePlaceholder()" onblur="restorePlaceholder()">
        </div>

        <!-- Complaint Statement -->
        <div class="flex items-center justify-between">
          <label class="text-sm font-medium text-gray-800 w-[45%]">
            Complaint Statement <span class="text-red-500">*</span>
          </label>
          <textarea placeholder="e.g. Overuse of karaoke disrupting the rest of residents..." 
                    class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm resize-none focus:ring-blue-500 focus:outline-none h-22 bg-white"></textarea>
        </div>
        <br>
        <!-- Certification Checkbox -->
        <div class="flex items-start mt-5">
          <input type="checkbox" class="mt-1 mr-2 border-gray-400 rounded">
          <label class="text-[9px] text-gray-600 leading-snug">
            I agree to take part in this process and affirm that the information I have provided is correct and accurate to the best of my knowledge.
          </label>
        </div>

      </form>
    </div>

    <!-- FOOTER BUTTONS -->
    <div class="flex justify-end gap-3 bg-[#F6F1E7] border-t border-gray-300 px-8 py-3 rounded-b-2xl">
      <button type="button" onclick="closeModal('modalGeneralComplaint')" 
             class="bg-[#A2C4D9] hover:bg-gray-400 text-gray-900 px-4 py-1 rounded-md text-[10px] font-bold">CANCEL</button>
      <button type="button" onclick="submitRequest('modalGeneralComplaint')" 
              class="bg-green-600 hover:bg-green-700 gray-900 px-4 py-1 rounded-md text-[10px] font-bold">SUBMIT</button>
      </div>
    </div>

  </div>
</div>




<!-- MODAL 2: VAWC -->




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
        Thank you, your Complaint has been received.
      </p>

      <p class="text-sm text-black leading-relaxed">
        Barangay officials will review your complaint and get back to you as soon as possible.
        Expect a initial response within 24-48 hours.
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

function toggleSpecifyField() {
  const desc = document.getElementById("description").value;
  const specifyDiv = document.getElementById("specifyField");

  // Show line input only when "Others" is selected
  if (desc === "Others") {
    specifyDiv.classList.remove("hidden");
  } else {
    specifyDiv.classList.add("hidden");
  }
}

function removePlaceholder() {
  document.getElementById("specifyInput").placeholder = "";
}

function restorePlaceholder() {
  const input = document.getElementById("specifyInput");
  if (input.value === "") {
    input.placeholder = "Please specify...";
  }
}

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

      function submitRequest(modalId) {
    closeModal(modalId);            // close the form modal
    document.body.classList.add('modal-open'); // keep blur
    document.getElementById("successModal").classList.remove("hidden");
  }

  function closeSuccessModal() {
    document.getElementById("successModal").classList.add("hidden");
    document.body.classList.remove("modal-open"); // remove blur
  }

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
