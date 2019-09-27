<?php

namespace PayPal\v1\Agreements;

use BraintreeHttp\HttpRequest;class AgreementCreateRequest extends HttpRequest 
{
    function __construct()
    {
        parent::__construct("/v1/billing-agreements/agreements/?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }
    
}
