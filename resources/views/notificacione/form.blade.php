<div class="row padding-1 p-1">
    <div class="col-md-12">
        <!-- Campo para ID Usuario -->
        <div class="mb-3">
            <label for="id_usuario" class="form-label">ID Usuario</label>
            <input type="text" name="id_usuario" id="id_usuario" class="form-control" value="{{ old('id_usuario', $notificacione->id_usuario ?? '') }}" required>
        </div>
        <!-- Campo para Mensaje -->
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea name="mensaje" id="mensaje" class="form-control" rows="3" required>{{ old('mensaje', $notificacione->mensaje ?? '') }}</textarea>
        </div>
        <!-- Campo para Leído -->
        <div class="mb-3">
            <label for="leido" class="form-label">Leído</label>
            <select name="leido" id="leido" class="form-control">
                <option value="0" {{ (old('leido', $notificacione->leido ?? false) == false) ? 'selected' : '' }}>No</option>
                <option value="1" {{ (old('leido', $notificacione->leido ?? false) == true) ? 'selected' : '' }}>Sí</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
