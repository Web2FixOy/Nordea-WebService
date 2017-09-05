<?php

use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Assembler;


return Config::create()
    ->setWsdl(__DIR__ . '/BankCorporateFileService_20080616.xml')
    ->setDestination(realpath(__DIR__ . '/../src/temp'))
    ->setNamespace('Profit\\Nordea\\API\\SoapTypes')
    ->addSoapOption('features', SOAP_SINGLE_ELEMENT_ARRAYS)
    ->addRule(new Rules\MultiRule([
        new Rules\AssembleRule(new Assembler\GetterAssembler()),
        new Rules\AssembleRule(new Assembler\SetterAssembler()),
    ]))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\RequestAssembler()),
        '/Request$/'
    ))
    ->addRule(new Rules\TypenameMatchesRule(
        new Rules\AssembleRule(new Assembler\ResultAssembler()),
        '/Response$/'
    ));
