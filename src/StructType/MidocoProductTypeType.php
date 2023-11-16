<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoProductTypeType StructType
 * @subpackage Structs
 */
class MidocoProductTypeType extends ProductTypeDTO
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO[]
     */
    protected array $MidocoProductTypeMediatorCondition = [];
    /**
     * The MidocoProductTypeSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductTypeSupplier
     * @var \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO[]
     */
    protected array $MidocoProductTypeSupplier = [];
    /**
     * The VatDivisionIn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $VatDivisionIn = null;
    /**
     * The VatDivisionOut
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $VatDivisionOut = null;
    /**
     * Constructor method for MidocoProductTypeType
     * @uses MidocoProductTypeType::setMidocoProductTypeMediatorCondition()
     * @uses MidocoProductTypeType::setMidocoProductTypeSupplier()
     * @uses MidocoProductTypeType::setVatDivisionIn()
     * @uses MidocoProductTypeType::setVatDivisionOut()
     * @param \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO[] $midocoProductTypeMediatorCondition
     * @param \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionIn
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionOut
     */
    public function __construct(array $midocoProductTypeMediatorCondition = [], array $midocoProductTypeSupplier = [], ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionIn = null, ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionOut = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition)
            ->setMidocoProductTypeSupplier($midocoProductTypeSupplier)
            ->setVatDivisionIn($vatDivisionIn)
            ->setVatDivisionOut($vatDivisionOut);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO[]
     */
    public function getMidocoProductTypeMediatorCondition(): array
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProductTypeMediatorCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeMediatorCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeMediatorConditionForArrayConstraintsFromSetMidocoProductTypeMediatorCondition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoProductTypeTypeMidocoProductTypeMediatorConditionItem) {
            // validation for constraint: itemType
            if (!$midocoProductTypeTypeMidocoProductTypeMediatorConditionItem instanceof \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO) {
                $invalidValues[] = is_object($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem) ? get_class($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem) : sprintf('%s(%s)', gettype($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem), var_export($midocoProductTypeTypeMidocoProductTypeMediatorConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductTypeMediatorCondition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO[] $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
     */
    public function setMidocoProductTypeMediatorCondition(array $midocoProductTypeMediatorCondition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeMediatorConditionArrayErrorMessage = self::validateMidocoProductTypeMediatorConditionForArrayConstraintsFromSetMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition))) {
            throw new InvalidArgumentException($midocoProductTypeMediatorConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeMediatorCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
     */
    public function addToMidocoProductTypeMediatorCondition(\Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProductTypeMediatorCondition property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductTypeMediatorCondition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoProductTypeSupplier value
     * @return \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO[]
     */
    public function getMidocoProductTypeSupplier(): array
    {
        return $this->MidocoProductTypeSupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProductTypeSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductTypeSupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeSupplierForArrayConstraintsFromSetMidocoProductTypeSupplier(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoProductTypeTypeMidocoProductTypeSupplierItem) {
            // validation for constraint: itemType
            if (!$midocoProductTypeTypeMidocoProductTypeSupplierItem instanceof \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO) {
                $invalidValues[] = is_object($midocoProductTypeTypeMidocoProductTypeSupplierItem) ? get_class($midocoProductTypeTypeMidocoProductTypeSupplierItem) : sprintf('%s(%s)', gettype($midocoProductTypeTypeMidocoProductTypeSupplierItem), var_export($midocoProductTypeTypeMidocoProductTypeSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductTypeSupplier property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO[] $midocoProductTypeSupplier
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
     */
    public function setMidocoProductTypeSupplier(array $midocoProductTypeSupplier = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeSupplierArrayErrorMessage = self::validateMidocoProductTypeSupplierForArrayConstraintsFromSetMidocoProductTypeSupplier($midocoProductTypeSupplier))) {
            throw new InvalidArgumentException($midocoProductTypeSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductTypeSupplier = $midocoProductTypeSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoProductTypeSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
     */
    public function addToMidocoProductTypeSupplier(\Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoProductTypeSupplier property can only contain items of type \Pggns\MidocoApi\Documents\StructType\ProductTypeSupplierDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductTypeSupplier[] = $item;
        
        return $this;
    }
    /**
     * Get VatDivisionIn value
     * @return \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType|null
     */
    public function getVatDivisionIn(): ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType
    {
        return $this->VatDivisionIn;
    }
    /**
     * Set VatDivisionIn value
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionIn
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
     */
    public function setVatDivisionIn(?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionIn = null): self
    {
        $this->VatDivisionIn = $vatDivisionIn;
        
        return $this;
    }
    /**
     * Get VatDivisionOut value
     * @return \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType|null
     */
    public function getVatDivisionOut(): ?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType
    {
        return $this->VatDivisionOut;
    }
    /**
     * Set VatDivisionOut value
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionOut
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
     */
    public function setVatDivisionOut(?\Pggns\MidocoApi\Documents\StructType\VatDivisionTemplateType $vatDivisionOut = null): self
    {
        $this->VatDivisionOut = $vatDivisionOut;
        
        return $this;
    }
}
