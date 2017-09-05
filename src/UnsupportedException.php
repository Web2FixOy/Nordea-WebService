<?php


namespace Profit\Nordea\API;


use Throwable;

class UnsupportedException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        if(empty($message)){
            $message = "unsupported method";
        }

        parent::__construct($message, $code, $previous);
    }

}