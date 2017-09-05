<?php

namespace Profit\Nordea\API\SoapTypes;

class RequestHeader
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
    private $Language = null;

    /**
     * @var string
     */
    private $UserAgent = null;

    /**
     * @var string
     */
    private $ReceiverId = null;

    /** @var string  */
    private $Environment = null;

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
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
        return $this->UserAgent;
    }

    /**
     * @param string $UserAgent
     */
    public function setUserAgent($UserAgent)
    {
        $this->UserAgent = $UserAgent;
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

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->Environment;
    }

    /**
     * @param string $Environment
     */
    public function setEnvironment(string $Environment)
    {
        $this->Environment = $Environment;
    }


}

