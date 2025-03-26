<div class="row padding-1 p-1">
    <div class="col-md-12">
        <!-- Campo para id_usuario -->
        <div class="mb-3">
            <label for="id_usuario" class="form-label">ID Usuario</label>
            <input type="text" name="id_usuario" id="id_usuario" class="form-control" value="{{ old('id_usuario', $perfil->id_usuario ?? '') }}" required>
        </div>
        <!-- Campo para experiencia -->
        <div class="mb-3">
            <label for="experiencia" class="form-label">Experiencia</label>
            <textarea name="experiencia" id="experiencia" class="form-control" rows="3">{{ old('experiencia', $perfil->experiencia ?? '') }}</textarea>
        </div>
        <!-- Campo para disponibilidad -->
        <div class="mb-3">
            <label for="disponibilidad" class="form-label">Disponibilidad</label>
            <input type="text" name="disponibilidad" id="disponibilidad" class="form-control" value="{{ old('disponibilidad', $perfil->disponibilidad ?? '') }}">
        </div>
        <!-- Campo para tarifa_por_hora -->
        <div class="mb-3">
            <label for="tarifa_por_hora" class="form-label">Tarifa por Hora</label>
            <input type="number" step="0.01" name="tarifa_por_hora" id="tarifa_por_hora" class="form-control" value="{{ old('tarifa_por_hora', $perfil->tarifa_por_hora ?? '') }}">
        </div>
        <!-- Campo para fotos (JSON) -->
        <div class="mb-3">
            <label for="fotos" class="form-label">Fotos (JSON)</label>
            <textarea name="fotos" id="fotos" class="form-control" rows="3">{{ old('fotos', $perfil->fotos ?? '') }}</textarea>
        </div>
        <!-- Campo para calificacion -->
        <div class="mb-3">
            <label for="calificacion" class="form-label">Calificación</label>
            <input type="number" step="0.01" name="calificacion" id="calificacion" class="form-control" value="{{ old('calificacion', $perfil->calificacion ?? 0) }}">
        </div>
        <!-- Campo para numero_resenas -->
        <div class="mb-3">
            <label for="numero_resenas" class="form-label">Número de Reseñas</label>
            <input type="number" name="numero_resenas" id="numero_resenas" class="form-control" value="{{ old('numero_resenas', $perfil->numero_resenas ?? 0) }}">
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
