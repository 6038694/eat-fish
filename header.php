<head>
    <meta name="view-transition" content="same-origin" />
</head>

<header>

    <img class="logo" src="assets/img/Logo.png" alt="Logo">
    <nav>
        <div class="menu" id="menu" data-open="false">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About us</a>
            <a href="gallery.php">Gallery</a>
            <a class="btn" href="reserveren.php">Reserveren</a>

        </div>
        <div class="burger-icon" id="burger-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
            </svg>
        </div>
    </nav>
    <script>
        const burgericon = document.getElementById("burger-icon");
        const menu = document.getElementById("menu");

        document.getElementById("burger-icon").addEventListener("click", (e) => {
            menu.dataset.open = menu.dataset.open == "true" ? "false" : "true";
        })
    </script>
</header>