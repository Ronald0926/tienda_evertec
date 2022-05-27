<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    //Relacion uno  a muchos (inversa)
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    //Relacion uno  a muchos (inversa)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    //Relacion uno  a muchos (inversa)
    public function statusOrder()
    {
        return $this->belongsTo(StatusOrder::class);
    }
}
