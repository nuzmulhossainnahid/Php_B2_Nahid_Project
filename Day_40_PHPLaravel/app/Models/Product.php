<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public static function products()
    {
        return[
            0=>[
                'id'=>1,
                'category_id'=>2,
                'name'=>'T-Shirt',
                'image'=>'img/2.jpg',
                'description'=>'lorem',
                'price'=>'500'
            ],
            1=>[
                'id'=>2,
                'category_id'=>2,
                'name'=>'Shirt',
                'image'=>'img/3.jpg',
                'description'=>'lorem',
                'price'=>'500'
            ],
            2=>[
                'id'=>3,
                'category_id'=>2,
                'name'=>'T-Shirt',
                'image'=>'img/3.jpg',
                'description'=>'lorem',
                'price'=>'5050'
            ],
            3=>[
                'id'=>4,
                'category_id'=>1,
                'name'=>'TShirt',
                'image'=>'img/5.jpg',
                'description'=>'lorem',
                'price'=>'400'
            ],
        ];
    }
}
