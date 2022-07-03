<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateJenisBansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bansos = [
            ['nama_bansos' => 'Program Keluarga Harapan (PKH)'],
            ['nama_bansos' => 'Bantuan Pangan Non Tunai (BPNT) Sembako'],
            ['nama_bansos' => 'Bantuan Sosial Tunai (BST)'],
            ['nama_bansos' => 'Bantuan Iuran Jaminan Kesehatan Nasional Kartu Indonesia Sehat Pembiayaan Nasional (PBIN)'],
            ['nama_bansos' => 'Bantuan Subsidi Listrik'],
            ['nama_bansos' => 'Bantuan Program Indonesia Pintar (KIP)'],
        ];
        DB::table('jenisbansos')->insert($bansos);
    }
}
