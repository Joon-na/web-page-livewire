<nav class="bg-[#1D4734] p-4 relative">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white text-2xl font-bold">
            <img src="/images/logo-skbuilder.svg" alt="logo">
        </a> 
        <button id="menu-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 z-50">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden md:flex md:items-center md:rounded-[111.111px] bg-[#E6E8EE] p-3 md:static md:w-auto md:shadow-none absolute top-full left-0 w-full py-[4px] px-[12px] shadow-md transition-all ease-in-out duration-300" id="navbar-menu">
            <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4 p-4 md:p-0">
                <li><a wire:navigate href="/" class="text-black px-[14px] py-2 font-sofia font-medium rounded-[111.111px] border-[1.111px] border-solid border-[#050505] block">Home</a></li>
                <li><a wire:navigate href="property" class="text-black px-[14px] font-sofia font-medium py-2 rounded-[111.111px] block">Properties</a></li>
                <li><a wire:navigate href="buy" class="text-black px-[14px] font-sofia font-medium py-2 rounded-[111.111px] block">Buy</a></li>
                <li><a wire:navigate href="sell" class="text-black px-[14px] font-sofia font-medium py-2 rounded-[111.111px] block">Sell</a></li>
                <li><a wire:navigate href="rent" class="text-black px-[14px] font-sofia font-medium py-2 rounded-[111.111px] block">Rent</a></li>
            </ul>
        </div>
        <div class="hidden md:flex justify-center items-center px-[10px] py-2 md:rounded-[111.111px] bg-[#E6E8EE]">
            <div class="flex space-x-4">
                <button class="rounded-[111.111px] text-black text-center text-[17.778px] not-italic font-medium px-3 leading-[120%]">Login</button>
                <button class="rounded-[111.111px] bg-[#1D4734] text-[#E6E8EE] text-center text-[17.778px] not-italic font-medium w-[115px] h-[39px] leading-[120%]">Get Started</button>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById("menu-toggle");
        const navbarMenu = document.getElementById("navbar-menu");

        toggleButton.addEventListener("click", function () {
            navbarMenu.classList.toggle("hidden");
        });
    });
</script>
