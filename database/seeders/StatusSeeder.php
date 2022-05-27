<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusOrder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatusOrder::create(array('status_name' => 'CREATED'));
        StatusOrder::create(array('status_name' => 'PAYED'));
        StatusOrder::create(array('status_name' => 'REJECTED'));
    }
}
