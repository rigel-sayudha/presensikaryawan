<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        @vite('resources/css/app.css')
    </head>

    <body class="bg-base-200">
        @auth
            <div class="drawer lg:drawer-open min-h-screen">
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
            <div class="flex items-center justify-center h-screen bg-base-300">
                <div class="card card-compact w-full max-w-sm bg-base-100 mockup-code text-base-content space-y-4">
                    <pre data-prefix="#"><code>{{ config('app.name') }}</code></pre>
                    <div class="p-2">
                        {{ $slot }}
                    </div>
                    @if (Route::is('login'))
                        <pre data-prefix="#"><code>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></code></pre>
                    @elseif (Route::is('register'))
                        <pre data-prefix="#"><code>Sudah punya akun? <a href="{{ route('login') }}">Login</a></code></pre>
                    @endif
                </div>
            </div>
        @endguest
    </body>

</html>
