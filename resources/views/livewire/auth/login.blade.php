<form class="card-body space-y-4" wire:submit="login">
    <div class="flex flex-col gap-1">
        <label for="" class="input input-bordered flex items-center gap-2">
            <x-tabler-user class="icon-5" />
            <input type="text" class="grow" placeholder="Email address" wire:model="email">
        </label>
        <label for="" class="input input-bordered flex items-center gap-2">
            <x-tabler-key class="icon-5" />
            <input type="password" class="grow" placeholder="Password" wire:model="password">
        </label>
    </div>

    <div class="card-actions">
        <button class="btn btn-primary">
            <x-tabler-login class="icon-5" />
            <span>login</span>
        </button>
    </div>
</form>
