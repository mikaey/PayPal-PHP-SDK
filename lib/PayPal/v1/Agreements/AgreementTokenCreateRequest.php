<?php

namespace PayPal\v1\Agreements;

use BraintreeHttp\HttpRequest;class AgreementTokenCreateRequest extends HttpRequest 
{
    function __construct()
    {
        parent::__construct("/v1/billing-agreements/agreement-tokens/?", "POST");
        $this->headers["Content-Type"] = "application/json";
    }
}
