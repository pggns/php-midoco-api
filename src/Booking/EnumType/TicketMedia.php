<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ticketMedia EnumType
 * Meta information extracted from the WSDL
 * - documentation: Paper or E-Ticket
 * @subpackage Enumerations
 */
class TicketMedia extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PAPER'
     * @return string 'PAPER'
     */
    const VALUE_PAPER = 'PAPER';
    /**
     * Constant for value 'ELECTRONIC'
     * @return string 'ELECTRONIC'
     */
    const VALUE_ELECTRONIC = 'ELECTRONIC';
    /**
     * Return allowed values
     * @uses self::VALUE_PAPER
     * @uses self::VALUE_ELECTRONIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PAPER,
            self::VALUE_ELECTRONIC,
        ];
    }
}
