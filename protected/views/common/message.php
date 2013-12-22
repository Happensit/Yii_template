<div id="message_area">
	<div class="header">
		<h3 class="text-error"><?php echo $message['header']; ?> <small><?php echo $message['small']; ?></small></h3>
	</div>

	<div class="content"><?php echo $message['content']; ?></div>

	<div class="buttons">
		<?php
		echo TbHtml::linkButton(Yii::t('AdminModule.admin', 'Back'), array(
			'color' => TbHtml::BUTTON_COLOR_WARNING,
			'url' => $message['url'],
		));
		?>
	</div>
</div>