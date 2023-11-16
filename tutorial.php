<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/DocumentsService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/DocumentsService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\Documents\ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\Documents\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getDocumentRepositoryById operation/method
 */
if ($get->getDocumentRepositoryById(new \Pggns\MidocoApi\Documents\StructType\GetDocumentRepositoryByIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDocumentRefId operation/method
 */
if ($get->getDocumentRefId(new \Pggns\MidocoApi\Documents\StructType\GetDocumentRefIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getHistoryDocument operation/method
 */
if ($get->getHistoryDocument(new \Pggns\MidocoApi\Documents\StructType\GetHistoryDocumentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternDocumentById operation/method
 */
if ($get->getExternDocumentById(new \Pggns\MidocoApi\Documents\StructType\GetExternDocumentByIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getExternDocumentDesc operation/method
 */
if ($get->getExternDocumentDesc(new \Pggns\MidocoApi\Documents\StructType\GetExternDocumentDescRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getAvailableOrgunitDocuments operation/method
 */
if ($get->getAvailableOrgunitDocuments(new \Pggns\MidocoApi\Documents\StructType\GetAvailableOrgunitDocumentsRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getOrgunitDocument operation/method
 */
if ($get->getOrgunitDocument(new \Pggns\MidocoApi\Documents\StructType\GetOrgunitDocumentRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTempDocumentRepositoryById operation/method
 */
if ($get->getTempDocumentRepositoryById(new \Pggns\MidocoApi\Documents\StructType\GetTempDocumentRepositoryByIdRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getUsedVolume operation/method
 */
if ($get->getUsedVolume(new \Pggns\MidocoApi\Documents\StructType\GetUsedVolumeRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getDocumentConsistency operation/method
 */
if ($get->getDocumentConsistency(new \Pggns\MidocoApi\Documents\StructType\GetDocumentConsistencyRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\Documents\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveDocumentRepository operation/method
 */
if ($save->saveDocumentRepository(new \Pggns\MidocoApi\Documents\StructType\SaveDocumentRepositoryRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveExternDocument operation/method
 */
if ($save->saveExternDocument(new \Pggns\MidocoApi\Documents\StructType\SaveExternDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveOrgunitDocument operation/method
 */
if ($save->saveOrgunitDocument(new \Pggns\MidocoApi\Documents\StructType\SaveOrgunitDocumentRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\Documents\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteDocumentRepository operation/method
 */
if ($delete->deleteDocumentRepository(new \Pggns\MidocoApi\Documents\StructType\DeleteDocumentRepositoryRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteExternDocument operation/method
 */
if ($delete->deleteExternDocument(new \Pggns\MidocoApi\Documents\StructType\DeleteExternDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteOrgunitDocument operation/method
 */
if ($delete->deleteOrgunitDocument(new \Pggns\MidocoApi\Documents\StructType\DeleteOrgunitDocumentRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Update ServiceType
 */
$update = new \Pggns\MidocoApi\Documents\ServiceType\Update($options);
$update->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for updateExternDocumentDesc operation/method
 */
if ($update->updateExternDocumentDesc(new \Pggns\MidocoApi\Documents\StructType\UpdateExternDocumentDescRequest()) !== false) {
    print_r($update->getResult());
} else {
    print_r($update->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \Pggns\MidocoApi\Documents\ServiceType\Search($options);
$search->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for searchExternDocument operation/method
 */
if ($search->searchExternDocument(new \Pggns\MidocoApi\Documents\StructType\SearchExternDocumentRequest()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Samples for List ServiceType
 */
$list = new \Pggns\MidocoApi\Documents\ServiceType\_List($options);
$list->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for listUsedVolume operation/method
 */
if ($list->listUsedVolume(new \Pggns\MidocoApi\Documents\StructType\ListUsedVolumeRequest()) !== false) {
    print_r($list->getResult());
} else {
    print_r($list->getLastError());
}
