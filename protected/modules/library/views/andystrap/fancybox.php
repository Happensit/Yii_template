<div class="page-header">
	<h2>
		<?php echo AdHtml::iconFA('bolt', array('fw' => TRUE)); ?> fancyBox
	</h2>
</div>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 使用方式</h3>
	<p>在要使用 fancyBox 的 view 插入以下程式碼。</p>
	<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
	$this->widget('andystrap.widgets.AdFancyBox', array(
	    'target' => 'a[rel=gallery]',
	    'config' => array(),
	));
    <?php $this->endWidget(); ?>
</section>

<hr>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 範例</h3>
	<p>圖片連結需新增屬性 <code>rel=gallery</code></p>
	<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
	$url = 'http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg';
	$img = TbHtml::image($url, NULL, array('type' => 'polaroid'));
	echo TbHtml::link($img, $url, array('rel' => 'gallery'));
    <?php $this->endWidget(); ?>

	<p><?php
	$this->widget('andystrap.widgets.AdFancyBox', array(
		'target' => 'a[rel=gallery]',
		'config' => array(),
	));

	$url = 'http://farm4.staticflickr.com/3824/9041440555_2175b32078_b.jpg';
	$img= TbHtml::image($url, NULL, array('type' => 'polaroid'));
	echo TbHtml::link($img, $url, array('rel' => 'gallery'));
	?></p>
</section>