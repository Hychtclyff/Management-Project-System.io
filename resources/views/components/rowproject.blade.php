<div>
    <tr class="hover:bg-blue-400">
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <div class="flex items-center">
                <div class="flex-shrink-0 w-10 h-10">
                    <img class="w-full h-full rounded-full" src="https://via.placeholder.com/40" alt="Avatar">
                </div>
                <div class="ml-3">
                    <p class="text-gray-900 whitespace-no-wrap">
                        {{ $project['name'] }}
                    </p>
                </div>
            </div>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm hidden md:table-cell">
            <p class="text-gray-900 whitespace-no-wrap">{{ $project['role'] }}</p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm hidden md:table-cell ">
            <p class="text-gray-900 whitespace-no-wrap">{{ $project['created_at']->format('l, d F Y') }}
            </p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm hidden md:table-cell ">
            <p class="text-gray-900 whitespace-no-wrap"> {{ $project['due_date'] }}

            </p>
        </td>
        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm  hidden md:table-cell ">
            <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                <x-status color="bg-red-200">
                    <span class="relative">
                        {{ $project['status'] }}


                    </span>

                </x-status>
            </span>
        </td>


        <td
            class="px-5 py-6 border-b border-gray-200 bg-white text-sm text-black flex justify-evenly items-center  flex-col md:flex-row ">
            @if (request()->routeIs('myprojects'))

                @if ($project['status'] !== 'Complete')
                    <x-btnactions href="/projects/submission/id={{ $project['id'] }}" @click="submission=!submission"
                        color="{{ $project['section'] === 'implementasi' ? 'bg-yellow-400' : 'bg-gray-500' }}"
                        hover="hover:bg-yellow-300"
                        disabled="{{ $project['section'] === 'implementasi' ? 'pointer-events-auto' : 'pointer-events-none' }}">
                        <span class="mx-1">
                            @if ($project['section'] === 'implementasi')
                                Submission
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#000000">
                                    <path
                                        d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                                </svg>
                            @endif
                        </span>
                    </x-btnactions>
                    <x-btnactions href="/myprojects/update/id={{ $project['id'] }}" @click="update = !update"
                        disabled="" color=" bg-blue-200" index="200" hover="hover:bg-blue-100">
                        <span class="mx-1">Update</span>
                    </x-btnactions>

                @endif

                <x-btnactions @click="detail = !detail" color="bg-green-400" disabled="" hover="hover:bg-green-300"
                    href="/projects/project/id={{ $project['id'] }}">
                    <span class="mx-1 ">Detail</span>
                </x-btnactions>
                <x-btnactions href="/myprojects/delete/id={{ $project['id'] }}"
                    onclick="confirm('apakah ingin dihapus?')" @click="update = !update" disabled=""
                    color=" bg-red-500" index="200" hover="hover:bg-red-100">
                    <span class="mx-1">Delete</span>
                </x-btnactions>
            @endif

            @if (request()->routeIs('projects'))
                <x-btnactions href="/projects/add-project-{{ $project['id'] }}" @click="add=!add" color=" bg-blue-200"
                    index="200" disabled="" hover="hover:bg-blue-100">
                    <span class="mx-1">Add</span>
                </x-btnactions>
                <x-btnactions color="bg-green-400" disabled="" hover="hover:bg-green-300"
                    href="/projects/project/id={{ $project['id'] }}">
                    <span class="mx-1 ">Detail</span>
                </x-btnactions>
            @endif
        </td>

    </tr>

</div>
