<div class="form-group">
    <label>Nombre</label>
    <input type="text" class="form-control" wire:model="nombre">
    @error('nombre') <span>{{ $message }}</span> @enderror
</div>
<div class="form-group">
    <label>Telefono</label>
    <textarea class="form-control" wire:model="telefono"></textarea>
    @error('telefono') <span>{{ $message }}</span> @enderror
</div>