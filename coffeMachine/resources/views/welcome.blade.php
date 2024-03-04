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
            <div class="search-bar">
                <input id="search-input" class="search-input" type="text"><i id="magnifyingGlass"
                    class="fa-solid fa-magnifying-glass"></i>
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
        <article class="article">
            <h2>1. Espresso</h2>
            <p>El espresso es un café fuerte y concentrado que se prepara forzando agua caliente a través de granos
                de
                café finamente molidos. Es la base de muchas otras bebidas de café.</p>
        </article>

        <article class="article">
            <h2>2. Cappuccino</h2>
            <p>El cappuccino es una bebida de café italiana que consiste en partes iguales de espresso, leche
                vaporizada
                y espuma de leche. Es conocido por su textura cremosa y su capa de espuma.</p>
        </article>

        <article class="article">
            <h2>3. Latte</h2>
            <p>El latte es una bebida de café elaborada con espresso y una cantidad generosa de leche vaporizada.
                Suele
                tener una capa de espuma en la parte superior y puede ser aromatizado con jarabes.</p>
        </article>

        <article class="article">
            <h2>4. Americano</h2>
            <p>El americano es una bebida de café que se hace diluyendo el espresso con agua caliente. Tiene un
                sabor
                más suave que el espresso pero conserva su aroma y sabor distintivos.</p>
        </article>

        <article class="article">
            <h2>5. Macchiato</h2>
            <p>El macchiato es una bebida de café que consiste en espresso con una pequeña cantidad de leche
                vaporizada
                o espuma de leche. Su nombre significa "manchado" en italiano, refiriéndose a la mancha de leche en
                el
                espresso.</p>
        </article>

        <article class="article">
            <h2>6. Mocha</h2>
            <p>El mocha es una bebida de café que combina espresso, leche vaporizada, chocolate y crema batida. Es
                una
                opción popular para los amantes del chocolate y el café.</p>
        </article>

        <article class="article">
            <h2>7. Frappé</h2>
            <p>El frappé es una bebida de café fría y espumosa hecha con espresso, leche, hielo y jarabes de sabor.
                Se
                mezcla hasta obtener una consistencia suave y se sirve con crema batida opcional.</p>
        </article>

        <article class="article">
            <h2>8. Cold Brew</h2>
            <p>El cold brew es una bebida de café hecha con granos de café molidos en frío durante un período
                prolongado
                de tiempo. Se sirve frío y tiene un sabor suave y menos ácido que el café caliente.</p>
        </article>
        <div class="reload-rain"></div>
    </section>
    <footer>
        <div class="copyright"></div>
        <div class="made-in-date"></div>
    </footer>
</body>
<script>
    const magnifyingGlass = document.querySelector("#magnifyingGlass");
    let clicked = false;
    function showSearchBar(event) {
        if (!clicked) {
            document.querySelector("#search-input").style.display = "inline";

            clicked = true;
        } else {
            document.querySelector("#search-input").style.display = "none";
            clicked = false;
        }
    }
    magnifyingGlass.addEventListener("click", showSearchBar);

    document.addEventListener('keyup', e => {
        if (e.target.matches('#search-input')) {
            document.querySelectorAll(".article").forEach(article => {
                article.textContent.toLowerCase().includes(e.target.value.toLowerCase())
                    ? article.classList.remove("filter")
                    : article.classList.add("filter")
            })
        }
    })

</script>

</html>