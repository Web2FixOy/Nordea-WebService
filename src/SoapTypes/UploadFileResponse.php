<?php

namespace Profit\Nordea\API\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class UploadFileResponse implements ResultInterface
{

    /**
     * @var ResponseHeader
     */
    private $ResponseHeader = null;

    /**
     * @var base64Binary
     */
    private $ApplicationResponse = null;

    /**
     * @return ResponseHeader
     */
    public function getResponseHeader()
    {
        return $this->ResponseHeader;
    }

    /**
     * @param ResponseHeader $ResponseHeader
     */
    public function setResponseHeader($ResponseHeader)
    {
        $this->ResponseHeader = $ResponseHeader;
    }

    /**
     * @return base64Binary
     */
    public function getApplicationResponse()
    {
        return $this->ApplicationResponse;
    }

    /**
     * @param base64Binary $ApplicationResponse
     */
    public function setApplicationResponse($ApplicationResponse)
    {
        $this->ApplicationResponse = $ApplicationResponse;
    }


}

