<?php


use Profit\Nordea\API\ApplicationRequest;

class ApplicationRequestTest extends \PHPUnit\Framework\TestCase
{
    static public function createObj()
    {
        $ar = new ApplicationRequest();

        $ar->customer_id = 162355330;
        $ar->command = 'GetUserInfo';
        $ar->timestamp = date(DATE_ISO8601);
        $ar->software_id = 'php';
        $ar->environment = 'Production';

        return $ar;
    }

    public function testCreate()
    {
        $ar = self::createObj();

        $output = $ar->toXML();

//        echo $output;

        $this->assertTrue(!!$output);
    }
}
