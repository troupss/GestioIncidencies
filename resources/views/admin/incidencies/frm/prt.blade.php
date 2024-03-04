<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Font Awesome CSS for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Add Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Your existing styles go here */

        /* Media query for small screens */
        @media (max-width: 576px) {
            .custom-btn {
                width: 100%;
                margin-bottom: 10px;
            }

            .text-4xl {
                font-size: 2rem;
            }

            .panel-body {
                padding: 20px;
            }
        }

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
</head>
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <section class="panel">
                <div class="panel-body">
                    <h1 class="text-4xl font-bold text-center mb-4 text-black" style="font-family: 'Cardo', serif;">
                        Incidencia <i class="fas fa-wrench"></i>
                    </h1>

                    @if (!empty ($incidencies->id))
                    <div class="mb-3">
                        <label for="id" class="form-label">id</label>
                        <div>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $incidencies->id }}"
                                readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tipus" class="form-label">Tipus</label>
                        <div>
                            <input type="text" class="form-control" id="tipus" name="tipus"
                                value="{{ $incidencies->tipus }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="lloc" class="form-label">Lloc</label>
                        <div>
                            <input type="text" class="form-control" id="lloc" name="lloc"
                                value="{{ $incidencies->lloc }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="lloc" class="form-label">Descripció</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="descripcio" name="descripcio"
                                style="height: 100px">{{ $incidencies->descripcio }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="media" type="file" id="media">
                            <br>
                            <br>

                            @if ( !empty ( $incidencies->media) )

                            <span>Imagen Actual: </span>
                            <br>
                            <img src="../../../uploads/{{ $incidencies->media }}" width="200" class="img-fluid">

                            @else

                            Aún no se ha cargado una imagen para este producto

                            @endif

                        </div>
                    </div>

                    @else


                    <div class="mb-3 text-center">
                        <label for="tipus" class="form-label">Tipus <i class="fas fa-plus"></i></label>
                        <div>
                            <select class="form-select" id="tipus" name="tipus">
                                @foreach($tipusIncidencia as $id => $tipus)
                                <option value="{{ $tipus }}">{{ $tipus }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <label for="lloc" class="form-label">Lloc</label>
                        <div>
                            <input type="text" class="form-control" id="lloc" name="lloc">
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="lloc" class="form-label">Descripció</label>
                        <div class="form-floating">
                            <textarea class="form-control" id="descripcio" name="descripcio"
                                style="height: 100px"></textarea>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <label for="img" class="negrita">Selecciona una imagen:</label>
                        <div>
                            <input name="media" type="file" id="img">
                        </div>
                    </div>

                    @endif

                    <div class="text-lg-center">
                        <button type="submit" class="btn custom-btn"><i class="fas fa-save"></i> Guardar</button>
                        <a href="javascript:void(0);" onclick="history.back();" class="btn custom-btn"><i
                                class="fas fa-times-circle"></i> Cancelar</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>