<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #333;
        padding: 10px 20px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 14px 20px;
    }

    .navbar a:hover {
        background-color: #575757;
    }

    .navbar .logo {
        font-size: 1.5em;
        color: white;
        font-weight: bold;
    }

    .navbar .menu {
        display: flex;
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .navbar .menu li {
        margin: 0 10px;
    }

    @media (max-width: 600px) {
        .navbar .menu {
            flex-direction: column;
            display: none;
        }

        .navbar .menu.show {
            display: flex;
        }

        .navbar .toggle {
            display: block;
            cursor: pointer;
        }
    }

    .navbar .toggle {
        display: none;
        font-size: 1.5em;
    }
</style>
<div class="navbar">
    <div class="logo">Reservacafe</div>
    <div class="toggle" onclick="toggleMenu()">&#9776;</div>
    <ul class="menu" id="navbarMenu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</div>

<script>
    function toggleMenu() {
        var menu = document.getElementById('navbarMenu');
        if (menu.classList.contains('show')) {
            menu.classList.remove('show');
        } else {
            menu.classList.add('show');
        }
    }
</script>