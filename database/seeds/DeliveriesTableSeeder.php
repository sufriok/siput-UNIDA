<?php

use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->truncate();

        DB::table('deliveries')->insert([
            [
                'no_delivery' => "1",
                'nama' => "ardi",
                'daerah' => "kalimantan",
                'keterangan' => "paket",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "2",
                'nama' => "arle",
                'daerah' => "kalimantan",
                'keterangan' => "surat",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "3",
                'nama' => "dika",
                'daerah' => "jambi",
                'keterangan' => "paket",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "4",
                'nama' => "erdi",
                'daerah' => "ponorogo",
                'keterangan' => "surat",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "5",
                'nama' => "rehan",
                'daerah' => "banjar",
                'keterangan' => "paket",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "6",
                'nama' => "leri",
                'daerah' => "pontianak",
                'keterangan' => "surat",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "7",
                'nama' => "rika",
                'daerah' => "jambi",
                'keterangan' => "paket",
                'status' => "belum diambil"
            ],
            [
                'no_delivery' => "8",
                'nama' => "erli",
                'daerah' => "ponorogo",
                'keterangan' => "surat",
                'status' => "belum diambil"
            ],
        ]);
    }
}
