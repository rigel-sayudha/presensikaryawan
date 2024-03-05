<ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content space-y-6">
    <li>
        <h3 class="menu-title">Administrator</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')])>
                    <x-tabler-dashboard class="icon-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')])>
                    <x-tabler-users class="icon-5" />
                    <span>Peserta PKL</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Accounts</h3>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')])>
                    <x-tabler-user-circle class="icon-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dokumentasi') }}" @class(['active' => Route::is('dokumentasi')])>
                    <x-tabler-book class="icon-5" />
                    <span>Dokumentasi</span>
                </a>
            </li>
            <li>
                <button wire:click="logout">
                    <x-tabler-logout class="icon-5" />
                    <span>Keluar Aplikasi</span>
                </button>
            </li>

        </ul>
    </li>
</ul>
