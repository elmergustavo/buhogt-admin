<!DOCTYPE html>
<html lang="en" data-sidenav-view="{{ $sidenav ?? 'default' }}">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css')
</head>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
@filamentStyles
@vite('resources/css/app.css')

<body class="dark:bg-gray-950">

    <div class="flex wrapper">

        @include('layouts.shared/sidebar')

        <div class="page-content">

            @include('layouts.shared/topbar')

            <main class="flex-grow p-6">

                @include('layouts.shared/page-title', [
                    'title' => $title,
                    'sub_title' => $sub_title,
                ])

                @yield('content')

            </main>

            @include('layouts.shared/footer')

        </div>

    </div>

    @include('layouts.shared/customizer')

    @include('layouts.shared/footer-scripts')

    {{-- @vite(['resources/js/app.js']) --}}
    {{-- @livewire('notifications') --}}

    {{-- @filamentScripts --}}

</body>


</html>
