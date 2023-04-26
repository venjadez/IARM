<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Items;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 20) as $range) {
            Items::create([
                'name' => 'Foo ' . $range,
                'description' => 'Foo Description' . $range,
                'price' => $range * 10,
            ]);
        }
    }
}
