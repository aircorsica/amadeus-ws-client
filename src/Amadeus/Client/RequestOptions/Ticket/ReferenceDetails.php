<?php

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

class ReferenceDetails extends LoadParamsFromArray
{

  const  TYPE_SSR = "SSR";

  const TYPE_SVC = "SVC";

  const TYPE_SEA = "SEA";

  const TYPE_HTL = "HTL";

  /**
   * self::TYPE_*
   *
   * @var string
   */
  public $type;

  /**
   * @var int
   */
  public $value;

}