<div class="min-h-screen relative -mt-40 pb-40">
    <div class="z-0 bg-image absolute inset-0 mt-40"></div>
    <div class="z-0 gradient absolute inset-0 bg-gradient-to-b-home"></div>
    <div class="z-10 max-w-5xl mx-auto relative">
        <div class="pt-24 text-center">
            <h3 class="text-white text-4xl font-bold uppercase text-left max-w-lg">Lo mejor en autos está llegando</h3>
        </div>
        <nav class="flex py-4 text-white font-semibold">
            <a href="#" class="px-4 py-2 hover:text-yellow-300 active">Todos</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Citycar</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Hatchback</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Sedan</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Suv</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Furgon</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Pickup</a>
        </nav>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-10">
            <livewire:vehicles.item>
        </div>
        <div class="flex justify-center mt-10 relative">
            <a href="#" class="flex items-center justify-center text-center gap-4 px-4 py-2 w-60 text-white focus:outline-none relative hover:text-yellow-300 hover:gap-2">
                <span class="text-xl font-medium">Ver Todos</span>
                <div class="flex">
                    <x-heroicon-o-chevron-right class="w-5 h-5" />
                    <x-heroicon-o-chevron-right class="-ml-3 w-5 h-5" />
                    <x-heroicon-o-chevron-right class="-ml-3 w-5 h-5" />
                </div>
            </a>
        </div>
    </div>
</div>
