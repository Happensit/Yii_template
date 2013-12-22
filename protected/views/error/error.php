<div class="headings">
	<h3 class="text-error">
		<?php echo nl2br(CHtml::encode($message)); ?>
		<small>HTTP <?php echo $code; ?></small>
	</h3>
</div>

<div class="error-content clearfix">
	<p>當網頁伺服器正在處理您的請求時，發生以上的錯誤。</p>
</div>

<div class="error-info">
	<p>
		<span class="label label-info">注意</span>
		如果您認為是伺服器錯誤所造成, 請聯絡 <?php echo CHtml::link('網站管理員', 'mailto:'.Yii::app()->params->adminEmail); ?> ( <?php echo Yii::app()->params->adminEmail; ?> )
	</p>
</div>