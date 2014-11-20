<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_ttnewsextra_lthextra' => array(		
		'exclude' => 0,		
		'label' => 'LLL:EXT:tt_news_extra/locallang_db.xml:tt_news.tx_ttnewsextra_lthextra',		
		'config' => array(
			'type' => 'input',	
			'size' => '30',	
			'eval' => 'trim',
		)
	),
);


t3lib_div::loadTCA('tt_news');
t3lib_extMgm::addTCAcolumns('tt_news',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_news','tx_ttnewsextra_lthextra;;;;1-1-1');
?>