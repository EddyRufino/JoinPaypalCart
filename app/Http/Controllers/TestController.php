<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Services\PayPalService;

class TestController extends Controller
{
    public function pay(Request $request)
    {
        $rules = [
    		'amount' => ['required', 'numeric', 'min:1'],
    	];

    	$request->validate($rules);

        // dump($request->amount);

        $paymentPlatform = resolve(PayPalService::class);

        // dump($paymentPlatform->handlePayment($request));

    	return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
    	$paymentPlatform = resolve(PayPalService::class);
        return $paymentPlatform->handleApproval();
    }

    public function cancelled()
    {
    	return redirect()->route('home')->withErrors('Pago cancelado');
    }
}
