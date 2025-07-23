<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * SpecialRequirementsInfo for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class SpecialRequirementsInfo
{

  /**
   * @var string
   */
  public $ssrCode;

  public function __construct($ssrCode) {
    $this->ssrCode = $ssrCode;
  }
}
