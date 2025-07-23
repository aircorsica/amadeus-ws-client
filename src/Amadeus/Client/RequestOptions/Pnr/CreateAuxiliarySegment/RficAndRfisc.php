<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

use Amadeus\Client\LoadParamsFromArray;

/**
 * RelatedProduct for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class RficAndRfisc extends LoadParamsFromArray
{

  /**
   * @var string
   */
  public $criteriaSetType;

  /**
   * @var CriteriaDetails
   */
  public $criteriaDetails;
}
