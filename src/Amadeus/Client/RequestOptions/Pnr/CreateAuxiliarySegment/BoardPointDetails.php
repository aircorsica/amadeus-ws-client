<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * BoardPointDetails for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class BoardPointDetails
{

  /**
   * @var string
   */
  public $trueLocationId;

  public function __construct($trueLocationId) {
    $this->trueLocationId = $trueLocationId;
  }

}
