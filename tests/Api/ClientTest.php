<?php
namespace Reddit\Test\Api;

use Guzzle\Service\Client as GuzzleClient;
use PHPUnit_Framework_TestCase;
use Reddit\Api\Client;

class ClientTest extends PHPUnit_Framework_TestCase
{
    private $client;

    public function setUp()
    {
        parent::setUp();
        $this->client = new Client;
    }

    /**
     * @test
     */
    public function isGuzzleClient()
    {
        $this->assertTrue($this->client instanceof GuzzleClient);
    }
}
