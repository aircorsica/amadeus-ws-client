<?php

namespace Amadeus\Client\RequestOptions\Ticket;

/**
 * MonetaryDetails
 *
 * @package Amadeus\Client\RequestOptions\Ticket
 */
class MonetaryDetails
{
    const TYPE_FARE = "F";
    const TYPE_COUPON = "CPN";

    /**
     * Type qualifier
     * self::TYPE_*
     *
     * @var string
     */
    public $typeQualifier;

    /**
     * Amount
     *
     * @var string|float
     */
    public $amount;

    /**
     * Currency code
     *
     * @var string
     */
    public $currency;

    public function __construct($typeQualifier, $amount, $currency) {
      $this->typeQualifier = $typeQualifier;
      $this->amount = $amount;
      $this->currency = $currency;
    }

}