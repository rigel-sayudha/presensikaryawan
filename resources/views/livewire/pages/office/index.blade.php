<div class="space-y-6">
    <div class="flex flex-col lg:flex-row justify-between gap-2">
        <input type="search" class="input input-bordered" wire:model="search" placeholder="Pencarian">
        <button class="btn btn-primary" wire:click="$dispatch('createOfficeMap')">
            <x-tabler-circle-plus class="icon-5" />
            <span>Tambah map</span>
        </button>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Nama ruangan / divisi</th>
                <th>Gedung</th>
                <th>Lantai</th>
                <th>Deskripsi</th>
                <th class="text-center">Actions</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <div class="flex gap-2 items-center">
                                <div class="avatar">
                                    <div class="w-5 rounded-full">
                                        <img src="{{ $data->image }}" alt="">
                                    </div>
                                </div>
                                <span>{{ $data->name }}</span>
                            </div>
                        </td>
                        <td>{{ $data->building }}</td>
                        <td>{{ $data->floor }}</td>
                        <td>{{ Str::words($data->desc, 4) }}</td>
                        <td>
                            <div class="flex gap-1 justify-center">
                                <button class="btn btn-square input-bordered btn-xs"
                                    wire:click="$dispatch('showOfficeMap', {officeMap: {{ $data->id }}})">
                                    <x-tabler-folder class="icon-4" />
                                </button>
                                <button class="btn btn-square input-bordered btn-xs"
                                    wire:click="$dispatch('editOfficeMap', {officeMap: {{ $data->id }}})">
                                    <x-tabler-edit class="icon-4" />
                                </button>
                                <button class="btn btn-square input-bordered btn-xs"
                                    wire:click="$dispatch('deleteOfficeMap', {officeMap: {{ $data->id }}})">
                                    <x-tabler-trash class="icon-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('pages.office.actions')
    @livewire('pages.office.show')
</div>
