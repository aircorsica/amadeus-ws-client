<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

use Amadeus\Client\LoadParamsFromArray;

/**
 * FreetextItinerary for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class FreetextItinerary extends LoadParamsFromArray
{

  /**
   * @var FreeTextDetails
   */
  public $freeTextDetails;

  /**
   * @var string
   */
  public $freeText;

}
