<?php

namespace Profit\Nordea\API\SoapTypes;


use Phpro\SoapClient\Type\RequestInterface;

class DeleteFileRequest implements RequestInterface
{

    /**
     * @var RequestHeader
     */
    private $RequestHeader = null;

    /**
     * @var base64Binary
     */
    private $ApplicationRequest = null;

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
    public function setRequestHeader($RequestHeader)
    {
        $this->RequestHeader = $RequestHeader;
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
    public function setApplicationRequest($ApplicationRequest)
    {
        $this->ApplicationRequest = $ApplicationRequest;
    }


}

