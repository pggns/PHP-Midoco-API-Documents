<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplierCcCardResponse StructType
 * @subpackage Structs
 */
class DeleteSupplierCcCardResponse extends AbstractStructBase
{
    /**
     * The message
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * Constructor method for DeleteSupplierCcCardResponse
     * @uses DeleteSupplierCcCardResponse::setMessage()
     * @param string $message
     */
    public function __construct(?string $message = null)
    {
        $this
            ->setMessage($message);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteSupplierCcCardResponse
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
}
