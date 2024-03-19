<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteProductTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoProductType
     * Meta information extracted from the WSDL
     * - ref: MidocoProductType
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $MidocoProductType = null;
    /**
     * Constructor method for DeleteProductTypeRequest
     * @uses DeleteProductTypeRequest::setMidocoProductType()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $midocoProductType
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $midocoProductType = null)
    {
        $this
            ->setMidocoProductType($midocoProductType);
    }
    /**
     * Get MidocoProductType value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType|null
     */
    public function getMidocoProductType(): ?\Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType
    {
        return $this->MidocoProductType;
    }
    /**
     * Set MidocoProductType value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $midocoProductType
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteProductTypeRequest
     */
    public function setMidocoProductType(?\Pggns\MidocoApi\Documents\StructType\MidocoProductTypeType $midocoProductType = null): self
    {
        $this->MidocoProductType = $midocoProductType;
        
        return $this;
    }
}
