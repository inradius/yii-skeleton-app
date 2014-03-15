<?php

$this->pageTitle = app()->name . ' - Login';
$this->breadcrumbs = array('Login');
?>

<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>

<?php $form = $this->beginWidget('CActiveForm', array('htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'))); ?>

    <div class="form-group<?php if($form->error($model, 'username')) echo ' has-error'; ?>">
        <?php echo $form->label($model, 'username', array('class' => 'col-md-2 control-label')); ?>
        <div class="col-md-5">
            <?php echo $form->textField($model, 'username', array(
                'class' => 'form-control',
                'size' => 45,
                'maxlength' => 45,
            )); ?>
        </div>
    </div>

    <div class="form-group<?php if($form->error($model, 'password')) echo ' has-error'; ?>">
        <?php echo $form->label($model, 'password', array('class' => 'col-md-2 control-label')); ?>
        <div class="col-md-5">
            <?php echo $form->passwordField($model, 'password', array(
                'class' => 'form-control',
                'size' => 45,
                'maxlength' => 45,
            )); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <?php echo $form->checkBox($model,'rememberMe'); ?>
                <?php echo $form->label($model,'rememberMe'); ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <?php echo CHtml::submitButton('Sign in', array('class' => 'btn btn-default')); ?>
        </div>
    </div>

<div class="control-group form-link"><a href="<?php echo url('user/forgotPassword'); ?>">Forgot password?</a></div>

<div class="form-actions">
    <?php //$this->widget('bootstrap.widgets.TbButton', array('buttonType' => 'submit', 'icon' => 'user', 'label' => 'Login')); ?>
    <?php //$this->widget('application.components.widgets.FBConnect'); ?>
    <?php //$this->widget('application.components.widgets.GConnect'); ?>
    <?php //$this->widget('application.components.widgets.LiveConnect'); ?>
</div>

<div id="processing" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="processingLabel" aria-hidden="true">
    <div class="modal-header">
        <h3 id="processingLabel"><i class="icon-spinner icon-spin"></i> Processing Request</h3>
    </div>
    <div class="modal-body">
        <p>One moment while we processes your request. This shouldn't take too long.</p>
    </div>
    <div class="modal-footer"></div>
</div>

<?php $this->endWidget(); ?>