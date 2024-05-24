<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }} ASESOR
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-white dark:bg-red-600 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Bienvenido Asesor') }}
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
                                <path fill-rule="evenodd"
                                    d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $customer_count }}</h2>
                            <p class="text-xs md:text-sm">Total Clientes</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-yellow-300 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path fill-rule="evenodd"
                                    d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $recharge_count }}</h2>
                            <p class="text-xs md:text-sm">Recargas Realizadas</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-orange-500 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path
                                    d="M16.881 4.346A23.112 23.112 0 018.25 6H7.5a5.25 5.25 0 00-.88 10.427 21.593 21.593 0 001.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.592.772-2.468a17.116 17.116 0 01-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0018 11.25c0-2.413-.393-4.735-1.119-6.904zM18.26 3.74a23.22 23.22 0 011.24 7.51 23.22 23.22 0 01-1.24 7.51c-.055.161-.111.322-.17.482a.75.75 0 101.409.516 24.555 24.555 0 001.415-6.43 2.992 2.992 0 00.836-2.078c0-.806-.319-1.54-.836-2.078a24.65 24.65 0 00-1.415-6.43.75.75 0 10-1.409.516c.059.16.116.321.17.483z" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $recharge_modify }}</h2>
                            <p class="text-xs md:text-sm">Recargas Modificadas</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-red-500 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path fill-rule="evenodd"
                                    d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $recharge_anulated }}</h2>
                            <p class="text-xs md:text-sm">Recargas Anuladas</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-blue-500 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path fill-rule="evenodd"
                                    d="M11.484 2.17a.75.75 0 0 1 1.032 0 11.209 11.209 0 0 0 7.877 3.08.75.75 0 0 1 .722.515 12.74 12.74 0 0 1 .635 3.985c0 5.942-4.064 10.933-9.563 12.348a.749.749 0 0 1-.374 0C6.314 20.683 2.25 15.692 2.25 9.75c0-1.39.223-2.73.635-3.985a.75.75 0 0 1 .722-.516l.143.001c2.996 0 5.718-1.17 7.734-3.08ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75ZM12 15a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75H12Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div class="w-2/3 text-center cursor-default">
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ '0' }}</h2>
                            <p class="text-xs md:text-sm">Recargas Pendientes</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-5">
                    <div class="p-2 bg-white rounded-lg shadow-md md:p-1 md:col-span-2 shadow-zinc-900 max-h-96">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="p-2 bg-white rounded-lg shadow-md md:p-1 md:col-span-1 shadow-zinc-900 max-h-96">
                        <canvas id="myChart2" class="w-full m-auto"></canvas>
                    </div>
                    <div class="p-2 bg-white rounded-lg shadow-md md:p-1 md:col-span-2 shadow-zinc-900 max-h-96">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</x-app-layout>
