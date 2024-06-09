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

<body class="h-full bg-gray-200">

    <div class="min-h-full">
        <x-navabr></x-navabr>

        <x-header>{{ $title }}</x-header>

        <main>
            @if (session('success'))
                <div x-data="{ isOpen: true }">
                    <div x-show="isOpen">

                        <x-dialog>{{ session('success') }}</x-dialog>
                    </div>
                </div>
            @endif
            <div class="mx-auto max-w-7xl border-2  py-6 desktop:px-8 mobile:px-3">

                {{ $slot }}
            </div>

        </main>
    </div>



</body>
<script type="text/javascript">
    $(document).ready(function() {
        @if (session('showModal'))
            $('#successModal').modal('show');
        @endif

        setTimeout(function() {
            $(".alert").alert('close');
        }, 500);
    });
</script>

</html>
