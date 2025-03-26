<div class="row padding-1 p-1">
  <div class="col-md-12">
    <!-- Campo para User ID -->
    <div class="mb-3">
      <label for="user_id" class="form-label">User ID</label>
      <input type="text" name="user_id" id="user_id" class="form-control" value="{{ old('user_id', $role->user_id ?? '') }}" required>
    </div>
    <!-- Campo para Rol -->
    <div class="mb-3">
      <label for="rol" class="form-label">Rol</label>
      <select name="rol" id="rol" class="form-control" required>
        <option value="cliente" {{ (old('rol', $role->rol ?? '') == 'cliente') ? 'selected' : '' }}>Cliente</option>
        <option value="trabajador" {{ (old('rol', $role->rol ?? '') == 'trabajador') ? 'selected' : '' }}>Trabajador</option>
        <option value="administrador" {{ (old('rol', $role->rol ?? '') == 'administrador') ? 'selected' : '' }}>Administrador</option>
      </select>
    </div>
    <!-- Campo para Verificado -->
    <div class="mb-3">
      <label for="verificado" class="form-label">Verificado</label>
      <select name="verificado" id="verificado" class="form-control" required>
        <option value="0" {{ (old('verificado', $role->verificado ?? false) == false) ? 'selected' : '' }}>No</option>
        <option value="1" {{ (old('verificado', $role->verificado ?? false) == true) ? 'selected' : '' }}>Sí</option>
      </select>
    </div>
  </div>
  <div class="col-md-12 mt-2">
    <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
  </div>
</div>
