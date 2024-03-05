<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            'permission.index' => [''],
            'permission.create' => [''],
            'permission.edit' => [''],
            'permission.delete' => [''],
            'role.index' => [''],
            'role.create' => [''],
            'role.edit' => [''],
            'role.delete' => [''],
            'user.index' => ['pembina'],
            'user.create' => ['pembina'],
            'user.edit' => ['pembina'],
            'user.delete' => ['pembina'],
            'absensi.index' => ['pembina'],
            'absensi.mine' => ['siswa'],
            'absensi.create' => ['siswa'],
            'absensi.edit' => ['pembina', 'siswa'],
            'absensi.delete' => ['pembina', 'siswa'],
            'dashboard' => ['pembina'],
            'home' => ['siswa'],
            'setting.registration-code' => ['pembina'],
        ];
    }
}
