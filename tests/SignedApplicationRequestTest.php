<?php


use Profit\Nordea\API\SignedApplicationRequest;
use PHPUnit\Framework\TestCase;

class SignedApplicationRequestTest extends TestCase
{

    static public function createObj()
    {
        /** @var \Profit\Nordea\API\Config $config */
        global $config;
        $nested = ApplicationRequestTest::createObj();
        return new SignedApplicationRequest($nested, $config);
    }

    public function testToXml()
    {
        $req = self::createObj();

        $output = $req->toDocument()->saveXML();

        file_put_contents(__DIR__ . '/results/signed_application_request.xml', $output);

        echo $output;

        $this->assertTrue(!!$output);
    }
}
