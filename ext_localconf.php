<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['commerce']['SYSPRODUCTS']['PAYMENT']['types']['paypal'] = array (
	'path' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('paypal2commerce') .'class.tx_paypal2commerce.php',
	'class' => 'tx_paypal2commerce',
	'type'=>2,
);

?>