<div class="isolate relative bg-white px-6 py-20 sm:py-16 lg:px-8 w-1/2  rounded-xl my-10">
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
        aria-hidden="true">
        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <button @click="create = !create" class="absolute text-xl shadow-lg top-10 right-10 bg-gray-800 rounded-full "><svg
            xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#ffff">
            <path
                d="m336-280-56-56 144-144-144-143 56-56 144 144 143-144 56 56-144 143 144 144-56 56-143-144-144 144Z" />
        </svg></button>
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">create </h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim
            voluptate.
        </p>
    </div>
    <form action="/myprojects" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf

        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Name
                    Project</label>
                <div class="mt-2.5">
                    <input type="text" name="name" id="name" autocomplete="given-name"
                        class="   @error('name')
                        is-invalid
                    @enderror block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="project_manager" class="block text-sm font-semibold leading-6 text-gray-900">Project
                    Manager</label>
                <div class="mt-2.5">
                    <input type="text" name="project_manager" id="project_manager" autocomplete="family-name"
                        value=""
                        class=" @error('project_manager')
                        is-invalid
                    @enderror block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('project_manager')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="start_at" class="block text-sm font-semibold leading-6 text-gray-900">Craete at</label>
                <div class="mt-2.5">
                    <input type="date" name="start_at" id="start_at" autocomplete="family-name" value=""
                        class=" @error('start_at')
                        is-invalid
                    @enderror block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('start_at')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <label for="due_date" class="block text-sm font-semibold leading-6 text-gray-900">Due
                    Date</label>
                <div class="mt-2.5">
                    <input type="date" name="due_date" id="due_date" autocomplete="family-name" value=""
                        class=" @error('due_date')
                        is-invalid
                    @enderror block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('due_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="role" class="block text-sm font-semibold leading-6 text-gray-900">Project
                    Role</label>
                <div class="mt-2.5">
                    <select name="role" id="role" aria-placeholder="role "
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="">Role</option>
                        <option value="Web Developers">Web Developers</option>
                        <option value="Desktop Developer">Desktop Developer</option>
                        <option value="Mobile Developer">Mobile Developer</option>
                        <option value="Ios Developer">Ios Developer</option>
                    </select>
                    {{-- <input autocomplete="organization"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> --}}
                </div>

            </div>


            <div class="sm:col-span-2">
                <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Description</label>
                <div class="mt-2.5">
                    <textarea name="description" id="description" rows="4"
                        class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>

        </div>
        <div class="mt-10">
            <button type="submit"
                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                Create</button>
        </div>
    </form>
</div>
