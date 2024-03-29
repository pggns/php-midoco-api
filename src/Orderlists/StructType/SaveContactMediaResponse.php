<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactMediaResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveContactMediaResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $MidocoContactMedia = null;
    /**
     * Constructor method for SaveContactMediaResponse
     * @uses SaveContactMediaResponse::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO|null
     */
    public function getMidocoContactMedia(): ?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO
    {
        return $this->MidocoContactMedia;
    }
    /**
     * Set MidocoContactMedia value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveContactMediaResponse
     */
    public function setMidocoContactMedia(?\Pggns\MidocoApi\Orderlists\StructType\ContactMediaDTO $midocoContactMedia = null): self
    {
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
}
