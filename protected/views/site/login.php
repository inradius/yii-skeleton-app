<?php

$this->pageTitle = app()->name . ' - Login';
$this->breadcrumbs = array('Login');
?>

<div class="col-md-12">
    <h1 class="page-header">Login</h1>
    <p>Please fill out the following form with your login credentials.</p>

    <?php $form = $this->beginWidget('CActiveForm', array('htmlOptions' => array('role' => 'form', 'class' => 'row'))); ?>

    <div class="col-md-5 col-md-offset-3 form-group<?php if($form->error($model, 'username')) echo ' has-error'; ?>">
        <?php echo $form->label($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array(
            'class' => 'form-control',
            'size' => 45,
            'maxlength' => 45,
        )); ?>
    </div>

    <div class="col-md-5 col-md-offset-3 form-group<?php if($form->error($model, 'password')) echo ' has-error'; ?>">
        <?php echo $form->label($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array(
            'class' => 'form-control',
            'size' => 45,
            'maxlength' => 45,
        )); ?>
    </div>

    <div class="col-md-5 col-md-offset-3">
        <div class="checkbox row">
            <div class="col-md-6">
                <label><?php echo $form->checkBox($model,'rememberMe', array('class' => 'checkbox')); ?><?php echo $model->getAttributeLabel('rememberMe'); ?></label>
            </div>
            <div class="col-md-6">
                <?php echo CHtml::link('Forgot Password?', array('user/forgotPassword'), array('class' => 'pull-right')); ?>
            </div>
        </div>
    </div>

    <div class="col-md-5 col-md-offset-3">
        <?php echo CHtml::submitButton('Sign in', array('class' => 'btn btn-default')); ?>
    </div>

<!--
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
-->

    <?php $this->endWidget(); ?>

</div>