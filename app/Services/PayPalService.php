<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class PayPalService 
{
    use ConsumesExternalServices;
    protected $baseUri;
    protected $clientId;
    protected $clientSecret;
    public function __construct()
    {
        $this->baseUri      = $this->config('services.paypal.base_uri');
        $this->clientId     = $this->config('services.paypal.client_id');
        $this->clientSecret = $this->config('services.paypal.client_secret');
    }
    public function resolveAutorizations(&$queryParams,&$formParams, &$headers)
    {
        
    }
    public function decodeResponse($response)
    {

    }
}