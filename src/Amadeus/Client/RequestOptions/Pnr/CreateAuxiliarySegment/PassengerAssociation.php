<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

use Amadeus\Client\LoadParamsFromArray;

/**
 * PassengerAssociation for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class PassengerAssociation extends LoadParamsFromArray
{

  /**
   * @var PassengerReference
   */
  public $passengerReference;

}
