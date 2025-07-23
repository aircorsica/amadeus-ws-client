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

namespace Amadeus\Client\ResponseHandler\PNR;

use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

/**
 * HandlerCreateAuxiliarySegmentOptions
 *
 * @package Amadeus\Client\ResponseHandler\PNR
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class HandlerCreateAuxiliarySegment extends HandlerRetrieve
{
  const C_A_ERR = "//m:manualAuxiliaryDetails/m:segmentErrorInfo/m:errorOrWarningCodeDetails/m:errorDetails/m:errorCode";
  const C_A_MSG = "//m:manualAuxiliaryDetails/m:segmentErrorInfo/m:errorWarningDescription/m:freeText";

  /**
   * {@inheritdoc}
   */
  public function analyze(SendResult $response) {
    $analyzeResponse = parent::analyze($response);
    $domXpath = $this->makeDomXpath($response->responseXml);

    // Create AuxiliarySegmantOptions errors:
    $errorCodeNodeList = $domXpath->query(self::C_A_ERR);

    if ($errorCodeNodeList->length > 0) {
      $analyzeResponse->status = Result::STATUS_ERROR;

      $code = $errorCodeNodeList->item(0)->nodeValue;

      $errorTextNodeList = $domXpath->query(self::C_A_MSG);
      $message = $this->makeMessageFromMessagesNodeList($errorTextNodeList);

      $analyzeResponse->messages[] = new Result\NotOk($code, trim($message), 'element');
    }

    return $analyzeResponse;
  }
}
