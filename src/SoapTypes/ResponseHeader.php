<?php

namespace Profit\Nordea\API\SoapTypes;

class ResponseHeader
{

    /**
     * @var string
     */
    private $SenderId = null;

    /**
     * @var string
     */
    private $RequestId = null;

    /**
     * @var \DateTime
     */
    private $Timestamp = null;

    /**
     * @var string
     */
    private $ResponseCode = null;

    /**
     * @var string
     */
    private $ResponseText = null;

    /**
     * @var string
     */
    private $ReceiverId = null;

    /**
     * @return string
     */
    public function getSenderId()
    {
        return $this->SenderId;
    }

    /**
     * @param string $SenderId
     */
    public function setSenderId($SenderId)
    {
        $this->SenderId = $SenderId;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * @param string $RequestId
     */
    public function setRequestId($RequestId)
    {
        $this->RequestId = $RequestId;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * @param \DateTime $Timestamp
     */
    public function setTimestamp($Timestamp)
    {
        $this->Timestamp = $Timestamp;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->ResponseCode;
    }

    /**
     * @param string $ResponseCode
     */
    public function setResponseCode($ResponseCode)
    {
        $this->ResponseCode = $ResponseCode;
    }

    /**
     * @return string
     */
    public function getResponseText()
    {
        return $this->ResponseText;
    }

    /**
     * @param string $ResponseText
     */
    public function setResponseText($ResponseText)
    {
        $this->ResponseText = $ResponseText;
    }

    /**
     * @return string
     */
    public function getReceiverId()
    {
        return $this->ReceiverId;
    }

    /**
     * @param string $ReceiverId
     */
    public function setReceiverId($ReceiverId)
    {
        $this->ReceiverId = $ReceiverId;
    }


}

