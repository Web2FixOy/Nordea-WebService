<?php


namespace Profit\Nordea\API;


use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\RequestInterface;
use SoapClient;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class NordeaSoapClient extends Client
{
    public function __construct(SoapClient $soapClient, EventDispatcherInterface $dispatcher)
    {
        parent::__construct($soapClient, $dispatcher);
    }


    public function getUserInfo(RequestInterface $request)
    {
        return $this->call('GetUserInfo', $request);
    }

    public function downloadFile(RequestInterface $request)
    {
        return $this->call('downloadFile', $request);
    }
}