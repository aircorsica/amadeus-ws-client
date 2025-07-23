<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * CriteriaDetails for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class CriteriaDetails {

  /**
   * @var int|string
   */
  public $attributeType;

  /**
   * @var string
   */
  public $attributeDescription;


  public function __construct($attributeType, $attributeDescription) {
    $this->attributeType = $attributeType;
    $this->attributeDescription = $attributeDescription;
  }

}
