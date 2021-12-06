<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSuppCancelCEmailResponse StructType
 * @subpackage Structs
 */
class ListSuppCancelCEmailResponse extends AbstractStructBase
{
    /**
     * The MidocoSuppCancelCEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSuppCancelCEmail
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail[]
     */
    protected ?array $MidocoSuppCancelCEmail = null;
    /**
     * Constructor method for ListSuppCancelCEmailResponse
     * @uses ListSuppCancelCEmailResponse::setMidocoSuppCancelCEmail()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail[] $midocoSuppCancelCEmail
     */
    public function __construct(?array $midocoSuppCancelCEmail = null)
    {
        $this
            ->setMidocoSuppCancelCEmail($midocoSuppCancelCEmail);
    }
    /**
     * Get MidocoSuppCancelCEmail value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail[]
     */
    public function getMidocoSuppCancelCEmail(): ?array
    {
        return $this->MidocoSuppCancelCEmail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSuppCancelCEmail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSuppCancelCEmail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSuppCancelCEmailForArrayConstraintsFromSetMidocoSuppCancelCEmail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSuppCancelCEmailResponseMidocoSuppCancelCEmailItem) {
            // validation for constraint: itemType
            if (!$listSuppCancelCEmailResponseMidocoSuppCancelCEmailItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail) {
                $invalidValues[] = is_object($listSuppCancelCEmailResponseMidocoSuppCancelCEmailItem) ? get_class($listSuppCancelCEmailResponseMidocoSuppCancelCEmailItem) : sprintf('%s(%s)', gettype($listSuppCancelCEmailResponseMidocoSuppCancelCEmailItem), var_export($listSuppCancelCEmailResponseMidocoSuppCancelCEmailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSuppCancelCEmail property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSuppCancelCEmail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail[] $midocoSuppCancelCEmail
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListSuppCancelCEmailResponse
     */
    public function setMidocoSuppCancelCEmail(?array $midocoSuppCancelCEmail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSuppCancelCEmailArrayErrorMessage = self::validateMidocoSuppCancelCEmailForArrayConstraintsFromSetMidocoSuppCancelCEmail($midocoSuppCancelCEmail))) {
            throw new InvalidArgumentException($midocoSuppCancelCEmailArrayErrorMessage, __LINE__);
        }
        $this->MidocoSuppCancelCEmail = $midocoSuppCancelCEmail;
        
        return $this;
    }
    /**
     * Add item to MidocoSuppCancelCEmail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\ListSuppCancelCEmailResponse
     */
    public function addToMidocoSuppCancelCEmail(\Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail) {
            throw new InvalidArgumentException(sprintf('The MidocoSuppCancelCEmail property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoSuppCancelCEmail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSuppCancelCEmail[] = $item;
        
        return $this;
    }
}
