<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Recargas Realizadas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('adviser.recharges', request()->query()) }}">
                <div class="flex my-2">
                    <input type="text" name="q" placeholder="Search"
                        class="py-2 px-2 text-md border border-gray-200 rounded-l focus:outline-none" value="" />
                    <button type="submit"
                        class="w-10 flex items-center justify-center border-t border-r border-b border-gray-200 rounded-r text-gray-100 bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>
            <div class="flex flex-col mb-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>ID</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>User Code</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Nombre de Usuario</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Banco</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Baucher</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Fecha de Registro</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Monto</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Canal de Atención</span>
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            <div class="flex space-x-4 items-center">
                                                <a href="#">
                                                    <span>Acciones</span>
                                                </a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($recharges as $recharge)
                                        <tr
                                            class="{{ $recharge->status == 0 ? 'bg-cancelled cursor-not-allowed' : '' }}">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">{{ $recharge->id }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">
                                                    {{ $recharge->deposit->user->user_code }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $recharge->deposit->user->name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $recharge->status == 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $recharge->deposit->bank->name }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{ $recharge->deposit->url_baucher }}" target="_blank"
                                                    class="{{ $recharge->status == '1' ? 'text-indigo-600 hover:text-indigo-900' : 'text-gray-400 cursor-not-allowed' }}">
                                                    Ver baucher
                                                </a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $recharge->status == 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $recharge->created_at->format('d-m-Y H:i') }}
                                                </span>
                                            </td>
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 {{ $recharge->status != 'Active' ? 'text-strikethrough cursor-not-allowed' : '' }}">
                                                {{ $recharge->amount }}
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $recharge->status == 1 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                    {{ $recharge->channel->name }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap flex gap-2 text-sm">
                                                @if ($recharge->status == 1)
                                                    <a href="{{ route('adviser.recharges.edit', $recharge->id) }}"
                                                        class="text-indigo-600 hover:text-indigo-900 hover:bg-blue-200 hover:shadow-md px-2 py-1 rounded-md">Editar</a>

                                                    <form
                                                        action="{{ route('advisers.recharge.cancel', $recharge->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <button type="submit"
                                                            class="text-red-600 hover:text-red-900 hover:bg-red-200 hover:shadow-md px-2 py-1 rounded-md">Anular</button>
                                                    </form>
                                                @else
                                                    <span class="text-gray-500 px-2 py-1">Recarga Anulada</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="1000">
                                                <div class="text-sm font-medium text-gray-900 py-6 px-3">
                                                    Aun no haz creado ninguna recarga.
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
