<?php

namespace Amadeus\Client\Struct\Ticket\UpdateTSMP;

/**
 * TattooOfTSM
 *
 * @package Amadeus\Client\Struct\Ticket
 * @author Anton Maykahilenko <anton.mykhailenko@smile-ukraine.com>
 */
class TattooOfTSM
{
  /**
   * @var string|int
   */
  public $uniqueReference;

  /**
   * TattooOfTSM constructor.
   *
   * @param int|string $uniqueReference
   */
  public function __construct($uniqueReference)
  {
    $this->uniqueReference = $uniqueReference;
  }
}
