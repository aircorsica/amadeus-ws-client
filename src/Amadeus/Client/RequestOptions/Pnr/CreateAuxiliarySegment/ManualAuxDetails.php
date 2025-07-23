<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

use Amadeus\Client\LoadParamsFromArray;

/**
 * manualAuxDetails for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class ManualAuxDetails extends LoadParamsFromArray
{

  /**
   * @var
   */
  public $manualAuxiliaryType;

  /**
   * @var TravelProduct
   */
  public $travelProduct;

  /**
   * @var RelatedProduct
   */
  public $relatedProduct;

  /**
   * @var Service
   */
  public $service;

  /**
   * @var RficAndRfisc
   */
  public $rficAndRfisc;

  /**
   * @var FreetextItinerary
   */
  public $freetextItinerary;

  /**
   * @var PassengerAssociation
   */
  public $passengerAssociation;
}
