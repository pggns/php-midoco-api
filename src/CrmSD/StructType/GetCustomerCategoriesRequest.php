<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerCategoriesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerCategoriesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerCategory
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory $MidocoCustomerCategory = null;
    /**
     * Constructor method for GetCustomerCategoriesRequest
     * @uses GetCustomerCategoriesRequest::setMidocoCustomerCategory()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory $midocoCustomerCategory
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory $midocoCustomerCategory = null)
    {
        $this
            ->setMidocoCustomerCategory($midocoCustomerCategory);
    }
    /**
     * Get MidocoCustomerCategory value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory|null
     */
    public function getMidocoCustomerCategory(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory
    {
        return $this->MidocoCustomerCategory;
    }
    /**
     * Set MidocoCustomerCategory value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory $midocoCustomerCategory
     * @return \Pggns\MidocoApi\Crmsd\StructType\GetCustomerCategoriesRequest
     */
    public function setMidocoCustomerCategory(?\Pggns\MidocoApi\Crmsd\StructType\MidocoCustomerCategory $midocoCustomerCategory = null): self
    {
        $this->MidocoCustomerCategory = $midocoCustomerCategory;
        
        return $this;
    }
}
