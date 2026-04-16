<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'nama' => 'Administrator',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'petugas',
            'nama' => 'Petugas',
            'password' => Hash::make('petugas123'),
            'role' => 'petugas',
        ]);

        User::create([
            'username' => 'siswa',
            'nama' => 'Siswa Test',
            'password' => Hash::make('siswa123'),
            'role' => 'siswa',
        ]);
    }
}