<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert(
            [
                'nama' => 'Fajar Dwi',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Sukamenak',
            ]
        );
        Siswa::insert(
            [
                'nama' => 'dwi',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Sukamenak',
            ]
        );
        Siswa::insert(
            [
                'nama' => 'xxxx',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'Sukamenak',
            ]
        );

    }
}
