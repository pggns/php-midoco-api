<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoOrgTemplateTextRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoOrgTemplateTextRequest extends AbstractStructBase
{
    /**
     * The org_template_id
     * @var int|null
     */
    protected ?int $org_template_id = null;
    /**
     * Constructor method for DeleteMidocoOrgTemplateTextRequest
     * @uses DeleteMidocoOrgTemplateTextRequest::setOrg_template_id()
     * @param int $org_template_id
     */
    public function __construct(?int $org_template_id = null)
    {
        $this
            ->setOrg_template_id($org_template_id);
    }
    /**
     * Get org_template_id value
     * @return int|null
     */
    public function getOrg_template_id(): ?int
    {
        return $this->org_template_id;
    }
    /**
     * Set org_template_id value
     * @param int $org_template_id
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteMidocoOrgTemplateTextRequest
     */
    public function setOrg_template_id(?int $org_template_id = null): self
    {
        // validation for constraint: int
        if (!is_null($org_template_id) && !(is_int($org_template_id) || ctype_digit($org_template_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($org_template_id, true), gettype($org_template_id)), __LINE__);
        }
        $this->org_template_id = $org_template_id;
        
        return $this;
    }
}
