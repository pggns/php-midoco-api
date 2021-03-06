<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the MidocoCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType $midocoCredentials
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Pggns\MidocoApi\CrmSD\ServiceType\Get
     */
    public function setSoapHeaderMidocoCredentials(\Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType $midocoCredentials, string $namespace = 'http://www.midoco.de/system', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'MidocoCredentials', $midocoCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getExternalSystemTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemTypesRequest $paramGetExternalSystemTypesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemTypesResponse|bool
     */
    public function getExternalSystemTypes(\Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemTypesRequest $paramGetExternalSystemTypesRequest)
    {
        try {
            $this->setResult($resultGetExternalSystemTypes = $this->getSoapClient()->__soapCall('getExternalSystemTypes', [
                $paramGetExternalSystemTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalSystemTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternalSystemAttributes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemAttributesRequest $paramGetExternalSystemAttributesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemAttributesResponse|bool
     */
    public function getExternalSystemAttributes(\Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemAttributesRequest $paramGetExternalSystemAttributesRequest)
    {
        try {
            $this->setResult($resultGetExternalSystemAttributes = $this->getSoapClient()->__soapCall('getExternalSystemAttributes', [
                $paramGetExternalSystemAttributesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalSystemAttributes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getExternalSystems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemsRequest $paramGetExternalSystemsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemsResponse|bool
     */
    public function getExternalSystems(\Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemsRequest $paramGetExternalSystemsRequest)
    {
        try {
            $this->setResult($resultGetExternalSystems = $this->getSoapClient()->__soapCall('getExternalSystems', [
                $paramGetExternalSystemsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetExternalSystems;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllCrmCriteriaDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetAllCrmCriteriaDescriptionsRequest $paramGetAllCrmCriteriaDescriptionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAllCrmCriteriaDescriptionsResponse|bool
     */
    public function getAllCrmCriteriaDescriptions(\Pggns\MidocoApi\CrmSD\StructType\GetAllCrmCriteriaDescriptionsRequest $paramGetAllCrmCriteriaDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetAllCrmCriteriaDescriptions = $this->getSoapClient()->__soapCall('getAllCrmCriteriaDescriptions', [
                $paramGetAllCrmCriteriaDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllCrmCriteriaDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getInvoiceFileFormat
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetInvoiceFileFormatRequest $paramGetInvoiceFileFormatRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetInvoiceFileFormatResponse|bool
     */
    public function getInvoiceFileFormat(\Pggns\MidocoApi\CrmSD\StructType\GetInvoiceFileFormatRequest $paramGetInvoiceFileFormatRequest)
    {
        try {
            $this->setResult($resultGetInvoiceFileFormat = $this->getSoapClient()->__soapCall('getInvoiceFileFormat', [
                $paramGetInvoiceFileFormatRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetInvoiceFileFormat;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDebitCardTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetDebitCardTypesRequest $paramGetDebitCardTypesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDebitCardTypesResponse|bool
     */
    public function getDebitCardTypes(\Pggns\MidocoApi\CrmSD\StructType\GetDebitCardTypesRequest $paramGetDebitCardTypesRequest)
    {
        try {
            $this->setResult($resultGetDebitCardTypes = $this->getSoapClient()->__soapCall('getDebitCardTypes', [
                $paramGetDebitCardTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDebitCardTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getJobFunction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetJobFunctionRequest $paramGetJobFunctionRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetJobFunctionResponse|bool
     */
    public function getJobFunction(\Pggns\MidocoApi\CrmSD\StructType\GetJobFunctionRequest $paramGetJobFunctionRequest)
    {
        try {
            $this->setResult($resultGetJobFunction = $this->getSoapClient()->__soapCall('getJobFunction', [
                $paramGetJobFunctionRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetJobFunction;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCommissionDefinitions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionsRequest $paramGetCommissionDefinitionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionsResponse|bool
     */
    public function getCommissionDefinitions(\Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionsRequest $paramGetCommissionDefinitionsRequest)
    {
        try {
            $this->setResult($resultGetCommissionDefinitions = $this->getSoapClient()->__soapCall('getCommissionDefinitions', [
                $paramGetCommissionDefinitionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCommissionDefinitions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCommissionDefinitionLevel
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionLevelsRequest $paramGetCommissionDefinitionLevelsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionLevelsResponse|bool
     */
    public function getCommissionDefinitionLevel(\Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionLevelsRequest $paramGetCommissionDefinitionLevelsRequest)
    {
        try {
            $this->setResult($resultGetCommissionDefinitionLevel = $this->getSoapClient()->__soapCall('getCommissionDefinitionLevel', [
                $paramGetCommissionDefinitionLevelsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCommissionDefinitionLevel;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getCrmPersonTravellerTypeDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerTypeDescriptionsRequest $paramGetCrmPersonTravellerTypeDescriptionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerTypeDescriptionsResponse|bool
     */
    public function getCrmPersonTravellerTypeDescriptions(\Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerTypeDescriptionsRequest $paramGetCrmPersonTravellerTypeDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetCrmPersonTravellerTypeDescriptions = $this->getSoapClient()->__soapCall('getCrmPersonTravellerTypeDescriptions', [
                $paramGetCrmPersonTravellerTypeDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPersonTravellerTypeDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getCriteriaTypeCategoryDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypeCategoryDescriptionsRequest $paramGetCriteriaTypeCategoryDescriptionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypeCategoryDescriptionsResponse|bool
     */
    public function getCriteriaTypeCategoryDescriptions(\Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypeCategoryDescriptionsRequest $paramGetCriteriaTypeCategoryDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetCriteriaTypeCategoryDescriptions = $this->getSoapClient()->__soapCall('getCriteriaTypeCategoryDescriptions', [
                $paramGetCriteriaTypeCategoryDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCriteriaTypeCategoryDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getCriteriaTypesForCategory
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypesForCategoryRequest $paramGetCriteriaTypesForCategoryRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypesForCategoryResponse|bool
     */
    public function getCriteriaTypesForCategory(\Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypesForCategoryRequest $paramGetCriteriaTypesForCategoryRequest)
    {
        try {
            $this->setResult($resultGetCriteriaTypesForCategory = $this->getSoapClient()->__soapCall('getCriteriaTypesForCategory', [
                $paramGetCriteriaTypesForCategoryRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCriteriaTypesForCategory;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getPaymentConditions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetPaymentConditionsRequest $paramGetPaymentConditionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetPaymentConditionsResponse|bool
     */
    public function getPaymentConditions(\Pggns\MidocoApi\CrmSD\StructType\GetPaymentConditionsRequest $paramGetPaymentConditionsRequest)
    {
        try {
            $this->setResult($resultGetPaymentConditions = $this->getSoapClient()->__soapCall('getPaymentConditions', [
                $paramGetPaymentConditionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetPaymentConditions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * getCrmPersonTravellerMaritalStatusDescriptions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsRequest $paramGetCrmPersonTravellerMaritalStatusDescriptionsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsResponse|bool
     */
    public function getCrmPersonTravellerMaritalStatusDescriptions(\Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsRequest $paramGetCrmPersonTravellerMaritalStatusDescriptionsRequest)
    {
        try {
            $this->setResult($resultGetCrmPersonTravellerMaritalStatusDescriptions = $this->getSoapClient()->__soapCall('getCrmPersonTravellerMaritalStatusDescriptions', [
                $paramGetCrmPersonTravellerMaritalStatusDescriptionsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetCrmPersonTravellerMaritalStatusDescriptions;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDictionaryName
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetDictionaryNameRequest $paramGetDictionaryNameRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDictionaryNameResponse|bool
     */
    public function getDictionaryName(\Pggns\MidocoApi\CrmSD\StructType\GetDictionaryNameRequest $paramGetDictionaryNameRequest)
    {
        try {
            $this->setResult($resultGetDictionaryName = $this->getSoapClient()->__soapCall('getDictionaryName', [
                $paramGetDictionaryNameRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDictionaryName;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getLetterTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetLetterTemplatesRequest $paramGetLetterTemplatesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetLetterTemplatesResponse|bool
     */
    public function getLetterTemplates(\Pggns\MidocoApi\CrmSD\StructType\GetLetterTemplatesRequest $paramGetLetterTemplatesRequest)
    {
        try {
            $this->setResult($resultGetLetterTemplates = $this->getSoapClient()->__soapCall('getLetterTemplates', [
                $paramGetLetterTemplatesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetLetterTemplates;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getBookingSources
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetBookingSourcesRequest $paramGetBookingSourcesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetBookingSourcesResponse|bool
     */
    public function getBookingSources(\Pggns\MidocoApi\CrmSD\StructType\GetBookingSourcesRequest $paramGetBookingSourcesRequest)
    {
        try {
            $this->setResult($resultGetBookingSources = $this->getSoapClient()->__soapCall('getBookingSources', [
                $paramGetBookingSourcesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetBookingSources;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getTextTemplateType
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetTextTemplateTypeRequest $paramGetTextTemplateTypeRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTextTemplateTypeResponse|bool
     */
    public function getTextTemplateType(\Pggns\MidocoApi\CrmSD\StructType\GetTextTemplateTypeRequest $paramGetTextTemplateTypeRequest)
    {
        try {
            $this->setResult($resultGetTextTemplateType = $this->getSoapClient()->__soapCall('getTextTemplateType', [
                $paramGetTextTemplateTypeRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetTextTemplateType;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllTextTemplateTypes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetAllTextTemplateTypesRequest $paramGetAllTextTemplateTypesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetAllTextTemplateTypesResponse|bool
     */
    public function getAllTextTemplateTypes(\Pggns\MidocoApi\CrmSD\StructType\GetAllTextTemplateTypesRequest $paramGetAllTextTemplateTypesRequest)
    {
        try {
            $this->setResult($resultGetAllTextTemplateTypes = $this->getSoapClient()->__soapCall('getAllTextTemplateTypes', [
                $paramGetAllTextTemplateTypesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllTextTemplateTypes;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getAllPersonTitles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetTitlesRequest $paramGetTitlesRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetTitlesResponse|bool
     */
    public function getAllPersonTitles(\Pggns\MidocoApi\CrmSD\StructType\GetTitlesRequest $paramGetTitlesRequest)
    {
        try {
            $this->setResult($resultGetAllPersonTitles = $this->getSoapClient()->__soapCall('getAllPersonTitles', [
                $paramGetTitlesRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAllPersonTitles;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getDeleteReasons4Customer
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetDeleteReasons4CustomerRequest $paramGetDeleteReasons4CustomerRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetDeleteReasons4CustomerResponse|bool
     */
    public function getDeleteReasons4Customer(\Pggns\MidocoApi\CrmSD\StructType\GetDeleteReasons4CustomerRequest $paramGetDeleteReasons4CustomerRequest)
    {
        try {
            $this->setResult($resultGetDeleteReasons4Customer = $this->getSoapClient()->__soapCall('getDeleteReasons4Customer', [
                $paramGetDeleteReasons4CustomerRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetDeleteReasons4Customer;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetConsentRequest $paramGetConsentRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetConsentResponse|bool
     */
    public function getConsent(\Pggns\MidocoApi\CrmSD\StructType\GetConsentRequest $paramGetConsentRequest)
    {
        try {
            $this->setResult($resultGetConsent = $this->getSoapClient()->__soapCall('getConsent', [
                $paramGetConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getActualConsent
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetActualConsentRequest $paramGetActualConsentRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetActualConsentResponse|bool
     */
    public function getActualConsent(\Pggns\MidocoApi\CrmSD\StructType\GetActualConsentRequest $paramGetActualConsentRequest)
    {
        try {
            $this->setResult($resultGetActualConsent = $this->getSoapClient()->__soapCall('getActualConsent', [
                $paramGetActualConsentRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetActualConsent;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getConsentUnits
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetConsentUnitsRequest $paramGetConsentUnitsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetConsentUnitsResponse|bool
     */
    public function getConsentUnits(\Pggns\MidocoApi\CrmSD\StructType\GetConsentUnitsRequest $paramGetConsentUnitsRequest)
    {
        try {
            $this->setResult($resultGetConsentUnits = $this->getSoapClient()->__soapCall('getConsentUnits', [
                $paramGetConsentUnitsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetConsentUnits;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named getSubjectElements
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: MidocoCredentials
     * - SOAPHeaderNamespaces: http://www.midoco.de/system
     * - SOAPHeaderTypes: \Pggns\MidocoApi\CrmSD\StructType\MidocoCredentialsType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\GetSubjectElementsRequest $paramGetSubjectElementsRequest
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetSubjectElementsResponse|bool
     */
    public function getSubjectElements(\Pggns\MidocoApi\CrmSD\StructType\GetSubjectElementsRequest $paramGetSubjectElementsRequest)
    {
        try {
            $this->setResult($resultGetSubjectElements = $this->getSoapClient()->__soapCall('getSubjectElements', [
                $paramGetSubjectElementsRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultGetSubjectElements;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetActualConsentResponse|\Pggns\MidocoApi\CrmSD\StructType\GetAllCrmCriteriaDescriptionsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetAllTextTemplateTypesResponse|\Pggns\MidocoApi\CrmSD\StructType\GetBookingSourcesResponse|\Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionLevelsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetCommissionDefinitionsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetConsentResponse|\Pggns\MidocoApi\CrmSD\StructType\GetConsentUnitsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypeCategoryDescriptionsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetCriteriaTypesForCategoryResponse|\Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerMaritalStatusDescriptionsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetCrmPersonTravellerTypeDescriptionsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetDebitCardTypesResponse|\Pggns\MidocoApi\CrmSD\StructType\GetDeleteReasons4CustomerResponse|\Pggns\MidocoApi\CrmSD\StructType\GetDictionaryNameResponse|\Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemAttributesResponse|\Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetExternalSystemTypesResponse|\Pggns\MidocoApi\CrmSD\StructType\GetInvoiceFileFormatResponse|\Pggns\MidocoApi\CrmSD\StructType\GetJobFunctionResponse|\Pggns\MidocoApi\CrmSD\StructType\GetLetterTemplatesResponse|\Pggns\MidocoApi\CrmSD\StructType\GetPaymentConditionsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetSubjectElementsResponse|\Pggns\MidocoApi\CrmSD\StructType\GetTextTemplateTypeResponse|\Pggns\MidocoApi\CrmSD\StructType\GetTitlesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
