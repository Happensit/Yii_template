<?php
$this->menu[] = array('items' => array(
	array(
		'label' => Yii::t('AdminModule.admin', 'Create'),
		'url' => array('create'),
		'icon' => TbHtml::ICON_PLUS,
		'iconOptions' => array(
			'color' => TbHtml::ICON_COLOR_WHITE,
		),
	),
));
?>

<div class="headings">
	<h3 class="text-error">
		<?php echo Yii::t('AdminModule.'.$this->id, ucfirst($this->id).' List'); ?>
		<small><?php echo ucfirst($this->id); ?> List</small>
	</h3>
</div>

<style type="text/css">
#yw0_c0 { width: 30px; }
#yw0_c1 { width: 90px; }
#yw0_c3 { width: 70px; }
#yw0_c4 { width: 70px; }
</style>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'type' => TbHtml::GRID_TYPE_HOVER,
	'dataProvider' => $this->model->search(),
	'filter' => $this->model,
	'selectionChanged' => "function(id){window.location='".Yii::app()->urlManager->createUrl('admin/'.$this->id.'/view', AdArray::setValue('id', '', $this->pagerParams))."' + $.fn.yiiGridView.getSelection(id);}",
	'ajaxUpdate' => FALSE,
	'columns' => array(
		array(
			'header' => '#',
			'value' => function($model, $row) {
				return $row + 1;
			},
		),
		'date',
		'title',
		array(
			'name' => 'is_visible',
			'value' => function($model, $row) {
				return Yii::app()->params['yesno'][$model->is_visible];
			},
			'filter'=> Yii::app()->params['yesno'],
		),
		array(
			'class' => 'andystrap.widgets.AdButtonColumn',
		),
	),
));
?>
