<?php

if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'C1 Accordion');
FluidTYPO3\Flux\Core::registerProviderExtensionKey('C1.C1FceAccordion', 'Content');

?>
