<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data=[];
    private $products;

    public function index()
    {
        return view('text');
    }
    public function demo()
    {
        $this->city='DHAKA';
        $this->mobile='01942566984';
        $this->data=[
            0=>[
                'id' =>1,
                'name' => 'Shuvo',
                'city' => 'Dhaka',
                'mobile' => '01942566984'
            ],
            1=>[
                'id' =>2,
                'name' => 'Fardin',
                'city' => 'Dhaka',
                'mobile' => '01942566924'
            ],
            2=>[
                'id' =>3,
                'name' => 'Ahsan',
                'city' => 'Dhaka',
                'mobile' => '01942345676'
            ],
        ];
        return view('demo', [
            'a'=>$this->city,
            'b'=>$this->mobile,
            'c'=>$this->data
        ]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();


        return view('about', ['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if($item['id']==$id)
            {
                return view('detail', ['data' => $item]);
            }
        }

    }
}
