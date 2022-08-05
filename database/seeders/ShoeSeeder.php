<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shoe;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoes = [
            [
                'brand'=>'Nike',
                'name'=>'Pudgez',
                'color'=>'Red',
                'size'=>'42',
                'prize'=>'5,999'
            ],
            [
                'brand'=>'World Balance',
                'name'=>'Nevermore',
                'color'=>'Black',
                'size'=>'39',
                'prize'=>'7,599'
            ],
            [
                'brand'=>'Adidas',
                'name'=>'Rubick',
                'color'=>'Green',
                'size'=>'36',
                'prize'=>'4,700' 
            ]
        ];

        foreach($shoes as $s){
            Shoe::create($s);
        }
    }
}
