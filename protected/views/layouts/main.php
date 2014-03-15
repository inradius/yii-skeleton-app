<?php
/* @var $this Controller */

if(app()->user->hasFlash('success')) {
    cs()->registerScript('alert','showSuccess(\''.app()->user->getFlash('success').'\');');
} elseif(app()->user->hasFlash('error')) {
    cs()->registerScript('alert','showError(\''.app()->user->getFlash('error').'\');');
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo h($this->pageTitle); ?></title>

        <?php cs()->registerCoreScript('jquery', CClientScript::POS_END); ?>
        <?php $this->widget('app.widgets.Bootstrap.Bootstrap'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo app()->request->baseUrl; ?>/css/system.css" media="screen, projection" />
    </head>

    <body>
        
        <div id="fb-root"></div>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo CHtml::link(app()->name, array('site/index'), array('class' => 'navbar-brand')); ?>
                </div>
                <div class="collapse navbar-collapse">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'htmlOptions' => array('class' => 'nav navbar-nav'),
                        'items' => array(
                            array('label' => 'Home', 'url' => array('site/index')),
                            array('label' => 'Profile', 'url' => array('user/update', 'id' => app()->user->id), 'visible' => !app()->user->isGuest()),
                            array('label' => 'Users', 'url' => array('user/index'), 'visible' => app()->user->isAdmin()),
                        ),
                    ));

                    if(app()->user->isGuest()) {
                        echo CHtml::link('Login', array('site/login'), array('class' => 'btn btn-success navbar-btn navbar-right'));
                        echo CHtml::link('Register', array('user/create'), array('class' => 'btn btn-info navbar-btn navbar-right', 'style' => 'margin-right: 5px'));
                    } else {
                        echo CHtml::link('Logout', array('site/logout'), array('class' => 'btn btn-warning navbar-btn navbar-right'));
                    }
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div id="page">

            <div class="container main-holder">

                <?php
                if(isset($this->breadcrumbs)){
                    $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'                 => $this->breadcrumbs,
                        'tagName'               => 'ol',
                        'separator'             => '',
                        'htmlOptions'           => array('class' => 'breadcrumb'),
                        'inactiveLinkTemplate'  => CHtml::tag('li', array('class' => 'active'), '{label}'),
                        'activeLinkTemplate'    => CHtml::tag('li', array(), CHtml::link('{label}', '{url}')),
                        'homeLink'              => CHtml::tag('li', array(), CHtml::link('Home', app()->homeUrl)),
                    ));
                }
                ?>

                <?php if(app()->user->hasFlash('info')) {
                    /*$this->widget('bootstrap.widgets.TbAlert', array(
                        'block' => true,
                        'fade' => true,
                        'closeText' => '&times;',
                    ));*/
                } ?>

                <?php echo $content; ?>

            </div>
            
            <footer class="footer" id="footer">
                <div class="container">
                    Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
                    All Rights Reserved.<br/>
                    <?php echo Yii::powered(); ?>
                </div>
            </footer>

        </div>

    </body>
</html>
