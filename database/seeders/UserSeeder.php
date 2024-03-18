<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Administrator',
                'email' => 'admin@absensimagang.com',
                'password' => 'admin123',
                'role' => 'superadmin',
            ],
            [
                'name' => 'Contoh siswa',
                'email' => 'siswa@absensimagang.com',
                'password' => 'siswa123',
                'role' => 'siswa',
            ],
            [
                'name' => 'Contoh pembina',
                'email' => 'pembina@absensimagang.com',
                'password' => 'pembina123',
                'role' => 'pembina',
            ],
        ];

        foreach ($datas as $data) {
            $user = User::updateOrCreate(Arr::except($data, 'role'));
            $user->assignRole($data['role']);
        }

    }
}
