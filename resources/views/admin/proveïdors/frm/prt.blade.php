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
                    <h1 class="text-4xl font-bold text-lg-center mb-4 text-black" style="font-family: 'Cardo', serif;">
                        Proveïdors <i class="fas fa-shopping-bag"></i>
                    </h1>

                    @if (!empty ($proveidors->id))
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <div>
                            <input type="text" class="form-control" id="nom" name="nom" value="{{ $proveidors->nom }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tipus" class="form-label">CIF</label>
                        <div>
                            <input type="text" class="form-control" id="cif" name="cif" value="{{ $proveidors->cif }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="lloc" class="form-label">Numero</label>
                        <div>
                            <input type="text" class="form-control" id="numero" name="numero" value="{{ $proveidors->numero }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lloc" class="form-label">Email</label>
                        <div>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $proveidors->email }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="lloc" class="form-label">Tipus d'Incidencia</label>
                        <div>
                            <input type="text" class="form-control" id="tipus_incidencia" name="tipus_incidencia" value="{{ $proveidors->tipus_incidencia }}">
                        </div>
                    </div>


                    @else


                    <div class="mb-3 text-center">
                        <label for="nom" class="form-label">Nom</label>
                        <div>
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <label for="cif" class="form-label">CIF</label>
                        <div>
                            <input type="text" class="form-control" id="cif" name="cif">
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="num" class="form-label">Numero</label>
                        <div>
                            <input type="text" class="form-control" id="numero" name="numero">
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <label for="num" class="form-label">Email</label>
                        <div>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="num" class="form-label">Tipus d'Incidencia</label>
                        <div>
                            <input type="text" class="form-control" id="tipus_incidencia" name="tipus_incidencia">
                        </div>
                    </div>

                    @endif

                    <div class="text-lg-center">
                        <button type="submit" class="btn custom-btn"><i class="fas fa-save"></i> Guardar</button>
                        <a href="javascript:void(0);" onclick="history.back();" class="btn custom-btn"><i class="fas fa-times-circle"></i> Cancelar</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>