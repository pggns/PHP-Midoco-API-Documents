<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTravelNumberRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTravelNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber $MidocoTravelNumber = null;
    /**
     * Constructor method for DeleteTravelNumberRequest
     * @uses DeleteTravelNumberRequest::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber $midocoTravelNumber
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber $midocoTravelNumber = null)
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber|null
     */
    public function getMidocoTravelNumber(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * Set MidocoTravelNumber value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber $midocoTravelNumber
     * @return \Pggns\MidocoApi\Documents\StructType\DeleteTravelNumberRequest
     */
    public function setMidocoTravelNumber(?\Pggns\MidocoApi\Documents\StructType\MidocoTravelNumber $midocoTravelNumber = null): self
    {
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
}
