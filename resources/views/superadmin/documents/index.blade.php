@extends('superadmin.layouts.app')


@section('content')


<main class="fflex-1 p-11 fixed top-[60px] left-[250px] 
    w-[calc(100vw-250px)] h-[calc(100vh-60px)] 
    overflow-hidden bg-gray-100" > 
  <h1 class="text-3xl font-bold mb-8">DOCUMENT REQUEST</h1>

  <!-- CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalResidents">0</p>
        <p class="text-medium font-semibold text-black mt-1">TOTAL REQUEST</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalMale">0</p>
        <p class="text-medium font-semibold text-black mt-1">PENDING</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalFemale">0</p>
        <p class="text-medium font-semibold text-black mt-1">IN PROGRESS</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalArchived">0</p>
        <p class="text-medium font-semibold text-black mt-1">COMPLETED</p>
    </div>
</div>


  <div class="flex justify-between items-center mb-6">
    <div class="flex items-center space-x-4">
      <div class="relative">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#00000080]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>
        <input type="text" placeholder="Search..." class="w-96 h-8 border border-gray-300 rounded-lg pl-10 pr-3 text-sm focus:outline-none" />
      </div>
      
<div class="flex gap-2 w-fit">
  <select class="h-8 px-3 text-sm focus:outline-none w-55">
    <option>DOCUMENT TYPE</option>
    <option>Barangay Clearance</option>
    <option>Barangay Certificate</option>
    <option>Indigency Clearance</option>
    <option>Resident Certificate</option>
  </select>

  <select class="h-8 px-3 text-sm focus:outline-none w-50">
    <option>STATUS</option>
    <option>Pending</option>
    <option>In Progress</option>
    <option>Completed</option>
  </select>
</div>


    </div>
</div>


<div class="bg-white shadow-md rounded-lg overflow-hidden">
  <table class="table table-zebra w-full text-md">
    <thead style="background-color: #134573; color: white;">
      <tr class="text-sm whitespace-nowrap">
        <th class="py-2 px-4">TRANSACTION ID</th>
        <th class="py-2 px-4">LAST NAME</th>
        <th class="py-2 px-4">FIRST NAME</th>
        <th class="py-2 px-4">DOCUMENT TYPE</th>
        <th class="py-2 px-4">PURPOSE</th>
        <th class="py-2 px-4">DATE FILED</th>
        <th class="py-2 px-4">STATUS</th>
        <th class="py-2 px-4">ACTION</th>
      </tr>
    </thead>
    <tbody>

      <!-- Row 1: Clearance -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-CLE-125</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Barangay Clearance</td>
        <td class="py-2 px-4 text-center">Employment</td>
        <td class="py-2 px-4 text-center">21/11/2025</td>
        <td class="py-2 px-4 text-center">Pending</td>
        <td class="py-2 px-4">
<div class="flex justify-start items-center mr-4">
          <div class="flex space-x-3 items-center">

<!-- View Icon -->
<div class="relative group">
  <button class="w-6 h-6 flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-blue-600">
      <path d="M12 5C6 5 2 12 2 12s4 7 10 7 10-7 10-7-4-7-10-7z"/>
      <circle cx="12" cy="12" r="4" fill="white"/>
      <circle cx="12" cy="12" r="2" fill="#1d72f1ff"/>
    </svg>
  </button>
  <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View</span>
</div>

<!-- In Progress Hourglass Icon -->
<div class="relative group">
  <button class="w-6 h-6 flex items-center justify-center text-yellow-500">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
      <path d="M6 2h12v2l-4 5 4 5v2H6v-2l4-5-4-5V2zm2 2v1.382l2.618 3.272L8 11.618V13h8v-1.382l-2.618-3.272L16 5.382V4H8z"/>
    </svg>
  </button>
  <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">In progress</span>
</div>

<!-- Complete Check Icon -->
   <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-green-600">
                  <path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/>
              </svg>
    </button>
      <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Completed</span>
    </div>

</tr>
    <!-- Row 2: Certificate -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-CER-124</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Barangay Certificate</td>
        <td class="py-2 px-4 text-center">Educational</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">Pending</td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center mr-4">
          <div class="flex space-x-3 items-center">

<!-- View Icon -->
<div class="relative group">
  <button class="w-6 h-6 flex items-center justify-center">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-blue-600">
      <path d="M12 5C6 5 2 12 2 12s4 7 10 7 10-7 10-7-4-7-10-7z"/>
      <circle cx="12" cy="12" r="4" fill="white"/>
      <circle cx="12" cy="12" r="2" fill="#1d72f1ff"/>
    </svg>
  </button>
  <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View</span>
</div>

<!-- In Progress Hourglass Icon -->
<div class="relative group">
  <button class="w-6 h-6 flex items-center justify-center text-yellow-500">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6">
      <path d="M6 2h12v2l-4 5 4 5v2H6v-2l4-5-4-5V2zm2 2v1.382l2.618 3.272L8 11.618V13h8v-1.382l-2.618-3.272L16 5.382V4H8z"/>
    </svg>
  </button>
  <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">In progress</span>
</div>

<!-- Complete Check Icon -->
   <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-green-600">
                  <path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/>
              </svg>
    </button>
      <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Completed</span>
    </div>

</tr>

      <!-- Row 3: Indigency -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-CLE-123</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center whitespace-nowrap">Indigency Clearance </td>
        <td class="py-2 px-4 text-center">Medical</td>
        <td class="py-2 px-4 text-center">15/11/2025</td>
        <td class="py-2 px-4 text-center">In Progress</td>
        <td class="py-2 px-4">
            <div class="flex justify-start items-center mr-4">
          <div class="flex space-x-3 items-center">
            <!-- View Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-blue-600">
                  <path d="M12 5C6 5 2 12 2 12s4 7 10 7 10-7 10-7-4-7-10-7z"/>
                  <circle cx="12" cy="12" r="4" fill="white"/>
                  <circle cx="12" cy="12" r="2" fill="#1d72f1ff"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View</span>
            </div>
        

          <!-- Complete Check Icon -->
   <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6 fill-green-600">
                  <path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/>
              </svg>
    </button>
      <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Completed</span>
    </div>

</tr>

    <!-- Row 4: Resident -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-RES-122</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Resident Certificate </td>
        <td class="py-2 px-4 text-center">Employment</td>
        <td class="py-2 px-4 text-center">15/9/2025</td>
        <td class="py-2 px-4 text-center">Completed</td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center mr-4">
            <!-- View Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-blue-600">
                  <path d="M12 5C6 5 2 12 2 12s4 7 10 7 10-7 10-7-4-7-10-7z"/>
                  <circle cx="12" cy="12" r="4" fill="white"/>
                  <circle cx="12" cy="12" r="2" fill="#1d72f1ff"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View</span>
            </div>
          </div>
</td>
</tr>
    <!-- Row 5: Clearance -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-CLE-121</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Barangay Clearance</td>
        <td class="py-2 px-4 text-center">Employment</td>
        <td class="py-2 px-4 text-center">3/9/2025</td>
        <td class="py-2 px-4 text-center">Completed</td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center mr-4">
            <!-- View Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-blue-600">
                  <path d="M12 5C6 5 2 12 2 12s4 7 10 7 10-7 10-7-4-7-10-7z"/>
                  <circle cx="12" cy="12" r="4" fill="white"/>
                  <circle cx="12" cy="12" r="2" fill="#1d72f1ff"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View</span>
            </div>
          </div>
    </tbody>
  </table>
</div>

  <div class="flex justify-end mt-4">
    <button class="px-3  bg-[#A2C4D9C7] text-black font-semibold text-md rounded-lg hover:bg-[#C1D2E1]">
        >>
    </button>
</div>

</main>


@endsection

