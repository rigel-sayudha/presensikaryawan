<ul class="menu p-4 w-80 min-h-full bg-base-100 border-r-2 border-base-300 text-base-content space-y-6" data-theme="dark">
    <li>
        <h3 class="menu-title">Menu utama</h3>
        <ul>
            <li>
                <a href="{{ route('home') }}" @class(['active' => Route::is('home')]) wire:navigate>
                    <x-tabler-home class="icon-5" />
                    <span>Halaman utama</span>
                </a>
            </li>
            <li>
                <a href="{{ route('attendance.mine') }}" @class(['active' => Route::is('attendance.mine')]) wire:navigate>
                    <x-tabler-list class="icon-5" />
                    <span>Riwayat Absensi</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Administrator</h3>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" @class(['active' => Route::is('dashboard')]) wire:navigate>
                    <x-tabler-dashboard class="icon-5" />
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('attendance.index') }}" @class(['active' => Route::is('attendance.index')]) wire:navigate>
                    <x-tabler-list class="icon-5" />
                    <span>Absensi PKL</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user.index') }}" @class(['active' => Route::is(['user.index', 'user.show'])]) wire:navigate>
                    <x-tabler-users class="icon-5" />
                    <span>User management</span>
                </a>
            </li>
            <li>
                <a href="{{ route('setting.registration-code') }}" @class(['active' => Route::is('setting.registration-code')]) wire:navigate>
                    <x-tabler-key class="icon-5" />
                    <span>Kode registrasi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('role.index') }}" @class(['active' => Route::is('role.index')]) wire:navigate>
                    <x-tabler-asterisk class="icon-5" />
                    <span>Role & Permissions</span>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <h3 class="menu-title">Accounts</h3>
        <ul>
            <li>
                <a href="{{ route('profile') }}" @class(['active' => Route::is('profile')]) wire:navigate>
                    <x-tabler-user-circle class="icon-5" />
                    <span>Edit Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('dokumentasi') }}" @class(['active' => Route::is('dokumentasi')]) wire:navigate>
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
