<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Incidencies</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    .custom-btn {
        background-color: #2e2d2d !important;
        color: white !important;
        border: none;
    }

    .custom-btn:hover {
        background-color: #7a7a7a !important;
        /* Puedes cambiar este color si deseas un efecto al pasar el ratón */
    }
</style>

<body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="bg-white p-6 text-white rounded-lg shadow-lg">
                            <div class="py-12 flex items-center justify-center">
                                <div class="bg-dark w-full max-w-2xl p-6 rounded-lg shadow-lg">
                                    <h1 class="text-4xl font-bold text-center mb-4 text-white" style="font-family: 'Cardo', serif;">
                                        Incidencia <i class="fas fa-wrench"></i>
                                    </h1>

                                    @if(Session::has('message'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                    @endif
                                    <div class="text-center">
                                        <p class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">
                                            <strong>ID:</strong> {{ $incidencies->id }}
                                        </p>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <p class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">
                                            <strong>Tipus:</strong> {{ $incidencies->tipus }}
                                        </p>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <p class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">
                                            <strong>Lloc:</strong> {{ $incidencies->lloc }}
                                        </p>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <p class="block hover:text-gray-800 text-lg py-2 px-4 rounded-md bg-white text-black">
                                            <strong>Descripcio:</strong> {{ $incidencies->descripcio }}
                                        </p>
                                    </div>
                                    <br>
                                    <div class="text-center">
                                        <img src="../../../uploads/{{ $incidencies->media }}" class="img-fluid mx-auto" width="50%">
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('admin/incidencies') }}" class="btn custom-btn mt-4">
                                <i class="fas fa-sync-alt"></i> Tornar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <!-- Add Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>
</body>

</html>