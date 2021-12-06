<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\Api\Mis\ServiceType\Add
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named addCustomerToCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\AddCustomerToCampaignRequest $paramAddCustomerToCampaignRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\AddCustomerToCampaignResponse|bool
     */
    public function addCustomerToCampaign(\Pggns\MidocoApi\Api\Mis\StructType\AddCustomerToCampaignRequest $paramAddCustomerToCampaignRequest)
    {
        try {
            $this->setResult($resultAddCustomerToCampaign = $this->getSoapClient()->__soapCall('addCustomerToCampaign', [
                $paramAddCustomerToCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddCustomerToCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named addCampaignToCampaign
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\Api\Mis\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\AddCampaignToCampaignRequest $paramAddCampaignToCampaignRequest
     * @return \Pggns\MidocoApi\Api\Mis\StructType\AddCampaignToCampaignResponse|bool
     */
    public function addCampaignToCampaign(\Pggns\MidocoApi\Api\Mis\StructType\AddCampaignToCampaignRequest $paramAddCampaignToCampaignRequest)
    {
        try {
            $this->setResult($resultAddCampaignToCampaign = $this->getSoapClient()->__soapCall('addCampaignToCampaign', [
                $paramAddCampaignToCampaignRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultAddCampaignToCampaign;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\Api\Mis\StructType\AddCampaignToCampaignResponse|\Pggns\MidocoApi\Api\Mis\StructType\AddCustomerToCampaignResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
