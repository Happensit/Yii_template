<?php

$form = $this->beginWidget('andystrap.widgets.AdActiveForm', array(
	'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
	'helpType' => TbHtml::HELP_TYPE_INLINE,
	'enableClientValidation' => true,
	'id' => $this->id.'-form',
	'htmlOptions' => array(
		'enctype' => 'multipart/form-data',
	),
));

echo $form->hiddenField($this->model, 'creator_id', array('value' => Yii::app()->user->id));

echo $form->dateFieldControlGroup($this->model, 'date', array('prepend' => AdHtml::iconFA('calendar')));
echo $form->textFieldControlGroup($this->model, 'title', array('placeholder' => 'Title', 'span' => 5));

$form->CKEditorControlGroup($this->model, 'content');

echo $form->fileFieldControlGroup($this->model, 'upload_file');

if ($this->action->id == 'update') {
	echo $form->dropDownListControlGroup($this->model, 'is_visible', Yii::app()->params['yesno'], array('span' => 1));
}
?>

<?php
if ($this->model->isNewRecord) {
	echo AdHtml::areaFormButtons(Yii::t('AdminModule.admin', 'Confirm'), Yii::t('AdminModule.admin', 'Cancel'));
} else {
	echo AdHtml::areaFormButtons(Yii::t('AdminModule.admin', 'Confirm'), Yii::t('AdminModule.admin', 'Cancel'), array('view', 'id' => $this->model->id));
}
?>

<?php $this->endWidget(); ?>