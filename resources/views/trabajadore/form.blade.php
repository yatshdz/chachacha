<div class="form-group mb-3">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $trabajadore->nombre ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $trabajadore->apellido ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="disponibilidad" class="form-label">Disponibilidad</label>
    <div class="form-check">
        <input type="radio" id="disponibilidad_si" name="disponibilidad" value="Sí" 
               class="form-check-input" 
               {{ old('disponibilidad', $trabajadore->disponibilidad ?? '') == 'Sí' ? 'checked' : '' }}>
        <label for="disponibilidad_si" class="form-check-label">Sí</label>
    </div>
    <div class="form-check">
        <input type="radio" id="disponibilidad_no" name="disponibilidad" value="No" 
               class="form-check-input" 
               {{ old('disponibilidad', $trabajadore->disponibilidad ?? '') == 'No' ? 'checked' : '' }}>
        <label for="disponibilidad_no" class="form-check-label">No</label>
    </div>
</div>

<div class="form-group mb-3">
    <label for="tarifa_por_hora">Tarifa por Hora</label>
    <input type="number" step="0.01" name="tarifa_por_hora" class="form-control" value="{{ old('tarifa_por_hora', $trabajadore->tarifa_por_hora ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="experiencia">Experiencia (años)</label>
    <input type="number" min="0" name="experiencia" class="form-control" value="{{ old('experiencia', $trabajadore->experiencia ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="especialidad">Especialidad</label>
    <input type="text" name="especialidad" class="form-control" value="{{ old('especialidad', $trabajadore->especialidad ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $trabajadore->email ?? '') }}" required>
</div>

<div class="form-group text-end">
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('trabajadores.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
