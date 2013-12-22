<?php $this->beginContent('//layouts/main'); ?>

<div class="row">

	<div class="left-side span2">
		<?php echo AdHtml::sidebar(Yii::app()->params['sidebarItems'], array(
			'color' => TbHtml::BUTTON_COLOR_INVERSE,
		)); ?>
	</div>

	<div class="right-side span10">
		<?php $this->renderPartial('//common/items/breadcrumbs'); ?>
		<?php $this->renderPartial('//common/items/buttontoolbar'); ?>
		<?php echo $content; ?>
	</div>

</div>

<?php $this->endContent(); ?>