<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrintQueueRequest StructType
 * @subpackage Structs
 */
class SavePrintQueueRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoPrintQueue
     * @var \Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO
     */
    protected \Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO $MidocoPrintQueue;
    /**
     * Constructor method for SavePrintQueueRequest
     * @uses SavePrintQueueRequest::setMidocoPrintQueue()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO $midocoPrintQueue
     */
    public function __construct(\Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO $midocoPrintQueue)
    {
        $this
            ->setMidocoPrintQueue($midocoPrintQueue);
    }
    /**
     * Get MidocoPrintQueue value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO
     */
    public function getMidocoPrintQueue(): \Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO
    {
        return $this->MidocoPrintQueue;
    }
    /**
     * Set MidocoPrintQueue value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO $midocoPrintQueue
     * @return \Pggns\MidocoApi\Api\Documents\StructType\SavePrintQueueRequest
     */
    public function setMidocoPrintQueue(\Pggns\MidocoApi\Api\Documents\StructType\PrintQueueDTO $midocoPrintQueue): self
    {
        $this->MidocoPrintQueue = $midocoPrintQueue;
        
        return $this;
    }
}