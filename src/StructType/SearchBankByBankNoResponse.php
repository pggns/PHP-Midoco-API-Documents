<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankByBankNoResponse StructType
 * @subpackage Structs
 */
class SearchBankByBankNoResponse extends AbstractStructBase
{
    /**
     * The MidocoBankInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo[]
     */
    protected array $MidocoBankInfo = [];
    /**
     * Constructor method for SearchBankByBankNoResponse
     * @uses SearchBankByBankNoResponse::setMidocoBankInfo()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo[] $midocoBankInfo
     */
    public function __construct(array $midocoBankInfo = [])
    {
        $this
            ->setMidocoBankInfo($midocoBankInfo);
    }
    /**
     * Get MidocoBankInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo[]
     */
    public function getMidocoBankInfo(): array
    {
        return $this->MidocoBankInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBankInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankInfoForArrayConstraintsFromSetMidocoBankInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBankByBankNoResponseMidocoBankInfoItem) {
            // validation for constraint: itemType
            if (!$searchBankByBankNoResponseMidocoBankInfoItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo) {
                $invalidValues[] = is_object($searchBankByBankNoResponseMidocoBankInfoItem) ? get_class($searchBankByBankNoResponseMidocoBankInfoItem) : sprintf('%s(%s)', gettype($searchBankByBankNoResponseMidocoBankInfoItem), var_export($searchBankByBankNoResponseMidocoBankInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo[] $midocoBankInfo
     * @return \Pggns\MidocoApi\Documents\StructType\SearchBankByBankNoResponse
     */
    public function setMidocoBankInfo(array $midocoBankInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankInfoArrayErrorMessage = self::validateMidocoBankInfoForArrayConstraintsFromSetMidocoBankInfo($midocoBankInfo))) {
            throw new InvalidArgumentException($midocoBankInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankInfo = $midocoBankInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBankInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $item
     * @return \Pggns\MidocoApi\Documents\StructType\SearchBankByBankNoResponse
     */
    public function addToMidocoBankInfo(\Pggns\MidocoApi\Documents\StructType\MidocoBankInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBankInfo property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoBankInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankInfo[] = $item;
        
        return $this;
    }
}
