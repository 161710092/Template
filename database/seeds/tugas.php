<?php

use Illuminate\Database\Seeder;

class tugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        		['Nama_Siswa'=>'Alif Firmansyah', 'Kelas'=>'XI Rpl 2', 'Umur'=>16]
        ];

        DB::table('tugas')->insert($a);
    }
}
