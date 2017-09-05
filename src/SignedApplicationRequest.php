<?php

namespace Profit\Nordea\API;

use RobRichards\XMLSecLibs\XMLSecurityDSig;
use RobRichards\XMLSecLibs\XMLSecurityKey;

class SignedApplicationRequest
{
    /**
     * @var ApplicationRequest
     */
    private $request;
    /**
     * @var Config
     */
    private $options;


    /**
     * SignedApplicationRequest constructor.
     * @param ApplicationRequest $request
     * @param Config $options
     */
    public function __construct(ApplicationRequest $request, Config $options)
    {
        $this->request = $request;
        $this->options = $options;
    }

    function toDocument()
    {
        $doc = new \DOMDocument();
        $doc->loadXML($this->request->toXML());

        $signer = new XMLSecurityDSig('');

        $signer->setCanonicalMethod(XMLSecurityDSig::EXC_C14N);
        $signer->addReference(
            $doc,
            XMLSecurityDSig::SHA1,
            array('http://www.w3.org/2000/09/xmldsig#enveloped-signature')
        );

        $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array('type'=>'private'));
        $objKey->loadKey($this->options->private_key_file, TRUE);

        $signer->sign($objKey);

        $signer->add509Cert(file_get_contents($this->options->cert_file), true, false, ['issuerSerial' => true]);

        $signer->appendSignature($doc->documentElement);

        return $doc;
    }

    public function __toString()
    {
        $result = $this->toDocument()
            ->getElementsByTagName('ApplicationRequest')
            ->item(0)
            ->C14N();

        file_put_contents(realpath(__DIR__ . '/../steps/application_request.signed.php.xml'), $result);

        return $result;
    }

}