<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pagos(Request $req){
        $reglas=[
            'value'=>['required','numeric','min:5'],
            'currency'=>['required','exists:currencies,iso'],
            'payment_platform'=>['required','exists:payment_platforms,id'],

        ];
        $req->validate($reglas);
        return $req->all();
    }
    public function aprobacion(){

    }
    public function cancelacion(){

    }
}
