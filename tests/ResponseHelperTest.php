<?php

namespace Intec\Response\Tests;

use PHPUnit\Framework\TestCase;
use Intec\Response\ResponseHelper;

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author KelvinAmancio
*/
class ResponseHelperTest extends TestCase
{

  use ResponseHelper;

  public function testSuccessResponse()
  {
    $data = 'ok';
    $code = 200;
    $response = $this->successResponse($data, $code);

    $this->assertTrue(is_object($response));
    $this->assertEquals($code, $response->getStatusCode());
    $this->assertEquals('{"data":"ok"}', $response->getContent());
  }

  public function testErrorResponse()
  {
    $message = 'Error';
    $code = 400;
    $response = $this->errorResponse($message, $code);

    $this->assertTrue(is_object($response));
    $this->assertEquals($code, $response->getStatusCode());
    $this->assertEquals('{"error":"Error","code":400}', $response->getContent());
  }

}