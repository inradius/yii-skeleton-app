<?php

$this->pageTitle = app()->name . ' - Forgot Password';
$this->breadcrumbs = array(
    'Login' => array('/site/login'),
    'Forgot Password',
);
?>

<h1>Forgot Password</h1>

<p>Please provide your email address in the field below to reset your password.</p>

<?php $form = $this->beginWidget('CActiveForm', array('htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form'))); ?>

<?php //echo $form->errorSummary($model); ?>

<div class="form-group<?php if($form->error($model, 'email')) echo ' has-error'; ?>">
    <?php echo $form->label($model, 'email', array('class' => 'col-md-2 control-label')); ?>
    <div class="col-md-5">
        <?php echo $form->textField($model, 'email', array('placeholder' => 'email address')); ?>
    </div>
</div>

<div class="form-group<?php if($form->error($model, 'verify')) echo ' has-error'; ?>">
    <?php echo CHtml::activeLabel($model, 'verify', array('required' => true)); ?>
    <div class="col-md-5">
        <?php echo $form->textField($model, 'verify'); ?>
        <?php $this->widget('CCaptcha', array('clickableImage' => true, 'showRefreshButton' => false, 'imageOptions' => array('style' => 'vertical-align: top; margin-top: -10px; cursor: pointer;'))); ?>
        <?php echo $form->error($model, 'verify'); ?>
    </div>
</div>

<?php echo CHtml::submitButton('Request Reset', array('class' => 'btn btn-default')); ?>

<?php $this->endWidget(); ?>
