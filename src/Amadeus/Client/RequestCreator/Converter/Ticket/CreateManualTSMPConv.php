<?php

namespace Amadeus\Client\RequestCreator\Converter\Ticket;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\TicketCreateTasfOptions;
use Amadeus\Client\Struct;

/**
 * Ticket_CreateManualTSMP Request converter
 *
 * @package Amadeus\Client\RequestCreator\Converter\Ticket
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class CreateManualTSMPConv extends BaseConverter
{
  /**
   * @param \Amadeus\Client\RequestOptions\TicketCreateManualTsmpOptions $requestOptions
   * @param int|string $version
   * @return Struct\Ticket\CreateManualTsmp
   */
  public function convert($requestOptions, $version)
  {
    return new Struct\Ticket\CreateManualTsmp($requestOptions);
  }
}
