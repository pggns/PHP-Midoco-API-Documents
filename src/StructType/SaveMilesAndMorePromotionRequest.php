<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMorePromotionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Supply the promotion properties. To update a promotion, include the promotionId, otherwise a new promotion will be created.
 * @subpackage Structs
 */
class SaveMilesAndMorePromotionRequest extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - ref: MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO $MidocoMilesAndMorePromotion = null;
    /**
     * Constructor method for SaveMilesAndMorePromotionRequest
     * @uses SaveMilesAndMorePromotionRequest::setMidocoMilesAndMorePromotion()
     * @param \Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null)
    {
        $this
            ->setMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion);
    }
    /**
     * Get MidocoMilesAndMorePromotion value
     * @return \Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO|null
     */
    public function getMidocoMilesAndMorePromotion(): ?\Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO
    {
        return $this->MidocoMilesAndMorePromotion;
    }
    /**
     * Set MidocoMilesAndMorePromotion value
     * @param \Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMilesAndMorePromotionRequest
     */
    public function setMidocoMilesAndMorePromotion(?\Pggns\MidocoApi\Documents\StructType\MilesAndMorePromotionDTO $midocoMilesAndMorePromotion = null): self
    {
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
}
