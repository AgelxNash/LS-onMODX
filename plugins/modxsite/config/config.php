<?php
/**
 * @copyright 2013 Agel_Nash
 * @license http://opensource.org/licenses/MIT MIT License
 * @author Agel_Nash <code@agel-nash.ru>
 * @link http://agel-nash.ru author home page
 */


$config = array();
Config::Set(
    'block.rule_modxsite',  array(
        'action'  => array(
            'index',
            'new',
            'link',
            'question',
            'topic',
            'photoset',
            'people',
            'personal_blog',
            'profile',
            'tag',
            'talk',
            'blogs',
			'blog',
            'stream',
        ),
        'blocks'  => array(
            'right'=>array(
                'block.Modxsite.tpl' => array(
                    'params'=>array('plugin'=>'Modxsite'),
                    'priority'=>999,
                ),
            ),
        ),
        'row'=>'10',
        'clear' => false,
    )
);

Config::Set('modxsite',array(
    'height'=>'300',
    'width'=>'200',
    )
);

return $config;

?>