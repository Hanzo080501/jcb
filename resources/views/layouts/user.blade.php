<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ $title ?? config('app.name') }}
    </title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <link rel="icon" href="{{ asset('/assets/img/logo.png') }}" type="image/x-icon">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<style>
    body {
        scroll-behavior: smooth;
    }

    .carousel {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
    }

    .carousel-item {
        flex: 0 0 auto;
        margin-right: 16px;
        /* Spacing between cards */
    }

    .carousel-container {
        display: flex;
        align-items: center;
    }

    .carousel::-webkit-scrollbar {
        display: none;
    }

    .carousel-container a {
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .carousel-item {
            width: calc(100vw - 32px);
        }
    }

    .swiper-slide {
        max-width: 300px;
        height: auto;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .swiper-slide .p-5 {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .swiper-slide .p-5 p {
        word-wrap: break-word;
        overflow-wrap: break-word;
        max-height: 150px;
        overflow: hidden;
    }

    .swiper-slide .p-5 #fullDescription {
        max-height: 300px;
        overflow-y: auto;
    }

    .read-more-btn {
        align-self: flex-start;
    }
</style>

<body class="font-sans antialiased">
    <div>
        <x-navbar></x-navbar>
    </div>
    <div>
        @yield('contents')
    </div>

    @yield('script')

    <div>
        <x-footer></x-footer>
    </div>
</body>

</html>
