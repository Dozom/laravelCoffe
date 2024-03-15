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
    <link href="{{ asset('coffe.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous">
</head>

<body>
    @include('common.header')
    <section class="main-section">
        <div class="left-menu">
            <div class="home"></div>
            <div class="facebook-icon"></div>
            <div class="instagram-icon"></div>
        </div>
        <section class="first-page">
            <h1>{{ __('homepage.welcome_message') }}</h1>
            <p>{{ __('homepage.welcome_message_description') }}</p>
        </section>

        <!-- Each post data -->
        @foreach ($posts as $post)
        @include('articles.article-with-images', ['post' => $post])
        @endforeach
        <div class="reload-rain"></div>
    </section>
    @include('common.footer')
</body>
<script src="{{asset('/js/search.js')}}"></script>

</html>