<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCustomerCategoryRequest StructType
 * @subpackage Structs
 */
class DeleteCustomerCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerCategory
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory $MidocoCustomerCategory = null;
    /**
     * Constructor method for DeleteCustomerCategoryRequest
     * @uses DeleteCustomerCategoryRequest::setMidocoCustomerCategory()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory = null)
    {
        $this
            ->setMidocoCustomerCategory($midocoCustomerCategory);
    }
    /**
     * Get MidocoCustomerCategory value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory|null
     */
    public function getMidocoCustomerCategory(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory
    {
        return $this->MidocoCustomerCategory;
    }
    /**
     * Set MidocoCustomerCategory value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteCustomerCategoryRequest
     */
    public function setMidocoCustomerCategory(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoCustomerCategory $midocoCustomerCategory = null): self
    {
        $this->MidocoCustomerCategory = $midocoCustomerCategory;
        
        return $this;
    }
}
