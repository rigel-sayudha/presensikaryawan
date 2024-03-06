<form class="card-body space-y-3" wire:submit="register">
    <div class="flex flex-col gap-2">
        <label class="input input-bordered flex items-center gap-2 @error('name') input-error @enderror">
            <x-tabler-user class="icon-5" />
            <input type="text" class="grow" placeholder="Nama lengkap" wire:model="name">
        </label>
        <label class="input input-bordered flex items-center gap-2 @error('email') input-error @enderror">
            <x-tabler-at class="icon-5" />
            <input type="email" class="grow" placeholder="Email address" wire:model="email">
        </label>
        <label class="input input-bordered flex items-center gap-2 @error('password') input-error @enderror">
            <x-tabler-key class="icon-5" />
            <input type="password" class="grow" placeholder="Password" wire:model="password">
        </label>
        <label class="input input-bordered flex items-center gap-2 @error('kodeRegistrasi') input-error @enderror">
            <x-tabler-square-asterisk class="icon-5" />
            <input type="text" class="grow" placeholder="Kode registrasi" wire:model="kodeRegistrasi">
        </label>
    </div>

    <div class="card-actions items-center justify-between">
        <button class="btn btn-primary">
            <x-tabler-login class="icon-5" />
            <span>Registrasi</span>
        </button>
    </div>
</form>
