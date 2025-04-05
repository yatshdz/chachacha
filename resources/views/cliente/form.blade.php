<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $cliente->nombre ?? '') }}" required>
</div>

<div class="form-group">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $cliente->apellido ?? '') }}" required>
</div>

<div class="form-group">
    <label for="correo">Correo</label>
    <input type="email" name="correo" class="form-control" value="{{ old('correo', $cliente->correo ?? '') }}" required>
</div>

<div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono ?? '') }}">
</div>

<div class="form-group">
    <label for="direccion">Dirección</label>
    <textarea name="direccion" class="form-control" rows="3" required>{{ old('direccion', $cliente->direccion ?? '') }}</textarea>
</div>
