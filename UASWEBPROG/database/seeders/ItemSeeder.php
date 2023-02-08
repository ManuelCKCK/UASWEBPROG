<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_id' => '1',
            'item_name' => 'Brokoli',
            'item_desc' => 'sayur brokoli satu kilo',
            'price' => '2000'
        ]);
        DB::table('items')->insert([
            'item_id' => '2',
            'item_name' => 'Buncis',
            'item_desc' => 'sayur buncis satu kilo',
            'price' => '4500'
        ]);
        DB::table('items')->insert([
            'item_id' => '3',
            'item_name' => 'Jagung',
            'item_desc' => 'sayur jagung satu kilo',
            'price' => '2000'
        ]);
        DB::table('items')->insert([
            'item_id' => '4',
            'item_name' => 'Cabai Merah',
            'item_desc' => 'Cabai Merah satu kilo',
            'price' => '20000'
        ]);
        DB::table('items')->insert([
            'item_id' => '5',
            'item_name' => 'Tomat',
            'item_desc' => 'sayur tomat satu kilo',
            'price' => '4500'
        ]);
        DB::table('items')->insert([
            'item_id' => '6',
            'item_name' => 'Kol Bulat',
            'item_desc' => 'sayur kol bulat satu kilo',
            'price' => '1000'
        ]);
        DB::table('items')->insert([
            'item_id' => '7',
            'item_name' => 'Kentang',
            'item_desc' => 'kentang satu kilo',
            'price' => '6500'
        ]);
        DB::table('items')->insert([
            'item_id' => '8',
            'item_name' => 'Kol Bunga',
            'item_desc' => 'sayur kol bunga satu kilo',
            'price' => '800'
        ]);
        DB::table('items')->insert([
            'item_id' => '9',
            'item_name' => 'Cabai Hijau',
            'item_desc' => 'cabai hijau satu kilo',
            'price' => '12000'
        ]);
        DB::table('items')->insert([
            'item_id' => '10',
            'item_name' => 'Wortel',
            'item_desc' => 'sayur wortel satu kilo',
            'price' => '1500'
        ]);
        DB::table('items')->insert([
            'item_id' => '11',
            'item_name' => 'Sayur Putih',
            'item_desc' => 'sayur putih satu kilo',
            'price' => '800'
        ]);
        DB::table('items')->insert([
            'item_id' => '12',
            'item_name' => 'Terong Antaboga',
            'item_desc' => 'sayur terong antaboga satu kilo',
            'price' => '1000'
        ]);
        DB::table('items')->insert([
            'item_id' => '13',
            'item_name' => 'Sayur Pahit',
            'item_desc' => 'sayur pahit satu kilo',
            'price' => '3000'
        ]);

    }
}
