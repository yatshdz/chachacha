<div class="row">
    <!-- Seleccionar Trabajador -->
    <div class="col-md-6 mb-3">
        <label for="role_id" class="form-label">Trabajador</label>
        <select name="role_id" id="role_id" class="form-select" required>
            <option value="">{{ __('Seleccione un trabajador') }}</option>
            @foreach($trabajadores as $trabajador)
                <option value="{{ $trabajador->_id }}"
                    {{ old('role_id', isset($perfile) ? $perfile->role_id : '') == $trabajador->_id ? 'selected' : '' }}>
                    {{ $trabajador->nombre }} {{ $trabajador->apellido }}
                </option>
            @endforeach
        </select>
        @error('role_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Experiencia -->
    <div class="col-md-6 mb-3">
        <label for="experiencia" class="form-label">Experiencia (años)</label>
        <input type="number" name="experiencia" id="experiencia" class="form-control" min="0" max="50"
               value="{{ old('experiencia', isset($perfile) ? $perfile->experiencia : '') }}" required>
        @error('experiencia')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Tarifa por Hora -->
    <div class="col-md-6 mb-3">
        <label for="tarifa_por_hora" class="form-label">Tarifa por Hora</label>
        <input type="number" name="tarifa_por_hora" id="tarifa_por_hora" class="form-control" min="0" step="0.01"
               value="{{ old('tarifa_por_hora', isset($perfile) ? $perfile->tarifa_por_hora : '') }}" required>
        @error('tarifa_por_hora')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Disponibilidad -->
    <div class="col-md-6 mb-3">
        <label for="disponibilidad" class="form-label">Disponibilidad</label>
        <select name="disponibilidad" id="disponibilidad" class="form-select" required>
            <option value="1" {{ old('disponibilidad', isset($perfile) ? $perfile->disponibilidad : '1') == '1' ? 'selected' : '' }}>
                {{ __('Disponible') }}
            </option>
            <option value="0" {{ old('disponibilidad', isset($perfile) ? $perfile->disponibilidad : '1') == '0' ? 'selected' : '' }}>
                {{ __('No disponible') }}
            </option>
        </select>
        @error('disponibilidad')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-12 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
