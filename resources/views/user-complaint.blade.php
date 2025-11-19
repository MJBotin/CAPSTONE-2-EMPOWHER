<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Complaint Dashboard</title>
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
        <button @click="open = !open" class="relative p-2 rounded-full hover:bg-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 
                 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 
                 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 
                 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
          </svg>
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
            <div class="p-4 border-b hover:bg-gray-50">
              <div class="flex items-start gap-3">
                <div class="w-8 h-8 flex items-center justify-center bg-yellow-100 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
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

            <div class="p-4 border-b hover:bg-gray-50">
              <div class="flex items-start gap-3">
                <div class="w-8 h-8 flex items-center justify-center bg-gray-200 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
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

            <div class="p-4 hover:bg-gray-50">
              <div class="flex items-start gap-3">
                <div class="w-8 h-8 flex items-center justify-center bg-green-100 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
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
      <h3 class="text-lg font-bold text-gray-800">List of Complaints</h3> 
      <button id="addButton" class="bg-[#A2C4D9] text-black px-4 py-1 text-sm rounded-md font-semibold hover:bg-[#cbd4e0]" onclick="openModal('modalGeneralComplaint')">
        File a Complaint +
      </button>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto mb-6">
      <table class="w-full border border-gray-300 rounded-md">
        <thead class="bg-[#205E87] text-white text-sm font-thin text-left">
          <tr>
            <th class="px-4 py-2 border">TRANSACTION ID</th>
            <th class="px-4 py-2 border">LAST NAME</th>
            <th class="px-4 py-2 border">FIRST NAME</th>
            <th class="px-4 py-2 border">COMPLAINT TYPE</th>
            <th class="px-4 py-2 border">DATE FILED</th>
            <th class="px-4 py-2 border">DATE RESOLVE</th>
            <th class="px-4 py-2 border">STATUS</th>
          </tr>
        </thead>
        <tbody>
           <tr class="text-sm font-thin">
            <td class="px-4 py-2 border">CMP-GEN-T9634</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">Community Issue</td>
            <td class="px-4 py-2 border">10/20/2025</td>
            <td class="px-4 py-2 border">--/--/----</td>
            <td class="px-4 py-2 border text-yellow-600 font-medium">Pending</td>
          </tr>
           <tr class="text-sm font-thin">
            <td class="px-4 py-2 border">CMP-GEN-Y7629</td>
            <td class="px-4 py-2 border">Dela Cruz</td>
            <td class="px-4 py-2 border">Juan</td>
            <td class="px-4 py-2 border">Physical Violence</td>
            <td class="px-4 py-2 border">09/15/2025</td>
            <td class="px-4 py-2 border">09/25/2025</td>
            <td class="px-4 py-2 border text-green-600 font-medium">Completed</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="flex justify-end mt-40">
  <button onclick="window.location.href='user-homepage'" 
        class="bg-[#A2C4D9] hover:bg-[#94B8CC] text-xs text-black font-extrabold px-6 py-1.5 rounded-md transition-all duration-200 shadow-sm">
  BACK
</button>
   
    </div>
  </div>


  <!-- MODAL: General Complaint -->
  <div id="modalGeneralComplaint" class="hidden fixed inset-0 flex items-center justify-center z-50 bg-black/40 backdrop-blur-sm">
    <div class="bg-[#f5f0e8] w-[520px] rounded-3xl border border-black overflow-hidden flex flex-col pointer-events-auto">

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
            <label class="text-sm font-medium text-gray-800 w-[45%]">Incident Date:</label>
            <input type="date" class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
          </div>

          <!-- Incident Time -->
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Incident Time:</label>
            <input type="time" class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
          </div>

          <!-- Defendant Name -->
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Defendant's Name:</label>
            <input type="text" placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
          </div>

          <!-- Defendant Address -->
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Defendant's Address:</label>
            <input type="text" class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm focus:ring-blue-500 focus:outline-none bg-white">
          </div>

          <!-- Level of Urgency -->
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Level of Urgency:</label>
            <select id="levelOfUrgency" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Select</option>
              <option value="normal">Normal</option>
              <option value="moderate">Moderate</option>
              <option value="priority">Priority</option>
            </select>
          </div>

          <!-- Types of Complaints -->
          <div class="flex items-center justify-between">
            <label for="description" class="text-sm font-medium text-gray-800 w-[45%]">Types of Complaints:</label>
            <select id="description" name="description" class="w-[60%] border border-black rounded-sm px-3 py-1.5 text-sm text-gray-400"
              onchange="toggleSpecifyField(); this.classList.remove('text-gray-400'); this.classList.add('text-gray-900');">
              <option value="" disabled selected hidden>Types of Complaints</option>
              <option value="Community Issues">Community Issues (e.g., noise, garbage, vandalism etc.)</option>
              <option value="Minor Fights">Physical Harrasments (e.g., Unwanted touching, punching, hitting etc.)</option>
              <option value="Neighbor Disputes">Neighbor Disputes (e.g., arguments, boundary issues, property damage etc.)</option>
              <option value="Money Problems">Money Problems (e.g., unpaid debts, rent issues, loan disputes etc.)</option>
              <option value="Minor Fights">Misbehavior  (e.g., insults, verbal arguing or shouting, bullying etc.)</option>
              <option value="Others">Others (please specify)</option>
            </select>
          </div>

          <!-- Hidden Others -->
          <div id="specifyField" class="hidden mt-1.5 ml-[45%] w-[55%]">
            <input type="text" id="specifyInput" name="specifyInput" class="border-b border-gray-400 focus:border-black w-full outline-none transition-all duration-300" placeholder="Please specify..." onfocus="removePlaceholder()" onblur="restorePlaceholder()">
          </div>

          <!-- Complaint Statement -->
          <div class="flex items-center justify-between">
            <label class="text-sm font-medium text-gray-800 w-[45%]">Complaint Statement:</label>
            <textarea placeholder="" class="w-[60%] border border-black rounded-sm px-3 py-1 text-sm resize-none focus:ring-blue-500 focus:outline-none h-22 bg-white"></textarea>
          </div>

          <div class="flex items-start mt-2">
            <input type="checkbox" class="mt-1.5 mr-2 border-gray-400 rounded">
            <label class="text-[10px] text-gray-600 leading-snug">I certify that the information provided above is accurate and complete to the best of my knowledge.</label>
          </div>

        </form>
      </div>

 <!-- FOOTER BUTTONS -->
    <div class="flex justify-end gap-3 bg-[#F6F1E7] border-t border-gray-300 px-8 py-3 rounded-b-2xl">
      <button type="button" onclick="closeModal('modalGeneralComplaint')" 
             class="bg-[#A2C4D9] hover:bg-gray-400 text-gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">CANCEL</button>
      <button type="button" onclick="submitRequest('modalGeneralComplaint')" 
              class="bg-green-600 hover:bg-green-700 gray-900 px-4 py-1.5 rounded-md text-[10px] font-bold">SUBMIT</button>
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
        Thank you, your Complaint has been received.
      </p>
      <br>
      <p class="text-sm text-black leading-relaxed">
        Barangay officials will review your complaint and get back to you as soon as possible.
        Expect an initial response within 24-48 hours.
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
    function openModal(id) {
      document.getElementById(id).classList.remove('hidden');
      document.getElementById('pageContent').classList.add('blur-sm');
    }
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden');
      const anyOpen = Array.from(document.querySelectorAll('[id^="modal"]'))
                       .some(mod => !mod.classList.contains('hidden'));
      if (!anyOpen) document.getElementById('pageContent').classList.remove('blur-sm');
    }
    function submitRequest(modalId) {
      closeModal(modalId);
      document.getElementById("successModal").classList.remove("hidden");
      document.getElementById('pageContent').classList.add('blur-sm');
    }
    function closeSuccessModal() {
      document.getElementById("successModal").classList.add("hidden");
      document.getElementById('pageContent').classList.remove('blur-sm');
    }

    function toggleSpecifyField() {
      const select = document.getElementById('description');
      const specify = document.getElementById('specifyField');
      specify.classList.toggle('hidden', select.value !== 'Others');
    }
    function removePlaceholder() {
      document.getElementById('specifyInput').placeholder = '';
    }
    function restorePlaceholder() {
      document.getElementById('specifyInput').placeholder = 'Please specify...';
    }


    document.addEventListener('DOMContentLoaded', () => {
      const profileIcon = document.getElementById('profileIcon');
      if (profileIcon) {
        profileIcon.addEventListener('click', () => {
          console.log('Profile icon clicked! Redirecting...');
          window.location.href = 'user-profile';
        });
      }
    });

  </script>

</body>
</html>
