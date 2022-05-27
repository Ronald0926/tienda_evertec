<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(array('customer_name' => 'Ronald','customer_lastname'=>'Rosas','customer_email'=>'ronaldrosas26@hotmail.com','customer_mobile'=>'3222523331','customer_identification'=>'1057585191'));
        Customer::create(array('customer_name' => 'Fulano','customer_lastname'=>'Caro','customer_email'=>'usuarioprueba1@gmail.com','customer_mobile'=>'3225251223','customer_identification'=>'9531535'));
    }
}
