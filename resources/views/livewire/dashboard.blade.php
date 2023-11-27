<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins">
    <div>
        <x-navbar-dashboard :user="$user" />

        <x-sidebar-dashboard />

        @if (Route::is('dashboard'))
            <div class="fixed top-20 left-[17rem]">
                <h1 class="text-5xl font-bold">Welcome, {{ $user->username }}</h1>
            </div>
        @elseif (Route::is('dashboard.laptop'))
            <div class="fixed top-20 left-72">
                @yield('content')
            </div>
        @else
        @endif
        <div class="">

        </div>
    </div>

    <x-add-product-modal />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {

            var form = $(this).closest("form");

            var name = $(this).data("name");

            event.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        icon: "success"
                    });
                    form.submit();
                }
            });

        });
    </script>

    @livewireScripts
</body>

</html>
