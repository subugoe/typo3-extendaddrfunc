<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

//$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_address']['extraItemMarkerHook'][] = 'EXT:tx_extendaddrfunc/pi1/class.tx_extendaddrfunc_pi1';

t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_extendaddrfunc_pi1.php', '_pi1', '', 1);
?>