<?php

use PHPUnit\Framework\TestCase;
use Intec\ResponseHelper;
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

  /**
  * Just check if the YourClass has no syntax error
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
/*   public function testIsThereAnySyntaxError()
  {
	$var = new Buonzz\Template\YourClass;
	$this->assertTrue(is_object($var));
	unset($var);
  } */

  public function testSuccessResponse()
  {
    return true;
  }

  public function testErrorResponse()
  {
    return true;
  }

  /**
  * Just check if the YourClass has no syntax error
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
/*   public function testMethod1()
  {
	$var = new Buonzz\Template\YourClass;
	$this->assertTrue($var->method1("hey") == 'Hello World');
	unset($var);
  } */
}