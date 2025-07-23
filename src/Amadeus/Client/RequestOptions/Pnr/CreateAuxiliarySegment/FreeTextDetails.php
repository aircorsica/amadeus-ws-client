<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

use Amadeus\Client\LoadParamsFromArray;

/**
 * FreeTextDetails for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class FreeTextDetails
{

  /**
   * @var int
   */
  public $textSubjectQualifier;

  /**
   * @var string
   */
  public $source;

  /**
   * @var int
   */
  public $encoding;

  public function __construct($textSubjectQualifier, $source = NULL, $encoding = NULL) {
    if ($textSubjectQualifier !== NULL) {
      $this->textSubjectQualifier = $textSubjectQualifier;
    }
    if ($source !== NULL) {
      $this->source = $source;
    }

    if ($encoding !== NULL) {
      $this->encoding = $encoding;
    }
  }

}
