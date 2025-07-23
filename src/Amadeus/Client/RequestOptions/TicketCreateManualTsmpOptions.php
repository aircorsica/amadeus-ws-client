<?php

namespace Amadeus\Client\RequestOptions;

use Amadeus\Client\RequestOptions\Ticket\ServiceTattoos;

/**
 * TicketCreateTasfOptions
 *
 * @package Amadeus\Client\RequestOptions
 * @author Artem Zakharchenko <artz.relax@gmail.com>
 */
class TicketCreateManualTsmpOptions extends Base
{
  /**
   * @var ServiceTattoos[]
   */
  public array $serviceTattoos;

}
