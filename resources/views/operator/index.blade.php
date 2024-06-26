<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Principal') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if (Session::has('success'))
                        <script>
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "El operario ha sido Creado exitosamente",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        </script>
                    @endif
                    @if (Session::has('error'))
                        <script>
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "El operario ha sido Eliminado exitosamente",
                                showConfirmButton: false,
                                timer: 1500
                            });
                        </script>
                    @endif
                    <!-- component -->
                    <div class="flex justify-between mb-1">
                        <div class="rounded-lg bg-gray-200 p-1">
                            <div class="flex">
                                <div
                                    class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-r border-gray-200 bg-white p-5">
                                    <svg viewBox="0 0 20 20" aria-hidden="true"
                                        class="pointer-events-none absolute w-5 fill-gray-500 transition">
                                        <path
                                            d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z">
                                        </path>
                                    </svg>
                                </div>
                                <form action="{{ route('operators.index') }}">
                                    <div class="flex">
                                        <input type="text" name="search"
                                            class="w-full bg-white pl-2 text-base font-semibold outline-0"
                                            placeholder="Buscar por Cédula ..." value="{{ request()->search }}" />
                                        <button
                                            class="bg-blue-700 p-2 rounded-tr-lg rounded-br-lg text-white 
                                            font-semibold hover:bg-green-500 transition-colors">
                                            Buscar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <a href="{{ route('operators.create') }}">
                            <button type="button"
                                class="text-white col-span-full bg-blue-700 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-blue-100 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5
                                text-center dark:bg-green-700 dark:hover:bg-green-500 dark:focus:ring-blue-100"
                                href="{{ route('operators.create') }}">Crear Operario</button>
                        </a>
                    </div>
                    <!-- component -->
                    <x-table :operators="$operators" />
                    {{ $operators->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
