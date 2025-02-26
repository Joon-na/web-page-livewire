<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties - SKBuilder</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-black">
    <div>
        <x-home.nav-link />

        <div class="flex justify-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10">
                <x-property.property-card />
                <x-property.property-card />
                <x-property.property-card />
                <x-property.property-card />
                <x-property.property-card />
                <x-property.property-card />
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>

</html>
