<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatDivisionsRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Documents\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for GetVatDivisionsRequest
     * @uses GetVatDivisionsRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Documents\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Documents\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Documents\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Documents\StructType\GetVatDivisionsRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Documents\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
