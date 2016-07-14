<?php
/*
 * Register necessary class names with autoloader
 */
$extensionPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('paypal2commerce');
return array(
	'tx_paypal2commerce' => $extensionPath . '/class.tx_paypal2commerce.php',
);