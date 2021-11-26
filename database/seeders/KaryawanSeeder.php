<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_karyawan')->insert([
            'nik' => Str::random(10),
            'nama' => Str::random(10),
            'jabatan' => Str::random(10),
        ]);
    }
}
