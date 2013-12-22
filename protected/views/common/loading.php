<?php
/* init */
$cs = Yii::app()->getClientScript();

/* head setting */
$this->pageTitle			= Yii::app()->name;
$keywords					= 'Yii Framework, Yii, Framework, Webapp';
$description				= 'Design a Yii Framework Webapp';
$loadFontAwesome			= TRUE;
$loadBootstrap				= TRUE;
$loadBootstrapResponsive	= FALSE;
$loadCssFiles				= 'style';

/* code area */
$cs->registerMetaTag($keywords, 'keywords');
$cs->registerMetaTag($description, 'description');
$cs->registerMetaTag(NULL, NULL, NULL, array('charset' => 'utf-8'));

$cs->registerLinkTag('shortcut icon', 'image/x-icon', Yii::app()->request->baseUrl.'/favicon.ico');

if ($loadFontAwesome) {
	Yii::app()->andystrap->registerPackage('font-awesome');
}

if ($loadBootstrap) {
	Yii::app()->bootstrap->registerCoreCss();
	if ($loadBootstrapResponsive) Yii::app()->bootstrap->registerResponsiveCss();
	Yii::app()->bootstrap->registerYiistrapCss();
	Yii::app()->bootstrap->registerAllScripts();
}

if (!empty($loadCssFiles)) {
	if (is_array($loadCssFiles)) {
		foreach ($loadCssFiles as $cssFile) {
			$cs->registerCssFile($this->baseUrl.'/css/'.$cssFile.'.css');
		}
	} else {
		$cs->registerCssFile($this->baseUrl.'/css/'.$loadCssFiles.'.css');
	}
}

// link [rel=external] open with anothor window
$cs->registerScript(
	$this->getId(),
	"jQuery('a[rel=external]').click(function(){window.open(this.href);return false;});",
	CClientScript::POS_END
);
?>