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
        <?php $this->widget('app.widgets.bootstrap.bootstrap'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo app()->request->baseUrl; ?>/css/system.css" media="screen, projection" />
    </head>

    <body>
        
        <div id="fb-root"></div>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo app()->name; ?></a>
                </div>
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items'=>array(
                        array('label'=>'Home', 'url'=>array('site/index')),
                        array('label'=>'Products', 'url'=>array('product/index'), 'items'=>array(
                            array('label'=>'New Arrivals', 'url'=>array('product/new', 'tag'=>'new')),
                            array('label'=>'Most Popular', 'url'=>array('product/index', 'tag'=>'popular')),
                        )),
                        array('label'=>'Login', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
                    ),
                ));
                ?>
            </div>
        </nav>
        
        <?php
        /*
        $this->widget('bootstrap.widgets.TbNavbar', array(
            'brand' => h(app()->name),
            'brandUrl' => bu(),
            'collapse' => true,
            'items'=>array(
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'items'=>array(
                        array('label' => 'Home', 'url' => array('/site/index')),
                        array('label' => 'Profile', 'url' => array('/user/update', 'id' => app()->user->id), 'visible' => !app()->user->isGuest()),
                        array('label' => 'Users', 'url' => array('/user/index'), 'visible' => app()->user->isAdmin()),
                    ),
                ),
                app()->user->isGuest?
                    array(
                        'class' => 'bootstrap.widgets.TbButton',
                        'htmlOptions' => array('class' => 'pull-right'),
                        'label'=>'Login',
                        'type'=>'success',
                        'size'=>'normal',
                        'url'=>array('/site/login'),
                    )
                :
                    array(
                        'class' => 'bootstrap.widgets.TbButton',
                        'htmlOptions' => array('class' => 'pull-right'),
                        'label'=>'Logout',
                        'type'=>'warning',
                        'size'=>'normal',
                        'url'=>array('/site/logout'),
                    )
                ,
                (app()->user->isGuest?array(
                    'class' => 'bootstrap.widgets.TbButton',
                    'htmlOptions' => array('class' => 'pull-right', 'style' => 'margin-right: 5px'),
                    'label'=>'Register',
                    'type'=>'info',
                    'size'=>'normal',
                    'url'=>array('/user/create'),
                ):''),
            ),
        ));
        */
        ?>

        <div id="page">

            <div class="container main-holder">

                <?php
                if(isset($this->breadcrumbs)){
                    /*$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                        'links' => $this->breadcrumbs,
                    ));*/
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
