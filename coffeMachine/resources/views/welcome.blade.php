<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reserva Cafe</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('welcome.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous">
</head>

<body class="antialiased">
    <header>
        <div class="logo-area">
            <div class="logo"><img src="logo.png" alt=""></div>
            <div class="hambuguer"></div>
        </div>
        <div class="search-bar-area">
            <div class="search-bar">
            <i class="fa-solid fa-magnifying-glass"></i><input type="text">
            </div>
            <div class="welcome-message"></div>
        </div>
        <div class="coffe-image-area">Coffe</div>
        <div class="title-area">Bienvenido a ReservaCafe</div>
    </header>
    <section class="main-section">
        <div class="left-menu">
            <div class="home"></div>
            <div class="facebook-icon"></div>
            <div class="instagram-icon"></div>
        </div>
        <div class="coffe-section"></div>
        <div class="reload-rain"></div>
    </section>
    <footer>
        <div class="copyright"></div>
        <div class="made-in-date"></div>
    </footer>
</body>

</html>