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
		<?php echo Yii::t('AdminModule.'.$this->id, 'Users List'); ?>
		<small>Users List</small>
	</h3>
</div>

<style type="text/css">
#yw0_c0 { width: 30px; }
#yw0_c2 { width: 130px; }
#yw0_c3 { width: 70px; }
#yw0_c4 { width: 150px; }
#yw0_c5 { width: 70px; }
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
		'username',
		array(
			'name' => 'role_id',
			'filter'=> UserRoles::model()->getListArray(),
			'value' => '$data->role->alias',
		),
		array(
			'name' => 'is_active',
			'value' => function($model, $row) {
				return Yii::app()->params['yesno'][$model->is_active];
			},
			'filter'=> Yii::app()->params['yesno'],
		),
		'last_login',
		array(
			'class' => 'andystrap.widgets.AdButtonColumn',
		),
	),
));
?>
