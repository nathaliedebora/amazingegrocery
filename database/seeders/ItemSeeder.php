<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Item::create([
            'item_name' =>'Kol',
            'desc' => 'Kol Ungu yang tinggi serat sangat cocok untuk disajikan secara cepat dan dengan lauk lainnya.',
            'price' => 19000,
            'image' => 'images/items/kol-ungu.jpg',
        ]);

        Item::create([
            'item_name' =>'Pisang Cavendish',
            'desc' => 'Pisang cavendish sangat manis rasanya, dapat disimpan selama 3-4 hari.',
            'price' => 21000,
            'image' => 'images/items/pisang.jpg',
        ]);

        Item::create([
            'item_name' =>'Pepaya',
            'desc' => 'Pepaya ini memiliki biji yang sangat sedikit dan berasa manis, cocok untuk menemani mu dihari senja.',
            'price' => 23000,
            'image' => 'images/items/pepaya.jpg',
        ]);

        Item::create([
            'item_name' =>'Buncis',
            'desc' => 'Berbatang hijau yang gampang untuk dimasak dan disajikan.',
            'price' => 7500,
            'image' => 'images/items/buncis.jpg',
        ]);

        Item::create([
            'item_name' =>'Lemon',
            'desc' => 'Lemon sangat segar ketika diperas dan dimasukkan es',
            'price' => 24500,
            'image' => 'images/items/lemon.jpg',
        ]);

        Item::create([
            'item_name' =>'Alpukat',
            'desc' => 'Alpukat sudah matang sempurna, rasanya manis dan tidak pahit.',
            'price' => 20000,
            'image' => 'images/items/alpukat.jpg',
        ]);

        Item::create([
            'item_name' =>'Buah Naga',
            'desc' => 'Buah Naga memiliki antioksidan yang sangat tinggi cocok untukmu',
            'price' => 29000,
            'image' => 'images/items/naga.jpg',
        ]);

        Item::create([
            'item_name' =>'Daun Bawang',
            'desc' => 'Daun bawang cocok untuk digoreng dan menjadi penyedap makanan.',
            'price' => 1500,
            'image' => 'images/items/daun.jpg',
        ]);

        Item::create([
            'item_name' =>'Strawberry',
            'desc' => 'Strawberry import langsung dari Jepang, sangat manis dan besar.',
            'price' => 19000,
            'image' => 'images/items/strawberry.jpg',
        ]);

        Item::create([
            'item_name' =>'Cabe Hijau',
            'desc' => 'Maknyos ketika dimakan dengan gorengan',
            'price' => 11900,
            'image' => 'images/items/cabe.jpg',
        ]);
        
        Item::create([
            'item_name' =>'Pak Choy',
            'desc' => 'Pak Choy sangat mudah untuk disajkin dengan bawang putih ataupun direbus dengan bakso. ',
            'price' => 10900,
            'image' => 'images/items/pakcoy.jpg',
        ]);

        Item::create([
            'item_name' =>'Selada',
            'desc' => 'Selada cocok untuk dibuat sebagai sajian salad, simple dan praktis.',
            'price' => 8900,
            'image' => 'images/items/selada.jpg',
        ]);
    }
}
