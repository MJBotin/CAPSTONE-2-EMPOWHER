@extends('superadmin.layouts.app')


@section('content')


<main class="fflex-1 p-11 fixed top-[60px] left-[250px] 
    w-[calc(100vw-250px)] h-[calc(100vh-60px)] 
    overflow-hidden bg-gray-100" > 
  <h1 class="text-3xl font-bold mb-8">USERS</h1>

  <!-- CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalResidents">0</p>
        <p class="text-medium font-semibold text-black mt-1">REGISTERED RESIDENTS</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalMale">0</p>
        <p class="text-medium font-semibold text-black mt-1">MALE</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalFemale">0</p>
        <p class="text-medium font-semibold text-black mt-1">FEMALE</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalArchived">0</p>
        <p class="text-medium font-semibold text-black mt-1">ARCHIVED ACCOUNTS</p>
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
  <select class="h-8 px-3 text-sm focus:outline-none w-full">
    <option>GENDER</option>
    <option>Male</option>
    <option>Female</option>
  </select>

  <select class="h-8 px-3 text-sm focus:outline-none w-full">
    <option>STATUS</option>
    <option>Pending</option>
    <option>Approved</option>
    <option>Reject</option>
    <option>Archive</option>
  </select>
</div>


    </div>
</div>


<div class="bg-white shadow-md rounded-lg overflow-hidden">
  <table class="table table-zebra w-full text-md">
    <thead style="background-color: #134573; color: white;">
      <tr class="text-sm">
        <th class="py-2 px-4">RESIDENT ID</th>
        <th class="py-2 px-4">LAST NAME</th>
        <th class="py-2 px-4">FIRST NAME</th>
        <th class="py-2 px-4">GENDER</th>
        <th class="py-2 px-4">DATE REGISTERED</th>
        <th class="py-2 px-4">STATUS</th>
        <th class="py-2 px-4">ACTION</th>
      </tr>
    </thead>
    <tbody>

      <!-- Row 1: Pending (all 4 icons) -->
      <tr class="text-sm">
        <td class="py-2 px-4 text-center">RS-00001</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Male</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">
          <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold px-3 py-1 rounded-full w-20 h-6 inline-flex items-center justify-center">Pending</span>
        </td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center gap-1.5 ml-4">
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
            <!-- Archive Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-gray-700">
                  <path d="M3 6h18v4H3V6zm2 6h14v8H5v-8zm7 1l-3 3h6l-3-3z"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Archive</span>
            </div>
            <!-- Approved Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-green-600">
                  <path d="M9 16.2l-3.5-3.5-1.4 1.4L9 19 20 8l-1.4-1.4z"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Approved</span>
            </div>
            <!-- Reject Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-red-600">
                  <path d="M18.3 5.7L12 12l6.3 6.3-1.4 1.4L12 13.4l-6.3 6.3-1.4-1.4L10.6 12 4.3 5.7l1.4-1.4L12 10.6l6.3-6.3z"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Reject</span>
            </div>
          </div>
        </td>
      </tr>

      <!-- Row 2: Approved (View + Archive) -->
      <tr class="text-sm">
        <td class="py-2 px-4 text-center">RS-00002</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Male</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">
          <span class="bg-green-200 text-green-800 text-xs font-semibold px-3 py-1 rounded-full w-20 h-6 inline-flex items-center justify-center">Approved</span>
        </td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center gap-1.5 ml-4">
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
            <!-- Archive Icon -->
            <div class="relative group">
              <button class="w-6 h-6 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 fill-gray-700">
                  <path d="M3 6h18v4H3V6zm2 6h14v8H5v-8zm7 1l-3 3h6l-3-3z"/>
                </svg>
              </button>
              <span class="absolute bottom-full mb-1 left-1/2 transform -translate-x-1/2 px-2 py-1 text-xs text-white bg-gray-800 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Archive</span>
            </div>
          </div>
        </td>
      </tr>

      <!-- Row 3: Reject (only View icon) -->
      <tr class="text-sm">
        <td class="py-2 px-4 text-center">RS-00003</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Male</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">
          <span class="bg-red-200 text-red-800 text-xs font-semibold px-3 py-1 rounded-full w-20 h-6 inline-flex items-center justify-center">Reject</span>
        </td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center gap-1.5 ml-4">
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

      <!-- Row 4: Archived (only View icon) -->
      <tr class="text-sm">
        <td class="py-2 px-4 text-center">RS-00004</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Male</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">
          <span class="bg-gray-200 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full w-20 h-6 inline-flex items-center justify-center">Archived</span>
        </td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center gap-1.5 ml-4">
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

      <!-- Row 5: Archived (only View icon) -->
      <tr class="text-sm">
        <td class="py-2 px-4 text-center">RS-00005</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Male</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">
          <span class="bg-gray-200 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full w-20 h-6 inline-flex items-center justify-center">Archived</span>
        </td>
        <td class="py-2 px-4">
          <div class="flex justify-start items-center gap-1.5 ml-4">
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

