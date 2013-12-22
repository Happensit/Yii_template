<?php $this->renderPartial('//common/loading'); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="page">
	<?php $this->widget('bootstrap.widgets.TbNavbar', array(
		'color' => TbHtml::NAVBAR_COLOR_INVERSE,
		'brandLabel' => 'Happensit',
		'collapse' => true,
		'items' => array(
			array(
				'class' => 'andystrap.widgets.AdNav',
				'items' => array(
					array(
						'label' => Yii::t('AdminModule.admin', 'Admin CPanel‎'),
						'url' => Yii::app()->user->returnUrl,
						'visible' => Yii::app()->user->isAdmin(),
					),
					array(
						'label' => Yii::t('AdminModule.admin', 'Login'),
						'url' => Yii::app()->user->loginUrl,
						'visible' => !Yii::app()->user->isAdmin(),
					),
					array(
						'label' => Yii::t('AdminModule.admin', 'Logout').' ('.Yii::app()->user->name.')',
						'url' => Yii::app()->user->logoutUrl,
						'visible' => Yii::app()->user->isAdmin(),
					),

					array(
						'label' => 'Yii Framework',
						'items' => array(
							array(
								'label' => 'Model Rules Validation',
								'url' => array('/library/yii/modelrules'),
							),
						),
					),

					array(
						'label' => 'Andystrap',
						'items' => array(
							array(
								'label' => 'Font Awesome Icons',
								'url' => array('/library/andystrap/awesome'),
							),
							array(
								'label' => 'fancyBox',
								'url' => array('/library/andystrap/fancybox'),
							),
						),
					),

					array(
						'label' => 'Git 版本控制',
						'url' => array('/library/git'),
					),
				),
			),
		),
	)); ?>

	<div class="header container">

	</div>

	<div class="content container">
		<?php echo $content; ?>
	</div>

	<div class="footer container-fluid text-center navbar-fixed-bottom">
		<p>Copyright &copy; <?php echo date('Y'); ?> Happensit. All Rights Reserved.</p>
		<p><?php echo Yii::powered(); ?></p>
	</div>

</div>

</body>
</html>
