<?php

/**
 * @copyright 2013 Agel_Nash
 * @license http://opensource.org/licenses/MIT MIT License
 * @author Agel_Nash <code@agel-nash.ru>
 * @link http://agel-nash.ru author home page
 */

class PluginModxsite_ActionAjax extends PluginModxsite_Inherit_ActionAjax {
    
    protected function RegisterEvent() {
		parent::RegisterEvent();
        $this->AddEventPreg('/^modxsite$/i','/^revo$/','ReloadRevoBlock');
        $this->AddEventPreg('/^modxsite$/i','/^evo$/','ReloadEvoBlock');
	}
		
    protected  function reloadBlock($data){
        $this->Viewer_SetResponseAjax('json');
        $oViewer=$this->Viewer_GetLocalViewer();
        $oViewer->Assign('aSite',$data);
        $sTextResult=$oViewer->Fetch(Plugin::GetTemplatePath (__CLASS__)."block.modxsite_item.tpl");
        $this->Viewer_AssignAjax('sText',$sTextResult);
    }
	protected function ReloadEvoBlock() {
        $this->reloadBlock($this->oEngine->PluginModxsite_Modxsite_getSite('evo'));
    }
    protected function ReloadRevoBlock() {
        $this->reloadBlock($this->oEngine->PluginModxsite_Modxsite_getSite('revo'));
    }
        
}
?>