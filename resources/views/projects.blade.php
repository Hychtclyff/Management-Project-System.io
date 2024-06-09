<x-layout>
    @php
        $userRole = Auth::user()->role;

    @endphp


    <x-slot:title>{{ $title }}</x-slot:title>

    <div class=" my-prject w-full rounded-2xl overflow-y-auto h-[45rem] bg-white scrollbar-modify sm:overflow-x-scroll"
        x-data="{ add: false, create: false }">

        @if ($userRole === 'manager')
            <div class="tools-table h-10 w-full bg-gray-900 flex justify-end items-center">
                <a href="#create" @click="create = !create"
                    class="bg-blue-500 p-1 px-7  rounded-xl mx-5 hover:bg-blue-300 transition-colors duration-150 shadow-lg">New</a>
            </div>
        @endif

        <table class="min-w-full leading-normal  ">
            <thead class="sticky top-0 z-10">
                <tr>
                    <th
                        class="px-5  py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Name Project
                    </th>
                    <th
                        class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        role
                    </th>
                    <th
                        class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Start at
                    </th>
                    <th
                        class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        is due
                    </th>
                    <th
                        class="hidden md:table-cell px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        status
                    </th>
                    <th
                        class="text-center px-5 py-3 border-b-2 border-gray-200 bg-gray-100  text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="w-full ">
                @foreach ($projects as $project)
                    <x-rowproject :project="$project"></x-rowproject>
                @endforeach
                <!-- Add more rows as needed -->
            </tbody>
        </table>
        <div x-show="create"
            class="flex justify-center z-10 absolute top-0 left-1/2 -translate-x-1/2 w-full h-fit px-1 md:px-0  bg-gray-600/5 backdrop-blur-sm">
            <x-create></x-create>
        </div>
    </div>




</x-layout>
