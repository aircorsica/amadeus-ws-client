<?php

namespace Amadeus\Client\ResponseHandler\Ticket;

use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

/**
 * HandlerCreateManualTSMP
 *
 * @package Amadeus\Client\ResponseHandler\Ticket
 * @author Anton Mykhailenko <anton.mykhailenko@smile-ukraine.com>
 */
class HandlerCreateManualTSMP extends StandardResponseHandler
{
  /**
   * @param SendResult $response
   * @return Result
   */
  public function analyze(SendResult $response)
  {
    $analyzeResponse = new Result($response);
    $domXpath = $this->makeDomXpath($response->responseXml);

    $errorCodeNodeList = $domXpath->query('//m:errorWarningGroup/m:errorOrWarningCodeDetails/m:errorDetails/m:errorCode');

    if ($errorCodeNodeList->length > 0) {
      $code = $errorCodeNodeList->item(0)->nodeValue;
      $analyzeResponse->setStatus(Result::STATUS_ERROR);

      $errorTextNodeList = $domXpath->query('//m:errorWarningGroup/m:errorWarningDescription/m:freeText');
      $message = $this->makeMessageFromMessagesNodeList($errorTextNodeList);

      $analyzeResponse->messages[] = new Result\NotOk($code, trim($message), 'general');
    }

    return $analyzeResponse;
  }

}
