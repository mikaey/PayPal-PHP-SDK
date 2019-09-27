<?php

namespace PayPal\v1\Agreements;

use BraintreeHttp\HttpRequest;class AgreementTokenGetRequest extends HttpRequest 
{
    function __construct($tokenId)
    {
        parent::__construct("/v1/billing-agreements/agreement-tokens/{token_id}?", "GET");
        
        $this->path = str_replace("{token_id}", urlencode($tokenId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
    
}
