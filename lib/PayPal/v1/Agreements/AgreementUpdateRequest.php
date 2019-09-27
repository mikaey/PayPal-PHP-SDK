<?php

namespace PayPal\v1\Agreements;

use BraintreeHttp\HttpRequest;class AgreementUpdateRequest extends HttpRequest 
{
    function __construct($agreementId)
    {
        parent::__construct("/v1/billing-agreements/agreements/{agreement_id}?", "PATCH");
        
        $this->path = str_replace("{agreement_id}", urlencode($agreementId), $this->path);
        $this->headers["Content-Type"] = "application/json";
    }
}
