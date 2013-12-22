<div class="headings">
	<h3 class="text-error">
		找不到網頁
		<small>HTTP <?php echo $code; ?></small>
	</h3>
</div>

<div class="error-content clearfix">
	<p>伺服器無法找到請求的 URL 對應的網頁。</p>
	<p>如果您是手動輸入 URL，請檢查是否有拼寫錯誤後再重試。</p>
</div>

<div class="error-info">
	<p>
		<span class="label label-info">注意</span>
		如果您認為是伺服器錯誤所造成, 請聯絡 <?php echo CHtml::link('網站管理員', 'mailto:'.Yii::app()->params->adminEmail); ?> ( <?php echo Yii::app()->params->adminEmail; ?> )
	</p>
</div>