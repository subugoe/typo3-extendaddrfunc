<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Nils Windisch <windisch@sub.uni-goettingen.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

// require_once(PATH_tslib . 'class.tslib_pibase.php');

/**
 * Plugin '' for the 'extendaddrfunc' extension.
 *
 * @author	Nils Windisch <windisch@sub.uni-goettingen.de>
 * @package	TYPO3
 * @subpackage	tx_extendaddrfunc
 */
//class tx_extendaddrfunc_pi1 extends tslib_pibase {

class tx_extendaddrfunc_pi1 extends tx_ttaddress_pi1 {
	public $prefixId      = 'tx_extendaddrfunc_pi1';		// Same as class name
	public $scriptRelPath = 'pi1/class.tx_extendaddrfunc_pi1.php';	// Path to this script relative to the extension dir.
	public $extKey        = 'extendaddrfunc';	// The extension key.
	public $pi_checkCHash = TRUE;

/*
	public function extraItemMarkerProcessor(&$markerArray, &$address, &$lcObj) {
		$lcObj = t3lib_div::makeInstance('tslib_cObj');
		$lcObj->data = $address; 
		$markerArray['###FUNCTION###'] = $lcObj->stdWrap($address['tx_extendaddrfunc_function']); 
	}
*/



	/**
	 * The main method of the Plugin.
	 *
	 * @param string $content The Plugin content
	 * @param array $conf The Plugin configuration
	 * @return string The content that is displayed on the website
	 */
/*
	public function main($content, array $conf) {
		return 'Hello World!<hr />
			Here is the TypoScript passed to the method:' .
					t3lib_div::view_array($conf);
	}
*/
}



if (defined('TYPO3_MODE') && isset($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/extendaddrfunc/pi1/class.tx_extendaddrfunc_pi1.php'])) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/extendaddrfunc/pi1/class.tx_extendaddrfunc_pi1.php']);
}

?>