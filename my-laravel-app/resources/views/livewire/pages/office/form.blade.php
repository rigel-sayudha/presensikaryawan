<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="name">Nama Kantor</label>
            <input type="text" id="name" wire:model="form.name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="building">Gedung</label>
            <input type="text" id="building" wire:model="form.building" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="floor">Lantai</label>
            <input type="text" id="floor" wire:model="form.floor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input type="text" id="latitude" wire:model="form.latitude" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input type="text" id="longitude" wire:model="form.longitude" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea id="desc" wire:model="form.desc" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>