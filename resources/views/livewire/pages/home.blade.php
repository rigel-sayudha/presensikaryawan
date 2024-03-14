<div>
<p>Pukul: {{ now()->format('H:i') }}</p>
<br>
    <div class="card card-compact bg-base-100 border-2">
            <div class="card-body space-y-4 border-b">
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
            </div>
    </div>
</div>
