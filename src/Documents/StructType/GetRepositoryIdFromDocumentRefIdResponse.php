<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRepositoryIdFromDocumentRefIdResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRepositoryIdFromDocumentRefIdResponse extends AbstractStructBase
{
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for GetRepositoryIdFromDocumentRefIdResponse
     * @uses GetRepositoryIdFromDocumentRefIdResponse::setRepositoryId()
     * @param int $repositoryId
     */
    public function __construct(?int $repositoryId = null)
    {
        $this
            ->setRepositoryId($repositoryId);
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Documents\StructType\GetRepositoryIdFromDocumentRefIdResponse
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
