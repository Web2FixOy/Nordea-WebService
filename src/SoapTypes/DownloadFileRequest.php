<?php

namespace Profit\Nordea\API\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;
use Profit\Nordea\API\ApplicationRequest;
use Profit\Nordea\API\Config;
use Profit\Nordea\API\Helper;
use Profit\Nordea\API\SignedApplicationRequest;

class DownloadFileRequest implements RequestInterface
{



    /**
     * @var RequestHeader
     */
    private $RequestHeader = null;

    /**
     * @var base64Binary
     */
    private $ApplicationRequest = null;
    private $config;
    private $timestamp;

    /**
     * DownloadFileRequest constructor.
     * @param RequestHeader $RequestHeader
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->timestamp = new \DateTime();



        $this->setApplicationRequest(new ApplicationRequest());
        $this->setRequestHeader(new RequestHeader());


    }

    /**
     * @return RequestHeader
     */
    public function getRequestHeader()
    {
        return $this->RequestHeader;
    }

    /**
     * @param RequestHeader $RequestHeader
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
        return $this->ApplicationRequest;
    }

    /**
     * @param base64Binary $ApplicationRequest
     */
    public function setApplicationRequest(ApplicationRequest $ap)
    {
        $ap->command = 'downloadFile';
        $ap->file_type = 'TITO';
        $ap->status = 'All';
        $ap->file_reference = "11111111A12006030319503000000010";

        $ap->target_id = '11111111A1';
        $ap->timestamp = $this->timestamp;
        $ap->environment = $this->config->environment;
        $ap->software_id = 'Ruby';
        $ap->customer_id = $this->config->customer_id;


        $this->ApplicationRequest=  new SignedApplicationRequest($ap, $this->config);
    }


}

