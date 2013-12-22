<div class="headings">
	<h3 class="text-error">
		內部的伺服器錯誤
		<small>HTTP <?php echo $code; ?></small>
	</h3>
</div>

<div class="error-content clearfix">
	<p>當網頁伺服器正在處理您的請求時，發生了一個內部錯誤。</p>
	<p>請回報此一問題給 <?php echo CHtml::link('網站管理員', 'mailto:'.Yii::app()->params->adminEmail); ?> ( <?php echo Yii::app()->params->adminEmail; ?> )</p>
</div>