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
    <link href="{{ asset('register.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="logo-area">
            <div class="logo"><img src="logo.png" alt=""></div>
            <div class="hambuguer"></div>
        </div>
        <div class="search-bar-area">
            <div class="welcome-message"></div>
        </div>
        <div class="coffe-image-area">Coffe</div>
        <div class="title-area">Bienvenido a ReservaCafe</div>
    </header>
    <main class="main-section">
        <h1>Regístrate en ReservaCafe</h1>
        <form action="{{route('validate-register')}}" method="post" class="register-form">
            @csrf
            <input type="text" id="name" autocomplete="off" name="name" placeholder="Nombre" required>

            <input type="email" id="email" name="email" placeholder="Email" required>

            <input type="password" id="password" autocomplete="off" name="password" placeholder="Password" required>

            <input type="submit" value="Registrarse">
        </form>
    </main>
    <footer>
        <div class="copyright"></div>
        <div class="made-in-date"></div>
    </footer>
</body>