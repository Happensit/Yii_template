<style type="text/css">
.sex label { float: left; padding-top: 5px; padding-right: 10px; }
.sex input[type="radio"] { float: none; margin-top: -4px; }
.sex span.help-inline { padding-top: 5px; }
legend { margin-bottom: 0; }
</style>

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

echo $form->textFieldControlGroup($model, 'username', array(
	'placeholder' => 'Username',
	'prepend' => AdHtml::iconFA('user'),
));

if (Yii::app()->controller->action->id == 'create') {
	echo $form->passwordFieldControlGroup($model, 'password', array(
		'placeholder' => 'Password',
		'prepend' => AdHtml::iconFA('key'),
	));
}
if (Yii::app()->controller->action->id == 'update') {
	echo $form->passwordFieldControlGroup($model, 'new_password', array(
		'placeholder' => 'New Password',
		'prepend' => AdHtml::iconFA('key'),
	));
}
echo $form->passwordFieldControlGroup($model, 'confirm_password', array(
	'placeholder' => 'Confirm Password',
	'prepend' => AdHtml::iconFA('key'),
));

echo $form->dropDownListControlGroup($model, 'role_id', UserRoles::model()->getListArray(), array('span' => 2));
echo $form->dropDownListControlGroup($model, 'is_active', Yii::app()->params['yesno'], array('span' => 1));

echo '<fieldset>';
echo '<legend>'.Yii::t('AdminModule.user', 'User Profile').'</legend>';
echo $form->textFieldControlGroup($model2, 'name', array('span' => 2));
echo $form->textFieldControlGroup($model2, 'cid', array('span' => 2));
echo $form->dateFieldControlGroup($model2, 'birthday', array('prepend' => AdHtml::iconFA('calendar')));
echo $form->radioButtonListControlGroup($model2, 'sex', Yii::app()->params['sex'], array('controlOptions' => array('class' => 'sex')));
echo $form->textFieldControlGroup($model2, 'tel', array('placeholder' => 'Contact Telephone', 'span' => 3, 'prepend' => AdHtml::iconFA('phone')));
echo $form->textFieldControlGroup($model2, 'email', array('placeholder' => 'Email', 'span' => 4, 'prepend' => AdHtml::iconFA('envelope')));
echo $form->textFieldControlGroup($model2, 'address', array('placeholder' => 'Address', 'span' => 5, 'prepend' => AdHtml::iconFA('map-marker')));
$form->CKEditorControlGroup($model2, 'about');
echo $form->fileFieldControlGroup($model2, 'image');
echo '</fieldset>';
?>

<?php
if ($model->isNewRecord) {
	echo AdHtml::areaFormButtons(Yii::t('AdminModule.admin', 'Confirm'), Yii::t('AdminModule.admin', 'Cancel'));
} else {
	echo AdHtml::areaFormButtons(Yii::t('AdminModule.admin', 'Confirm'), Yii::t('AdminModule.admin', 'Cancel'), array('view', 'id' => $model->id));
}
?>

<?php $this->endWidget(); ?>