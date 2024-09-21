@extends('frontend.profile.layout')
@section('profileContent')

 <!-- Main Profile Content -->
 <div class="md:col-span-2 bg-white shadow-md rounded-lg p-6">
    <!-- Personal Information -->
    <div>
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Personal Information</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]"
                    value="Mayank Sharma">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]"
                    value="mayank07feb@gmail.com">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]"
                    value="+91-7905111789">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
        </div>
    </div>

    <hr class="my-6">

    <!-- Address Information -->
    <div>
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Shipping Address</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Address Line 1</label>
                <input type="text"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Address Line 2</label>
                <input type="text"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">City</label>
                <input type="text"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                <input type="text"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
        </div>
    </div>

    <hr class="my-6">

    <!-- Change Password Section -->
    <div>
        <h3 class="text-xl font-semibold text-gray-900 mb-4">Change Password</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Current Password</label>
                <input type="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                <input type="password"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-[#601042] focus:border-[#601042]">
            </div>
        </div>
    </div>

    <hr class="my-6">

    <button class="bg-[#601042] text-white px-6 py-2 rounded-md hover:bg-[#8a396b]">Save Changes</button>
</div>

@endsection