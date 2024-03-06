<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
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

        foreach ($datas as $permit => $roles) {
            $permission = Permission::updateOrCreate([
                'name' => $permit,
            ]);

            foreach ($roles as $name) {
                $permission->assignRole($name);
            }
        }
    }
}
