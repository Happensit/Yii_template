<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>

	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/favicon.ico" type="image/x-icon"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
	      media="screen, projection"/>
	<![endif]-->

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<?php $this->widget('bootstrap.widgets.TbNavbar',
    array(
        'items' => array(
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'items' => array(
                    // Home
    				array('label' => Yii::t('app','Home'), 'url' => array('/site/index')),
                    // About
    				array('label' => Yii::t('app','About'), 'url' => array('/site/page', 'view' => 'about')),
                    // Contact
                    array('label' => Yii::t ('app','Contact'), 'url' => array('/site/contact')),
                ),
            ),
            array(
                'class' => 'bootstrap.widgets.TbMenu',
                'htmlOptions' => array('class' => 'pull-right'),
                // Login / logout
                'items' => array(
                    //Login
                    array('label' => Yii::t('app','Login'), 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    //Logout
                    array('label' => Yii::t('app','Logout ({name})',array('{name}' => Yii::app()->user->name)), 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                ),
            ),
        )
    )
);
?>
	<!-- mainmenu -->
	<div class="container" style="margin-top:80px">
		<?php if (isset($this->breadcrumbs)): ?>
			<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links' => $this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
		<?php endif?>

                <?php
                // User flash messages
                $this->widget('bootstrap.widgets.TbAlert',
                    array(
                        'block' => true, // display a larger alert block?
                        'fade' => true, // use transitions?
                        'closeText' => '×', // close link text - if set to false, no close link is displayed
                    )
                );
                ?>
                <?php  if (isset(Yii::app()->session['flash'])) : ?>
                        <?php foreach(Yii::app()->system->getSystemMessages() as $flashType=>$flashMessage) : ?>
                        <div class="alert alert-block alert-<?php echo $flashType; ?>">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>System</strong><br/><?php echo $flashMessage; ?>
                        </div>
                        <?php endforeach; ?>
                <?php endif; ?>

		<?php echo $content; ?>
		<hr/>
		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
		</div>
		<!-- footer -->
	</div>
</div>
<!-- page -->
</body>
</html>