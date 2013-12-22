<?php
$this->menu[] = array('items' => array(
	array(
		'label' => Yii::t('AdminModule.admin', 'Update'),
		'url' => array('update', 'id' => $this->model->id),
		'icon' => TbHtml::ICON_PENCIL,
		'iconOptions' => array(
			'color' => TbHtml::ICON_COLOR_WHITE,
		),
	),
	array(
		'label' => Yii::t('AdminModule.admin', 'Delete'),
		'submit' => array('delete', 'id' => $this->model->id),
		'confirm' => Yii::t('zii','Are you sure you want to delete this item?'),
		'icon' => TbHtml::ICON_TRASH,
		'iconOptions' => array(
			'color' => TbHtml::ICON_COLOR_WHITE,
		),
	),
));

$this->menu[] = array('items' => array(
	array(
		'label' => Yii::t('AdminModule.admin', 'Back'),
		'url' => array('index'),
		'icon' => TbHtml::ICON_SHARE_ALT,
		'iconOptions' => array(
			'color' => TbHtml::ICON_COLOR_WHITE,
		),
	),
));
?>

<div class="headings">
	<h3 class="text-error">
		<?php echo Yii::t('AdminModule.'.$this->id, 'View '.ucfirst($this->id)); ?>
		<small>View <?php echo ucfirst($this->id); ?></small>
	</h3>
</div>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
	'type' => array(TbHtml::DETAIL_TYPE_HOVER, TbHtml::DETAIL_TYPE_BORDERED),
	'data' => $this->model,
	'attributes' => array(
		'date',
		'title',
		array(
			'name' => 'content',
			'type' => 'raw'
		),
		array(
			'name' => 'is_visible',
			'value' => function($data) {
				return Yii::app()->params['yesno'][$data->is_visible];
			},
		),
		'creator.username',
		array(
			'name' => 'files.name',
			'value' => function($model) {
				if (count($model->files) > 0) {
					$filename = $model->files->name;
					$url = $this->createUrl('/down', array('m' => strtolower(get_class($model)), 'id' => $model->id));
					
					$output = $filename;
					$output .= '　';
					$output .= TbHtml::linkButton(Yii::t('AdminModule.admin', 'Download'), array('size' => 'mini', 'color' => TbHtml::BUTTON_COLOR_DANGER, 'url' => $url));
					$output .= ' ';
					// $output .= TbHtml::linkButton(Yii::t('AdminModule.admin', 'Delete'), array('size' => 'mini', 'color' => TbHtml::BUTTON_COLOR_DANGER,  'url' => array('deletefile', 'id' => $model->id)));
					$output .= TbHtml::linkButton(Yii::t('AdminModule.admin', 'Delete'), array('size' => 'mini', 'color' => TbHtml::BUTTON_COLOR_DANGER, 'submit' => array('deletefile', 'id' => $model->id), 'confirm' => Yii::t('zii','Are you sure you want to delete this item?')));
					return $output;
				} else {
					return Yii::t('AdminModule.admin', 'none');
				}
			},
			'type' => 'raw',
		),
	)
));
?>