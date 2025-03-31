<div class="row padding-1 p-1">
    <div class="col-md-12">
        <!-- Campo Nombre -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" 
                   class="form-control @error('nombre') is-invalid @enderror" 
                   value="{{ old('nombre', $role->nombre) }}" 
                   required>
            @error('nombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Apellido -->
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" 
                   class="form-control @error('apellido') is-invalid @enderror" 
                   value="{{ old('apellido', $role->apellido) }}" 
                   required>
            @error('apellido')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Rol -->
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select name="rol" id="rol" 
                    class="form-control @error('rol') is-invalid @enderror" 
                    required>
                <option value="">Seleccione un rol</option>
                <option value="cliente" 
                    {{ old('rol', $role->rol) == 'cliente' ? 'selected' : '' }}>
                    Cliente
                </option>
                <option value="trabajador" 
                    {{ old('rol', $role->rol) == 'trabajador' ? 'selected' : '' }}>
                    Trabajador
                </option>
            </select>
            @error('rol')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Campo Verificado -->
        <div class="mb-3">
            <label for="verificado" class="form-label">Verificado</label>
            <select name="verificado" id="verificado" 
                    class="form-control @error('verificado') is-invalid @enderror" 
                    required>
                <option value="0" 
                    {{ old('verificado', $role->verificado) == 0 ? 'selected' : '' }}>
                    No
                </option>
                <option value="1" 
                    {{ old('verificado', $role->verificado) == 1 ? 'selected' : '' }}>
                    Sí
                </option>
            </select>
            @error('verificado')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Botón de envío -->
        <div class="col-md-12 mt-4">
            <button type="submit" class="btn btn-primary w-100">
                <i class="fas fa-save me-2"></i>{{ $btnText ?? __('Guardar') }}
            </button>
        </div>
    </div>
</div>