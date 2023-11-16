<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderQm StructType
 * @subpackage Structs
 */
class MidocoOrderQm extends OrderQmDTO
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - ref: ordersd:MidocoQuestion
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoQuestion|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoQuestion $MidocoQuestion = null;
    /**
     * The MidocoOrderQmAnswerDTO
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO[]
     */
    protected array $MidocoOrderQmAnswerDTO = [];
    /**
     * Constructor method for MidocoOrderQm
     * @uses MidocoOrderQm::setMidocoQuestion()
     * @uses MidocoOrderQm::setMidocoOrderQmAnswerDTO()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQuestion $midocoQuestion
     * @param \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO[] $midocoOrderQmAnswerDTO
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoQuestion $midocoQuestion = null, array $midocoOrderQmAnswerDTO = [])
    {
        $this
            ->setMidocoQuestion($midocoQuestion)
            ->setMidocoOrderQmAnswerDTO($midocoOrderQmAnswerDTO);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoQuestion|null
     */
    public function getMidocoQuestion(): ?\Pggns\MidocoApi\Documents\StructType\MidocoQuestion
    {
        return $this->MidocoQuestion;
    }
    /**
     * Set MidocoQuestion value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoQuestion $midocoQuestion
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderQm
     */
    public function setMidocoQuestion(?\Pggns\MidocoApi\Documents\StructType\MidocoQuestion $midocoQuestion = null): self
    {
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
    /**
     * Get MidocoOrderQmAnswerDTO value
     * @return \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO[]
     */
    public function getMidocoOrderQmAnswerDTO(): array
    {
        return $this->MidocoOrderQmAnswerDTO;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderQmAnswerDTO method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderQmAnswerDTO method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderQmAnswerDTOForArrayConstraintsFromSetMidocoOrderQmAnswerDTO(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderQmMidocoOrderQmAnswerDTOItem) {
            // validation for constraint: itemType
            if (!$midocoOrderQmMidocoOrderQmAnswerDTOItem instanceof \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO) {
                $invalidValues[] = is_object($midocoOrderQmMidocoOrderQmAnswerDTOItem) ? get_class($midocoOrderQmMidocoOrderQmAnswerDTOItem) : sprintf('%s(%s)', gettype($midocoOrderQmMidocoOrderQmAnswerDTOItem), var_export($midocoOrderQmMidocoOrderQmAnswerDTOItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderQmAnswerDTO property can only contain items of type \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderQmAnswerDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO[] $midocoOrderQmAnswerDTO
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderQm
     */
    public function setMidocoOrderQmAnswerDTO(array $midocoOrderQmAnswerDTO = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderQmAnswerDTOArrayErrorMessage = self::validateMidocoOrderQmAnswerDTOForArrayConstraintsFromSetMidocoOrderQmAnswerDTO($midocoOrderQmAnswerDTO))) {
            throw new InvalidArgumentException($midocoOrderQmAnswerDTOArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderQmAnswerDTO = $midocoOrderQmAnswerDTO;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderQmAnswerDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoOrderQm
     */
    public function addToMidocoOrderQmAnswerDTO(\Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderQmAnswerDTO property can only contain items of type \Pggns\MidocoApi\Documents\StructType\OrderQmAnswerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderQmAnswerDTO[] = $item;
        
        return $this;
    }
}
