<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        $product = [
            [
                'name' => 'ปลากระป๋อง',
                'price' => '32 บาท',
                
            ],
            [
                'name' => 'วิปปิ้งครีม',
                'price' => '79 บาท',
              
            ],
            [
                'name' => 'สบู่',
                'price' => '22 บาท',
              
            ],
            [
                'name' => 'ยาสีฟัน',
                'price' => '39 บาท',
               
            ],
        ];
        return view('product', compact('product'));
        
    }

    function createProduct()
    {
        return view('formProduct');
    }
}
