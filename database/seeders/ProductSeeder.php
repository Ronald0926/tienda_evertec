<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(array('product_name' => 'Parlante Pc','currency'=>'COP','price'=>'150000','description'=>'Producto alta gama, 120W, Sonido 5.1'));
        Product::create(array('product_name' => 'Smart tv 55 Pulgadas Samsung','currency'=>'COP','price'=>'2350000','description'=>'OLED, 4K'));
    }
}
