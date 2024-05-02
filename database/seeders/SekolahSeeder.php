<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sekolah;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::insert(
            [
                'nama' => 'SMK Assalaam',
                'alamat' => 'jl tarate',
                'email' => 'smkasslaam@gmail.com',
                'tlp' => '6231313',
                'status' => 1,
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Telkom',
                'alamat' => 'jl palasari',
                'email' => 'telkom@gmail.com',
                'tlp' => '6231311',
                'status' => 1,
            ]
        );

        Sekolah::insert(
            [
                'nama' => 'SMK Muhammadiyah',
                'alamat' => 'jl sukamenak',
                'email' => 'muhammadiyah@gmail.com',
                'tlp' => '6212167',
                'status' => 1,
            ]
        );

        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 3',
                'alamat' => 'jl solontongan',
                'email' => 'negeri3@gmail.com',
                'tlp' => '6222529',
                'status' => 1,
            ]
        );

        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 4',
                'alamat' => 'jl kliningan',
                'email' => 'negeri4@gmail.com',
                'tlp' => '622236',
                'status' => 1,
            ]
        );

        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 6',
                'alamat' => 'jl riung bandung',
                'email' => 'negeri6@gmail.com',
                'tlp' => '6222293',
                'status' => 1,
            ]
        );

        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 1',
                'alamat' => 'jl wastukencana',
                'email' => 'negeri1@gmail.com',
                'tlp' => '6233943',
                'status' => 1,
            ]
        );

        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 7',
                'alamat' => 'jl soekarno hatta',
                'email' => 'negeri7@gmail.com',
                'tlp' => '6231378',
                'status' => 1,
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 2',
                'alamat' => 'jl cilwung',
                'email' => 'negeri2@gmail.com',
                'tlp' => '623154',
                'status' => 1,
            ]
        );
        Sekolah::insert(
            [
                'nama' => 'SMK Negeri 9',
                'alamat' => 'jl soekarno hatta',
                'email' => 'negeri9@gmail.com',
                'tlp' => '6233538',
                'status' => 1,
            ]
        );

    }
}
