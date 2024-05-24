<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Recarga
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-5">Editar Recarga</h1>
            <form action="{{ route('adviser.recharges.update', $recharge->id) }}" method="POST"
                enctype="multipart/form-data" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="user_code" class="block font-medium">Código de Usuario:</label>
                    <input type="text" name="user_code" id="user_code" disabled
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        value="{{ $recharge->deposit->user->user_code }}">
                </div>
                <div>
                    <label for="bank_name" class="block font-medium">Banco:</label>
                    <input type="text" name="bank_name" id="bank_name" disabled
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        value="{{ $recharge->deposit->bank->name }}">
                </div>
                <div>
                    <label for="channel_name" class="block font-medium">Canal de Atención:</label>
                    <input type="text" name="channel_name" id="channel_name" disabled
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        value="{{ $recharge->channel->name }}">
                </div>
                <div>
                    <label for="amount" class="block font-medium">Monto:</label>
                    <input type="text" name="amount" id="amount"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        value="{{ $recharge->amount }}">
                    @error('amount')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="mt-4 inline-block px-4 py-2 bg-indigo-500 text-white rounded-lg hover:bg-indigo-600">Guardar
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
