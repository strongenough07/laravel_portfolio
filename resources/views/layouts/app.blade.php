<!DOCTYPE html>
<html lang="en">
    <head>
        <title>McCan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="et-lineicons.css">
        <link rel="stylesheet" href="themify-icons.css">
        <link rel="stylesheet" href="owl.carousel.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style-animations.css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-144098545-1');
        </script>

        </head>

    <body class="cv has-additional-menu-content">
        @livewire('header')
        <!-- Menu -->
        @livewire('menu')
        <!-- Social Media -->
        @livewire('social-media')
        <!-- Media -->
        @livewire('media')

        @yield('content')

        <!-- Copyright -->
        @livewire('copyright')

        <!-- Hidden Menu -->
        @livewire('hidden-menu')

        <!-- My Info -->
        @livewire('my-info')






    @livewireScripts

    <script src="jquery-3.3.1.min.js"></script>
    <script src="modernizr-custom.js"></script>
    <script src="owl-carousel.min.js"></script>
    <script src="functions.js"></script>
</body>
</html>
