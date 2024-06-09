<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="progres w-full flex lg:flex-row lg:justify-between sm::flex-col-reverse bg-transparent">
        <div class="status lg:flex sm::grid grid-cols-2 grid-flow-row gap-2 sm::my-2">
            <div
                class="on-going px-16 py-10 flex flex-col justify-center items-center rounded-lg transition-shadow ease-in bg-gray-800 border-x-2 border-gray-200 text-white shadow-md hover:shadow-blue-500">
                <div class="header">On Progress</div>
                <div class="body">{{ $projectsOnProgressCount }}/{{ $totalProjectsCount }}</div>
            </div>
            <div
                class="onprogres px-16 py-10 flex flex-col justify-center items-center rounded-lg transition-shadow ease-in bg-gray-800 border-x-2 border-gray-200 text-white shadow-md hover:shadow-blue-500">
                <div class="header">On Going</div>
                <div class="body">0/{{ $totalProjectsCount }}</div>
            </div>

            <div
                class="complete px-16 py-10 flex flex-col justify-center items-center rounded-lg transition-shadow ease-in bg-gray-800 border-x-2 border-gray-200 text-white shadow-md hover:shadow-blue-500">
                <div class="header">Complate</div>
                <div class="body">{{ $projectCompleteCount }}/{{ $totalProjectsCount }}</div>
            </div>
        </div>

        <div
            class="on-going px-16 py-10 flex justify-center items-center rounded-lg transition-shadow ease-in bg-gray-800 border-x-2 border-gray-200 text-white shadow-md hover:shadow-blue-500">
            <div class="img-profile bg-gray-800 mx-1">
                <div class="w-10 h-10 rounded-full bg-white shadow-lg"></div>
            </div>
            <div class="profile mx-1">
                <div class="profile-name">{{ $user['name'] }}</div>
                <p>Web developers | Employee</p>
            </div>
        </div>
    </div>

    <div x-data="{ isOpen: 'performance' }" class="statistic rounded-xl overflow-hidden my-5">
        <div class="header-statistic bg-gray-800 text-gray-500 h-fit">
            <ul class="px-10 flex">
                <li>
                    <button @click="isOpen = 'performance'"
                        :class="{ 'bg-white border-t-black': isOpen === 'performance', 'border-t-white': isOpen !== 'performance' }"
                        class="h-full w-44 hover:bg-white rounded-t-sm py-4 px-5 hover:border-t-black border-t-4 border-t-white hover:text-black transition-colors duration-300">
                        Performance
                    </button>
                </li>
                <li>
                    <button @click="isOpen = 'skills'"
                        :class="{ 'bg-white border-t-black': isOpen === 'skills', 'border-t-white': isOpen !== 'skills' }"
                        class="h-full w-44 hover:bg-white rounded-t-sm py-4 px-5 hover:border-t-black border-t-4 border-t-white hover:text-black transition-colors duration-300">
                        Skills
                    </button>
                </li>
                <li>
                    <button @click="isOpen = 'timeline'"
                        :class="{ 'bg-white border-t-black': isOpen === 'timeline', 'border-t-white': isOpen !== 'timeline' }"
                        class="h-full w-44 hover:bg-white rounded-t-sm py-4 px-5 hover:border-t-black border-t-4 border-t-white hover:text-black transition-colors duration-300">
                        Timeline
                    </button>
                </li>
            </ul>
        </div>

        <div class="Skills w-full bg-white px-10 h-full">
            <div x-show="isOpen === 'performance'" id="my-chart" class="p-10">
                <span class="border-b-2  w-full text-center text-xl flex flex-col">Your Productive </span>
                <table class="charts-css line multiple hide-data show-labels show-primary-axis show-data-axes">

                    <caption> Line Example #9 </caption>
                    <thead>
                        <tr>
                            <th scope="col"> Year </th>
                            <th scope="col"> Progress 1 </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"> 2000 </th>
                            <td style="--start: 0.1; --end: 0.5;"><span class="data"> 50 </span></td>

                        </tr>
                        <tr>
                            <th scope="row"> 2010 </th>
                            <td style="--start: 0.5; --end: 0.8;"><span class="data"> 80 </span></td>

                        </tr>
                        <tr>
                            <th scope="row"> 2020 </th>
                            <td style="--start: 0.8; --end: 0.4;"><span class="data"> 40 </span></td>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div x-show="isOpen === 'skills'" class="skills p-5">
                <div class="py-5 w-full">
                    <div x-data="{ isOpen: 'front-end' }" class="body-content flex">
                        <div class="your-skills w-1/4 h-full flex flex-col bg-gray-200 p-5 rounded-xl mx-3">
                            <span class="border-b-2 border-gray-500 pb-2 w-full text-center text-xl">I am is Full Stuck
                                dev</span>
                            <ul class="flex justify-start flex-col my-3">
                                <li class="bg-white rounded-xl w-full my-1">
                                    <button @click="isOpen = 'front-end'"
                                        class="bg-slate-300 text-center transition-all duration-500 w-full px-5 py-6 rounded-xl hover:scale-105">
                                        Front end
                                    </button>
                                </li>
                                <li class="bg-white rounded-xl w-full my-1">
                                    <button @click="isOpen = 'back-end'"
                                        class="bg-slate-300 text-center transition-all duration-500 w-full px-5 py-6 rounded-xl hover:scale-105">
                                        back end
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div x-show="isOpen === 'front-end'"
                            class="statistic-skills w-3/4 h-ful bg-gray-200 px-5 py-2 rounded-xl h-[20rem] mx-3 flex justify-start">
                            <div class="tools py-2 h-full w-1/4 px-1 flex flex-col">
                                <span class="border-b-2 border-gray-500 pb-2 w-full text-center text-xl">Tools</span>

                                <ul class="flex flex-col justify-start overflow-y-auto scrollbar-modify px-3">
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        tailwind
                                    </li>
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        tailwind
                                    </li>
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        tailwind
                                    </li>
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        tailwind
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="list project py-2 h-full overflow-y-auto scrollbar-modify w-3/4 px-1 flex flex-col">
                                <span class="border-b-2 border-gray-500 pb-2 w-full text-center text-xl">Last
                                    Project</span>

                                <ul role="list" class="divide-y bg-slate-300 px-5 rounded-xl my-4 ">
                                    <li class="flex justify-between gap-x-6 py-5 mx-2">
                                        <div class="flex min-w-0 gap-x-4">
                                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="" />
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm font-semibold leading-6 text-gray-900">
                                                    Project "Project Management"
                                                </p>
                                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                                                    <a href="">link</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                            <p class="text-sm leading-6 text-gray-900">
                                                rate 8/10
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div x-show="isOpen === 'back-end'"
                            class="statistic-skills w-3/4 h-ful bg-gray-200 px-5 py-2 rounded-xl h-[20rem] mx-3 flex justify-start">
                            <div class="tools py-2 h-full w-1/4 px-1 flex flex-col">
                                <span class="border-b-2 border-gray-500 pb-2 w-full text-center text-xl">Tools</span>

                                <ul class="flex flex-col justify-start overflow-y-auto scrollbar-modify px-3">
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        laravel
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        laravel
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        laravel
                                    <li class="bg-slate-300 p-3 w-full rounded-lg shadow-md my-2">
                                        laravel
                                </ul>
                            </div>
                            <div
                                class="list project py-2 h-full overflow-y-auto scrollbar-modify w-3/4 px-1 flex flex-col">
                                <span class="border-b-2 border-gray-500 pb-2 w-full text-center text-xl">Last
                                    Project</span>

                                <ul role="list" class="divide-y bg-slate-300 px-5 rounded-xl my-4 ">
                                    <li class="flex justify-between gap-x-6 py-5 mx-2">
                                        <div class="flex min-w-0 gap-x-4">
                                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="" />
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm font-semibold leading-6 text-gray-900">
                                                    Project "Project Management"
                                                </p>
                                                <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                                                    <a href="">link</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                            <p class="text-sm leading-6 text-gray-900">
                                                rate 8/10
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div x-show="isOpen === 'timeline'" class="skills p-5">
                <div class="py-5 w-full overflow-auto">
                    <ul role="list"
                        class="divide-y divide-gray-100 max-h-[33rem] overflow-x-auto scrollbar-modify px-3">
                        <a href="/prject/id=">

                            @foreach ($projectsDueSoon as $item)
                                <li class="flex justify-between gap-x-6 py-5">
                                    <div class="flex min-w-0 gap-x-4">
                                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="" />
                                        <div class="min-w-0 flex-auto">
                                            <p class="text-sm font-semibold leading-6 text-gray-900">
                                                {{ $item['name'] }}
                                            </p>
                                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                                                is progres 30%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                                        <p class="text-sm leading-6 text-gray-900">
                                            {{ $item['role'] }}
                                        </p>
                                        <p class="mt-1 text-xs leading-5 text-gray-500">
                                            Last seen
                                            <time datetime="2023-01-23T13:23Z">is due 7 week</time>
                                        </p>
                                    </div>
                                </li>
                            @endforeach

                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-layout>
