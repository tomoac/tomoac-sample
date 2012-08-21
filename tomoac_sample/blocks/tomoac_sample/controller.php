<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));

class TomoacSampleBlockController extends BlockController {

	protected $btTable = 'btTomoacSample';
	protected $btInterfaceWidth = "300";
	protected $btInterfaceHeight = "100";
	
	public function getBlockTypeDescription() {
		return t('Sample by tomoac');
	}
	
	public function getBlockTypeName() {
		return t('Tomoac Sample');
	}
/*
	function view() {
	}
	function save( $data ) {
		parent::save($data);
	}
*/
}
