<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="id_reserva" class="form-label">ID Reserva</label>
            <input type="text" name="id_reserva" class="form-control" value="{{ old('id_reserva', $resena->id_reserva ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="id_cliente" class="form-label">ID Cliente</label>
            <input type="text" name="id_cliente" class="form-control" value="{{ old('id_cliente', $resena->id_cliente ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="id_trabajador" class="form-label">ID Trabajador</label>
            <input type="text" name="id_trabajador" class="form-control" value="{{ old('id_trabajador', $resena->id_trabajador ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <input type="number" name="calificacion" class="form-control" value="{{ old('calificacion', $resena->calificacion ?? '') }}" required>
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentario</label>
            <textarea name="comentario" class="form-control" rows="3">{{ old('comentario', $resena->comentario ?? '') }}</textarea>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
