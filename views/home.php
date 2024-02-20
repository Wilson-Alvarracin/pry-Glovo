<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="./../css/home.css">
    <title>Document</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar" id='navBar'>
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95 32" class="glovo-logo header-logo__brand" data-v-13ec0cb2="" data-v-94e22206=""><path fill="#00A082" d="M0 20.944v-.062C0 14.947 4.527 9.917 10.894 9.917c3.169 0 5.28.758 7.211 2.152.363.273.755.787.755 1.514 0 1-.814 1.848-1.84 1.848-.483 0-.845-.211-1.147-.425-1.358-.998-2.836-1.666-5.13-1.666-3.892 0-6.85 3.424-6.85 7.482v.06c0 4.363 2.867 7.573 7.182 7.573 1.992 0 3.802-.636 5.1-1.605v-3.967H12.01c-.905 0-1.659-.698-1.659-1.606 0-.909.754-1.636 1.66-1.636h5.885c1.055 0 1.87.817 1.87 1.879v5.663c0 1.06-.422 1.818-1.298 2.363-1.811 1.212-4.346 2.302-7.513 2.302C4.345 31.848 0 27.123 0 20.944m23.093-9.905a1.8 1.8 0 0 1 1.81-1.818c1.026 0 1.842.818 1.842 1.818v18.78c0 1.03-.816 1.817-1.841 1.817a1.8 1.8 0 0 1-1.811-1.817v-18.78zm19.817 12.54v-.06c0-2.818-2.021-5.15-4.888-5.15-2.927 0-4.798 2.302-4.798 5.089v.06c0 2.787 2.022 5.119 4.858 5.119 2.957 0 4.828-2.302 4.828-5.058m-13.337 0v-.06c0-4.575 3.62-8.361 8.51-8.361 4.888 0 8.479 3.725 8.479 8.3v.06c0 4.544-3.621 8.33-8.54 8.33-4.86 0-8.449-3.725-8.449-8.269m26.105 8.209h-.18c-.997 0-1.661-.637-2.083-1.607l-5.31-12.206c-.092-.273-.212-.575-.212-.908 0-.91.815-1.757 1.81-1.757.996 0 1.51.574 1.811 1.333l4.104 10.6 4.164-10.66c.271-.636.755-1.273 1.72-1.273.996 0 1.78.757 1.78 1.757 0 .333-.12.697-.21.878L57.76 30.18c-.423.94-1.087 1.607-2.083 1.607m22.274-8.208v-.06c0-2.818-2.02-5.15-4.888-5.15-2.927 0-4.798 2.302-4.798 5.089v.06c0 2.787 2.022 5.119 4.86 5.119 2.955 0 4.826-2.302 4.826-5.058m-13.337 0v-.06c0-4.575 3.621-8.361 8.51-8.361 4.888 0 8.479 3.725 8.479 8.3v.06c0 4.544-3.62 8.33-8.54 8.33-4.858 0-8.449-3.725-8.449-8.269" class="glovo-logo__text--green" data-v-13ec0cb2=""></path><path fill="#00A082" d="m90.661 9.961-.2.28-2.751 3.897-2.748-3.89-.201-.282a3.648 3.648 0 0 1 2.949-5.781 3.65 3.65 0 0 1 2.95 5.776M87.711.639c-3.956 0-7.171 3.23-7.171 7.199 0 1.511.468 2.962 1.351 4.195l.19.266 3.735 5.288s.455.747 1.448.747h.892c.995 0 1.448-.747 1.448-.747l3.732-5.289.19-.266a7.155 7.155 0 0 0 1.352-4.195c0-3.969-3.217-7.198-7.17-7.198M85.692 21.58v-.014c0-1.076.851-1.966 2-1.966 1.15 0 1.994.876 1.994 1.952v.014c0 1.067-.852 1.957-2.008 1.957-1.14 0-1.986-.875-1.986-1.943" class="glovo-logo__balloon--green" data-v-13ec0cb2=""></path></svg>
        </a>
        <button id="session" class="btn btn-custom" type="submit"><span class="spn-nav">Iniciar Sesion</span></button>
    </div>
</nav>
<!-- Fin del NavBar -->
    <div id="section-1" class="slt flex">
        <div class="column-2 flex">
            <video autoplay="autoplay" loop="loop" muted="muted" >
                <source src="https://glovoapp.com/images/landing/address-container-animation.webm" preload="auto">
            </video>
        </div>
        <div class="column-2">
            <div class="cnt-ini">
                <div class="flex">
                    <h1><strong>Comida a domicilio y mucho más</strong></h1>
                </div>
                <div class="flex">
                    <p><strong>Supermercados, tiendas, farmacias, ¡lo que sea!</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div id="int-1">
        <img src="https://glovoapp.com/images/waves/address-jumbotron-wave-desktop.svg" alt="" srcset="">
    </div>
    <div id="section-2" class="flex">
        <div class="column-1 flex">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"></span>
                <input id='input' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <p style='font-size: 72px;'>TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO TEXTO </p>
    <script src="./../js/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        // Guardar el contenido original del encabezado incluyendo su HTML
        const originalHeaderHTML = document.getElementById('navBar').innerHTML;
        var valor = document.getElementById('input');

        // Dentro del evento scroll
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            const header = document.getElementById('navBar');

            if (scrollPosition > 600 ) {
                if (!header.classList.contains('input-restaurante')) {
                    header.classList.add('input-restaurante'); // Agregamos la clase del input
                    header.innerHTML = originalHeaderHTML + '<input type="text" class="form-control input-restaurante" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">' ;
                }
            } else if (scrollPosition > 0) {
                if (!header.classList.contains('scrolled')) {
                    header.classList.add('scrolled'); // Agregamos la clase del scroll
                } else {
                    header.innerHTML = originalHeaderHTML; // Restaurar el contenido original
                    header.classList.remove('input-restaurante'); // Borramos la clase del input
                }
            } else {
                header.classList.remove('scrolled'); // Borramos la clase del scroll
                header.innerHTML = originalHeaderHTML; // Restaurar el contenido original
            }
        });
        });
    </script>
</body>
</html>