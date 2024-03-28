<div class="space-y-6">
    <div class="card bg-base-100 border-2 border-base-300">
        <div class="card-body text-center max-w-lg mx-auto space-y-4 p-10">
            <h1 class="text-3xl font-bold">Cari Ruangan</h1>
            <p>Gunakan fitur ini untuk pencarian lokasi divisi atau ruangan. Anda bisa cari
                berdasarkan ruangan atau divisi dan juga nama gedung dan lainnya.</p>
            <input type="search" class="input input-bordered w-full max-w-xs self-center" wire:model.lazy="cari"
                placeholder="Pencarian" />
        </div>
    </div>

    @if ($datas)
        <h1 class="text-lg font-semibold">Hasil pencarian :</h1>
        <div class="grid md:grid-cols-3 gap-4">
            @foreach ($datas as $data)
                @livewire('pages.office.item', ['officeMap' => $data], key($data->id))
            @endforeach
        </div>
    @endif

    @livewire('pages.office.show')
</div>
