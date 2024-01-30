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

        .container-custom {
            margin-top: 50px;
            /* Ajustar el margen superior para centrar el contenido */
        }

        .content-box-large {
            margin-top: 20px;
            /* Agregar un poco de margen a la caja de contenido */
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 container-custom">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin/incidencies') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Incidencies</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    <h2>Incidencies</h2>
                                </div>
                            </div>

                            <div class="panel-body">
                                @if(Session::has('message'))
                                <div class="alert alert-primary" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                                @endif

                                <a href="{{ route('admin/incidencies/crear') }}" class="btn btn-success mt-4 ml-3"> Crear
                                </a>

                                <section class="example mt-4">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Tipus</th>
                                                <th>Lloc</th>
                                                <th>Descripció</th>
                                                <th>Media</th>
                                                <th>Estat</th>
                                                <th>Enviat</th>
                                                <th>Accions</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($incidencies as $incidencia)
                                            <tr>
                                                <td class="v-align-middle">{{$incidencia->id}}</td>
                                                <td class="v-align-middle">{{$incidencia->nom}}</td>
                                                <td class="v-align-middle">{{$incidencia->tipus}}</td>
                                                <td class="v-align-middle">{{$incidencia->lloc}}</td>
                                                <td class="v-align-middle">{{$incidencia->descripcio}}</td>
                                                <td class="v-align-middle">
                                                    <img src="../../../uploads/{{ $incidencia->media }}" width="30" class="img-fluid">
                                                </td>
                                                <td class="v-align-middle">
                                                    <select class="form-control" name="estat" onchange="updateField('{{ $incidencia->id }}', 'estat', this.value)">
                                                        <option value="pendent" {{ $incidencia->estat == 'pendent' ? 'selected' : '' }}>Pendent</option>
                                                        <option value="resolta" {{ $incidencia->estat == 'resolta' ? 'selected' : '' }}>Resolta</option>
                                                    </select>
                                                <td class="v-align-middle">
                                                    <select class="form-control" name="enviat" onchange="updateField('{{ $incidencia->id }}', 'enviat', this.value)">
                                                        <option value="pendent" {{ $incidencia->enviat == 'pendent' ? 'selected' : '' }}>Pendent</option>
                                                        <option value="enviat" {{ $incidencia->enviat == 'enviat' ? 'selected' : '' }}>Enviat</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin/incidencies/editar', $incidencia->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                                                    <a href="{{ route('admin/incidencies/destroy', $incidencia->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</a>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>

<script>
    function updateField(id, field, value) {
        $.ajax({
            url: '/admin/incidencies/UpdateSelect/' + id,
            type: 'PUT',
            data: JSON.stringify({
                [field]: value,
                _token: $('meta[name="csrf-token"]').attr('content'),
            }),
            contentType: 'application/json',
            success: function(response) {
                console.log(response);
            }
        });
    }
</script>

    <!-- Add Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" defer></script>

</body>

</html>