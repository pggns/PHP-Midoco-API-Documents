<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationAutoRemarksResponse StructType
 * @subpackage Structs
 */
class GetDestinationAutoRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO[]
     */
    protected array $MidocoDestinationAutoRemark = [];
    /**
     * Constructor method for GetDestinationAutoRemarksResponse
     * @uses GetDestinationAutoRemarksResponse::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO[] $midocoDestinationAutoRemark
     */
    public function __construct(array $midocoDestinationAutoRemark = [])
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO[]
     */
    public function getMidocoDestinationAutoRemark(): array
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDestinationAutoRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDestinationAutoRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDestinationAutoRemarkForArrayConstraintsFromSetMidocoDestinationAutoRemark(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem) {
            // validation for constraint: itemType
            if (!$getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem instanceof \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO) {
                $invalidValues[] = is_object($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem) ? get_class($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem) : sprintf('%s(%s)', gettype($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem), var_export($getDestinationAutoRemarksResponseMidocoDestinationAutoRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDestinationAutoRemark property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO[] $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Documents\StructType\GetDestinationAutoRemarksResponse
     */
    public function setMidocoDestinationAutoRemark(array $midocoDestinationAutoRemark = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDestinationAutoRemarkArrayErrorMessage = self::validateMidocoDestinationAutoRemarkForArrayConstraintsFromSetMidocoDestinationAutoRemark($midocoDestinationAutoRemark))) {
            throw new InvalidArgumentException($midocoDestinationAutoRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoDestinationAutoRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetDestinationAutoRemarksResponse
     */
    public function addToMidocoDestinationAutoRemark(\Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDestinationAutoRemark property can only contain items of type \Pggns\MidocoApi\Documents\StructType\DestinationAutoRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDestinationAutoRemark[] = $item;
        
        return $this;
    }
}
