<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class TomoacButtonPackage extends Package {

     protected $pkgHandle = 'tomoac_button';
     protected $appVersionRequired = '5.4.0';
     protected $pkgVersion = '0.1.0';

     public function getPackageDescription() {
          return t('Tomoac Sample');
     }

     public function getPackageName() {
          return t('Sample by tomoac');
     }

     public function install() {
          $pkg = parent::install();

          // install block 
          BlockType::installBlockTypeFromPackage('tomoac_button', $pkg); 
     }
}
?>