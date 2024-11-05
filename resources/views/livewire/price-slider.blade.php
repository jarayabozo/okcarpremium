<div class="flex justify-center items-center">
    <div x-data="range()" x-init="initMask" class="relative max-w-xl w-full">
        <button id="dropdownPriceSlider" data-dropdown-toggle="dropdownPrice" data-dropdown-placement="bottom"
            class="text-black bg-white w-full focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center text-nowrap inline-flex items-center"
            type="button">
            Rango de precio
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <div id="dropdownPrice" class="z-10 hidden bg-white rounded-lg shadow w-80 dark:bg-gray-700 px-4">
            <div class="relative inset-0 flex items-center py-6 focus-within:outline-none">
                <input
                    id="slideMinPrice"
                    type="range"
                    step="100"
                    x-bind:min="min"
                    x-bind:max="max"
                    x-on:input="mintrigger"
                    x-model.number="minprice"
                    class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer"
                >
                <input
                    id="slideMaxPrice"
                    type="range"
                    step="100"
                    x-bind:min="min"
                    x-bind:max="max"
                    x-on:input="maxtrigger"
                    x-model.number="maxprice"
                    class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer"
                >
                <div class="relative z-10 h-2 w-full left-0 right-0">
                    <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-200"></div>
                    <div class="absolute z-20 top-0 bottom-0 rounded-md bg-yellow-300"
                        x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'"></div>
                    <div class="absolute z-30 w-6 h-6 top-0 left-0 bg-yellow-300 rounded-full -mt-2 -ml-1"
                        x-bind:style="'left: ' + minthumb + '%'"></div>
                    <div class="absolute z-30 w-6 h-6 top-0 right-0 bg-yellow-300 rounded-full -mt-2 -mr-1"
                        x-bind:style="'right: ' + maxthumb + '%'"></div>
                </div>
            </div>
            <div class="flex justify-between items-center py-2 mb-4">
                <div class="flex flex-col">
                    <label for="minpriceInput" class="text-gray-700 text-xs text-center">Precio Minimo</label>
                    <input
                        id="minpriceInput"
                        type="text"
                        maxlength="9"
                        x-on:input="updateMinPrice($event.target.value)"
                        class="text-sm px-3 py-2 border border-gray-200 rounded w-32 text-center">
                </div>
                <div class="flex flex-col">
                    <label for="maxpriceInput" class="text-gray-700 text-xs text-center">Precio Maximo</label>
                    <input
                        id="maxpriceInput"
                        type="text"
                        maxlength="10"
                        x-on:input="updateMaxPrice($event.target.value)"
                        class="text-sm px-3 py-2 border border-gray-200 rounded w-32 text-center"
                    >
                </div>
            </div>
        </div>
    </div>

    <script>
        function range() {
            let minMask, maxMask;

            return {
                minprice: 1000000,
                maxprice: 100000000,
                min: 500000,
                max: 100000000,
                minthumb: 0,
                maxthumb: 0,

                mintrigger() {
                    if (this.minprice >= this.maxprice) {
                        this.minprice = this.maxprice - 100; // Mantenerlo justo por debajo
                    }

                    if (minMask) {
                        minMask.value = String(this.minprice);
                        minMask.updateValue();
                    }

                    // Actualizar el mínimo del slider max para ser siempre mayor que el min actual
                    const maxSlider = document.getElementById('slideMaxPrice');
                    maxSlider.min = this.minprice + 100; // Incrementa un paso regulado arriba del mínimo

                    this.updateThumbPositions();
                },

                maxtrigger() {
                    if (this.maxprice <= this.minprice) {
                        this.maxprice = this.minprice + 100; // Mantenerlo justo por encima
                    }

                    if (maxMask) {
                        maxMask.value = String(this.maxprice);
                        maxMask.updateValue();
                    }
                    this.updateThumbPositions();
                },

                updateMinPrice(value) {
                    const numericValue = parseInt(value.replace(/[^\d]/g, ''), 10);
                    if (!isNaN(numericValue) && numericValue >= this.min && numericValue <= this.maxprice - 100) {
                        this.minprice = numericValue;
                        this.mintrigger();
                    }
                },

                updateMaxPrice(value) {
                    const numericValue = parseInt(value.replace(/[^\d]/g, ''), 10);
                    if (!isNaN(numericValue) && numericValue <= this.max && numericValue >= this.minprice + 100) {
                        this.maxprice = numericValue;
                        this.maxtrigger();
                    }
                },

                initMask() {
                    const minInput = document.getElementById('minpriceInput');
                    const maxInput = document.getElementById('maxpriceInput');

                    if (minInput) {
                        minMask = IMask(minInput, {
                            mask: '$num',
                            blocks: {
                                num: {
                                    mask: Number,
                                    thousandsSeparator: '.',
                                    radix: ',',
                                    mapToRadix: ['.'],
                                    scale: 0,
                                    signed: false,
                                }
                            },
                            min: this.min,
                            max: this.max,
                            lazy: false
                        });
                        minMask.value = this.minprice.toString();
                    }

                    if (maxInput) {
                        maxMask = IMask(maxInput, {
                            mask: '$num',
                            blocks: {
                                num: {
                                    mask: Number,
                                    thousandsSeparator: '.',
                                    radix: ',',
                                    mapToRadix: ['.'],
                                    scale: 0,
                                    signed: false,
                                }
                            },
                            min: this.min,
                            max: this.max,
                            lazy: false,
                        });
                        maxMask.value = this.maxprice.toString();
                    }
                },

                updateThumbPositions() {
                    this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
                    this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
                }
            }
        }
    </script>
</div>
