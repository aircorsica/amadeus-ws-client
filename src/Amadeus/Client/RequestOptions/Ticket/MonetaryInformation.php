<?php

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * MonetaryInformation
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 */
class MonetaryInformation extends LoadParamsFromArray
{
    /**
     * @var string|int
     */
    public $amount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var MonetaryDetails
     */
    public $monetaryDetails;
}
