<?php
defined('C5_EXECUTE') or die(_("Access Denied."));

class TomoacSamplePackage extends Package {

     protected $pkgHandle = 'tomoac_sample';
     protected $appVersionRequired = '5.4.0';
     protected $pkgVersion = '0.1.0';

     public function getPackageDescription() {
          return t('Sample by tomoac');
     }

     public function getPackageName() {
          return t('Tomoac sample');
     }

     public function install() {
          $pkg = parent::install();

          // install block 
          BlockType::installBlockTypeFromPackage('tomoac_sample', $pkg); 
     }
}
?>