<div class="text-center opacity-50 text-sm py-10">
    Aplikasi {{ config('app.name') }} &bull; {{ auth()->user()->name }}
    ({{ auth()->user()->getRoleNames()->first() }})
</div>
