<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactMediaRequest StructType
 * @subpackage Structs
 */
class SaveContactMediaRequest extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO $MidocoContactMedia = null;
    /**
     * Constructor method for SaveContactMediaRequest
     * @uses SaveContactMediaRequest::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO $midocoContactMedia
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO|null
     */
    public function getMidocoContactMedia(): ?\Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO
    {
        return $this->MidocoContactMedia;
    }
    /**
     * Set MidocoContactMedia value
     * @param \Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO $midocoContactMedia
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveContactMediaRequest
     */
    public function setMidocoContactMedia(?\Pggns\MidocoApi\Api\Order\StructType\ContactMediaDTO $midocoContactMedia = null): self
    {
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
}