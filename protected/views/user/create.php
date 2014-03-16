<?php
/* @var $this UserController */
/* @var $model User */

if(app()->user->isAdmin()){
    $pageName = 'Create User';
    $this->layout = 'column2';
    $this->menu = array(
        array('label'=>'List User', 'url'=>array('index')),
        array('label' => 'Create User', 'url' => array('create'), 'active' => true),
    );
} else {
    $pageName = 'Register';
}

$this->pageTitle = app()->name . ' - ' . $pageName;
$this->breadcrumbs = array(
    $pageName,
);
?>

<?php echo $this->renderPartial('_form', array('model' => $model, 'pageName' => $pageName)); ?>