<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>
    <div class=" my-prject w-full rounded-2xl overflow-y-auto h-[45rem] bg-white scrollbar-modify"
        x-data="{ update: false, submission: false, create: false }">
        @csrf
        @if (session()->has('create_success'))
            <div class="alert alert-secondary" role="alert">
                {{ session('create_success') }}
            </div>
        @endif
        <table class="min-w-full leading-normal ">

            
            <thead class="sticky top-0 z-10">
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Name Project
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        role
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Start at
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        is due
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
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

     


 


    </div>
</x-layout>
