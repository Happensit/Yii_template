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
$this->widget('andystrap.widgets.AdFancyBox', array(
	'target' => 'a[rel=gallery]',
	'config' => array(),
));
?>

<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
	'type' => array(TbHtml::DETAIL_TYPE_HOVER, TbHtml::DETAIL_TYPE_BORDERED),
	'data' => $this->model,
	'attributes' => array(
		array(
			'name' => 'profile.image',
			'type' => 'raw',
			'value' => function($data) {
				if (!empty($data->profile->image)) {
					$url = Yii::app()->getBaseUrl().$data->profile->image;
					$image = TbHtml::image($url, NULL, array('type' => 'polaroid', 'width' => '200'));
					return $image = TbHtml::link($image, $url, array('rel' => 'gallery'));
				}
			}
		),
		'username',
		'role.alias',
		'profile.name',
		'profile.cid',
		'profile.birthday',
		'profile.sex',
		'profile.email',
		'profile.address',
		array(
			'name' => 'profile.about',
			'type' => 'raw',
		),
		array(
			'name' => 'is_active',
			'value' => function($data) {
				return Yii::app()->params['yesno'][$data->is_active];
			},
		),
		'last_login',
		'created',
	)
));
?>