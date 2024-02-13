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

    <style>
        body {
            background-color: #f8f9fa;
            /* Establecer un color de fondo claro */
        }

        table thead th {
            background-color: #2e2d2d;
            color: white;
        }

        .container-custom {
            margin-top: 50px;
            /* Ajustar el margen superior para centrar el contenido */
        }

        .content-box-large {
            margin-top: 20px;
            /* Agregar un poco de margen a la caja de contenido */
        }

        .custom-btn {
            background-color: #2e2d2d;
            color: white;
            border: none;
        }

        .custom-btn:hover {
            background-color: #7a7a7a;
            /* Puedes cambiar este color si deseas un efecto al pasar el ratón */
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 container-custom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title" style="text-align: center;">
                                    <h1><em>Gestió de Proveïdors</em></h1>
                                </div>

                                <div class="panel-body">
                                    @if(Session::has('message'))
                                    <div class="alert alert-primary" role="alert">
                                        {{ Session::get('message') }}
                                    </div>
                                    @endif

                                    <a href="{{ route('admin/proveïdors/crear') }}" class="btn custom-btn mt-4">
                                        <i class="fas fa-plus"></i> Nou Proveïdor
                                    </a>
                                    <a href="{{ route('dashboard') }}" class="btn custom-btn mt-4">
                                        <i class="fas fa-sync-alt"></i> Menu
                                    </a>                        

                                    <section class="example mt-4">
                                        <table id="table" class="table table-striped table-bordered table-hover display">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nom</th>
                                                    <th>CIF</th>
                                                    <th>Numero</th>
                                                    <th>Email</th>
                                                    <th>Incidència q tracta</th>
                                                    <th>Accions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($proveidors as $prov)
                                                <tr>
                                                    <td class="v-align-middle">{{$prov->id}}</td>
                                                    <td class="v-align-middle">{{$prov->nom}}</td>
                                                    <td class="v-align-middle">{{$prov->cif}}</td>
                                                    <td class="v-align-middle">{{$prov->numero}}</td>
                                                    <td class="v-align-middle">{{$prov->email}}</td>
                                                    <td class="v-align-middle">{{$prov->tipus_incidencia}}</td>
                                                    <td>
                                                        <form action="{{ route('admin/proveïdors/destroy', $prov->id) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminar()">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <a href="{{ route('admin/proveïdors/editar', $prov->id) }}" class="btn custom-btn">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <button class="btn btn-danger btn-xs" type="submit">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Bootstrap JS (Popper.js and Bootstrap JS) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            new DataTable('#table');
        </script>
        <script type="text/javascript">
            function confirmarEliminar() {
                var x = confirm("Estas seguro de Eliminar?");
                return x;
            }
        </script>
</body>

</html>