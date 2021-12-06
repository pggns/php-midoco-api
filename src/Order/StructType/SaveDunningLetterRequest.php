<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDunningLetterRequest StructType
 * @subpackage Structs
 */
class SaveDunningLetterRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO $MidocoDunningLetter = null;
    /**
     * Constructor method for SaveDunningLetterRequest
     * @uses SaveDunningLetterRequest::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO $midocoDunningLetter
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO|null
     */
    public function getMidocoDunningLetter(): ?\Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * Set MidocoDunningLetter value
     * @param \Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO $midocoDunningLetter
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveDunningLetterRequest
     */
    public function setMidocoDunningLetter(?\Pggns\MidocoApi\Api\Order\StructType\DunningLetterDTO $midocoDunningLetter = null): self
    {
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
}