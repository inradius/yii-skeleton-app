<?php

class bootstrap extends CWidget {

    public function init() {
        $baseUrl = app()->getAssetManager()->publish(Yii::getPathOfAlias('app.widgets.bootstrap.assets'), false, 1);
        if(!cs()->isCssFileRegistered($baseUrl . '/css/bootstrap.min.css') && !cs()->isScriptFileRegistered($baseUrl . '/js/bootstrap.min.js')) {
            cs()->registerCssFile($baseUrl . '/css/bootstrap.min.css');
            cs()->registerScriptFile($baseUrl . '/js/bootstrap.min.js', CClientScript::POS_END);
        }
    }

}