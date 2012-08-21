<?php  defined('C5_EXECUTE') or die(_("Access Denied."));

	$form = Loader::helper('form');
?>
データ値：<?php echo $form->text('data', $data) ?>
