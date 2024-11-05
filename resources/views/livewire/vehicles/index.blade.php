<div class="mt-20 max-w-4xl mx-auto">
    <div id="filter" class="py-4">
        <h2 class="text-white text-4xl font-bold uppercase text-left max-w-lg">Filtros</h2>
        <div class="brands mt-4">
            <div class="flex gap-4 overflow-x-auto relative scrollbar-custom pb-6">
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/subaru.png') }}" alt="Subaru" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Subaru</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/bmw.png') }}" alt="BMW" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">BMW</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/volvo.png') }}" alt="Volvo" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Volvo</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/audi.png') }}" alt="Audi" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Audi</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/mercedes_benz.png') }}" alt="Mercedes-Benz"
                            class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Mercedes-Benz</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/peugeot.png') }}" alt="Peugeot" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Peugeot</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/toyota.png') }}" alt="Toyota" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Toyota</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/citroen.png') }}" alt="Citroen" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Citroen</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
                <div class="brand flex flex-col justify-center items-center bg-gray-300 rounded-xl py-4 px-1">
                    <div class="image h-20 w-20 flex justify-center items-center">
                        <img src="{{ asset('images/brands/citroen.png') }}" alt="Citroen" class="h-auto max-w-full">
                    </div>
                    <span class="text-gray-800 text-md font-bold text-center block">Citroen</span>
                    <span class="text-yellow-400 text-sm font-bold text-center block">+1</span>
                </div>
            </div>
        </div>
        <div class="flex justify-center gap-4 mt-10 relative">
            <button
                id="dropdownSearchButton"
                data-dropdown-toggle="dropdownSearch"
                data-dropdown-placement="bottom"
                class="text-black bg-white w-full focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center"
                type="button"
            > Modelo
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60 dark:bg-gray-700">
                <div class="p-3">
                    <label for="input-group-search" class="sr-only">Modelos</label>
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="input-group-search"
                            class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50"
                            placeholder="Buscar Modelo">
                    </div>
                </div>
                <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownSearchButton">
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-11" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-11"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Bonnie
                                Green</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input checked id="checkbox-item-12" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-12"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Jese
                                Leos</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-13" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-13"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Michael
                                Gough</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-14" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-14"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Robert
                                Wall</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-15" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-15"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Joseph
                                Mcfall</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-16" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-16"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Leslie
                                Livingston</label>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center ps-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                            <input id="checkbox-item-17" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="checkbox-item-17"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300">Roberta
                                Casas</label>
                        </div>
                    </li>
                </ul>
            </div>
            <livewire:price-slider :minPrice="0" :maxPrice="1000" />

            <!-- Mostrar o usar los datos del filtro -->
        </div>
        <nav class="flex  py-4 text-white font-semibold">
            <a href="#" class="px-4 py-2 hover:text-yellow-300 active">Todos</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Citycar</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Hatchback</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Sedan</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Suv</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Furgon</a>
            <a href="#" class="px-4 py-2 hover:text-yellow-300">Pickup</a>
        </nav>
    </div>
</div>
