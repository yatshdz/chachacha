<div class="row padding-1 p-1">
    <div class="col-md-12">
        <!-- Campo para ID Reserva -->
        <div class="mb-3">
            <label for="id_reserva" class="form-label">ID Reserva</label>
            <input type="text" name="id_reserva" id="id_reserva" class="form-control" value="{{ old('id_reserva', $pago->id_reserva ?? '') }}" required>
        </div>
        <!-- Campo para ID Cliente -->
        <div class="mb-3">
            <label for="id_cliente" class="form-label">ID Cliente</label>
            <input type="text" name="id_cliente" id="id_cliente" class="form-control" value="{{ old('id_cliente', $pago->id_cliente ?? '') }}" required>
        </div>
        <!-- Campo para Monto -->
        <div class="mb-3">
            <label for="monto" class="form-label">Monto</label>
            <input type="number" step="0.01" name="monto" id="monto" class="form-control" value="{{ old('monto', $pago->monto ?? '') }}" required>
        </div>
        <!-- Campo para Estado -->
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="pendiente" {{ (old('estado', $pago->estado ?? 'pendiente') == 'pendiente') ? 'selected' : '' }}>Pendiente</option>
                <option value="completado" {{ (old('estado', $pago->estado ?? '') == 'completado') ? 'selected' : '' }}>Completado</option>
                <option value="fallido" {{ (old('estado', $pago->estado ?? '') == 'fallido') ? 'selected' : '' }}>Fallido</option>
            </select>
        </div>
        <!-- Campo para Método de Pago -->
        <div class="mb-3">
            <label for="metodo_pago" class="form-label">Método de Pago</label>
            <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" value="{{ old('metodo_pago', $pago->metodo_pago ?? '') }}">
        </div>
    </div>
    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
