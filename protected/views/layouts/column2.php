<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

    <div class="col-md-9">
        <?php echo $content; ?>
    </div>
    <div class="col-md-3">
        <?php $this->widget('zii.widgets.CMenu', array(
            'items'         => $this->menu,
            'htmlOptions'   => array('class' => 'nav nav-pills nav-stacked'),
        )); ?>
    </div>

<?php $this->endContent(); ?>