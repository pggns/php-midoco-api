<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Is ServiceType
 * @subpackage Services
 */
class Is extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\System\ServiceType\Is
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\System\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named isAppModuleAllowedForOrgunit
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\System\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\System\StructType\IsAppModuleAllowedForOrgunitRequest $paramIsAppModuleAllowedForOrgunitRequest
     * @return \Pggns\MidocoApi\System\StructType\IsAppModuleAllowedForOrgunitResponse|bool
     */
    public function isAppModuleAllowedForOrgunit(\Pggns\MidocoApi\System\StructType\IsAppModuleAllowedForOrgunitRequest $paramIsAppModuleAllowedForOrgunitRequest)
    {
        try {
            $this->setResult($resultIsAppModuleAllowedForOrgunit = $this->getSoapClient()->__soapCall('isAppModuleAllowedForOrgunit', [
                $paramIsAppModuleAllowedForOrgunitRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultIsAppModuleAllowedForOrgunit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\System\StructType\IsAppModuleAllowedForOrgunitResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
