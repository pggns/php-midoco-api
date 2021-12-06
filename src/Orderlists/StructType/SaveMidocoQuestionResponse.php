<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoQuestionResponse StructType
 * @subpackage Structs
 */
class SaveMidocoQuestionResponse extends AbstractStructBase
{
    /**
     * The MidocoQuestion
     * Meta information extracted from the WSDL
     * - ref: MidocoQuestion
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion|null
     */
    protected ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion $MidocoQuestion = null;
    /**
     * Constructor method for SaveMidocoQuestionResponse
     * @uses SaveMidocoQuestionResponse::setMidocoQuestion()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion $midocoQuestion
     */
    public function __construct(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion $midocoQuestion = null)
    {
        $this
            ->setMidocoQuestion($midocoQuestion);
    }
    /**
     * Get MidocoQuestion value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion|null
     */
    public function getMidocoQuestion(): ?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion
    {
        return $this->MidocoQuestion;
    }
    /**
     * Set MidocoQuestion value
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion $midocoQuestion
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SaveMidocoQuestionResponse
     */
    public function setMidocoQuestion(?\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoQuestion $midocoQuestion = null): self
    {
        $this->MidocoQuestion = $midocoQuestion;
        
        return $this;
    }
}