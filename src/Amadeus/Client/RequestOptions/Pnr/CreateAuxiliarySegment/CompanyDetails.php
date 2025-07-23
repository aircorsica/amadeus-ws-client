<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * CompanyDetails for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class CompanyDetails
{

  /**
   * @var string
   */
  public $marketingCompany;

  public function __construct($marketingCompany) {
    $this->marketingCompany = $marketingCompany;
  }

}
