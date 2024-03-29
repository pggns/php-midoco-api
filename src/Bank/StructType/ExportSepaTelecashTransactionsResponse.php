<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportSepaTelecashTransactionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExportSepaTelecashTransactionsResponse extends AbstractStructBase
{
    /**
     * The exportData
     * @var string|null
     */
    protected ?string $exportData = null;
    /**
     * Constructor method for ExportSepaTelecashTransactionsResponse
     * @uses ExportSepaTelecashTransactionsResponse::setExportData()
     * @param string $exportData
     */
    public function __construct(?string $exportData = null)
    {
        $this
            ->setExportData($exportData);
    }
    /**
     * Get exportData value
     * @return string|null
     */
    public function getExportData(): ?string
    {
        return $this->exportData;
    }
    /**
     * Set exportData value
     * @param string $exportData
     * @return \Pggns\MidocoApi\Bank\StructType\ExportSepaTelecashTransactionsResponse
     */
    public function setExportData(?string $exportData = null): self
    {
        // validation for constraint: string
        if (!is_null($exportData) && !is_string($exportData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportData, true), gettype($exportData)), __LINE__);
        }
        $this->exportData = $exportData;
        
        return $this;
    }
}
