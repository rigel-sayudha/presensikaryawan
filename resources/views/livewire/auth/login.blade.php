<form class="card-body" wire:submit="login">
    <label for="" class="input input-bordered flex items-center gap-2">
        <x-tabler-user class="icon-5" />
        <input type="text" class="grow" placeholder="Email address" wire:model="email">
    </label>
    <label for="" class="input input-bordered flex items-center gap-2">
        <x-tabler-key class="icon-5" />
        <input type="text" class="grow" placeholder="Password" wire:model="password">
    </label>

    <div class="card-actions">
        <button class="btn btn-primary">
            <x-tabler-login class="icon-5" />
            <span>login</span>
        </button>
    </div>
</form>
