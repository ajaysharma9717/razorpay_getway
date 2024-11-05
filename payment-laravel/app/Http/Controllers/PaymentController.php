<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Razorpay\Api\Api;



class PaymentController extends Controller
{

    public $api;

    public function __construct($var = null)
    {
        $this->api = new Api("rzp_test_ksNMeLlPOkgzCD", "sq6TuCCw5AtA1tnivRURGDfV");
    } // this names api are coming from rozarpay

    public function payment()
    {
        return view('payment');
    }
    //this is to view the page

    public function paysubmit(Request $request)
    {
        // dd($request->all());
        $rules = [
            'amount' => 'required|numeric'
        ];



        $validator = Validator::make($request->all(), $rules);
        if (!$validator->fails()) {
            $requesData = [
                'receipt'         => "$request->name",
                'amount'          => ($request->get('amount') * 100), // 39900 rupees in paise
                'currency'        => 'INR'
            ];
            $razoparData = $this->api->order->create($requesData);

            $orderid = rand(11111, 99999);

            return view('paymentcheck', compact('orderid', 'razoparData'));
        } else {
            return "some went wrong";
        }
    }
}
