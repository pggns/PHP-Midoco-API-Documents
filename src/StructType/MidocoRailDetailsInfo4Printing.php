<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRailDetailsInfo4Printing StructType
 * @subpackage Structs
 */
class MidocoRailDetailsInfo4Printing extends RailDetailDTO
{
    /**
     * The noOfNights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $noOfNights = null;
    /**
     * The MidocoRailRouting4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRailRouting4Printing
     * @var \Pggns\MidocoApi\Documents\StructType\RailDetailDTO[]
     */
    protected array $MidocoRailRouting4Printing = [];
    /**
     * Constructor method for MidocoRailDetailsInfo4Printing
     * @uses MidocoRailDetailsInfo4Printing::setNoOfNights()
     * @uses MidocoRailDetailsInfo4Printing::setMidocoRailRouting4Printing()
     * @param string $noOfNights
     * @param \Pggns\MidocoApi\Documents\StructType\RailDetailDTO[] $midocoRailRouting4Printing
     */
    public function __construct(?string $noOfNights = null, array $midocoRailRouting4Printing = [])
    {
        $this
            ->setNoOfNights($noOfNights)
            ->setMidocoRailRouting4Printing($midocoRailRouting4Printing);
    }
    /**
     * Get noOfNights value
     * @return string|null
     */
    public function getNoOfNights(): ?string
    {
        return $this->noOfNights;
    }
    /**
     * Set noOfNights value
     * @param string $noOfNights
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRailDetailsInfo4Printing
     */
    public function setNoOfNights(?string $noOfNights = null): self
    {
        // validation for constraint: string
        if (!is_null($noOfNights) && !is_string($noOfNights)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noOfNights, true), gettype($noOfNights)), __LINE__);
        }
        $this->noOfNights = $noOfNights;
        
        return $this;
    }
    /**
     * Get MidocoRailRouting4Printing value
     * @return \Pggns\MidocoApi\Documents\StructType\RailDetailDTO[]
     */
    public function getMidocoRailRouting4Printing(): array
    {
        return $this->MidocoRailRouting4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRailRouting4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRailRouting4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRailRouting4PrintingForArrayConstraintsFromSetMidocoRailRouting4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoRailDetailsInfo4PrintingMidocoRailRouting4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoRailDetailsInfo4PrintingMidocoRailRouting4PrintingItem instanceof \Pggns\MidocoApi\Documents\StructType\RailDetailDTO) {
                $invalidValues[] = is_object($midocoRailDetailsInfo4PrintingMidocoRailRouting4PrintingItem) ? get_class($midocoRailDetailsInfo4PrintingMidocoRailRouting4PrintingItem) : sprintf('%s(%s)', gettype($midocoRailDetailsInfo4PrintingMidocoRailRouting4PrintingItem), var_export($midocoRailDetailsInfo4PrintingMidocoRailRouting4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRailRouting4Printing property can only contain items of type \Pggns\MidocoApi\Documents\StructType\RailDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRailRouting4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\RailDetailDTO[] $midocoRailRouting4Printing
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRailDetailsInfo4Printing
     */
    public function setMidocoRailRouting4Printing(array $midocoRailRouting4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRailRouting4PrintingArrayErrorMessage = self::validateMidocoRailRouting4PrintingForArrayConstraintsFromSetMidocoRailRouting4Printing($midocoRailRouting4Printing))) {
            throw new InvalidArgumentException($midocoRailRouting4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoRailRouting4Printing = $midocoRailRouting4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoRailRouting4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\RailDetailDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoRailDetailsInfo4Printing
     */
    public function addToMidocoRailRouting4Printing(\Pggns\MidocoApi\Documents\StructType\RailDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\RailDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoRailRouting4Printing property can only contain items of type \Pggns\MidocoApi\Documents\StructType\RailDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRailRouting4Printing[] = $item;
        
        return $this;
    }
}
