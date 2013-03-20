<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_extendaddrfunc_function' => array(		
		'exclude' => 1,		
		'label' => 'LLL:EXT:extendaddrfunc/locallang_db.xml:tt_address.tx_extendaddrfunc_function',		
		'config' => array(
			'type' => 'input',	
			'size' => '30',
		)
	),
);


t3lib_div::loadTCA('tt_address');
t3lib_extMgm::addTCAcolumns('tt_address',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_address','tx_extendaddrfunc_function;;;;1-1-1');
?>