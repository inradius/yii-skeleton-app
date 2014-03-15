<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->layout = 'column2';
$this->pageTitle = app()->name . ' - Users';
$this->breadcrumbs = array(
    'Users',
);

$this->menu = array(
    array('label'=>'List User', 'url'=>array('index'), 'active' => true),
    array('label' => 'Create User', 'url' => array('create')),
);

$columns = array(
    array('id' => 'selected', 'class' => 'CCheckBoxColumn'),
    array('filter' => false, 'name' => 'first_name', 'header' => 'Name', 'type' => 'raw', 'value' => 'User::model()->findByPk($data->id)->getFullName()'),
    array('name' => 'email', 'header' => 'Email'),
    array('filter' => false, 'name' => 'last_login', 'header' => 'Last Login', 'type' => 'raw', 'value' => 'Shared::formatShortUSDate($data->last_login)'),
    array('type' => 'raw', 'value' => array($this, 'renderButtons')),
);

$dataArray = array(
    'id'                => 'user-gridview',
    'filter'            => $model,
    'columns'           => $columns,
    'template'          => "{items}\n{pager}",
    'dataProvider'      => $dataProvider,
    'itemsCssClass'     => 'table table-bordered table-striped table-hover',
    'selectableRows'    => 2,
);
?>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">Users</h1>

        <?php $this->widget('app.widgets.GridView.GridView', $dataArray); ?>
    </div>
</div>