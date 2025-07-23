<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

/**
 * ManualAuxiliaryType for PNR_CreateAuxiliarySegment.
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class ManualAuxiliaryType
{

  const TYPE_AIR_TAXI = 'ATX';

  const TYPE_CAR = 'CAR';

  const TYPE_HOTEL = 'HTL';

  const TYPE_MISCELLANEOUS = 'MIS';

  const TYPE_TOUR = 'TUR';

  const TYPE_SERVICE = 'SVC';

  /**
   * See TYPE_*.
   *
   * @var string
   */
  public $travelSector;

  public function __construct(string $travelSector) {
    $this->travelSector = $travelSector;
  }

}