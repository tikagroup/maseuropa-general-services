<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Offerstypes ServiceType
 * @subpackage Services
 */
class Offerstypes extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named offers_types
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $language_id
     * @return Array|bool
     */
    public function offers_types(\Maseuropa\GeneralServices\StructType\Auth $auth, $language_id)
    {
        try {
            $this->setResult($this->getSoapClient()->offers_types($auth, $language_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return Array
     */
    public function getResult()
    {
        return parent::getResult();
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
