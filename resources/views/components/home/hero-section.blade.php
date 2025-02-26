<main class="flex bg-[#1D4734] pt-5 min-h-screen">
    <div class="container mx-auto flex flex-col md:flex-row">

        <div class="w-full md:w-1/2 text-center flex flex-col items-center md:items-start md:text-left">
            <h1 class="font-satoshi ease-in duration-300 leading-[110%] tracking-[-2.222px] w-full md:w-[1200px] 
                bg-gradient-to-r from-white/90 via-white/90 to-transparent bg-clip-text text-transparent 
                text-[50px] md:text-[100px] not-italic font-bold uppercase 
                animate-fadeInUp">
                Experience the epitome of home comfort.
            </h1>
            <p class="font-sofia text-white/60 w-full md:w-[425px] text-[16px] md:text-[20px] not-italic font-normal 
                leading-[150%] mt-4 animate-fadeInUp delay-200">
                Our international brand specializes in property appraisal, sales, purchases, and investments.
                Trust us to deliver exceptional service and help you find your perfect real estate opportunity.
            </p>
            <img class="mt-8 w-auto max-w-[200px] animate-spin h-auto mb-16 md:ml-[25px]" src="/images/logo2.png"
                alt="">
        </div>

        <div class="w-full md:w-1/2 flex justify-center md:justify-end mt-8 md:top-[170px] md:mt-0 relative">
            <img class="max-w-full pb-[33px] md:w-[1112.755px] md:h-[509.466px] rounded-[50px] md:rounded-[216px] 
                flex-shrink-0 opacity-0 animate-fadeIn scale-95 transition-all duration-700 ease-in-out"
                src="{{ asset('images/garden.png') }}" alt="">
            <img class="absolute animate-bounce top-0 right-0 md:top-[-25px] md:right-[-80px]"
                src="/images/arrow-hero.png" alt="">
            <img class="absolute top-[83px] animate-fadeInUp delay-500" src="/images/hero-shadow.png" alt="">
        </div>

    </div>
</main>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.95);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out forwards;
    }

    .animate-fadeInUp {
        animation: fadeInUp 1s ease-out forwards;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    .animate-spin {
        animation: spin 8s linear infinite;
    }
</style>
