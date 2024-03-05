<div class="space-y-6">
    <div class="flex justify-between">
        <input type="search" class="input input-bordered" placeholder="Cari permission" wire:model.live="cari">
        <button class="btn btn-primary" wire:click="$dispatch('addPermission')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Create Role or permission</span>
        </button>
    </div>
    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Permission</th>
                @foreach ($roles as $role)
                    <th class="text-center capitalize">{{ $role->name }}</th>
                @endforeach
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach ($permissions as $permit)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $permit->name }}</td>
                        @foreach ($roles as $role)
                            <td class="text-center"><input type="checkbox" class="toggle toggle-sm"
                                    @checked($permit->hasRole($role->name))
                                    wire:change="applyPermission({{ $permit->id }}, '{{ $role->name }}')" /></td>
                        @endforeach
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn input-bordered btn-xs btn-square"
                                    wire:click="$dispatch('editPermission', {permission: {{ $permit->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn input-bordered btn-xs btn-square">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.role.actions')
</div>
