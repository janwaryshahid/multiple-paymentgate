<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentGatewayInterface;
class CheckOutController extends Controller
{
    public $paymentGatewayInterface;

    public function __construct(PaymentGatewayInterface $paymentGatewayInterface){
        $this->paymentGatewayInterface=$paymentGatewayInterface;
    }
    public function buyNow (Request $request)
    {

        $product = [
            'product_name' => $request->product_name, // Product name
            'product_price' => $request->product_name, // Product price
            'product_qty' => $request->product_qty
        ];

        session()->put('cart', $product);
        return view('buyNow');
    }

    public function checkOut(Request $request){
        // return $request->all();

        $request->validate([
            'paymentGateway'=>'required|in:paypal,stripe',
            'fullName'=>'required|max:50',
            'email'=>'required|email|max:50',
            'address'=>'required|max:255'
        ]);

         $chargeResult = $this->paymentGatewayInterface->charge(session('cart'));
         if($chargeResult['status'] == 1){
             return redirect()->away($chargeResult['data']->url);
        }else{
            return $chargeResult['message'];
        }
         



    }   
}
