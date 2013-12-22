<div class="headings">
	<h3 class="text-error">
		<?php echo Yii::t('AdminModule.'.$this->id, 'Update '.ucfirst($this->id)); ?>
		<small>Update <?php echo ucfirst($this->id); ?></small>
	</h3>
</div>

<?php $this->renderPartial('_form', array('model' => $model, 'model2' => $model2)); ?>