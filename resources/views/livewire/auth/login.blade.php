<form class="card-body space-y-3" wire:submit="login">
    <div class="flex flex-col gap-2">
        <label for="" class="input input-bordered flex items-center gap-2 @error('email') input-error @enderror">
            <x-tabler-at class="icon-5" />
            <input type="email" class="grow" placeholder="Email address" wire:model="email" autocomplete="email">
        </label>
        <label for=""
            class="input input-bordered flex items-center gap-2 @error('password') input-error @enderror">
            <x-tabler-key class="icon-5" />
            <input type="password" class="grow" placeholder="Password" wire:model="password">
        </label>
    </div>

    <div class="card-actions">
        <button class="btn btn-primary">
            <x-tabler-login class="icon-5" />
            <span>Login</span>
        </button>
    </div>
</form>
