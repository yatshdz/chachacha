<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" 
                   value="{{ old('nombre') }}" required>
            @error('nombre')<div class="text-danger mt-1">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" 
                   value="{{ old('apellido') }}" required>
            @error('apellido')<div class="text-danger mt-1">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select name="rol" id="rol" class="form-control" required>
                <option value="">Seleccione un rol</option>
                <option value="cliente" {{ old('rol') == 'cliente' ? 'selected' : '' }}>Cliente</option>
                <option value="trabajador" {{ old('rol') == 'trabajador' ? 'selected' : '' }}>Trabajador</option>
            </select>
            @error('rol')<div class="text-danger mt-1">{{ $message }}</div>@enderror
        </div>
        
        <div class="mb-3">
            <label for="verificado" class="form-label">Verificado</label>
            <select name="verificado" id="verificado" class="form-control" required>
                <option value="0" {{ old('verificado', 0) == 0 ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('verificado', 0) == 1 ? 'selected' : '' }}>Sí</option>
            </select>
            @error('verificado')<div class="text-danger mt-1">{{ $message }}</div>@enderror
        </div>
        
        <div class="col-md-12 mt-2">
            <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
        </div>
    </div>
</div>