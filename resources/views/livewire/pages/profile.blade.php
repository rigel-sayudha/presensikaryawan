<div class="card max-w-sm mx-auto">
    <form class="card-body space-y-4" wire:submit="simpan">
        <div class="flex items-center justify-center">
            <label for="pickphoto" class="avatar cursor-pointer">
                <div class="w-32 rounded">
                    @if ($form->photo)
                        <img src="{{ $form->photo->temporaryUrl() }}" alt="">
                    @else
                        <img src="{{ $user->avatar }}" alt="">
                    @endif
                </div>
            </label>
            <input id="pickphoto" type="file" wire:model="form.photo" placeholder="photo" class="hidden">
        </div>

        <div class=" space-y-2">
            <label class="input input-bordered flex gap-2 items-center @error('form.name') input-error @enderror">
                <x-tabler-user class="icon-5" />
                <input type="text" wire:model="form.name" placeholder="name" class="grow">
            </label>
            <label class="input input-bordered flex gap-2 items-center @error('form.email') input-error @enderror">
                <x-tabler-at class="icon-5" />
                <input type="email" wire:model="form.email" placeholder="email" class="grow">
            </label>
            <label class="input input-bordered flex gap-2 items-center @error('form.password') input-error @enderror">
                <x-tabler-key class="icon-5" />
                <input type="text" wire:model="form.password" placeholder="password" class="grow">
            </label>
            <label class="input input-bordered flex gap-2 items-center @error('form.school') input-error @enderror">
                <x-tabler-building class="icon-5" />
                <input type="text" wire:model="form.school" placeholder="school" class="grow">
            </label>
            <label class="input input-bordered flex gap-2 items-center @error('form.nis') input-error @enderror">
                <x-tabler-user class="icon-5" />
                <input type="text" wire:model="form.nis" placeholder="nis" class="grow">
            </label>
            <label class="input input-bordered flex gap-2 items-center @error('form.phone') input-error @enderror">
                <x-tabler-phone class="icon-5" />
                <input type="text" wire:model="form.phone" placeholder="phone" class="grow">
            </label>
        </div>

        <div class="card-actions">
            <button class="btn btn-primary">
                <x-tabler-check class="icon-5" />
                <span>Simpan</span>
            </button>
        </div>
    </form>
</div>
