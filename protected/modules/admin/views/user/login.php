<div class="headings">
	<h3 class="text-error">
		<?php echo Yii::t('AdminModule.admin', 'Login Admin CPanel‎'); ?>
		<small>Login Admin CPanel‎</small>
	</h3>
</div>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'layout' => TbHtml::FORM_LAYOUT_INLINE,
	'helpType' => TbHtml::HELP_TYPE_INLINE,
	'enableClientValidation' => true,
)); ?>
<?php echo $form->textFieldControlGroup($this->model, 'username', array(
	'placeholder' => 'Username',
	'prepend' => AdHtml::iconFA('user'),
	'label' => FALSE,
)); ?>
<?php echo $form->passwordFieldControlGroup($this->model, 'password', array(
	'placeholder' => 'Password',
	'prepend' => AdHtml::iconFA('key'),
	'label' => FALSE,
)); ?>
<?php echo $form->checkBoxControlGroup($this->model, 'rememberMe', array('checked' => 'checked')); ?>
<?php echo TbHtml::submitButton(Yii::t('AdminModule.admin', 'Login'), array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
<?php $this->endWidget(); ?>