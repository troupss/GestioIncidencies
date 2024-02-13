<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Incluir el token CSRF en la página -->
    <title>Incidencies</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    @role('admin')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="bg-dark-500 p-6 text-white rounded-lg shadow-lg">
                            <div class="py-12 flex items-center justify-center">
                                <div class="bg-dark w-full max-w-2xl p-6 rounded-lg shadow-lg">
                                    <h1 class="text-4xl font-bold text-center mb-4 text-white" style="font-family: 'Cardo', serif;">
                                        MENU <i class="fas fa-wrench"></i>
                                    </h1>

                                    <ul class="space-y-4 text-center">
                                        <li><a href="/admin/incidencies/crear" class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">Crear Incidencia</a></li>
                                        <li><a href="/admin/proveïdors" class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">Proveïdors</a></li>
                                        <li><a href="/admin/incidencies" class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">Mostrar Incidencies</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    @elseif (auth()->user()->hasRole('treballador'))
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="bg-dark-500 p-6 text-white rounded-lg shadow-lg">
                            <div class="py-12 flex items-center justify-center">
                                <div class="bg-dark w-full max-w-2xl p-6 rounded-lg shadow-lg">
                                    <h1 class="text-4xl font-bold text-center mb-4 text-white" style="font-family: 'Cardo', serif;">
                                        MENU <i class="fas fa-wrench"></i>
                                    </h1>

                                    <ul class="space-y-4 text-center">
                                        <li><a href="/admin/incidencies/crear" class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">Crear Incidencia</a></li>
                                        <li><a href="/admin/incidencies" class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">Mostrar Incidencies</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    @elseif (auth()->user()->hasRole('user'))
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="bg-dark-500 p-6 text-white rounded-lg shadow-lg">
                            <div class="py-12 flex items-center justify-center">
                                <div class="bg-dark w-full max-w-2xl p-6 rounded-lg shadow-lg">
                                    <h1 class="text-4xl font-bold text-center mb-4 text-white" style="font-family: 'Cardo', serif;">
                                        MENU <i class="fas fa-wrench"></i>
                                    </h1>

                                    <ul class="space-y-4 text-center">
                                        <li><a href="/admin/incidencies/crear" class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">Crear Incidencia</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    @else
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="bg-dark-500 p-6 text-white rounded-lg shadow-lg">
                            <div class="py-12 flex items-center justify-center">
                                <div class="bg-dark w-full max-w-2xl p-6 rounded-lg shadow-lg">
                                    <h1 class="text-4xl font-bold text-center mb-4 text-white" style="font-family: 'Cardo', serif;">
                                        NO PERMISSIONS <i class="fas fa-wrench"></i>
                                    </h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    @endrole
    <!-- Add Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>

</body>

</html>