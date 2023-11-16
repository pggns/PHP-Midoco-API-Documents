<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectiveInvoicePrintOrderDetails StructType
 * @subpackage Structs
 */
class CollectiveInvoicePrintOrderDetails extends AbstractStructBase
{
    /**
     * The SellItemDetails4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing[]
     */
    protected array $SellItemDetails4Printing = [];
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoInvoice
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoInvoice|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice $MidocoInvoice = null;
    /**
     * Constructor method for CollectiveInvoicePrintOrderDetails
     * @uses CollectiveInvoicePrintOrderDetails::setSellItemDetails4Printing()
     * @uses CollectiveInvoicePrintOrderDetails::setMidocoOrder()
     * @uses CollectiveInvoicePrintOrderDetails::setMidocoInvoice()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing[] $sellItemDetails4Printing
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice
     */
    public function __construct(array $sellItemDetails4Printing = [], ?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice = null)
    {
        $this
            ->setSellItemDetails4Printing($sellItemDetails4Printing)
            ->setMidocoOrder($midocoOrder)
            ->setMidocoInvoice($midocoInvoice);
    }
    /**
     * Get SellItemDetails4Printing value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing[]
     */
    public function getSellItemDetails4Printing(): array
    {
        return $this->SellItemDetails4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setSellItemDetails4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellItemDetails4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellItemDetails4PrintingForArrayConstraintsFromSetSellItemDetails4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $collectiveInvoicePrintOrderDetailsSellItemDetails4PrintingItem) {
            // validation for constraint: itemType
            if (!$collectiveInvoicePrintOrderDetailsSellItemDetails4PrintingItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing) {
                $invalidValues[] = is_object($collectiveInvoicePrintOrderDetailsSellItemDetails4PrintingItem) ? get_class($collectiveInvoicePrintOrderDetailsSellItemDetails4PrintingItem) : sprintf('%s(%s)', gettype($collectiveInvoicePrintOrderDetailsSellItemDetails4PrintingItem), var_export($collectiveInvoicePrintOrderDetailsSellItemDetails4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SellItemDetails4Printing property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SellItemDetails4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing[] $sellItemDetails4Printing
     * @return \Pggns\MidocoApi\Documents\StructType\CollectiveInvoicePrintOrderDetails
     */
    public function setSellItemDetails4Printing(array $sellItemDetails4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($sellItemDetails4PrintingArrayErrorMessage = self::validateSellItemDetails4PrintingForArrayConstraintsFromSetSellItemDetails4Printing($sellItemDetails4Printing))) {
            throw new InvalidArgumentException($sellItemDetails4PrintingArrayErrorMessage, __LINE__);
        }
        $this->SellItemDetails4Printing = $sellItemDetails4Printing;
        
        return $this;
    }
    /**
     * Add item to SellItemDetails4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing $item
     * @return \Pggns\MidocoApi\Documents\StructType\CollectiveInvoicePrintOrderDetails
     */
    public function addToSellItemDetails4Printing(\Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The SellItemDetails4Printing property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoSellItemInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SellItemDetails4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Documents\StructType\CollectiveInvoicePrintOrderDetails
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Documents\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoInvoice value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoInvoice|null
     */
    public function getMidocoInvoice(): ?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice
    {
        return $this->MidocoInvoice;
    }
    /**
     * Set MidocoInvoice value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice
     * @return \Pggns\MidocoApi\Documents\StructType\CollectiveInvoicePrintOrderDetails
     */
    public function setMidocoInvoice(?\Pggns\MidocoApi\Documents\StructType\MidocoInvoice $midocoInvoice = null): self
    {
        $this->MidocoInvoice = $midocoInvoice;
        
        return $this;
    }
}
