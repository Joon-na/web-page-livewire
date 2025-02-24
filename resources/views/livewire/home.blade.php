<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div>
        <x-home.nav-link />
        <x-home.hero-section />
        <x-home.about-content />
        <x-home.project-content />
        <x-home.quality-content />
        <x-home.strength-content />
        <x-home.footer />
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>
