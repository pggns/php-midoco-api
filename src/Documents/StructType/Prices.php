<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for prices StructType
 * Meta information extracted from the WSDL
 * - documentation: The price section, giving prices for all the bookings mentioned above, referenced by the price_ref attribute
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Prices extends AbstractStructBase
{
    /**
     * The booking_price
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\Booking_price[]
     */
    protected ?array $booking_price = null;
    /**
     * The flight_price
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\Flight_price[]
     */
    protected ?array $flight_price = null;
    /**
     * The fee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\Fee[]
     */
    protected ?array $fee = null;
    /**
     * The details_price
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Documents\StructType\Details_price[]
     */
    protected ?array $details_price = null;
    /**
     * The displayed_currency
     * Meta information extracted from the WSDL
     * - documentation: A debitor currency which is used to display a foreign price in the invoice.
     * @var string|null
     */
    protected ?string $displayed_currency = null;
    /**
     * The displayed_currency_rate
     * Meta information extracted from the WSDL
     * - documentation: Conversion rate used to calculate the price of every sell item from orgunit currency to foreign currency. This information is used to calculate other information (like deposit payment amount) in foreign currency for print (not for
     * financial booking)
     * @var float|null
     */
    protected ?float $displayed_currency_rate = null;
    /**
     * The booking_currency_rate
     * Meta information extracted from the WSDL
     * - documentation: conversion rate used to calculate the price from foreign currency to orgunit currency.
     * @var float|null
     */
    protected ?float $booking_currency_rate = null;
    /**
     * Constructor method for prices
     * @uses Prices::setBooking_price()
     * @uses Prices::setFlight_price()
     * @uses Prices::setFee()
     * @uses Prices::setDetails_price()
     * @uses Prices::setDisplayed_currency()
     * @uses Prices::setDisplayed_currency_rate()
     * @uses Prices::setBooking_currency_rate()
     * @param \Pggns\MidocoApi\Documents\StructType\Booking_price[] $booking_price
     * @param \Pggns\MidocoApi\Documents\StructType\Flight_price[] $flight_price
     * @param \Pggns\MidocoApi\Documents\StructType\Fee[] $fee
     * @param \Pggns\MidocoApi\Documents\StructType\Details_price[] $details_price
     * @param string $displayed_currency
     * @param float $displayed_currency_rate
     * @param float $booking_currency_rate
     */
    public function __construct(?array $booking_price = null, ?array $flight_price = null, ?array $fee = null, ?array $details_price = null, ?string $displayed_currency = null, ?float $displayed_currency_rate = null, ?float $booking_currency_rate = null)
    {
        $this
            ->setBooking_price($booking_price)
            ->setFlight_price($flight_price)
            ->setFee($fee)
            ->setDetails_price($details_price)
            ->setDisplayed_currency($displayed_currency)
            ->setDisplayed_currency_rate($displayed_currency_rate)
            ->setBooking_currency_rate($booking_currency_rate);
    }
    /**
     * Get booking_price value
     * @return \Pggns\MidocoApi\Documents\StructType\Booking_price[]
     */
    public function getBooking_price(): ?array
    {
        return $this->{'booking-price'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBooking_price method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBooking_price method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBooking_priceForArrayConstraintFromSetBooking_price(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesBooking_priceItem) {
            // validation for constraint: itemType
            if (!$pricesBooking_priceItem instanceof \Pggns\MidocoApi\Documents\StructType\Booking_price) {
                $invalidValues[] = is_object($pricesBooking_priceItem) ? get_class($pricesBooking_priceItem) : sprintf('%s(%s)', gettype($pricesBooking_priceItem), var_export($pricesBooking_priceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The booking_price property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Booking_price, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set booking_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Booking_price[] $booking_price
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setBooking_price(?array $booking_price = null): self
    {
        // validation for constraint: array
        if ('' !== ($booking_priceArrayErrorMessage = self::validateBooking_priceForArrayConstraintFromSetBooking_price($booking_price))) {
            throw new InvalidArgumentException($booking_priceArrayErrorMessage, __LINE__);
        }
        $this->booking_price = $this->{'booking-price'} = $booking_price;
        
        return $this;
    }
    /**
     * Add item to booking_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Booking_price $item
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function addToBooking_price(\Pggns\MidocoApi\Documents\StructType\Booking_price $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\Booking_price) {
            throw new InvalidArgumentException(sprintf('The booking_price property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Booking_price, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->booking_price[] = $this->{'booking-price'}[] = $item;
        
        return $this;
    }
    /**
     * Get flight_price value
     * @return \Pggns\MidocoApi\Documents\StructType\Flight_price[]
     */
    public function getFlight_price(): ?array
    {
        return $this->{'flight-price'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFlight_price method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFlight_price method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFlight_priceForArrayConstraintFromSetFlight_price(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesFlight_priceItem) {
            // validation for constraint: itemType
            if (!$pricesFlight_priceItem instanceof \Pggns\MidocoApi\Documents\StructType\Flight_price) {
                $invalidValues[] = is_object($pricesFlight_priceItem) ? get_class($pricesFlight_priceItem) : sprintf('%s(%s)', gettype($pricesFlight_priceItem), var_export($pricesFlight_priceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The flight_price property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Flight_price, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set flight_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Flight_price[] $flight_price
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setFlight_price(?array $flight_price = null): self
    {
        // validation for constraint: array
        if ('' !== ($flight_priceArrayErrorMessage = self::validateFlight_priceForArrayConstraintFromSetFlight_price($flight_price))) {
            throw new InvalidArgumentException($flight_priceArrayErrorMessage, __LINE__);
        }
        $this->flight_price = $this->{'flight-price'} = $flight_price;
        
        return $this;
    }
    /**
     * Add item to flight_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Flight_price $item
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function addToFlight_price(\Pggns\MidocoApi\Documents\StructType\Flight_price $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\Flight_price) {
            throw new InvalidArgumentException(sprintf('The flight_price property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Flight_price, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->flight_price[] = $this->{'flight-price'}[] = $item;
        
        return $this;
    }
    /**
     * Get fee value
     * @return \Pggns\MidocoApi\Documents\StructType\Fee[]
     */
    public function getFee(): ?array
    {
        return $this->fee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeForArrayConstraintFromSetFee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesFeeItem) {
            // validation for constraint: itemType
            if (!$pricesFeeItem instanceof \Pggns\MidocoApi\Documents\StructType\Fee) {
                $invalidValues[] = is_object($pricesFeeItem) ? get_class($pricesFeeItem) : sprintf('%s(%s)', gettype($pricesFeeItem), var_export($pricesFeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fee property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Fee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set fee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Fee[] $fee
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setFee(?array $fee = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeArrayErrorMessage = self::validateFeeForArrayConstraintFromSetFee($fee))) {
            throw new InvalidArgumentException($feeArrayErrorMessage, __LINE__);
        }
        $this->fee = $fee;
        
        return $this;
    }
    /**
     * Add item to fee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Fee $item
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function addToFee(\Pggns\MidocoApi\Documents\StructType\Fee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\Fee) {
            throw new InvalidArgumentException(sprintf('The fee property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Fee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fee[] = $item;
        
        return $this;
    }
    /**
     * Get details_price value
     * @return \Pggns\MidocoApi\Documents\StructType\Details_price[]
     */
    public function getDetails_price(): ?array
    {
        return $this->{'details-price'};
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDetails_price method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetails_price method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetails_priceForArrayConstraintFromSetDetails_price(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $pricesDetails_priceItem) {
            // validation for constraint: itemType
            if (!$pricesDetails_priceItem instanceof \Pggns\MidocoApi\Documents\StructType\Details_price) {
                $invalidValues[] = is_object($pricesDetails_priceItem) ? get_class($pricesDetails_priceItem) : sprintf('%s(%s)', gettype($pricesDetails_priceItem), var_export($pricesDetails_priceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The details_price property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Details_price, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set details_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Details_price[] $details_price
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setDetails_price(?array $details_price = null): self
    {
        // validation for constraint: array
        if ('' !== ($details_priceArrayErrorMessage = self::validateDetails_priceForArrayConstraintFromSetDetails_price($details_price))) {
            throw new InvalidArgumentException($details_priceArrayErrorMessage, __LINE__);
        }
        $this->details_price = $this->{'details-price'} = $details_price;
        
        return $this;
    }
    /**
     * Add item to details_price value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\Details_price $item
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function addToDetails_price(\Pggns\MidocoApi\Documents\StructType\Details_price $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\Details_price) {
            throw new InvalidArgumentException(sprintf('The details_price property can only contain items of type \Pggns\MidocoApi\Documents\StructType\Details_price, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->details_price[] = $this->{'details-price'}[] = $item;
        
        return $this;
    }
    /**
     * Get displayed_currency value
     * @return string|null
     */
    public function getDisplayed_currency(): ?string
    {
        return $this->{'displayed-currency'};
    }
    /**
     * Set displayed_currency value
     * @param string $displayed_currency
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setDisplayed_currency(?string $displayed_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($displayed_currency) && !is_string($displayed_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayed_currency, true), gettype($displayed_currency)), __LINE__);
        }
        $this->displayed_currency = $this->{'displayed-currency'} = $displayed_currency;
        
        return $this;
    }
    /**
     * Get displayed_currency_rate value
     * @return float|null
     */
    public function getDisplayed_currency_rate(): ?float
    {
        return $this->{'displayed-currency-rate'};
    }
    /**
     * Set displayed_currency_rate value
     * @param float $displayed_currency_rate
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setDisplayed_currency_rate(?float $displayed_currency_rate = null): self
    {
        // validation for constraint: float
        if (!is_null($displayed_currency_rate) && !(is_float($displayed_currency_rate) || is_numeric($displayed_currency_rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($displayed_currency_rate, true), gettype($displayed_currency_rate)), __LINE__);
        }
        $this->displayed_currency_rate = $this->{'displayed-currency-rate'} = $displayed_currency_rate;
        
        return $this;
    }
    /**
     * Get booking_currency_rate value
     * @return float|null
     */
    public function getBooking_currency_rate(): ?float
    {
        return $this->{'booking-currency-rate'};
    }
    /**
     * Set booking_currency_rate value
     * @param float $booking_currency_rate
     * @return \Pggns\MidocoApi\Documents\StructType\Prices
     */
    public function setBooking_currency_rate(?float $booking_currency_rate = null): self
    {
        // validation for constraint: float
        if (!is_null($booking_currency_rate) && !(is_float($booking_currency_rate) || is_numeric($booking_currency_rate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($booking_currency_rate, true), gettype($booking_currency_rate)), __LINE__);
        }
        $this->booking_currency_rate = $this->{'booking-currency-rate'} = $booking_currency_rate;
        
        return $this;
    }
}
