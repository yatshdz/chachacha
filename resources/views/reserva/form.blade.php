<div class="form-group mb-3">
    <label for="id_cliente" class="form-label">Cliente</label>
    <select name="id_cliente" id="id_cliente" class="form-select" required>
        <option value="">-- Seleccione un Cliente --</option>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->_id }}" {{ old('id_cliente', $reserva->id_cliente ?? '') == $cliente->_id ? 'selected' : '' }}>
                {{ $cliente->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="id_trabajador" class="form-label">Trabajador</label>
    <select name="id_trabajador" id="id_trabajador" class="form-select" required>
        <option value="">-- Seleccione un Trabajador --</option>
        @foreach($trabajadores as $trabajador)
            <option value="{{ $trabajador->_id }}" {{ old('id_trabajador', $reserva->id_trabajador ?? '') == $trabajador->_id ? 'selected' : '' }}>
                {{ $trabajador->nombre }} {{ $trabajador->apellido }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="id_servicio" class="form-label">Servicio</label>
    <select name="id_servicio" id="id_servicio" class="form-select" required>
        <option value="">-- Seleccione un Servicio --</option>
        @foreach($servicios as $servicio)
            <option value="{{ $servicio->_id }}" {{ old('id_servicio', $reserva->id_servicio ?? '') == $servicio->_id ? 'selected' : '' }}>
                {{ $servicio->nombre }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', isset($reserva->fecha) ? \Carbon\Carbon::parse($reserva->fecha)->format('Y-m-d\TH:i') : '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="duracion" class="form-label">Duración (minutos)</label>
    <input type="number" name="duracion" id="duracion" class="form-control" value="{{ old('duracion', $reserva->duracion ?? '') }}">
</div>

<div class="form-group mb-3">
    <label for="estado" class="form-label">Estado</label>
    <select name="estado" id="estado" class="form-select" required>
        <option value="pendiente" {{ old('estado', $reserva->estado ?? 'pendiente') == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
        <option value="confirmada" {{ old('estado', $reserva->estado ?? '') == 'confirmada' ? 'selected' : '' }}>Confirmada</option>
        <option value="completada" {{ old('estado', $reserva->estado ?? '') == 'completada' ? 'selected' : '' }}>Completada</option>
        <option value="cancelada" {{ old('estado', $reserva->estado ?? '') == 'cancelada' ? 'selected' : '' }}>Cancelada</option>
    </select>
</div>

<div class="form-group mb-3">
    <label for="comentarios" class="form-label">Comentarios</label>
    <textarea name="comentarios" id="comentarios" class="form-control" rows="3">{{ old('comentarios', $reserva->comentarios ?? '') }}</textarea>
</div>

<div class="form-group text-end">
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
</div>
