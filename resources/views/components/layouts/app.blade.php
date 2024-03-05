<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite('resources/css/app.css')
    </head>

    <body>
        @auth
            <div class="drawer lg:drawer-open">
                <input id="drawer" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    @livewire('partial.navbar')
                    <div class="max-w-6xl mx-auto p-6">
                        {{ $slot }}
                    </div>
                    @livewire('partial.footer')
                </div>
                <div class="drawer-side">
                    <label for="drawer" aria-label="close sidebar" class="drawer-overlay"></label>
                    @livewire('partial.sidebar')
                </div>
            </div>
        @endauth

        @guest
            <div class="grid place-content-center h-screen bg-base-300">
                <div class="mockup-code bg-base-100 text-base-content">
                    <pre data-prefix="$"><code>Absensi magang</code></pre>
                    <div class="card card-compact p-2 w-full max-w-96">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @endguest
    </body>

</html>
