<div class="headings">
	<h3 class="text-error">
		<?php echo Yii::t('AdminModule.'.$this->id, 'Create '.ucfirst($this->id)); ?>
		<small>Create <?php echo ucfirst($this->id); ?></small>
	</h3>
</div>

<?php $this->renderPartial('_form'); ?>