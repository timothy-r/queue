<?php

use Way\Tests\Assert;

/**
* @group controller
*/
class QueueControllerTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

	/**
	 * Test listing messages works
	 */
	public function testCanListMessages()
	{
		$response = $this->get('/messages');
       
		$this->assertTrue($response->isOk());
        $this->assertSame('text/html; charset=UTF-8', $response->headers->get('Content-Type'));
	}
}
