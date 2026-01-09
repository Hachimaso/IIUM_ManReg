<x-app-layout>
    <div class="min-h-screen bg-gray-100 py-12 px-4">
        <div class="max-w-6xl mx-auto bg-white rounded-3xl shadow-xl overflow-hidden border-4 border-[#2f615b]">
            
            <div class="bg-[#2da392] p-8 m-4 rounded-2xl flex justify-center items-center">
                <div class="bg-white p-4 rounded-xl shadow-sm">
                    <img src="{{ asset('images/IIUM_TAWHIDIC_UMMATIC_KHALIFAH.png') }}" alt="IIUM Logo" class="h-90">
                </div>
            </div>
            <div class="p-10 text-gray-800">
                <h1 class="text-2xl font-bold mb-2">Hi, {{ Auth::user()->name }}</h1>
                <p class="text-sm mb-8">Please fill in all the required information before proceeding.</p>

                <form action="#" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-16 gap-y-6">
                        
                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <label class="text-lg font-medium">Current Credit Hour :</label>
                                <input type="text" class="w-24 bg-gray-100 border-gray-300 rounded-full">
                            </div>

                            <div class="flex items-center justify-between">
                                <label class="text-lg font-medium">Credit Earned :</label>
                                <input type="text" class="w-24 bg-gray-100 border-gray-300 rounded-full">
                            </div>

                            <div class="flex items-start justify-between">
                                <label class="text-lg font-medium pt-2">Select Kulliyyah :</label>
                                <select class="w-64 bg-gray-100 border-gray-300 rounded-lg text-sm">
                                    <option>Please Select</option>
                                    <option>AHAS KIRKHS</option>
                                    <option>KICT</option>
                                    <option>KOE</option>
                                    <option>KENMS</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="flex items-center justify-between">
                                <label class="text-lg font-medium">Subject :</label>
                                <select class="w-64 bg-gray-100 border-gray-300 rounded-lg">
                                    <option>Please Select</option>
                                    <option>Data Structure and Algorithm</option>
                                    <option>Operating System</option>
                                    <option>Database Management System</option>
                                    <option>Computer Networks</option>
                                </select>
                            </div>

                            <div class="flex items-start justify-between">
                                <label class="text-lg font-medium">Reason :</label>
                                <textarea rows="6" class="w-64 bg-gray-100 border-gray-300 rounded-2xl"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col items-end space-y-2 mt-8">
                        <div class="flex space-x-2">
                            <button type="button" class="bg-[#2da392] text-white px-6 py-1 rounded shadow-md hover:bg-[#248a7b]">View Queue</button>
                            <button type="submit" class="bg-[#2da392] text-white px-8 py-1 rounded shadow-md hover:bg-[#248a7b]">Submit</button>
                        </div>
                        <button type="button" class="bg-[#cc2229] text-white px-10 py-1 rounded shadow-md hover:bg-red-700">Log Out</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
