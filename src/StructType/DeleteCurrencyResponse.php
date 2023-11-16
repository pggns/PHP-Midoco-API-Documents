<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCurrencyResponse StructType
 * @subpackage Structs
 */
class DeleteCurrencyResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCurrency
     * @var \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[]
     */
    protected array $MidocoCurrency = [];
    /**
     * Constructor method for DeleteCurrencyResponse
     * @uses DeleteCurrencyResponse::setMidocoCurrency()
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[] $midocoCurrency
     */
    public function __construct(array $midocoCurrency = [])
    {
        $this
            ->setMidocoCurrency($midocoCurrency);
    }
    /**
     * Get MidocoCurrency value
     * @return \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[]
     */
    public function getMidocoCurrency(): array
    {
        return $this->MidocoCurrency;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCurrency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCurrency method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCurrencyForArrayConstraintsFromSetMidocoCurrency(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteCurrencyResponseMidocoCurrencyItem) {
            // validation for constraint: itemType
            if (!$deleteCurrencyResponseMidocoCurrencyItem instanceof \Pggns\MidocoApi\Documents\StructType\CurrencyDTO) {
                $invalidValues[] = is_object($deleteCurrencyResponseMidocoCurrencyItem) ? get_class($deleteCurrencyResponseMidocoCurrencyItem) : sprintf('%s(%s)', gettype($deleteCurrencyResponseMidocoCurrencyItem), var_export($deleteCurrencyResponseMidocoCurrencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCurrency property can only contain items of type \Pggns\MidocoApi\Documents\StructType\CurrencyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCurrency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO[] $midocoCurrency
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteCurrencyResponse
     */
    public function setMidocoCurrency(array $midocoCurrency = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCurrencyArrayErrorMessage = self::validateMidocoCurrencyForArrayConstraintsFromSetMidocoCurrency($midocoCurrency))) {
            throw new InvalidArgumentException($midocoCurrencyArrayErrorMessage, __LINE__);
        }
        $this->MidocoCurrency = $midocoCurrency;
        
        return $this;
    }
    /**
     * Add item to MidocoCurrency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\CurrencyDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteCurrencyResponse
     */
    public function addToMidocoCurrency(\Pggns\MidocoApi\Documents\StructType\CurrencyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\CurrencyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCurrency property can only contain items of type \Pggns\MidocoApi\Documents\StructType\CurrencyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCurrency[] = $item;
        
        return $this;
    }
}
