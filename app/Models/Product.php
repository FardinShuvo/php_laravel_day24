<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0 => [
                'id' => 1,
                'name' => 'T-shirt',
                'price'=> '2000',
                'description' => 'description',
                'image' => asset('/img/t2.jpg'),
            ],
            1 => [
                'id' => 2,
                'name' => 'Shirt',
                'price'=> '3000',
                'description' => 'description',
                'image' => asset('/img/s2.jpg'),
            ],
            2 => [
                'id' => 3,
                'name' => 'Pant',
                'price'=> '2500',
                'description' => 'description',
                'image' => asset('/img/p2.jpg'),
            ]
        ];
    }
}
