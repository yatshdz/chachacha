<div class="form-group mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $servicio->nombre ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required>{{ old('descripcion', $servicio->descripcion ?? '') }}</textarea>
</div>

<div class="form-group mb-3">
    <label for="costo" class="form-label">Costo</label>
    <input type="number" step="0.01" name="costo" id="costo" class="form-control" value="{{ old('costo', $servicio->costo ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="duracion_aproximada" class="form-label">Duración Aproximada</label>
    <input type="text" name="duracion_aproximada" id="duracion_aproximada" class="form-control" value="{{ old('duracion_aproximada', $servicio->duracion_aproximada ?? '') }}" required>
</div>

<div class="form-group text-end">
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
