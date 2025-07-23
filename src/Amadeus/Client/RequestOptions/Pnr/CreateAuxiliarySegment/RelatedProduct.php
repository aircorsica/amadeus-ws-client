<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * RelatedProduct for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class RelatedProduct
{

  /**
   * @var int
   */
  public $quantity;

  /**
   * @var string
   */
  public $statusCode;

  public function __construct($quantity, $statusCode) {
    $this->quantity = $quantity;
    $this->statusCode = $statusCode;
  }

}
