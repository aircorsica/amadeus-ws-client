<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

use Amadeus\Client\LoadParamsFromArray;

/**
 * TravelProduct for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class TravelProduct extends LoadParamsFromArray
{

  /**
   * @var FlightDate
   */
  public $flightDate;

  /**
   * @var BoardPointDetails
   */
  public $boardPointDetails;

  /**
   * @var OffpointDetails
   */
  public $offpointDetails;

  /**
   * @var CompanyDetails
   */
  public $companyDetails;
}