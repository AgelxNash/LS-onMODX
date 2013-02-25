<?php
/**
 * @copyright 2013 Agel_Nash
 * @license http://opensource.org/licenses/MIT MIT License
 * @author Agel_Nash <code@agel-nash.ru>
 * @link http://agel-nash.ru author home page
 */

if (!class_exists('Plugin')) {
  die('Hack');
}

class PluginModxsite extends Plugin {
    protected $aInherits=array(
        'module'  =>array('ModuleModxsite'),
		'action' => array( 'ActionAjax' ),
	);

	public function Init() {
        //$this->Viewer_Assign("aSite",$this->getSite());
        return true;
	}

	public function Activate() {
		return true;
    }

	public function Deactivate() {
		return true;
	}
}
