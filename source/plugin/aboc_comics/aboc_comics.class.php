<?php
/**
 *	[Âþ»­ÈËÎï(aboc_comics.{modulename})] (C)2020-2099 Powered by aboc.
 *	Version: 1.0.0
 *	Date: 2020-8-8 09:36
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
class plugin_aboc_comics {
	//TODO - Insert your code here


    private $models = array(
        'chitose'=>'https://unpkg.com/live2d-widget-model-chitose@latest/assets/chitose.model.json',
        'haruto'=>'https://unpkg.com/live2d-widget-model-haruto@latest/assets/haruto.model.json',
        'hibiki'=>'https://unpkg.com/live2d-widget-model-hibiki@latest/assets/hibiki.model.json',
        'hijiki'=>'https://unpkg.com/live2d-widget-model-hijiki@latest/assets/hijiki.model.json',
        'koharu'=>'https://unpkg.com/live2d-widget-model-koharu@latest/assets/koharu.model.json',
        'miku'=>'https://unpkg.com/live2d-widget-model-miku@latest/assets/miku.model.json',
        'ni-j'=>'https://unpkg.com/live2d-widget-model-ni-j@latest/assets/ni-j.model.json',
        'nico'=>'https://unpkg.com/live2d-widget-model-nico@latest/assets/nico.model.json',
//        'nipsilon'=>'https://unpkg.com/live2d-widget-model-nipsilon@latest/assets/nipsilon.model.json',
        'shizuku'=>'https://unpkg.com/live2d-widget-model-shizuku@latest/assets/shizuku.model.json',
        'tororo'=>'https://unpkg.com/live2d-widget-model-tororo@latest/assets/tororo.model.json',
//        'tsumiki'=>'https://unpkg.com/live2d-widget-model-tsumiki@latest/assets/tsumiki.model.json',
        'unitychan'=>'https://unpkg.com/live2d-widget-model-unitychan@latest/assets/unitychan.model.json',
        'wanko'=>'https://unpkg.com/live2d-widget-model-wanko@latest/assets/wanko.model.json',
        'z16'=>'https://unpkg.com/live2d-widget-model-z16@latest/assets/z16.model.json',
    );

    private $set;

    function __construct()
    {
        global $_G;
        $this->set = $_G['cache']['plugin']['aboc_comics'];
    }


    function global_footer(){
        

        $jsonPath = isset($this->models[$this->set['character_id']])
            ? $this->models[$this->set['character_id']]
            :$this->models['shizuku'];

        $tap_body = lang("plugin/aboc_comics","tap_body");
        $tap_face = lang("plugin/aboc_comics","tap_face");

        $actionFeedback = $this->set['action_feedback']==1 ?'true':'false';
        include template('aboc_comics:comics');
        return $return;

    }
}

?>