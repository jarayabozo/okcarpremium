<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.cdnfonts.com/css/segoe-ui-4" rel="stylesheet"> --}}
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <livewire:navbar />
        <main>
            {{ $slot }}
        </main>
        <section class="relative border border-gray-400 max-w-4xl mx-auto mt-20 mb-40 py-16 flex flex-col items-center justify-center">
            <div class="logo w-32 h-32 mx-auto absolute -top-16 left-0 right-0 bg-gray--900 p-4">
                <img src="{{ asset('images/okcarpremium.png') }}" alt="OkCarPremium" class="w-full">
            </div>
            <h6 class="text-center text-white text-4xl font-black uppercase max-w-sm mb-4">compra o vende tu auto hoy</h6>
            <p class="text-white text-xl">El mejor marketplace de autos usados exclusivos en toda la IV región.</p>
            <p class="text-white text-xl">Si tienes dudas.</p>
            <div class="absolute -bottom-4 left-0 right-0 text-center">
                <a href="#" class="text-black font-bold bg-yellow-300 py-3 px-10 rounded">Contáctanos</a>
            </div>
        </section>
        <section class="relative pt-40">
            <div class="bg-image-footer w-full h-96 relative">
                <div class="max-w-4xl mx-auto">
                    <div class="absolute max-w-2xl p-6 text-left -top-40 bg-white overflow-hidden rounded-t rounded-bl rounded-br-3xl">
                        <h6 class="text-4xl font-black uppercase mb-4">OKCARPREMIUM</h6>
                        <p class="mb-8">Nos especializamos en ofrecer una exclusiva selección de vehículos de lujo para quienes buscan calidad, estilo y rendimiento en cada detalle. Nos apasiona proporcionar una experiencia de compra superior, ayudándote a encontrar el auto premium perfecto que se adapte a tus necesidades y refleje tu personalidad. Con nosotros, cada cliente es único, y estamos aquí para asegurarnos de que encuentres el vehículo que eleve tu experiencia de conducción al siguiente nivel.</p>
                        <a href="#" class="text-black font-bold bg-yellow-300 py-3 px-10 rounded">Ver autos</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-14 bg-black">
            <div class="logo w-24 h-24 mx-auto">
                <img src="{{ asset('images/okcarpremium.png') }}" alt="OkCarPremium" class="w-full">
            </div>
            <nav class="social flex flex-row gap-6 items-center justify-center mt-10">
                <a href="#" class="text-white text-xl">
                    <svg width="13" height="25" viewBox="0 0 13 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_41_675)">
                        <g clip-path="url(#clip1_41_675)">
                        <g clip-path="url(#clip2_41_675)">
                        <path d="M8.17437 24.2741V13.2276H11.901L12.455 8.9025H8.17437V6.14757C8.17437 4.8995 8.52212 4.045 10.3134 4.045H12.5831V0.188951C11.4792 0.0703444 10.3686 0.0137368 9.258 0.0177802C5.96401 0.0177802 3.7024 2.02869 3.7024 5.72031V8.89437H0V13.2195H3.71049V24.2741H8.17437Z" fill="white"/>
                        </g>
                        </g>
                        </g>
                        <defs>
                        <clipPath id="clip0_41_675">
                        <rect width="12.84" height="25" fill="white"/>
                        </clipPath>
                        <clipPath id="clip1_41_675">
                        <rect width="12.84" height="25" fill="white"/>
                        </clipPath>
                        <clipPath id="clip2_41_675">
                        <rect width="12.84" height="24.9667" fill="white" transform="translate(0 0.0175781)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="text-white text-xl">
                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_41_683)">
                        <path d="M8.16311 0.087422C6.83311 0.150172 5.92486 0.362422 5.13086 0.674422C4.30911 0.994672 3.61261 1.42442 2.91961 2.11992C2.22661 2.81542 1.79986 3.51242 1.48186 4.33542C1.17411 5.13117 0.965608 6.04017 0.906858 7.37092C0.848108 8.70167 0.835108 9.12942 0.841608 12.5239C0.848108 15.9184 0.863108 16.3439 0.927608 17.6774C0.991108 19.0072 1.20261 19.9152 1.51461 20.7094C1.83536 21.5312 2.26461 22.2274 2.96036 22.9207C3.65611 23.6139 4.35261 24.0397 5.17761 24.3582C5.97261 24.6654 6.88186 24.8749 8.21236 24.9332C9.54286 24.9914 9.97111 25.0049 13.3646 24.9984C16.7581 24.9919 17.1854 24.9769 18.5186 24.9137C19.8519 24.8504 20.7551 24.6374 21.5496 24.3269C22.3714 24.0054 23.0681 23.5769 23.7609 22.8809C24.4536 22.1849 24.8801 21.4874 25.1979 20.6639C25.5059 19.8689 25.7151 18.9597 25.7729 17.6302C25.8311 16.2959 25.8449 15.8699 25.8384 12.4759C25.8319 9.08192 25.8166 8.65642 25.7534 7.32342C25.6901 5.99042 25.4784 5.08517 25.1666 4.29042C24.8454 3.46867 24.4166 2.77292 23.7211 2.07917C23.0256 1.38542 22.3276 0.959172 21.5044 0.642172C20.7089 0.334422 19.8001 0.124672 18.4696 0.067172C17.1391 0.00967201 16.7109 -0.00507799 13.3161 0.00142201C9.92136 0.00792201 9.49636 0.022422 8.16311 0.087422ZM8.30911 22.6844C7.09036 22.6314 6.42861 22.4289 5.98761 22.2594C5.40361 22.0344 4.98761 21.7624 4.54811 21.3272C4.10861 20.8919 3.83861 20.4744 3.61061 19.8917C3.43936 19.4507 3.23311 18.7897 3.17611 17.5709C3.11411 16.2537 3.10111 15.8582 3.09386 12.5209C3.08661 9.18367 3.09936 8.78867 3.15711 7.47092C3.20911 6.25317 3.41286 5.59067 3.58211 5.14992C3.80711 4.56517 4.07811 4.14992 4.51436 3.71067C4.95061 3.27142 5.36686 3.00092 5.95011 2.77292C6.39061 2.60092 7.05161 2.39642 8.26986 2.33842C9.58811 2.27592 9.98311 2.26342 13.3199 2.25617C16.6566 2.24892 17.0526 2.26142 18.3714 2.31942C19.5891 2.37242 20.2519 2.57417 20.6921 2.74442C21.2764 2.96942 21.6921 3.23967 22.1314 3.67667C22.5706 4.11367 22.8414 4.52842 23.0694 5.11292C23.2416 5.55217 23.4461 6.21292 23.5036 7.43192C23.5664 8.75017 23.5806 9.14542 23.5866 12.4819C23.5926 15.8184 23.5809 16.2147 23.5231 17.5319C23.4699 18.7507 23.2679 19.4127 23.0981 19.8542C22.8731 20.4379 22.6019 20.8542 22.1654 21.2932C21.7289 21.7322 21.3131 22.0027 20.7296 22.2307C20.2896 22.4024 19.6279 22.6074 18.4106 22.6654C17.0924 22.7274 16.6974 22.7404 13.3594 22.7477C10.0214 22.7549 9.62761 22.7414 8.30936 22.6844M18.4994 5.81917C18.4999 6.11586 18.5883 6.40575 18.7536 6.65216C18.9188 6.89856 19.1535 7.09043 19.4278 7.20349C19.7021 7.31655 20.0037 7.34572 20.2946 7.28732C20.5855 7.22892 20.8526 7.08556 21.062 6.87538C21.2714 6.6652 21.4137 6.39765 21.4711 6.10655C21.5284 5.81545 21.4981 5.51388 21.3841 5.23999C21.27 4.9661 21.0773 4.73219 20.8303 4.56784C20.5833 4.40349 20.2931 4.31608 19.9964 4.31667C19.5986 4.31747 19.2175 4.4762 18.9368 4.75796C18.656 5.03971 18.4987 5.42143 18.4994 5.81917ZM6.92186 12.5124C6.92886 16.0574 9.80786 18.9247 13.3521 18.9179C16.8964 18.9112 19.7656 16.0324 19.7589 12.4874C19.7521 8.94242 16.8724 6.07442 13.3276 6.08142C9.78286 6.08842 6.91511 8.96792 6.92186 12.5124ZM9.17336 12.5079C9.17173 11.6838 9.41451 10.8777 9.871 10.1916C10.3275 9.50549 10.9772 8.97015 11.7379 8.65327C12.4987 8.33639 13.3363 8.25222 14.1449 8.41139C14.9535 8.57057 15.6967 8.96594 16.2806 9.54751C16.8645 10.1291 17.2628 10.8707 17.4252 11.6787C17.5875 12.4866 17.5067 13.3246 17.1928 14.0866C16.879 14.8486 16.3462 15.5004 15.6619 15.9596C14.9776 16.4188 14.1725 16.6648 13.3484 16.6664C12.8012 16.6676 12.2591 16.5609 11.7531 16.3525C11.2471 16.1442 10.7872 15.8382 10.3995 15.452C10.0118 15.0658 9.70393 14.6071 9.49356 14.1019C9.28318 13.5968 9.17437 13.0551 9.17336 12.5079Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_41_683">
                        <rect width="25" height="25" fill="white" transform="translate(0.840088)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="text-white text-xl">
                    <svg width="31" height="25" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_41_686)">
                        <g clip-path="url(#clip1_41_686)">
                        <g clip-path="url(#clip2_41_686)">
                        <path d="M27.3674 6.59467C27.3865 6.85299 27.3865 7.10983 27.3865 7.36669C27.3865 15.227 21.4038 24.2845 10.4702 24.2845C7.10165 24.2845 3.97227 23.3088 1.33887 21.6142C1.81713 21.6688 2.27768 21.6881 2.77513 21.6881C5.55467 21.6881 8.11279 20.7492 10.1572 19.1476C7.54301 19.093 5.35245 17.3807 4.59667 15.0248C4.96423 15.0794 5.33325 15.1163 5.72 15.1163C6.25288 15.1163 6.78871 15.0425 7.28617 14.9141C4.55977 14.362 2.51829 11.9692 2.51829 9.079V9.00517C3.31097 9.44658 4.23059 9.72259 5.20483 9.75947C3.60324 8.69369 2.55372 6.87071 2.55372 4.80856C2.55372 3.70442 2.84746 2.6918 3.36263 1.80909C6.28978 5.41525 10.6901 7.77262 15.6233 8.03095C15.5318 7.5881 15.4757 7.12903 15.4757 6.66848C15.4757 3.39148 18.1268 0.722656 21.4215 0.722656C23.1339 0.722656 24.6793 1.44005 25.7657 2.60028C27.109 2.34196 28.3962 1.84451 29.5387 1.16401C29.0974 2.54419 28.1571 3.70442 26.9245 4.44101C28.1217 4.31111 29.2819 3.98046 30.3476 3.51991C29.5387 4.69785 28.5276 5.74737 27.3674 6.59467Z" fill="white"/>
                        </g>
                        </g>
                        </g>
                        <defs>
                        <clipPath id="clip0_41_686">
                        <rect width="29.69" height="25" fill="white" transform="translate(0.840088)"/>
                        </clipPath>
                        <clipPath id="clip1_41_686">
                        <rect width="29.69" height="25" fill="white" transform="translate(0.840088)"/>
                        </clipPath>
                        <clipPath id="clip2_41_686">
                        <rect width="29.6875" height="25" fill="white" transform="translate(0.841309)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="#" class="text-white text-xl">
                    <svg width="36" height="25" viewBox="0 0 36 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_41_691)">
                        <g clip-path="url(#clip1_41_691)">
                        <g clip-path="url(#clip2_41_691)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M31.4835 1.02594C32.9486 1.21683 34.3489 2.64169 34.5271 4.12763C35.1578 9.57338 35.1578 14.8542 34.5271 20.2983C34.3489 21.7842 32.9486 23.2108 31.4835 23.3999C22.5496 24.51 13.5147 24.51 4.58336 23.3999C3.11692 23.2103 1.71667 21.7842 1.53851 20.2983C0.907736 14.8538 0.907736 9.57338 1.53851 4.12763C1.71667 2.64169 3.11692 1.21641 4.58336 1.02594C13.5147 -0.0841674 22.5492 -0.0841674 31.4835 1.02594ZM15.2046 6.55738V17.8693L23.6884 12.2135L15.2046 6.55738Z" fill="white"/>
                        </g>
                        </g>
                        </g>
                        <defs>
                        <clipPath id="clip0_41_691">
                        <rect width="34.67" height="25" fill="white" transform="translate(0.530029)"/>
                        </clipPath>
                        <clipPath id="clip1_41_691">
                        <rect width="34.67" height="25" fill="white" transform="translate(0.530029)"/>
                        </clipPath>
                        <clipPath id="clip2_41_691">
                        <rect width="34.67" height="24.9947" fill="white" transform="translate(0.530029 0.00195312)"/>
                        </clipPath>
                        </defs>
                    </svg>
                </a>
            </nav>
            <div class="flex flex-col gap-0 mt-6">
                <h6 class="text-white text-2xl text-center font-bold mb-2">Contacto</h6>
                <a href="tel:+56 9 68415352" class="text-white text-lg text-center font-medium">+56 9 68415352</a>
                <a href="mailto:contacto@okcarpremium.cl" class="text-white text-lg text-center font-medium mb-6">contacto@okcarpremium.cl</a>
                <p class="text-white text-lg text-center font-normal">Copyright © 2020</p>
                <p class="text-white text-lg text-center font-normal">OkCarPremium © de sus<br>respectivos propietarios</p>
            </div>
        </footer>
        @livewireScripts
    </body>
</html>
