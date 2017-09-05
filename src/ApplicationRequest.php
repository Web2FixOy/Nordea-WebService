<?php


namespace Profit\Nordea\API;


use Sabre\Xml\Service;
use Sabre\Xml\Writer;

class ApplicationRequest
{
    public $customer_id;
    public $command;
    public $timestamp;
    public $start_date;
    public $end_date;
    public $status;
    public $service_id;
    public $environment;
    public $file_reference;
    public $user_filename;
    public $target_id;
    public $execution_serial;
    public $encryption;
    public $encryption_method;
    public $compression;
    public $compression_method;
    public $amount_total;
    public $transaction_count;
    public $software_id;
    public $customer_extension;
    public $file_type;
    public $content;

    const XML_NAMESPACE = 'http://bxd.fi/xmldata/';


    protected function to_hash($ns = '')
    {
        $result = [];

        foreach(get_class_vars(self::class) as $name => $value){
            $key = str_camel_case(strtolower($name));
            $value = $this->$name;

            if($ns){
                $key = "$ns$key";
            }

            if(is_array($value) && count($value)){
                throw new UnsupportedException();
            } else if(!empty($value)) {
                $result[ucfirst(str_camel_case($key))] = $value;
            }
        }

        return $result;
    }

    /**
     * @return string
     */
    public function toXML()
    {
        $xml = new Service();
        $xml->namespaceMap = [
            self::XML_NAMESPACE => ''
        ];

        $ns = '{' . self::XML_NAMESPACE . '}';

        $xml->classMap[\DateTime::class] = function(Writer $writer, \DateTime $valueObject) use ($ns){
            return $writer->write($valueObject->format(DATE_ATOM));
        };

        return $xml->write($ns . 'ApplicationRequest', $this->to_hash());
    }
}