<?php

namespace Profit\Nordea\API\SoapTypes;

class FileServiceFaultDetail
{

    /**
     * @var string
     */
    private $category = null;

    /**
     * @var string
     */
    private $code = null;

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }


}

