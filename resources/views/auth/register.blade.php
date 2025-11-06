@extends('layouts.app')

@section('content')
<div class="relative min-h-screen w-full bg-cover bg-center" style="background-image: url('https://media.karousell.com/media/photos/products/2025/3/4/lot_for_sale_in_barangay_daang_1741074654_b1a72035');">

    <div class="absolute inset-0 bg-white/70 z-10"></div>

    <div class="relative z-20 flex min-h-screen w-full items-center justify-center p-4">

        <form class="w-full">
            <div id="step-1" class="mx-auto max-w-4xl">
                <div class="flex max-h-[90vh] flex-col overflow-hidden rounded-2xl bg-[#F7F2EB]">
                    <div class="flex shrink-0 items-center bg-[#134573CC] p-4">
                        <img src="https://tse2.mm.bing.net/th/id/OIP._bP7eQwOSrZjwv-doDDsWAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Barangay Logo" class="mr-4 h-12 w-12 rounded-full">
                        <h1 class="font-barlow text-xl font-semibold text-[#FFFFFF]">Barangay Daang Bakal</h1>
                    </div>

                    <div class="overflow-y-auto p-6">
                        <h3 class="mb-4 text-2xl font-semibold text-[#000000]">PERSONAL INFORMATION</h3>
                        <p class="mb-4 text-sm text-[#000000]">All fields marked with <span class="text-[#F01136E6]">*</span> are required.</p>
                        <div class="grid grid-cols-1 gap-x-8 gap-y-4 md:grid-cols-2">
                            <div>
                                <label for="last_name" class="mb-1 block text-sm font-medium text-[#000000]">Last Name <span class="text-[#F01136E6]">*</span></label>
                                <input type="text" name="last_name" id="last_name" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0" required>
                            </div>

                            <div class="row-span-3">
                               <label for="photo-upload" class="flex h-full w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-[#66AABB] bg-gray-200 transition hover:bg-gray-300">
                                    <svg class="h-10 w-10 text-[#66AABB]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.437 4h3.126a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                                    <span class="mt-2 text-sm text-[#00000080]">Upload Photo <span class="text-[#F01136E6]">*</span></span>
                                </label>
                                <input id="photo-upload" name="photo" type="file" class="hidden" required>
                            </div>

                            <div>
                                <label for="first_name" class="mb-1 block text-sm font-medium text-[#000000]">First Name <span class="text-[#F01136E6]">*</span></label>
                                <input type="text" name="first_name" id="first_name" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0" required>
                            </div>

                            <div>
                                <label for="middle_name" class="mb-1 block text-sm font-medium text-[#000000]">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                            </div>

                            <div>
                                <label for="suffix" class="mb-1 block text-sm font-medium text-[#000000]">Suffix</label>
                                <input type="text" name="suffix" id="suffix" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                            </div>

                            <div>
                                <label for="gender" class="mb-1 block text-sm font-medium text-[#000000]">Gender <span class="text-[#F01136E6]">*</span></label>
                                <select name="gender" id="gender" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 text-[#000000] invalid:text-gray-500 focus:outline-none focus:ring-0" required>
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Non Binary">Non Binary</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>

                            <div>
                                <label for="age" class="mb-1 block text-sm font-medium text-[#000000]">Age <span class="text-[#F01136E6]">*</span></label>
                                <input type="number" name="age" id="age" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" required>
                            </div>

                            <div>
                                <label for="civil_status" class="mb-1 block text-sm font-medium text-[#000000]">Civil Status <span class="text-[#F01136E6]">*</span></label>
                                <select name="civil_status" id="civil_status" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 text-[#000000] invalid:text-gray-500 focus:outline-none focus:ring-0" required>
                                    <option value="" disabled selected>Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                            </div>

                            <div>
                                <label for="dob" class="mb-1 block text-sm font-medium text-[#000000]">Date of Birth <span class="text-[#F01136E6]">*</span></label>
                                <input type="date" name="dob" id="dob" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 text-[#000000] invalid:text-gray-500 focus:outline-none focus:ring-0" required>
                            </div>

                            <div>
                                <label for="citizenship" class="mb-1 block text-sm font-medium text-[#000000]">Citizenship</label>
                                <input type="text" name="citizenship" id="citizenship" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                            </div>

                            <div>
                                <label for="place_of_birth" class="mb-1 block text-sm font-medium text-[#000000]">Place of Birth <span class="text-[#F01136E6]">*</span></label>
                                <input type="text" name="place_of_birth" id="place_of_birth" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0" required>
                            </div>
                        </div>
                    </div>

                    <div class="flex shrink-0 justify-end gap-3 p-4">
                        <button type="button" class="rounded-lg bg-[#A2C4D9C7] px-3 py-1.5 text-sm font-semibold text-[#000000]">CANCEL</button>
                        <button id="next-button" type="button" class="rounded-lg bg-[#A2C4D9C7] px-5 py-1.5 text-sm font-semibold text-[#000000]">NEXT</button>
                    </div>
                </div>
            </div>

            <div id="step-2" class="mx-auto hidden max-w-4xl">
                <div class="flex max-h-[90vh] flex-col overflow-hidden rounded-2xl bg-[#F7F2EB]">
                    <div class="flex shrink-0 items-center bg-[#134573CC] p-4">
                        <img src="https://tse2.mm.bing.net/th/id/OIP._bP7eQwOSrZjwv-doDDsWAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Barangay Logo" class="mr-4 h-12 w-12 rounded-full">
                        <h1 class="font-barlow text-xl font-semibold text-[#FFFFFF]">Barangay Daang Bakal</h1>
                    </div>

                    <div class="overflow-y-auto p-6">
                        <div>
                            <h3 class="mb-4 text-2xl font-semibold text-[#000000]">CONTACT INFORMATION</h3>
                             <p class="mb-4 text-sm text-[#000000]">All fields marked with <span class="text-[#F01136E6]">*</span> are required.</p>
                            <div class="grid grid-cols-1 gap-x-8 gap-y-4 md:grid-cols-2">
                                <div class="flex flex-col space-y-4">
                                    <div>
                                        <label for="contact_number" class="mb-1 block text-sm font-medium text-[#000000]">Contact Number <span class="text-[#F01136E6]">*</span></label>
                                        <div class="relative">
                                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                                <span class="">+63</span>
                                            </div>
                                            <input type="tel" name="contact_number" id="contact_number" class="h-10 w-full rounded-md border border-gray-300 py-2 pl-12 pr-3 focus:outline-none focus:ring-0" maxlength="10" inputmode="numeric">
                                        </div>
                                    </div>
                                    <div>
                                        <label for="email" class="mb-1 block text-sm font-medium text-[#000000]">Email Address</label>
                                        <input type="email" name="email" id="email" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                                    </div>
                                </div>
                                <div class="flex flex-col space-y-4">
                                    <div class="grid grid-cols-2 gap-4">
                                        <label class="flex h-36 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-[#66AABB] bg-gray-200 text-center hover:bg-gray-300">
                                            <svg class="h-8 w-8 text-[#66AABB]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" /><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" /></svg>
                                            <span class="mt-2 text-sm text-[#00000080]">Upload Front Photo <span class="text-[#F01136E6]">*</span></span>
                                            <input type="file" class="hidden">
                                        </label>
                                        <label class="flex h-36 cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-[#66AABB] bg-gray-200 text-center hover:bg-gray-300">
                                            <svg class="h-8 w-8 text-[#66AABB]" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" /><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" /></svg>
                                            <span class="mt-2 text-sm text-[#00000080]">Upload Back Photo <span class="text-[#F01136E6]">*</span></span>
                                            <input type="file" class="hidden">
                                        </label>
                                    </div>
                                    <p class="px-1 text-justify text-xs text-[#00000080]">All government-issued valid IDs are accepted. For students, present a School ID. For applicants below 5 years old, a Certificate of Live Birth is required. Accepted file formats are JPG or PNG, with a maximum file size of 5 MB.</p>
                                </div>

                                <div>
                                    <label for="address" class="mb-1 block text-sm font-medium text-[#000000]">House/Unit Number, Street <span class="text-[#F01136E6]">*</span></label>
                                    <input type="text" name="address" id="address" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <h3 class="mb-4 text-2xl font-semibold text-[#000000]">ACCOUNT CONFIRMATION</h3>
                            <div class="grid grid-cols-1 gap-x-6 gap-y-4 md:grid-cols-3">
                                <div>
                                    <label for="username" class="mb-1 block text-sm font-medium text-[#000000]">User Name <span class="text-[#F01136E6]">*</span></label>
                                    <input type="text" name="username" id="username" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                                </div>
                                <div>
                                    <label for="password" class="mb-1 block text-sm font-medium text-[#000000]">Password <span class="text-[#F01136E6]">*</span></label>
                                    <input type="password" name="password" id="password" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                                </div>
                                <div>
                                    <label for="password_confirmation" class="mb-1 block text-sm font-medium text-[#000000]">Confirm Password <span class="text-[#F01136E6]">*</span></label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="h-10 w-full rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-0">
                                </div>
                            </div>
                            <p class="mt-2 text-xs text-[#00000080]">Password must be at least 8 characters long and include an uppercase letter, lowercase letter, number, and special character.</p>
                        </div>
                        <div class="mt-6 flex items-center">
                            <input id="agree" type="checkbox" class="h-4 w-4 rounded text-[#000000] focus:ring-[#000000]">
                            <label for="agree" class="ml-2 block text-sm text-[#000000]">I have read and agree to the collection and use of my personal information as described in the
                            <a href="/privacy-policy" target="_blank" class="text-blue-600 underline">Privacy Policy</a>.</label>
                        </div>
                    </div>

                    <div class="flex shrink-0 justify-end gap-3 p-4">
                        <button id="back-button" type="button" class="rounded-lg bg-[#A2C4D9C7] px-5 py-1.5 text-sm font-semibold text-[#000000]">BACK</button>
                        <button type="submit" class="rounded-lg bg-[#239549C7] px-5 py-1.5 text-sm font-semibold uppercase tracking-wide text-[#000000]">SUBMIT REGISTRATION</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const step1 = document.getElementById('step-1');
        const step2 = document.getElementById('step-2');
        const nextButton = document.getElementById('next-button');
        const backButton = document.getElementById('back-button');

        nextButton.addEventListener('click', function () {
            step1.classList.add('hidden');
            step2.classList.remove('hidden');
        });

        backButton.addEventListener('click', function () {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
        });

        const contactInput = document.getElementById('contact_number');
        contactInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });
    });
</script>
@endsection