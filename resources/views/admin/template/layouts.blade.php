<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('assets/js/charts-pie.js') }}" defer></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x"
        integrity="sha384-PzN3ksR5q2T5b08F5nZRCyGJtv9EzWxFwKf9KkDdS/AAVWxVfPka4LSd8PSsuRmc" crossorigin="anonymous">
    </script>
    <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x"
        integrity="sha384-Jt93BzDf+qsTwcrdZGuStILXtL35RTuEACeDycdvuwURhG48Np8eGuXscH44SYbE" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @include('admin.template.sidebar')

        <div class="flex flex-col flex-1 w-full">

            @include('admin.template.header')

            <main class="h-full overflow-y-auto">

                @yield('content')

            </main>

        </div>
    </div>
</body>

</html>
