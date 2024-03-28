<div>
    <input type="checkbox" class="modal-toggle" @checked($show) />
    <div class="modal" role="dialog">
        <form class="modal-box" wire:submit="simpan">
            <h3 class="font-bold text-lg">Form data ruangan</h3>
            <div class="py-4 space-y-2">
                <div class="flex flex-col items-center justify-center gap-2">
                    <label for="pickphoto" class="avatar cursor-pointer">
                        <div @class([
                            'w-32 rounded-full',
                            'ring ring-error ring-offset-base-100 ring-offset-2' => $errors->first(
                                'newImage'),
                        ])>
                            @if ($newImage)
                                <img src="{{ $newImage->temporaryUrl() }}" alt="">
                            @elseif($form->photo)
                                <img src="{{ Storage::url($form->photo) }}" alt="">
                            @else
                                <img src="{{ url('nouser.jpg') }}" alt="">
                            @endif
                        </div>
                    </label>
                    <input id="pickphoto" type="file" wire:model="newImage" placeholder="photo" class="hidden"
                        accept="image/*">
                </div>
                <label for="" class="form-control">
                    <div class="label"><span class="label-text">Nama ruangan / divisi</span></div>
                    <input type="text" class="input input-bordered @error('form.name') input-error @enderror"
                        wire:model="form.name" placeholder="Nama ruangan">
                </label>
                <div class="grid grid-cols-2 gap-4">
                    <label for="" class="form-control">
                        <div class="label"><span class="label-text">Nama gedung</span></div>
                        <input type="text" class="input input-bordered @error('form.building') input-error @enderror"
                            wire:model="form.building" placeholder="nama Gedung">
                    </label>
                    <label for="" class="form-control">
                        <div class="label"><span class="label-text">Lantai</span></div>
                        <input type="text" class="input input-bordered @error('form.floor') input-error @enderror"
                            wire:model="form.floor" placeholder="lantai">
                    </label>
                </div>
                <label for="" class="form-control">
                    <div class="label"><span class="label-text">Keterangan</span></div>
                    <textarea type="text" class="textarea textarea-bordered @error('form.desc') textarea-error @enderror"
                        wire:model="form.desc" placeholder="Deskripsi"></textarea>
                </label>
            </div>
            <div class="modal-action justify-between">
                <button type="button" wire:click="resetAction" class="btn btn-ghost">Close!</button>
                <button class="btn btn-primary">
                    <x-tabler-check class="icon-5" />
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
