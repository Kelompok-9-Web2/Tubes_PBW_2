<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        return view('order');
    }

    public function checkout2($menu_id, $user_id)
    {   
        dd('hello world');
        
        // Set your Merchant Server Key
        //\Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        //\Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        //\Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        //\Midtrans\Config::$is3ds = true;

        //$params = array(
            //'transaction_details' => array(
              /*  'order_id' => $menu->id,
                'gross_amount' => $menu->harga,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
                'phone' => $user->phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);*/
        return view('order{id}'); 
    }
}
