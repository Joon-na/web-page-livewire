<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div>
        <img src="{{ asset('images/line-pattern.png') }}"
            class="absolute top-0 right-0 w-[968.889px] h-[858.889px] pointer-events-none" alt="Line Pattern">
        <x-nav-link />
        <x-hero-section />
        <x-about-content />
        <x-project-content />
        <x-quality-content />
        <x-strength-content />
        <x-footer />
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>
