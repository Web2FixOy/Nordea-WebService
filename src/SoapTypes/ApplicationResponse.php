<?php


namespace Profit\Nordea\API\SoapTypes;


class ApplicationResponse
{
    private $content;

    /**
     * ApplicationResponse constructor.
     */
    public function __construct($content)
    {
        $this->content = new \DOMDocument($content);
    }
}