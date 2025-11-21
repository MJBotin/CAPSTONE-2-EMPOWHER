@extends('superadmin.layouts.app')


@section('content')


<main class="flex-1 p-8 bg-gray-100">
  <h1 class="text-3xl font-bold mb-8">DASHBOARD</h1>

 <!-- CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalResidents">0</p>
        <p class="text-medium font-semibold text-black mt-1">TOTAL USER</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalMale">0</p>
        <p class="text-medium font-semibold text-black mt-1">TOTAL REQUEST</p>
    </div>

    <div class="p-4 rounded-lg shadow-md" style="background-color: #EBF0F4;">
        <p class="text-3xl font-bold text-black" x-text="stats.totalFemale">0</p>
        <p class="text-medium font-semibold text-black mt-1">TOTAL COMPLAINTS</p>
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
        <input type="text" placeholder="Search..." class="w-96 h-8 border border-gray-300 rounded-lg pl-10 pr-2 text-sm focus:outline-none" />
        </input>
      </div>

    <div class="flex gap-2 w-fit">
      <select class="h-8 px-3 text-sm focus:outline-none">
        <option>TYPE</option>
        <option>Document Request</option>
        <option>Complaints</option>
      </select>
      <select class="h-8 px-3 text-sm focus:outline-none">
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
        <th class="py-2 px-4">TYPE</th>
        <th class="py-2 px-4">DESCRIPTION</th>
        <th class="py-2 px-4">DATE FILED</th>
        <th class="py-2 px-4">DATE COMPLETED</th>
        <th class="py-2 px-4">STATUS</th>
      </tr>
    </thead>
    <tbody>

      <!-- Row 1: Clearance -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-CLE-125</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Document Req.</td>
        <td class="py-2 px-4 text-center">Barangay Clearance</td>
        <td class="py-2 px-4 text-center">21/11/2025</td>
        <td class="py-2 px-4 text-center">--/--/----</td>
        <td class="py-2 px-4 text-center">Pending</td>
        </tr>

        <!-- Row 2: Certificate -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-CER-124</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Document Req</td>
        <td class="py-2 px-4 text-center">Barangay Certificate</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">--/--/----</td>
        <td class="py-2 px-4 text-center">Pending</td>
          </tr>

      <!-- Row 3: Indigency -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-IND-123</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Document Req.</td>
        <td class="py-2 px-4 text-center">Indigency Clearance</td>
        <td class="py-2 px-4 text-center">20/11/2025</td>
        <td class="py-2 px-4 text-center">--/--/----</td>
        <td class="py-2 px-4 text-center">In Progress</td>
        </tr>

      <!-- Row 4: Resident -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">DOC-RES-122</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Document Req.</td>
        <td class="py-2 px-4 text-center">Barangay Resident</td>
        <td class="py-2 px-4 text-center">15/10/2025</td>
        <td class="py-2 px-4 text-center">16/10/2025</td>
        <td class="py-2 px-4 text-center">Completed</td>
        </tr>

        <!-- Row 5: Complaint -->
      <tr class="text-sm whitespace-nowrap">
        <td class="py-2 px-4 text-center">COM-CMI-121</td>
        <td class="py-2 px-4 text-center">Dela Cruz</td>
        <td class="py-2 px-4 text-center">Juan</td>
        <td class="py-2 px-4 text-center">Complaint</td>
        <td class="py-2 px-4 text-center">Community Issue/td>
        <td class="py-2 px-4 text-center">9/9/2025</td>
        <td class="py-2 px-4 text-center">9/25/2025</td>
        <td class="py-2 px-4 text-center">Completed</td>
        </tr>
        
        
    </tbody>
  </table>
</div>
</main>


@endsection

