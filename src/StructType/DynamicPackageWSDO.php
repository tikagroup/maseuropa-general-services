<?php

namespace Maseuropa\GeneralServices\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DynamicPackageWSDO StructType
 * @subpackage Structs
 */
class DynamicPackageWSDO extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $id;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $name;
    /**
     * The required
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var int
     */
    public $required;
    /**
     * Constructor method for DynamicPackageWSDO
     * @uses DynamicPackageWSDO::setId()
     * @uses DynamicPackageWSDO::setName()
     * @uses DynamicPackageWSDO::setRequired()
     * @param int $id
     * @param string $name
     * @param int $required
     */
    public function __construct($id = null, $name = null, $required = null)
    {
        $this
            ->setId($id)
            ->setName($name)
            ->setRequired($required);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Maseuropa\GeneralServices\StructType\DynamicPackageWSDO
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Maseuropa\GeneralServices\StructType\DynamicPackageWSDO
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Get required value
     * @return int|null
     */
    public function getRequired()
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param int $required
     * @return \Maseuropa\GeneralServices\StructType\DynamicPackageWSDO
     */
    public function setRequired($required = null)
    {
        // validation for constraint: int
        if (!is_null($required) && !(is_int($required) || ctype_digit($required))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Maseuropa\GeneralServices\StructType\DynamicPackageWSDO
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
