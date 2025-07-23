<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Ticket;

use Amadeus\Client\RequestOptions\PnrCreateAuxiliarySegmentOptions;
use Amadeus\Client\RequestOptions\Ticket\CouponsDetails;
use Amadeus\Client\RequestOptions\Ticket\MonetaryInformation;
use Amadeus\Client\RequestOptions\TicketUpdateTSMPOptions;
use Amadeus\Client\Struct\BaseWsMessage;

/**
 * Ticket_UpdateTSMP Request stucture
 *
 * @package Amadeus\Client\Struct\Pnr
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class UpdateTSMP extends BaseWsMessage
{
  /**
   * TSM tattoo reference
   *
   * @var \Amadeus\Client\Struct\Ticket\UpdateTSMP\TattooOfTSM
   */
  public $tattooOfTSM;

  /**
   * Monetary information
   *
   * @var MonetaryInformation
   */
  public $monetaryInformation;

  /**
   * Coupons details
   *
   * @var CouponsDetails
   */
  public $couponsDetails;

  /**
   * NameChange constructor.
   *
   * @param \Amadeus\Client\RequestOptions\TicketUpdateTSMPOptions $options
   *   The options.
   */
  public function __construct(TicketUpdateTSMPOptions $options)
  {
    $this->tattooOfTSM = $options->tattooOfTSM;
    $this->monetaryInformation = $options->monetaryInformation;
    $this->couponsDetails = $options->couponsDetails;
  }

}
