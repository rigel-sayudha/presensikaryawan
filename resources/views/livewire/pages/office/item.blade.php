<div class="relative">
    <div class="hero bg-base-100 border border-gray-300 rounded-lg">
        <div class="hero-content text-center">
            <div class="max-w-xs sm:max-w-md mx-auto">
                <h1 class="text-3xl font-bold">Cari Ruangan</h1>
                <p class="py-2">Gunakan fitur ini untuk pencarian lokasi divisi atau ruangan.</p>
                <p class="py-4">Anda bisa cari berdasarkan ruangan atau divisi dan juga nama gedung dan lainnya.</p>
                <input type="search" class="input input-bordered" wire:model.live="cari" placeholder="Pencarian" />
            </div>
        </div>
    </div>
   
    @if($datas)
        <div class="px-4 py-6"> 
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Hasil Pencarian</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
                @foreach($datas as $data)
                <div class="flex bg-base-100 p-4 border border-gray-300 rounded-lg">
                    <img src="{{ $data->image }}" class="w-12 h-12 mr-4 rounded-lg" alt="{{ $data->name }}">
                    <div>
                        <h2 class="text-lg font-semibold">{{ $data->name }}</h2>
                        <p class="text-sm text-gray-600">Gedung {{ $data->building }}, Lantai {{ $data->floor }}</p>
                        <p class="mt-2">{{ $data->desc }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
</div>
