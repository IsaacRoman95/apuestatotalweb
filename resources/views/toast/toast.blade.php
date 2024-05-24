@section('toast')
    <!-----TOASTS---->
    @if (Session::has('info'))
        <div id="toast" role="alert"
            class="fixed z-50 px-6 py-4 mb-4 text-white bg-blue-600 border-0 rounded shadow-sm top-4 right-6 shadow-zinc-700 animate-pulse-static">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="inline-block w-6 h-6 mr-5 text-xl align-middle">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                    clip-rule="evenodd" />
            </svg>

            <span class="inline-block mr-8 align-middle">
                {{ __(session('info')) }}
            </span>
            <button aria-label="Close"
                class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none"
                onclick="closeAlert(event)">
                <span>×</span>
            </button>
        </div>
    @endif

    @if (Session::has('success'))
        <div id="toast" role="alert"
            class="fixed z-50 px-6 py-4 mb-4 text-white bg-green-600 border-0 rounded shadow-sm top-4 right-6 shadow-zinc-700 animate-pulse-static">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="inline-block w-6 h-6 mr-5 text-xl align-middle">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd" />
            </svg>


            <span class="inline-block mr-8 align-middle">
                {{ __(session('success')) }}
            </span>
            <button aria-label="Close"
                class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none"
                onclick="closeAlert(event)">
                <span>×</span>
            </button>
        </div>
    @endif

    @if (Session::has('warning'))
        <div id="toast" role="alert"
            class="fixed z-50 px-6 py-4 mb-4 text-zinc-900 bg-yellow-300 border-0 rounded shadow-sm top-4 right-6 shadow-zinc-700 animate-pulse-static">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="inline-block w-6 h-6 mr-5 text-xl align-middle">
                <path fill-rule="evenodd"
                    d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                    clip-rule="evenodd" />
            </svg>

            <span class="inline-block mr-8 align-middle">
                {{ __(session('warning')) }}
            </span>
            <button aria-label="Close"
                class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none"
                onclick="closeAlert(event)">
                <span>×</span>
            </button>
        </div>
    @endif

    @if (Session::has('error'))
        <div id="toast" role="alert"
            class="fixed z-50 px-6 py-4 mb-4 text-white bg-red-700 border-0 rounded shadow-sm top-4 right-6 shadow-zinc-700 animate-pulse-static">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                class="inline-block w-6 h-6 mr-5 text-xl align-middle">
                <path fill-rule="evenodd"
                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm3 10.5a.75.75 0 000-1.5H9a.75.75 0 000 1.5h6z"
                    clip-rule="evenodd" />
            </svg>

            <span class="inline-block mr-8 align-middle">
                {{ __(session('error')) }}
            </span>
            <button aria-label="Close"
                class="absolute top-0 right-0 mt-4 mr-6 text-2xl font-semibold leading-none bg-transparent outline-none focus:outline-none"
                onclick="closeAlert(event)">
                <span>×</span>
            </button>
        </div>
    @endif

    <script>
        function closeAlert(event) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }

        $('#toast').fadeIn();
        setTimeout(function() {
            $("#toast").fadeOut();
        }, 5000);
    </script>

    @php
        // Eliminar una variable de sesión usando el método forget()
        session()->forget('info');
        session()->forget('success');
        session()->forget('warning');
        session()->forget('error');
    @endphp
@show
