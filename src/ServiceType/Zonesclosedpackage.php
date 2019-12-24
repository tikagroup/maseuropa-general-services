<?php

namespace Maseuropa\GeneralServices\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Zonesclosedpackage ServiceType
 * @subpackage Services
 */
class Zonesclosedpackage extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named zones_closed_package
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Maseuropa\GeneralServices\StructType\Auth $auth
     * @param string $article_class_type_id
     * @param string $airport_id
     * @return \Maseuropa\GeneralServices\StructType\ZoneWSDO[]|bool
     */
    public function zones_closed_package(\Maseuropa\GeneralServices\StructType\Auth $auth, $article_class_type_id, $airport_id)
    {
        try {
            $this->setResult($this->getSoapClient()->zones_closed_package($auth, $article_class_type_id, $airport_id));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Maseuropa\GeneralServices\StructType\ZoneWSDO[]
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
