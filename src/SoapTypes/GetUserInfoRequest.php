<?php

namespace Profit\Nordea\API\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;
use Profit\Nordea\API\ApplicationRequest;
use Profit\Nordea\API\Config;
use Profit\Nordea\API\Helper;
use Profit\Nordea\API\SignedApplicationRequest;

class GetUserInfoRequest implements RequestInterface
{

    /**
     * @var Config
     */
    private $config;

    /** @var \DateTime  */
    private $timestamp;

    /** @var RequestHeader  */
    private $RequestHeader;

    /** @var SignedApplicationRequest  */
    private $ApplicationRequest;

    /**
     * GetUserInfoRequest constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->timestamp = new \DateTime();

        $this->setRequestHeader(new RequestHeader());
        $this->setApplicationRequest(new ApplicationRequest());
    }

    /**
     * @return RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader $rh
     */
    public function setRequestHeader(RequestHeader $rh)
    {
        $rh->setSenderId($this->config->sender_id);
        $rh->setLanguage($this->config->language);
        $rh->setUserAgent($this->config->user_agent);
        $rh->setReceiverId($this->config->receiver_id);

        $rh->setTimestamp($this->timestamp);
        $rh->setRequestId(Helper::hexRandom());

        $this->RequestHeader = $rh;
    }

    /**
     * @return base64Binary
     */
    public function getApplicationRequest()
    {
        return base64_encode($this->ApplicationRequest->toDocument()->saveXML());
    }

    /**
     * @param ApplicationRequest $ap
     */
    public function setApplicationRequest(ApplicationRequest $ap)
    {
        $ap->command = 'GetUserInfo';

        $ap->customer_id = $this->config->customer_id;
        $ap->environment = $this->config->environment;
        $ap->software_id = $this->config->software_id;
        $ap->timestamp = $this->timestamp;

        $this->ApplicationRequest = new SignedApplicationRequest($ap, $this->config);
    }
}

