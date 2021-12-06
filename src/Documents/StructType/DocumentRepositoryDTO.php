<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentRepositoryDTO StructType
 * @subpackage Structs
 */
class DocumentRepositoryDTO extends AbstractStructBase
{
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * The documentRefId
     * @var int|null
     */
    protected ?int $documentRefId = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DocumentRepositoryDTO
     * @uses DocumentRepositoryDTO::setContentType()
     * @uses DocumentRepositoryDTO::setCreationDate()
     * @uses DocumentRepositoryDTO::setCreationUser()
     * @uses DocumentRepositoryDTO::setDocumentContent()
     * @uses DocumentRepositoryDTO::setDocumentRefId()
     * @uses DocumentRepositoryDTO::setDocumentType()
     * @uses DocumentRepositoryDTO::setRepositoryId()
     * @uses DocumentRepositoryDTO::setUnitName()
     * @param string $contentType
     * @param string $creationDate
     * @param int $creationUser
     * @param string $documentContent
     * @param int $documentRefId
     * @param string $documentType
     * @param int $repositoryId
     * @param string $unitName
     */
    public function __construct(?string $contentType = null, ?string $creationDate = null, ?int $creationUser = null, ?string $documentContent = null, ?int $documentRefId = null, ?string $documentType = null, ?int $repositoryId = null, ?string $unitName = null)
    {
        $this
            ->setContentType($contentType)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDocumentContent($documentContent)
            ->setDocumentRefId($documentRefId)
            ->setDocumentType($documentType)
            ->setRepositoryId($repositoryId)
            ->setUnitName($unitName);
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
    /**
     * Get documentRefId value
     * @return int|null
     */
    public function getDocumentRefId(): ?int
    {
        return $this->documentRefId;
    }
    /**
     * Set documentRefId value
     * @param int $documentRefId
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setDocumentRefId(?int $documentRefId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentRefId) && !(is_int($documentRefId) || ctype_digit($documentRefId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentRefId, true), gettype($documentRefId)), __LINE__);
        }
        $this->documentRefId = $documentRefId;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
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
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Api\Documents\StructType\DocumentRepositoryDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
