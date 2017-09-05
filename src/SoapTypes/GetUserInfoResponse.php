<?php

namespace Profit\Nordea\API\SoapTypes;


use Phpro\SoapClient\Type\ResultInterface;

class GetUserInfoResponse implements ResultInterface
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
     * @return
     */
    public function getApplicationResponse()
    {
        return $this->ApplicationResponse;
    }

    /**
     * @param  $ApplicationResponse
     */
    public function setApplicationResponse($ApplicationResponse)
    {
        echo 12313;

        exit(1);

        $this->ApplicationResponse = $ApplicationResponse;
    }


}

