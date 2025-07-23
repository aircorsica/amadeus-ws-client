<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * ManualAuxiliaryType for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class FlightDate
{

  protected const DATE_FORMAT = 'dmy';

  /**
   * @var int|string|NULL
   */
  public $departureDate;

  /**
   * @var int|string|NULL
   */
  public $arrivalDate;

  public function __construct($departureDate, $arrivalDate = NULL) {

    if ($departureDate instanceof \DateTime) {
      $departureDate = $departureDate->format(self::DATE_FORMAT);
    }

    if ($arrivalDate instanceof \DateTime) {
      $arrivalDate = $arrivalDate->format(self::DATE_FORMAT);
    }

    if ($departureDate) {
      $this->departureDate = $departureDate;
    }

    if ($arrivalDate) {
      $this->arrivalDate = $arrivalDate;
    }
  }

}
