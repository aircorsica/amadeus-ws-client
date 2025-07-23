<?php

namespace Amadeus\Client\RequestOptions\Pnr\CreateAuxiliarySegment;

class PassengerReference {

  /**
   * @var string|int
   */
  public $type;

  /**
   * Must contain the tattoo number of the passenger (who has to pay the TASF).
   *
   * @var string|int
   */
  public $value;

  /**
   * PassengerTattoo constructor.
   *
   * @param string $type
   * @param string|int $value
   */
  public function __construct($type, $value) {
    $this->type = $type;
    $this->value = $value;
  }

}
