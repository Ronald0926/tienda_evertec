<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Customer;

class OrderController extends Controller
{
    public function store(Request $request)
    {

       /* $request->validate([
            ''
        ]);*/
    }

    public function saveOrder(Request $request)
    {
        $request->validate(['customer' => 'required', 'product' => 'required']);
        $order = new Order;
        $product = Product::find($request['product']);
        $order['total_order'] = $product['price'];
        $order['product_id'] = $request['product'];
        $order['customer_id'] = $request['customer'];
        $order->save();

        return redirect()->route('orders')->with('success', 'Orden guardado correctamente');
    }

    public function dataOrder()
    {
        $productos = Product::all();
        $clientes = Customer::all();
        return view('order', ['products'=>$productos,'customers'=>$clientes]);
    }
}
