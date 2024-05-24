<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white dark:bg-red-600 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Bienvenido Cliente') }}
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex-col w-full mx-auto">
                <div class="grid grid-cols-3 gap-x-2 gap-y-3 md:gap-4 md:grid-cols-5">
                    <div
                        class="flex items-center gap-2 p-2 bg-green-500 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path
                                    d="M2.273 5.625A4.483 4.483 0 0 1 5.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 3H5.25a3 3 0 0 0-2.977 2.625ZM2.273 8.625A4.483 4.483 0 0 1 5.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0 0 18.75 6H5.25a3 3 0 0 0-2.977 2.625ZM5.25 9a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h13.5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H15a.75.75 0 0 0-.75.75 2.25 2.25 0 0 1-4.5 0A.75.75 0 0 0 9 9H5.25Z" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $deposits_count }}</h2>
                            <p class="text-xs md:text-sm"># Depositos</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-yellow-300 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path
                                    d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $recharges_count }}</h2>
                            <p class="text-xs md:text-sm"># Recargas</p>
                        </div>
                    </div>



                    <div
                        class="flex items-center gap-2 p-2 bg-yellow-400 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path
                                    d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75ZM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 0 1-1.875-1.875V8.625ZM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 0 1 3 19.875v-6.75Z" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ '0' }}</h2>
                            <p class="text-xs md:text-sm"># Apuestas</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-yellow-300 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $totalAmount }}</h2>
                            <p class="text-xs md:text-sm">Saldo Actual</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-blue-200 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-5">
                    <div class="p-4 font-semibold bg-white rounded-lg shadow-md md:col-span-2 shadow-zinc-900 h-44">
                        <p>Apuestas deportivas</p>
                    </div>
                    
                    <div class="p-4 font-semibold bg-white rounded-lg shadow-md md:col-span-1 shadow-zinc-900 h-44">
                        <p>Casino Online</p>
                    </div>
                    <div class="p-4 font-semibold bg-white rounded-lg shadow-md md:col-span-2 shadow-zinc-900 h-44">
                        <p>Casino Online</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
