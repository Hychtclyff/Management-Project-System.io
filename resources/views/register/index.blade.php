<!DOCTYPE html>
<html lang="en">

<head class="h-full bg-gray-100">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite('resources/css/app.css')
    <title>Halaman Home</title>
</head>

<body class="h-full bg-gray-200 ">

    <section class="h-screen flex justify-center bg-login bg-center bg-cover items-center md:p-12">
        <div class="bg-white/10 rounded-2xl  backdrop-blur-md shadow-lg md:w-1/2 md:p-20 md:h-5/6 md:mx-10"></div>
        <div
            class="flex flex-col justify-center bg-white/10 rounded-2xl  backdrop-blur-md shadow-lg md:w-1/4  p-20 md:h-5/6   ">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-white">
                    Register in to your account
                </h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                <form class="space-y-3" action="/register" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium leading-6  text-white">Name</label>
                        <div class="mt-2">
                            <input id="name" name="name" type="text" required value="{{ old('name') }}"
                                class="@error('name') is-invalid  @enderror block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />

                        </div>
                        @error('name')
                            <div class="alert alert-danger  ">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6  text-white">Email
                            address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                value="{{ old('email') }}"
                                class="@error('email') is-invalid  text-white  @enderror block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-sm font-medium leading-6  text-white">Password</label>

                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required value="{{ old('password') }}"
                                class="@error('password') is-invalid  text-white  @enderror block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                            class=" text-white flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6  shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Register
                        </button>
                    </div>
                </form>
                <a href="/" class="  hover:text-indigo-500 text-white">Login</a>
            </div>
        </div>
    </section>
</body>

</html>
