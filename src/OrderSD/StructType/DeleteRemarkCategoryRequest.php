<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRemarkCategoryRequest StructType
 * @subpackage Structs
 */
class DeleteRemarkCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkCategory
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $MidocoRemarkCategory = null;
    /**
     * Constructor method for DeleteRemarkCategoryRequest
     * @uses DeleteRemarkCategoryRequest::setMidocoRemarkCategory()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory = null)
    {
        $this
            ->setMidocoRemarkCategory($midocoRemarkCategory);
    }
    /**
     * Get MidocoRemarkCategory value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory|null
     */
    public function getMidocoRemarkCategory(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory
    {
        return $this->MidocoRemarkCategory;
    }
    /**
     * Set MidocoRemarkCategory value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteRemarkCategoryRequest
     */
    public function setMidocoRemarkCategory(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoRemarkCategory $midocoRemarkCategory = null): self
    {
        $this->MidocoRemarkCategory = $midocoRemarkCategory;
        
        return $this;
    }
}
