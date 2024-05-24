<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
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
                            <h2 class="text-base font-semibold md:text-lg text-zinc-900">{{ $deposits_count }}</h2>
                            <p class="text-xs md:text-sm"># Depositos</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-2 p-2 bg-yellow-300 rounded-lg shadow-md md:p-4 md:gap-4 shadow-zinc-900 text-zinc-800">
                        <div class="w-1/3 p-2 text-zinc-900">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-5 h-5 md:h-8 md:w-8">
                                <path fill-rule="evenodd"
                                    d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                    clip-rule="evenodd" />
                                <path
                                    d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                                <path fill-rule="evenodd"
                                    d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z"
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
                                <path fill-rule="evenodd"
                                    d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z"
                                    clip-rule="evenodd" />
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
                                <path
                                    d="M16.881 4.346A23.112 23.112 0 018.25 6H7.5a5.25 5.25 0 00-.88 10.427 21.593 21.593 0 001.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.592.772-2.468a17.116 17.116 0 01-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0018 11.25c0-2.413-.393-4.735-1.119-6.904zM18.26 3.74a23.22 23.22 0 011.24 7.51 23.22 23.22 0 01-1.24 7.51c-.055.161-.111.322-.17.482a.75.75 0 101.409.516 24.555 24.555 0 001.415-6.43 2.992 2.992 0 00.836-2.078c0-.806-.319-1.54-.836-2.078a24.65 24.65 0 00-1.415-6.43.75.75 0 10-1.409.516c.059.16.116.321.17.483z" />
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
                    <div class="p-2 bg-white rounded-lg shadow-md md:p-1 md:col-span-2 shadow-zinc-900 h-44">
                        <p>Apuestas deportivas</p>
                    </div>
                    <div class="p-2 bg-white rounded-lg shadow-md md:p-1 md:col-span-1 shadow-zinc-900 h-44">
                        <p>Casino Online</p>
                    </div>
                    <div class="p-2 bg-white rounded-lg shadow-md md:p-1 md:col-span-2 shadow-zinc-900 h-44">
                        <p>Casino Online</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
