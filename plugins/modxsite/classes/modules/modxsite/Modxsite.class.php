<?php

/**
 * @copyright 2013 Agel_Nash
 * @license http://opensource.org/licenses/MIT MIT License
 * @author Agel_Nash <code@agel-nash.ru>
 * @link http://agel-nash.ru author home page
 */

class PluginModxsite_ModuleModxsite extends Module{
    public function Init() {}
    public function Activate () { return true; }

    public function getSite($mode){
        $tpl=array();

        $xml=@file_get_contents("http://on-modx.ru/api?display=1&random&".$mode."&w=".Config::Get('modxsite.width')."&h=".Config::Get('modxsite.height'));
        if($xml!=''){
            $data = @simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA);
            if(isset($data->site)){
                $tpl['width']=Config::Get('modxsite.width');
                $tpl['height']=Config::Get('modxsite.height');
                $tpl['url']=$data->site->link;
                $tpl['img']=$data->site->src;
                $tpl['ver']=$data->site->ver;
                $tpl['name']=htmlspecialchars(trim($data->site->name));
            }
        }
        return $tpl;
    }
}
?>