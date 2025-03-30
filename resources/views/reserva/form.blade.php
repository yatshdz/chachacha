<div class="row">
    <div class="col-md-12">
        <!-- Campo para id_cliente -->
        <div class="mb-3">
            <label for="id_cliente" class="form-label">ID Cliente</label>
            <input type="text" name="id_cliente" id="id_cliente" class="form-control" value="{{ old('id_cliente', $reserva->id_cliente ?? '') }}" required>
        </div>
        <!-- Campo para id_trabajador -->
        <div class="mb-3">
            <label for="id_trabajador" class="form-label">ID Trabajador</label>
            <input type="text" name="id_trabajador" id="id_trabajador" class="form-control" value="{{ old('id_trabajador', $reserva->id_trabajador ?? '') }}" required>
        </div>
        <!-- Campo para fecha -->
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="datetime-local" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', isset($reserva) ? date('Y-m-d\TH:i', strtotime($reserva->fecha)) : '') }}" required>
        </div>
        <!-- Campo para duracion -->
        <div class="mb-3">
            <label for="duracion" class="form-label">Duración (minutos)</label>
            <input type="number" name="duracion" id="duracion" class="form-control" value="{{ old('duracion', $reserva->duracion ?? '') }}">
        </div>
        <!-- Campo para estado -->
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendiente" {{ (old('estado', $reserva->estado ?? '') == 'pendiente') ? 'selected' : '' }}>Pendiente</option>
                <option value="confirmada" {{ (old('estado', $reserva->estado ?? '') == 'confirmada') ? 'selected' : '' }}>Confirmada</option>
                <option value="completada" {{ (old('estado', $reserva->estado ?? '') == 'completada') ? 'selected' : '' }}>Completada</option>
                <option value="cancelada" {{ (old('estado', $reserva->estado ?? '') == 'cancelada') ? 'selected' : '' }}>Cancelada</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
