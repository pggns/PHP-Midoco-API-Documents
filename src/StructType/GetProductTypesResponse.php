<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypesResponse StructType
 * @subpackage Structs
 */
class GetProductTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoProductType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoProductType
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType[]
     */
    protected array $MidocoProductType = [];
    /**
     * Constructor method for GetProductTypesResponse
     * @uses GetProductTypesResponse::setMidocoProductType()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType[] $midocoProductType
     */
    public function __construct(array $midocoProductType = [])
    {
        $this
            ->setMidocoProductType($midocoProductType);
    }
    /**
     * Get MidocoProductType value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType[]
     */
    public function getMidocoProductType(): array
    {
        return $this->MidocoProductType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoProductType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoProductType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoProductTypeForArrayConstraintsFromSetMidocoProductType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getProductTypesResponseMidocoProductTypeItem) {
            // validation for constraint: itemType
            if (!$getProductTypesResponseMidocoProductTypeItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType) {
                $invalidValues[] = is_object($getProductTypesResponseMidocoProductTypeItem) ? get_class($getProductTypesResponseMidocoProductTypeItem) : sprintf('%s(%s)', gettype($getProductTypesResponseMidocoProductTypeItem), var_export($getProductTypesResponseMidocoProductTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoProductType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoProductType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType[] $midocoProductType
     * @return \Pggns\MidocoApi\Documents\StructType\GetProductTypesResponse
     */
    public function setMidocoProductType(array $midocoProductType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoProductTypeArrayErrorMessage = self::validateMidocoProductTypeForArrayConstraintsFromSetMidocoProductType($midocoProductType))) {
            throw new InvalidArgumentException($midocoProductTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoProductType = $midocoProductType;
        
        return $this;
    }
    /**
     * Add item to MidocoProductType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetProductTypesResponse
     */
    public function addToMidocoProductType(\Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType) {
            throw new InvalidArgumentException(sprintf('The MidocoProductType property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoProductType[] = $item;
        
        return $this;
    }
}
