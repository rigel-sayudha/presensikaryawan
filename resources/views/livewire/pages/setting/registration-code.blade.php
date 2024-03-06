<div class="card w-full max-w-md mx-auto bg-base-100 border-2">
    <div class="card-body space-y-6">
        <h3 class="card-title">Kode registrasi</h3>
        <p>Kode registrasi ini digunakan dalam proses pendaftaran peserta magang baru.</p>
        <div class="text-3xl font-bold font-mono bg-base-200 rounded-2xl p-12 text-center border-2 border-base-300">
            {{ $kode }}
        </div>
        <div class="divider"></div>
        <div class="card-actions">
            <button class="btn btn-primary" wire:click="generateKode">
                <x-tabler-reload class="icon-5" />
                <span>Regenerate</span>
            </button>
        </div>
    </div>
</div>
