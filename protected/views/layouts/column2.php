<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

    <div class="col-md-9">
        <?php echo $content; ?>
    </div>
    <div class="col-md-3">
        <?php /*$this->widget('bootstrap.widgets.TbMenu', array(
            'type' => 'tabs',
            'stacked' => true,
            'items' => $this->menu,
        ));*/ ?>
    </div>

<?php $this->endContent(); ?>