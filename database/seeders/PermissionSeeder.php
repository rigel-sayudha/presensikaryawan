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
            'user.show' => ['pembina'],

            'office.index' => ['pembina'],
            'office.search' => ['siswa'],
            'office.create' => ['pembina'],
            'office.edit' => ['pembina'],
            'office.delete' => ['pembina'],

            'role.index' => [],
            'role.create' => [],
            'role.edit' => [],
            'role.delete' => [],

            'attendance.index' => ['pembina'],
            'attendance.mine' => ['siswa'],
            'attendance.approve' => ['pembina'],
            'attendance.create' => ['siswa'],
            'attendance.edit' => ['pembina', 'siswa'],
            'attendance.delete' => ['pembina', 'siswa'],

            'dashboard' => ['pembina'],
            'home' => ['siswa'],
            'profile' => ['siswa', 'pembina'],
            'documentation' => ['siswa', 'pembina'],

            'setting.registration-code' => ['pembina'],
        ];

        foreach ($datas as $permit => $roles) {
            $permission = Permission::updateOrCreate([
                'name' => $permit,
            ]);

            if (count($roles) > 0) {
                foreach ($roles as $name) {
                    $permission->assignRole($name);
                }
            }
        }
    }
}
