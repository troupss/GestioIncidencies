<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <div class="panel-body">

                @if (!empty ($incidencies->id))
                <div class="mb-3">
                    <label for="id" class="form-label">id</label>
                    <div>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $incidencies->id }}" readonly>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <div>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $incidencies->nom }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tipus" class="form-label">Tipus</label>
                    <div>
                        <input type="text" class="form-control" id="tipus" name="tipus" value="{{ $incidencies->tipus }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lloc" class="form-label">Lloc</label>
                    <div>
                        <input type="text" class="form-control" id="lloc" name="lloc" value="{{ $incidencies->lloc }}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lloc" class="form-label">Descripció</label>
                    <div class="form-floating">
                        <textarea class="form-control" id="descripcio" name="descripcio" style="height: 100px">{{ $incidencies->descripcio }}</textarea>
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

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <div>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tipus" class="form-label">Tipus</label>
                    <div>
                        <input type="text" class="form-control" id="tipus" name="tipus">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lloc" class="form-label">Lloc</label>
                    <div>
                        <input type="text" class="form-control" id="lloc" name="lloc">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="lloc" class="form-label">Descripció</label>
                    <div class="form-floating">
                        <textarea class="form-control" id="descripcio" name="descripcio" style="height: 100px"></textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="img" class="negrita">Selecciona una imagen:</label>
                    <div>
                        <input name="media" type="file" id="img">
                    </div>
                </div>

                @endif

                <button type="submit" class="btn btn-info">Guardar</button>
                <a href="{{ route('admin/incidencies') }}" class="btn btn-warning">Cancelar</a>

                <br>
            </div>
        </section>
    </div>
</div>