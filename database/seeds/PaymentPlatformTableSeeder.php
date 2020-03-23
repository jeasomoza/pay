<?php

use Illuminate\Database\Seeder;
use App\PaymentPlatform;

class PaymentPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([
            'name'=>'PayPal',
            'image'=>'img/payment-platforms/paypal.jpg',
        ]);
        PaymentPlatform::create([
            'name'=>'Stripe',
            'image'=>'img/payment-platforms/stripe.jpg',
        ]);
        PaymentPlatform::create([
            'name'=>'Pagadito',
            'image'=>'img/payment-platforms/pagadito.jpg',
        ]);
    }
}
