<?php
Yii::app()->bootstrap->registerCoreCss();
Yii::app()->bootstrap->registerYiistrapCss();
Yii::app()->bootstrap->registerAllScripts();
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta charset="utf-8">
</head>

<body>

<div class="container text-center">

	<?php echo $content; ?>

</div>

</body>
</html>