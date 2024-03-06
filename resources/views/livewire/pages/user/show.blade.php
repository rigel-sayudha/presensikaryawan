<div class="space-y-6">
    <div class="card bg-base-100 border-2">
        <div class="card-body space-y-4">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="flex items-center justify-center md:aspect-square">
                    <div class="avatar">
                        <div class="w-28 rounded-lg">
                            <img src="{{ $user->avatar }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-3 flex-1">
                    @foreach (['name', 'email', 'school', 'phone', 'nis'] as $key)
                        <div class="flex flex-col p-2 hover:bg-base-200">
                            <span class="text-xs capitalize opacity-50">{{ $key }}</span>
                            <div>{{ $user->$key }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="divider"></div>

            <div class="card-actions justify-end">
                <button class="btn btn-sm" wire:click="$dispatch('updateUser', {user:{{ $user->id }}})">
                    <x-tabler-edit class="icon-5" />
                    <span>Edit user</span>
                </button>
                <button class="btn btn-sm" wire:click="$dispatch('resetPassword', {user:{{ $user->id }}})">
                    <x-tabler-key class="icon-5" />
                    <span>Reset password</span>
                </button>
            </div>
        </div>
    </div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptas molestias harum excepturi eaque natus
        quas, ratione voluptate beatae ipsum repudiandae maiores. Ratione quidem, obcaecati animi eius perferendis
        dolores dolore!
    </p>

    @livewire('pages.user.actions')
</div>
