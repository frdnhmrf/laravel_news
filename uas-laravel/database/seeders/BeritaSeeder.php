<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul' => 'Bioma',
            'penulis' => 'Arlita',
            'deskripsi' => 'Apakah kamu pernah mendengar bioma? Yapp, istilah bioma sejatinya sudah tak asing lagi. Menurut Britannica, bioma merupakan unit biotik geografis terbesar yang berisikan komunitas tumbuhan dan hewan dengan bentuk kehidupan dan kondisi lingkungan yang serupa. Bioma mencakup berbagai komunitas dan diberi nama untuk jenis vegetasi yang dominan di suatu wilayah.

            Dari berbagai bioma yang ada di permukaan Bumi saat ini, ada salah satu jenis bioma yang cukup unik lantaran minim kehidupan makhluk hidup di dalamnya. Bioma tersebut adalah tundra yang dikenal dengan kondisi wilayahnya yang ekstrem serta selalu tertutupi es di sepanjang tahun. Bioma tundra memiliki beberapa fakta unik yang mungkin saja belum kamu ketahui. Penasaran apa saja? Simak ulasannya di bawah ini ya!',
        ]);
    }
}
