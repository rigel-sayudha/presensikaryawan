<div>
    <input type="checkbox" id="modalRole" class="modal-toggle" wire:model.live="show" />
    <div class="modal" role="dialog">
        <form class="modal-box max-w-sm" wire:submit="simpan">
            <h3 class="font-bold text-lg">Update role or permission</h3>
            <div class="py-4 space-y-2">

                <div class="form-control">
                    <label class="label cursor-pointer justify-start gap-2">
                        <input type="radio" wire:model.live="model" class="radio" value="permission" />
                        <span class="label-text">Permission</span>
                    </label>
                </div>

                <div class="form-control">
                    <label class="label cursor-pointer justify-start gap-2">
                        <input type="radio" wire:model.live="model" class="radio" value="role" />
                        <span class="label-text">Role</span>
                    </label>
                </div>

                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nama {{ $model }}:</span>
                    </label>
                    <input type="text" class="input input-bordered w-full" placeholder="Nama permission atau role"
                        wire:model.live='name'>
                </div>

            </div>
            <div class="modal-action justify-between">
                <label for="modalRole" class="btn">Close!</label>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
