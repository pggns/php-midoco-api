<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crmsd\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaxconnectQueueRespone StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePaxconnectQueueRespone extends AbstractStructBase
{
    /**
     * The MidocoPaxconnectQueue
     * Meta information extracted from the WSDL
     * - ref: MidocoPaxconnectQueue
     * @var \Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue|null
     */
    protected ?\Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue $MidocoPaxconnectQueue = null;
    /**
     * Constructor method for SavePaxconnectQueueRespone
     * @uses SavePaxconnectQueueRespone::setMidocoPaxconnectQueue()
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue
     */
    public function __construct(?\Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue = null)
    {
        $this
            ->setMidocoPaxconnectQueue($midocoPaxconnectQueue);
    }
    /**
     * Get MidocoPaxconnectQueue value
     * @return \Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue|null
     */
    public function getMidocoPaxconnectQueue(): ?\Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue
    {
        return $this->MidocoPaxconnectQueue;
    }
    /**
     * Set MidocoPaxconnectQueue value
     * @param \Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue
     * @return \Pggns\MidocoApi\Crmsd\StructType\SavePaxconnectQueueRespone
     */
    public function setMidocoPaxconnectQueue(?\Pggns\MidocoApi\Crmsd\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue = null): self
    {
        $this->MidocoPaxconnectQueue = $midocoPaxconnectQueue;
        
        return $this;
    }
}
