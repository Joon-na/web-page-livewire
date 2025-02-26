<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-black">
    <div>
        <x-home.nav-link />
        <div class="flex justify-center items-center">
            <x-sell.sell />
        </div>
    </div>
</body>
</html>