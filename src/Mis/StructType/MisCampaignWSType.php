<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCampaignWSType StructType
 * @subpackage Structs
 */
class MisCampaignWSType extends MisCampaignDTO
{
    /**
     * The MidocoRowMetadata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoRowMetadata
     * @var \Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType $MidocoRowMetadata = null;
    /**
     * Constructor method for MisCampaignWSType
     * @uses MisCampaignWSType::setMidocoRowMetadata()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType $midocoRowMetadata
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType $midocoRowMetadata = null)
    {
        $this
            ->setMidocoRowMetadata($midocoRowMetadata);
    }
    /**
     * Get MidocoRowMetadata value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType|null
     */
    public function getMidocoRowMetadata(): ?\Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType
    {
        return $this->MidocoRowMetadata;
    }
    /**
     * Set MidocoRowMetadata value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType $midocoRowMetadata
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisCampaignWSType
     */
    public function setMidocoRowMetadata(?\Pggns\MidocoApi\Api\Mis\StructType\RowMetadataType $midocoRowMetadata = null): self
    {
        $this->MidocoRowMetadata = $midocoRowMetadata;
        
        return $this;
    }
}
