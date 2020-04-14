<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'recipient_name',
        'state',
        'country_code',
        'postal_code',
        'city',
        'line2',
        'line1',
        'email',
        'guide_number',
        'total',
        'shopping_cart_id'
    ];

    public static function createFromPayPalResponse($payment, $shopping_cart_id)
    {
      // $payer = $paypalResponse->payer;

      // $orderData = (array) $payer->payer_info->shipping_address;

      // $orderData['total'] = $shopping_cart->amountInCents();
      
      $orderData['shopping_cart_id'] = $shopping_cart_id;
      $orderData['total'] = $payment->purchase_units[0]->payments->captures[0]->amount->value;
      $orderData['email'] = $payment->payer->email_address;
      $orderData['country_code'] = $payment->payer->address->country_code;
      $orderData['recipient_name'] = $payment->payer->name->given_name;



      return Order::create($orderData);
      // return $shopping_cart_id;
    }
}
