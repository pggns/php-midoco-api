<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoCrsSystemRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoCrsSystemRequest extends AbstractStructBase
{
    /**
     * The MidocoCrsSystem
     * Meta information extracted from the WSDL
     * - ref: MidocoCrsSystem
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem $MidocoCrsSystem = null;
    /**
     * Constructor method for SaveMidocoCrsSystemRequest
     * @uses SaveMidocoCrsSystemRequest::setMidocoCrsSystem()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem $midocoCrsSystem
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem $midocoCrsSystem = null)
    {
        $this
            ->setMidocoCrsSystem($midocoCrsSystem);
    }
    /**
     * Get MidocoCrsSystem value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem|null
     */
    public function getMidocoCrsSystem(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem
    {
        return $this->MidocoCrsSystem;
    }
    /**
     * Set MidocoCrsSystem value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem $midocoCrsSystem
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoCrsSystemRequest
     */
    public function setMidocoCrsSystem(?\Pggns\MidocoApi\OrderSD\StructType\MidocoCrsSystem $midocoCrsSystem = null): self
    {
        $this->MidocoCrsSystem = $midocoCrsSystem;
        
        return $this;
    }
}
