    @php
        $progressPercentage = 0;

        switch ($project['section']) {
            case 'planing':
                $progressPercentage = 10;
                break;
            case 'analysis':
                $progressPercentage = 20;
                break;
            case 'design':
                $progressPercentage = 30;
                break;
            case 'development':
                $progressPercentage = 40;
                break;
            case 'build':
                $progressPercentage = 50;
                break;
            case 'testing':
                $progressPercentage = 80;
                break;
            case 'implementasi':
                $progressPercentage = 100;
                break;
            default:
                $progressPercentage = 0;
        }

    @endphp
    <x-layout>

        <x-slot:title>{{ $title }}</x-slot:title>
        <div
            class="flex justify-center  absolute top-0 left-1/2 -translate-x-1/2  w-screen h-screen  overflow-hidden bg-gray-600/5 backdrop-blur-sm">
            <div class="project flex relative   mx-16  py-10  px-10 w-full  rounded-xl my-10 ">
                <a href="{{ url()->previous() }}"
                    class="absolute text-xl shadow-lg top-0 right-10 bg-white hover:bg-gray-500  rounded-full "><svg
                        xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#000">
                        <path
                            d="m336-280-56-56 144-144-144-143 56-56 144 144 143-144 56 56-144 143 144 144-56 56-143-144-144 144Z" />
                    </svg>
                </a>
                <div class="lazy-project p-5 bg-white rounded-xl overflow-hidden w-1/2 shadow-xl mx-2">
                    <div class="header flex flex-col justify-center">
                        <span
                            class="border-b-2 border-gray-500 pb-2 mb-5 w-full text-center text-xl z-10 bg-white">{{ $project['name'] }}</span>
                        <img src="/img/Asuna (SAO version) from SAO _ Minimalist by matsumayu on DeviantArt.png"
                            alt="Placeholder Image" class="w-full h-auto" />
                    </div>
                    <div class="body p-2">
                        {{ $project['description'] }}
                    </div>

                    <div class="footer border-t-4 py-2 mt-5 border-t-gray-500">
                        <div class="mentor">Maneger: {{ $project['project_manager'] }}</div>
                    </div>
                </div>
                <div class="relative project-information my-1   mx-2 w-1/2">
                    <div class="team py-5 bg-white rounded-xl w-full shadow-xl flex flex-col px-5 h-1/2 ">
                        <span
                            class="sticky top-0 border-b-2 border-gray-500 pb-2 w-full text-center text-xl z-10 bg-white">Team
                            Project</span>
                        <ul class=" grid grid-cols-2  mt-3 overflow-y-auto overflow-x-hidden scrollbar-modify">
                            @foreach ($users as $user)
                                <li
                                    class=" bg-slate-300 p-3 relative rounded-xl m-2 text-center shadow-lg hover:scale-105 transition-all duration-300 items-center flex -z-1 justify-start group/card">
                                    <img src="img/Asuna (SAO version) from SAO _ Minimalist by matsumayu on DeviantArt.png"
                                        class="mx-3 h-16 w-16 rounded-full" alt="" />
                                    <div>
                                        <h2 class="text-2xl font-light">{{ $user->name }}</h2>
                                        <p class="text-sm font-italic">Full Stack Dev</p>
                                    </div>

                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="team mt-2 my-1 h-1/2 flex ">
                        <div
                            class="persentase bg-white rounded-xl mx-1 h-full  w-1/2 shadow-xl flex flex-col  py-5  text-center group px-10">
                            <span
                                class="group-hover:animate-none font-bold text-2xl border-b-2 border-gray-500 pb-2">Status</span>
                            <p class="text-sm ">{{ $project['status'] }}</p>
                            <div
                                class="bg-blue-500/{{ $progressPercentage }} p-10   m-10 rounded-xl shadow-xl group-hover:animate-bounce">

                                <span class="group-hover:animate-pulse text-3xl "> {{ $progressPercentage }}% </span>
                            </div>
                        </div>
                        <div
                            class="sponsor bg-white mx-1 rounded-xl h-full  px-5 w-1/2 shadow-xl flex flex-col items-center py-5 ">
                            <span class="border-b-2 border-gray-500 pb-2 w-full text-center">Support by</span>
                            <ul class=" grid grid-cols-3 gap-1 my-3">
                                <li
                                    class="bg-orange-500 p-2 rounded-lg shadow-xl col-span-2 text-center hover:scale-105">
                                    Universitas Jambi</li>
                                <li class="bg-red-500 p-2 rounded-lg shadow-xl  text-center hover:scale-105">Telkomsel
                                </li>
                                <li class="bg-blue-300 p-2 rounded-lg shadow-xl  text-center hover:scale-105">HIMASI
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
    </x-layout>
