<div class="headings">
	<h3 class="text-error">
		不正確的請求
		<small>HTTP <?php echo $code; ?></small>
	</h3>
</div>

<div class="error-content clearfix">
	<p>由於語法不正確，伺服器無法了解請求的正確內容。</p>
	<p>請修改請求後再行重試。</p>
</div>

<div class="error-info">
	<p>
		<span class="label label-info">注意</span>
		如果您認為是伺服器錯誤所造成, 請聯絡 <?php echo CHtml::link('網站管理員', 'mailto:'.Yii::app()->params->adminEmail); ?> ( <?php echo Yii::app()->params->adminEmail; ?> )
	</p>
</div>