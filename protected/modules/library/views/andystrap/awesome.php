<div class="page-header">
	<h2>
		<?php echo AdHtml::iconFA('flag', array('fw' => TRUE)); ?> Font Awesome Icons
		<small>The iconic font designed for Bootstrap</small>
	</h2>
</div>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 使用方式</h3>
	<?php $this->beginWidget('andystrap.widgets.AdHighlighter'); ?>
	echo AdHtml::iconFA($icon, $htmlOptions = array(), $tagName = 'i');
    <?php $this->endWidget(); ?>
</section>

<hr>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> $htmlOptions</h3>

	<ul class="list">
		<li>size：值為 1~5，控制 icon 的大小。</li>
		<li>fw：TRUE / FALSE，TRUE 則 icon 擁有固定寬度，通常用於 list。</li>
		<li>border：TRUE / FALSE，TRUE 則 icon 擁有外框。</li>
		<li>spin：TRUE / FALSE，TRUE 則 icon 會持續轉動。</li>
		<li>rotate：90 / 180 / 270，icon 旋轉角度。</li>
		<li>flipH：TRUE / FALSE，TRUE 則 icon 水平翻轉。</li>
		<li>flipV：TRUE / FALSE，TRUE 則 icon 垂直翻轉。</li>
	</ul>
</section>

<hr>

<?php
$cssCodes = '.icons li { width: 25%; float: left; }';
Yii::app()->getClientScript()->registerCss($this->getId(), $cssCodes);
?>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> $icon</h3>

	<section>
		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Web Application Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('adjust', array('fw' => TRUE)); ?> <small>adjust</small></li>
			<li><?php echo AdHtml::iconFA('anchor', array('fw' => TRUE)); ?> <small>anchor</small></li>
			<li><?php echo AdHtml::iconFA('archive', array('fw' => TRUE)); ?> <small>archive</small></li>
			<li><?php echo AdHtml::iconFA('arrows', array('fw' => TRUE)); ?> <small>arrows</small></li>
			<li><?php echo AdHtml::iconFA('arrows-h', array('fw' => TRUE)); ?> <small>arrows-h</small></li>
			<li><?php echo AdHtml::iconFA('arrows-v', array('fw' => TRUE)); ?> <small>arrows-v</small></li>
			<li><?php echo AdHtml::iconFA('asterisk', array('fw' => TRUE)); ?> <small>asterisk</small></li>
			<li><?php echo AdHtml::iconFA('ban', array('fw' => TRUE)); ?> <small>ban</small></li>
			<li><?php echo AdHtml::iconFA('bar-chart-o', array('fw' => TRUE)); ?> <small>bar-chart-o</small></li>
			<li><?php echo AdHtml::iconFA('barcode', array('fw' => TRUE)); ?> <small>barcode</small></li>
			<li><?php echo AdHtml::iconFA('bars', array('fw' => TRUE)); ?> <small>bars</small></li>
			<li><?php echo AdHtml::iconFA('beer', array('fw' => TRUE)); ?> <small>beer</small></li>
			<li><?php echo AdHtml::iconFA('bell', array('fw' => TRUE)); ?> <small>bell</small></li>
			<li><?php echo AdHtml::iconFA('bell-o', array('fw' => TRUE)); ?> <small>bell-o</small></li>
			<li><?php echo AdHtml::iconFA('bolt', array('fw' => TRUE)); ?> <small>bolt</small></li>
			<li><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> <small>book</small></li>
			<li><?php echo AdHtml::iconFA('bookmark', array('fw' => TRUE)); ?> <small>bookmark</small></li>
			<li><?php echo AdHtml::iconFA('bookmark-o', array('fw' => TRUE)); ?> <small>bookmark-o</small></li>
			<li><?php echo AdHtml::iconFA('briefcase', array('fw' => TRUE)); ?> <small>briefcase</small></li>
			<li><?php echo AdHtml::iconFA('bug', array('fw' => TRUE)); ?> <small>bug</small></li>
			<li><?php echo AdHtml::iconFA('building-o', array('fw' => TRUE)); ?> <small>building-o</small></li>
			<li><?php echo AdHtml::iconFA('bullhorn', array('fw' => TRUE)); ?> <small>bullhorn</small></li>
			<li><?php echo AdHtml::iconFA('bullseye', array('fw' => TRUE)); ?> <small>bullseye</small></li>
			<li><?php echo AdHtml::iconFA('calendar', array('fw' => TRUE)); ?> <small>calendar</small></li>
			<li><?php echo AdHtml::iconFA('calendar-o', array('fw' => TRUE)); ?> <small>calendar-o</small></li>
			<li><?php echo AdHtml::iconFA('camera', array('fw' => TRUE)); ?> <small>camera</small></li>
			<li><?php echo AdHtml::iconFA('camera-retro', array('fw' => TRUE)); ?> <small>camera-retro</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-down', array('fw' => TRUE)); ?> <small>caret-square-o-down</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-left', array('fw' => TRUE)); ?> <small>caret-square-o-left</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-right', array('fw' => TRUE)); ?> <small>caret-square-o-right</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-up', array('fw' => TRUE)); ?> <small>caret-square-o-up</small></li>
			<li><?php echo AdHtml::iconFA('certificate', array('fw' => TRUE)); ?> <small>certificate</small></li>
			<li><?php echo AdHtml::iconFA('check', array('fw' => TRUE)); ?> <small>check</small></li>
			<li><?php echo AdHtml::iconFA('check-circle', array('fw' => TRUE)); ?> <small>check-circle</small></li>
			<li><?php echo AdHtml::iconFA('check-circle-o', array('fw' => TRUE)); ?> <small>check-circle-o</small></li>
			<li><?php echo AdHtml::iconFA('check-square', array('fw' => TRUE)); ?> <small>check-square</small></li>
			<li><?php echo AdHtml::iconFA('check-square-o', array('fw' => TRUE)); ?> <small>check-square-o</small></li>
			<li><?php echo AdHtml::iconFA('circle', array('fw' => TRUE)); ?> <small>circle</small></li>
			<li><?php echo AdHtml::iconFA('circle-o', array('fw' => TRUE)); ?> <small>circle-o</small></li>
			<li><?php echo AdHtml::iconFA('clock-o', array('fw' => TRUE)); ?> <small>clock-o</small></li>
			<li><?php echo AdHtml::iconFA('cloud', array('fw' => TRUE)); ?> <small>cloud</small></li>
			<li><?php echo AdHtml::iconFA('cloud-download', array('fw' => TRUE)); ?> <small>cloud-download</small></li>
			<li><?php echo AdHtml::iconFA('cloud-upload', array('fw' => TRUE)); ?> <small>cloud-upload</small></li>
			<li><?php echo AdHtml::iconFA('code', array('fw' => TRUE)); ?> <small>code</small></li>
			<li><?php echo AdHtml::iconFA('code-fork', array('fw' => TRUE)); ?> <small>code-fork</small></li>
			<li><?php echo AdHtml::iconFA('coffee', array('fw' => TRUE)); ?> <small>coffee</small></li>
			<li><?php echo AdHtml::iconFA('cog', array('fw' => TRUE)); ?> <small>cog</small></li>
			<li><?php echo AdHtml::iconFA('cogs', array('fw' => TRUE)); ?> <small>cogs</small></li>
			<li><?php echo AdHtml::iconFA('comment', array('fw' => TRUE)); ?> <small>comment</small></li>
			<li><?php echo AdHtml::iconFA('comment-o', array('fw' => TRUE)); ?> <small>comment-o</small></li>
			<li><?php echo AdHtml::iconFA('comments', array('fw' => TRUE)); ?> <small>comments</small></li>
			<li><?php echo AdHtml::iconFA('comments-o', array('fw' => TRUE)); ?> <small>comments-o</small></li>
			<li><?php echo AdHtml::iconFA('compass', array('fw' => TRUE)); ?> <small>compass</small></li>
			<li><?php echo AdHtml::iconFA('credit-card', array('fw' => TRUE)); ?> <small>credit-card</small></li>
			<li><?php echo AdHtml::iconFA('crop', array('fw' => TRUE)); ?> <small>crop</small></li>
			<li><?php echo AdHtml::iconFA('crosshairs', array('fw' => TRUE)); ?> <small>crosshairs</small></li>
			<li><?php echo AdHtml::iconFA('cutlery', array('fw' => TRUE)); ?> <small>cutlery</small></li>
			<li><?php echo AdHtml::iconFA('dashboard', array('fw' => TRUE)); ?> <small>dashboard <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('desktop', array('fw' => TRUE)); ?> <small>desktop</small></li>
			<li><?php echo AdHtml::iconFA('dot-circle-o', array('fw' => TRUE)); ?> <small>dot-circle-o</small></li>
			<li><?php echo AdHtml::iconFA('download', array('fw' => TRUE)); ?> <small>download</small></li>
			<li><?php echo AdHtml::iconFA('edit', array('fw' => TRUE)); ?> <small>edit <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('ellipsis-h', array('fw' => TRUE)); ?> <small>ellipsis-h</small></li>
			<li><?php echo AdHtml::iconFA('ellipsis-v', array('fw' => TRUE)); ?> <small>ellipsis-v</small></li>
			<li><?php echo AdHtml::iconFA('envelope', array('fw' => TRUE)); ?> <small>envelope</small></li>
			<li><?php echo AdHtml::iconFA('envelope-o', array('fw' => TRUE)); ?> <small>envelope-o</small></li>
			<li><?php echo AdHtml::iconFA('eraser', array('fw' => TRUE)); ?> <small>eraser</small></li>
			<li><?php echo AdHtml::iconFA('exchange', array('fw' => TRUE)); ?> <small>exchange</small></li>
			<li><?php echo AdHtml::iconFA('exclamation', array('fw' => TRUE)); ?> <small>exclamation</small></li>
			<li><?php echo AdHtml::iconFA('exclamation-circle', array('fw' => TRUE)); ?> <small>exclamation-circle</small></li>
			<li><?php echo AdHtml::iconFA('exclamation-triangle', array('fw' => TRUE)); ?> <small>exclamation-triangle</small></li>
			<li><?php echo AdHtml::iconFA('external-link', array('fw' => TRUE)); ?> <small>external-link</small></li>
			<li><?php echo AdHtml::iconFA('external-link-square', array('fw' => TRUE)); ?> <small>external-link-square</small></li>
			<li><?php echo AdHtml::iconFA('eye', array('fw' => TRUE)); ?> <small>eye</small></li>
			<li><?php echo AdHtml::iconFA('eye-slash', array('fw' => TRUE)); ?> <small>eye-slash</small></li>
			<li><?php echo AdHtml::iconFA('female', array('fw' => TRUE)); ?> <small>female</small></li>
			<li><?php echo AdHtml::iconFA('fighter-jet', array('fw' => TRUE)); ?> <small>fighter-jet</small></li>
			<li><?php echo AdHtml::iconFA('film', array('fw' => TRUE)); ?> <small>film</small></li>
			<li><?php echo AdHtml::iconFA('filter', array('fw' => TRUE)); ?> <small>filter</small></li>
			<li><?php echo AdHtml::iconFA('fire', array('fw' => TRUE)); ?> <small>fire</small></li>
			<li><?php echo AdHtml::iconFA('fire-extinguisher', array('fw' => TRUE)); ?> <small>fire-extinguisher</small></li>
			<li><?php echo AdHtml::iconFA('flag', array('fw' => TRUE)); ?> <small>flag</small></li>
			<li><?php echo AdHtml::iconFA('flag-checkered', array('fw' => TRUE)); ?> <small>flag-checkered</small></li>
			<li><?php echo AdHtml::iconFA('flag-o', array('fw' => TRUE)); ?> <small>flag-o</small></li>
			<li><?php echo AdHtml::iconFA('flash', array('fw' => TRUE)); ?> <small>flash <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('flask', array('fw' => TRUE)); ?> <small>flask</small></li>
			<li><?php echo AdHtml::iconFA('folder', array('fw' => TRUE)); ?> <small>folder</small></li>
			<li><?php echo AdHtml::iconFA('folder-o', array('fw' => TRUE)); ?> <small>folder-o</small></li>
			<li><?php echo AdHtml::iconFA('folder-open', array('fw' => TRUE)); ?> <small>folder-open</small></li>
			<li><?php echo AdHtml::iconFA('folder-open-o', array('fw' => TRUE)); ?> <small>folder-open-o</small></li>
			<li><?php echo AdHtml::iconFA('frown-o', array('fw' => TRUE)); ?> <small>frown-o</small></li>
			<li><?php echo AdHtml::iconFA('gamepad', array('fw' => TRUE)); ?> <small>gamepad</small></li>
			<li><?php echo AdHtml::iconFA('gavel', array('fw' => TRUE)); ?> <small>gavel</small></li>
			<li><?php echo AdHtml::iconFA('gear', array('fw' => TRUE)); ?> <small>gear <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('gears', array('fw' => TRUE)); ?> <small>gears <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('gift', array('fw' => TRUE)); ?> <small>gift</small></li>
			<li><?php echo AdHtml::iconFA('glass', array('fw' => TRUE)); ?> <small>glass</small></li>
			<li><?php echo AdHtml::iconFA('globe', array('fw' => TRUE)); ?> <small>globe</small></li>
			<li><?php echo AdHtml::iconFA('group', array('fw' => TRUE)); ?> <small>group <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('hdd-o', array('fw' => TRUE)); ?> <small>hdd-o</small></li>
			<li><?php echo AdHtml::iconFA('headphones', array('fw' => TRUE)); ?> <small>headphones</small></li>
			<li><?php echo AdHtml::iconFA('heart', array('fw' => TRUE)); ?> <small>heart</small></li>
			<li><?php echo AdHtml::iconFA('heart-o', array('fw' => TRUE)); ?> <small>heart-o</small></li>
			<li><?php echo AdHtml::iconFA('home', array('fw' => TRUE)); ?> <small>home</small></li>
			<li><?php echo AdHtml::iconFA('inbox', array('fw' => TRUE)); ?> <small>inbox</small></li>
			<li><?php echo AdHtml::iconFA('info', array('fw' => TRUE)); ?> <small>info</small></li>
			<li><?php echo AdHtml::iconFA('info-circle', array('fw' => TRUE)); ?> <small>info-circle</small></li>
			<li><?php echo AdHtml::iconFA('key', array('fw' => TRUE)); ?> <small>key</small></li>
			<li><?php echo AdHtml::iconFA('keyboard-o', array('fw' => TRUE)); ?> <small>keyboard-o</small></li>
			<li><?php echo AdHtml::iconFA('laptop', array('fw' => TRUE)); ?> <small>laptop</small></li>
			<li><?php echo AdHtml::iconFA('leaf', array('fw' => TRUE)); ?> <small>leaf</small></li>
			<li><?php echo AdHtml::iconFA('legal', array('fw' => TRUE)); ?> <small>legal <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('lemon-o', array('fw' => TRUE)); ?> <small>lemon-o</small></li>
			<li><?php echo AdHtml::iconFA('level-down', array('fw' => TRUE)); ?> <small>level-down</small></li>
			<li><?php echo AdHtml::iconFA('level-up', array('fw' => TRUE)); ?> <small>level-up</small></li>
			<li><?php echo AdHtml::iconFA('lightbulb-o', array('fw' => TRUE)); ?> <small>lightbulb-o</small></li>
			<li><?php echo AdHtml::iconFA('location-arrow', array('fw' => TRUE)); ?> <small>location-arrow</small></li>
			<li><?php echo AdHtml::iconFA('lock', array('fw' => TRUE)); ?> <small>lock</small></li>
			<li><?php echo AdHtml::iconFA('magic', array('fw' => TRUE)); ?> <small>magic</small></li>
			<li><?php echo AdHtml::iconFA('magnet', array('fw' => TRUE)); ?> <small>magnet</small></li>
			<li><?php echo AdHtml::iconFA('mail-forward', array('fw' => TRUE)); ?> <small>mail-forward <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('mail-reply', array('fw' => TRUE)); ?> <small>mail-reply <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('mail-reply-all', array('fw' => TRUE)); ?> <small>mail-reply-all</small></li>
			<li><?php echo AdHtml::iconFA('male', array('fw' => TRUE)); ?> <small>male</small></li>
			<li><?php echo AdHtml::iconFA('map-marker', array('fw' => TRUE)); ?> <small>map-marker</small></li>
			<li><?php echo AdHtml::iconFA('meh-o', array('fw' => TRUE)); ?> <small>meh-o</small></li>
			<li><?php echo AdHtml::iconFA('microphone', array('fw' => TRUE)); ?> <small>microphone</small></li>
			<li><?php echo AdHtml::iconFA('microphone-slash', array('fw' => TRUE)); ?> <small>microphone-slash</small></li>
			<li><?php echo AdHtml::iconFA('minus', array('fw' => TRUE)); ?> <small>minus</small></li>
			<li><?php echo AdHtml::iconFA('minus-circle', array('fw' => TRUE)); ?> <small>minus-circle</small></li>
			<li><?php echo AdHtml::iconFA('minus-square', array('fw' => TRUE)); ?> <small>minus-square</small></li>
			<li><?php echo AdHtml::iconFA('minus-square-o', array('fw' => TRUE)); ?> <small>minus-square-o</small></li>
			<li><?php echo AdHtml::iconFA('mobile', array('fw' => TRUE)); ?> <small>mobile</small></li>
			<li><?php echo AdHtml::iconFA('mobile-phone', array('fw' => TRUE)); ?> <small>mobile-phone <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('money', array('fw' => TRUE)); ?> <small>money</small></li>
			<li><?php echo AdHtml::iconFA('moon-o', array('fw' => TRUE)); ?> <small>moon-o</small></li>
			<li><?php echo AdHtml::iconFA('music', array('fw' => TRUE)); ?> <small>music</small></li>
			<li><?php echo AdHtml::iconFA('pencil', array('fw' => TRUE)); ?> <small>pencil</small></li>
			<li><?php echo AdHtml::iconFA('pencil-square', array('fw' => TRUE)); ?> <small>pencil-square</small></li>
			<li><?php echo AdHtml::iconFA('pencil-square-o', array('fw' => TRUE)); ?> <small>pencil-square-o</small></li>
			<li><?php echo AdHtml::iconFA('phone', array('fw' => TRUE)); ?> <small>phone</small></li>
			<li><?php echo AdHtml::iconFA('phone-square', array('fw' => TRUE)); ?> <small>phone-square</small></li>
			<li><?php echo AdHtml::iconFA('picture-o', array('fw' => TRUE)); ?> <small>picture-o</small></li>
			<li><?php echo AdHtml::iconFA('plane', array('fw' => TRUE)); ?> <small>plane</small></li>
			<li><?php echo AdHtml::iconFA('plus', array('fw' => TRUE)); ?> <small>plus</small></li>
			<li><?php echo AdHtml::iconFA('plus-circle', array('fw' => TRUE)); ?> <small>plus-circle</small></li>
			<li><?php echo AdHtml::iconFA('plus-square', array('fw' => TRUE)); ?> <small>plus-square</small></li>
			<li><?php echo AdHtml::iconFA('plus-square-o', array('fw' => TRUE)); ?> <small>plus-square-o</small></li>
			<li><?php echo AdHtml::iconFA('power-off', array('fw' => TRUE)); ?> <small>power-off</small></li>
			<li><?php echo AdHtml::iconFA('print', array('fw' => TRUE)); ?> <small>print</small></li>
			<li><?php echo AdHtml::iconFA('puzzle-piece', array('fw' => TRUE)); ?> <small>puzzle-piece</small></li>
			<li><?php echo AdHtml::iconFA('qrcode', array('fw' => TRUE)); ?> <small>qrcode</small></li>
			<li><?php echo AdHtml::iconFA('question', array('fw' => TRUE)); ?> <small>question</small></li>
			<li><?php echo AdHtml::iconFA('question-circle', array('fw' => TRUE)); ?> <small>question-circle</small></li>
			<li><?php echo AdHtml::iconFA('quote-left', array('fw' => TRUE)); ?> <small>quote-left</small></li>
			<li><?php echo AdHtml::iconFA('quote-right', array('fw' => TRUE)); ?> <small>quote-right</small></li>
			<li><?php echo AdHtml::iconFA('random', array('fw' => TRUE)); ?> <small>random</small></li>
			<li><?php echo AdHtml::iconFA('refresh', array('fw' => TRUE)); ?> <small>refresh</small></li>
			<li><?php echo AdHtml::iconFA('reply', array('fw' => TRUE)); ?> <small>reply</small></li>
			<li><?php echo AdHtml::iconFA('reply-all', array('fw' => TRUE)); ?> <small>reply-all</small></li>
			<li><?php echo AdHtml::iconFA('retweet', array('fw' => TRUE)); ?> <small>retweet</small></li>
			<li><?php echo AdHtml::iconFA('road', array('fw' => TRUE)); ?> <small>road</small></li>
			<li><?php echo AdHtml::iconFA('rocket', array('fw' => TRUE)); ?> <small>rocket</small></li>
			<li><?php echo AdHtml::iconFA('rss', array('fw' => TRUE)); ?> <small>rss</small></li>
			<li><?php echo AdHtml::iconFA('rss-square', array('fw' => TRUE)); ?> <small>rss-square</small></li>
			<li><?php echo AdHtml::iconFA('search', array('fw' => TRUE)); ?> <small>search</small></li>
			<li><?php echo AdHtml::iconFA('search-minus', array('fw' => TRUE)); ?> <small>search-minus</small></li>
			<li><?php echo AdHtml::iconFA('search-plus', array('fw' => TRUE)); ?> <small>search-plus</small></li>
			<li><?php echo AdHtml::iconFA('share', array('fw' => TRUE)); ?> <small>share</small></li>
			<li><?php echo AdHtml::iconFA('share-square', array('fw' => TRUE)); ?> <small>share-square</small></li>
			<li><?php echo AdHtml::iconFA('share-square-o', array('fw' => TRUE)); ?> <small>share-square-o</small></li>
			<li><?php echo AdHtml::iconFA('shield', array('fw' => TRUE)); ?> <small>shield</small></li>
			<li><?php echo AdHtml::iconFA('shopping-cart', array('fw' => TRUE)); ?> <small>shopping-cart</small></li>
			<li><?php echo AdHtml::iconFA('sign-in', array('fw' => TRUE)); ?> <small>sign-in</small></li>
			<li><?php echo AdHtml::iconFA('sign-out', array('fw' => TRUE)); ?> <small>sign-out</small></li>
			<li><?php echo AdHtml::iconFA('signal', array('fw' => TRUE)); ?> <small>signal</small></li>
			<li><?php echo AdHtml::iconFA('sitemap', array('fw' => TRUE)); ?> <small>sitemap</small></li>
			<li><?php echo AdHtml::iconFA('smile-o', array('fw' => TRUE)); ?> <small>smile-o</small></li>
			<li><?php echo AdHtml::iconFA('sort', array('fw' => TRUE)); ?> <small>sort</small></li>
			<li><?php echo AdHtml::iconFA('sort-alpha-asc', array('fw' => TRUE)); ?> <small>sort-alpha-asc</small></li>
			<li><?php echo AdHtml::iconFA('sort-alpha-desc', array('fw' => TRUE)); ?> <small>sort-alpha-desc</small></li>
			<li><?php echo AdHtml::iconFA('sort-amount-asc', array('fw' => TRUE)); ?> <small>sort-amount-asc</small></li>
			<li><?php echo AdHtml::iconFA('sort-amount-desc', array('fw' => TRUE)); ?> <small>sort-amount-desc</small></li>
			<li><?php echo AdHtml::iconFA('sort-asc', array('fw' => TRUE)); ?> <small>sort-asc</small></li>
			<li><?php echo AdHtml::iconFA('sort-desc', array('fw' => TRUE)); ?> <small>sort-desc</small></li>
			<li><?php echo AdHtml::iconFA('sort-down', array('fw' => TRUE)); ?> <small>sort-down <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('sort-numeric-asc', array('fw' => TRUE)); ?> <small>sort-numeric-asc</small></li>
			<li><?php echo AdHtml::iconFA('sort-numeric-desc', array('fw' => TRUE)); ?> <small>sort-numeric-desc</small></li>
			<li><?php echo AdHtml::iconFA('sort-up', array('fw' => TRUE)); ?> <small>sort-up <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('spinner', array('fw' => TRUE)); ?> <small>spinner</small></li>
			<li><?php echo AdHtml::iconFA('square', array('fw' => TRUE)); ?> <small>square</small></li>
			<li><?php echo AdHtml::iconFA('square-o', array('fw' => TRUE)); ?> <small>square-o</small></li>
			<li><?php echo AdHtml::iconFA('star', array('fw' => TRUE)); ?> <small>star</small></li>
			<li><?php echo AdHtml::iconFA('star-half', array('fw' => TRUE)); ?> <small>star-half</small></li>
			<li><?php echo AdHtml::iconFA('star-half-empty', array('fw' => TRUE)); ?> <small>star-half-empty <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('star-half-full', array('fw' => TRUE)); ?> <small>star-half-full <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('star-half-o', array('fw' => TRUE)); ?> <small>star-half-o</small></li>
			<li><?php echo AdHtml::iconFA('star-o', array('fw' => TRUE)); ?> <small>star-o</small></li>
			<li><?php echo AdHtml::iconFA('subscript', array('fw' => TRUE)); ?> <small>subscript</small></li>
			<li><?php echo AdHtml::iconFA('suitcase', array('fw' => TRUE)); ?> <small>suitcase</small></li>
			<li><?php echo AdHtml::iconFA('sun-o', array('fw' => TRUE)); ?> <small>sun-o</small></li>
			<li><?php echo AdHtml::iconFA('superscript', array('fw' => TRUE)); ?> <small>superscript</small></li>
			<li><?php echo AdHtml::iconFA('tablet', array('fw' => TRUE)); ?> <small>tablet</small></li>
			<li><?php echo AdHtml::iconFA('tachometer', array('fw' => TRUE)); ?> <small>tachometer</small></li>
			<li><?php echo AdHtml::iconFA('tag', array('fw' => TRUE)); ?> <small>tag</small></li>
			<li><?php echo AdHtml::iconFA('tags', array('fw' => TRUE)); ?> <small>tags</small></li>
			<li><?php echo AdHtml::iconFA('tasks', array('fw' => TRUE)); ?> <small>tasks</small></li>
			<li><?php echo AdHtml::iconFA('terminal', array('fw' => TRUE)); ?> <small>terminal</small></li>
			<li><?php echo AdHtml::iconFA('thumb-tack', array('fw' => TRUE)); ?> <small>thumb-tack</small></li>
			<li><?php echo AdHtml::iconFA('thumbs-down', array('fw' => TRUE)); ?> <small>thumbs-down</small></li>
			<li><?php echo AdHtml::iconFA('thumbs-o-down', array('fw' => TRUE)); ?> <small>thumbs-o-down</small></li>
			<li><?php echo AdHtml::iconFA('thumbs-o-up', array('fw' => TRUE)); ?> <small>thumbs-o-up</small></li>
			<li><?php echo AdHtml::iconFA('thumbs-up', array('fw' => TRUE)); ?> <small>thumbs-up</small></li>
			<li><?php echo AdHtml::iconFA('ticket', array('fw' => TRUE)); ?> <small>ticket</small></li>
			<li><?php echo AdHtml::iconFA('times', array('fw' => TRUE)); ?> <small>times</small></li>
			<li><?php echo AdHtml::iconFA('times-circle', array('fw' => TRUE)); ?> <small>times-circle</small></li>
			<li><?php echo AdHtml::iconFA('times-circle-o', array('fw' => TRUE)); ?> <small>times-circle-o</small></li>
			<li><?php echo AdHtml::iconFA('tint', array('fw' => TRUE)); ?> <small>tint</small></li>
			<li><?php echo AdHtml::iconFA('toggle-down', array('fw' => TRUE)); ?> <small>toggle-down <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('toggle-left', array('fw' => TRUE)); ?> <small>toggle-left <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('toggle-right', array('fw' => TRUE)); ?> <small>toggle-right <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('toggle-up', array('fw' => TRUE)); ?> <small>toggle-up <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('trash-o', array('fw' => TRUE)); ?> <small>trash-o</small></li>
			<li><?php echo AdHtml::iconFA('trophy', array('fw' => TRUE)); ?> <small>trophy</small></li>
			<li><?php echo AdHtml::iconFA('truck', array('fw' => TRUE)); ?> <small>truck</small></li>
			<li><?php echo AdHtml::iconFA('umbrella', array('fw' => TRUE)); ?> <small>umbrella</small></li>
			<li><?php echo AdHtml::iconFA('unlock', array('fw' => TRUE)); ?> <small>unlock</small></li>
			<li><?php echo AdHtml::iconFA('unlock-alt', array('fw' => TRUE)); ?> <small>unlock-alt</small></li>
			<li><?php echo AdHtml::iconFA('unsorted', array('fw' => TRUE)); ?> <small>unsorted <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('upload', array('fw' => TRUE)); ?> <small>upload</small></li>
			<li><?php echo AdHtml::iconFA('user', array('fw' => TRUE)); ?> <small>user</small></li>
			<li><?php echo AdHtml::iconFA('users', array('fw' => TRUE)); ?> <small>users</small></li>
			<li><?php echo AdHtml::iconFA('video-camera', array('fw' => TRUE)); ?> <small>video-camera</small></li>
			<li><?php echo AdHtml::iconFA('volume-down', array('fw' => TRUE)); ?> <small>volume-down</small></li>
			<li><?php echo AdHtml::iconFA('volume-off', array('fw' => TRUE)); ?> <small>volume-off</small></li>
			<li><?php echo AdHtml::iconFA('volume-up', array('fw' => TRUE)); ?> <small>volume-up</small></li>
			<li><?php echo AdHtml::iconFA('warning', array('fw' => TRUE)); ?> <small>warning <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('wheelchair', array('fw' => TRUE)); ?> <small>wheelchair</small></li>
			<li><?php echo AdHtml::iconFA('wrench', array('fw' => TRUE)); ?> <small>wrench</small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Form Control Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('check-square', array('fw' => TRUE)); ?> <small>check-square</small></li>
			<li><?php echo AdHtml::iconFA('check-square-o', array('fw' => TRUE)); ?> <small>check-square-o</small></li>
			<li><?php echo AdHtml::iconFA('circle', array('fw' => TRUE)); ?> <small>circle</small></li>
			<li><?php echo AdHtml::iconFA('circle-o', array('fw' => TRUE)); ?> <small>circle-o</small></li>
			<li><?php echo AdHtml::iconFA('dot-circle-o', array('fw' => TRUE)); ?> <small>dot-circle-o</small></li>
			<li><?php echo AdHtml::iconFA('minus-square', array('fw' => TRUE)); ?> <small>minus-square</small></li>
			<li><?php echo AdHtml::iconFA('minus-square-o', array('fw' => TRUE)); ?> <small>minus-square-o</small></li>
			<li><?php echo AdHtml::iconFA('plus-square', array('fw' => TRUE)); ?> <small>plus-square</small></li>
			<li><?php echo AdHtml::iconFA('plus-square-o', array('fw' => TRUE)); ?> <small>plus-square-o</small></li>
			<li><?php echo AdHtml::iconFA('square', array('fw' => TRUE)); ?> <small>square</small></li>
			<li><?php echo AdHtml::iconFA('square-o', array('fw' => TRUE)); ?> <small>square-o</small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Currency Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('bitcoin', array('fw' => TRUE)); ?> <small>bitcoin <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('btc', array('fw' => TRUE)); ?> <small>btc</small></li>
			<li><?php echo AdHtml::iconFA('cny', array('fw' => TRUE)); ?> <small>cny <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('dollar', array('fw' => TRUE)); ?> <small>dollar <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('eur', array('fw' => TRUE)); ?> <small>eur</small></li>
			<li><?php echo AdHtml::iconFA('euro', array('fw' => TRUE)); ?> <small>euro <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('gbp', array('fw' => TRUE)); ?> <small>gbp</small></li>
			<li><?php echo AdHtml::iconFA('inr', array('fw' => TRUE)); ?> <small>inr</small></li>
			<li><?php echo AdHtml::iconFA('jpy', array('fw' => TRUE)); ?> <small>jpy</small></li>
			<li><?php echo AdHtml::iconFA('krw', array('fw' => TRUE)); ?> <small>krw</small></li>
			<li><?php echo AdHtml::iconFA('money', array('fw' => TRUE)); ?> <small>money</small></li>
			<li><?php echo AdHtml::iconFA('rmb', array('fw' => TRUE)); ?> <small>rmb <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('rouble', array('fw' => TRUE)); ?> <small>rouble <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('rub', array('fw' => TRUE)); ?> <small>rub</small></li>
			<li><?php echo AdHtml::iconFA('ruble', array('fw' => TRUE)); ?> <small>ruble <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('rupee', array('fw' => TRUE)); ?> <small>rupee <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('try', array('fw' => TRUE)); ?> <small>try</small></li>
			<li><?php echo AdHtml::iconFA('turkish-lira', array('fw' => TRUE)); ?> <small>turkish-lira <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('usd', array('fw' => TRUE)); ?> <small>usd</small></li>
			<li><?php echo AdHtml::iconFA('won', array('fw' => TRUE)); ?> <small>won <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('yen', array('fw' => TRUE)); ?> <small>yen <span class="text-muted">(alias)</span></small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Text Editor Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('align-center', array('fw' => TRUE)); ?> <small>align-center</small></li>
			<li><?php echo AdHtml::iconFA('align-justify', array('fw' => TRUE)); ?> <small>align-justify</small></li>
			<li><?php echo AdHtml::iconFA('align-left', array('fw' => TRUE)); ?> <small>align-left</small></li>
			<li><?php echo AdHtml::iconFA('align-right', array('fw' => TRUE)); ?> <small>align-right</small></li>
			<li><?php echo AdHtml::iconFA('bold', array('fw' => TRUE)); ?> <small>bold</small></li>
			<li><?php echo AdHtml::iconFA('chain', array('fw' => TRUE)); ?> <small>chain <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('chain-broken', array('fw' => TRUE)); ?> <small>chain-broken</small></li>
			<li><?php echo AdHtml::iconFA('clipboard', array('fw' => TRUE)); ?> <small>clipboard</small></li>
			<li><?php echo AdHtml::iconFA('columns', array('fw' => TRUE)); ?> <small>columns</small></li>
			<li><?php echo AdHtml::iconFA('copy', array('fw' => TRUE)); ?> <small>copy <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('cut', array('fw' => TRUE)); ?> <small>cut <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('dedent', array('fw' => TRUE)); ?> <small>dedent <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('eraser', array('fw' => TRUE)); ?> <small>eraser</small></li>
			<li><?php echo AdHtml::iconFA('file', array('fw' => TRUE)); ?> <small>file</small></li>
			<li><?php echo AdHtml::iconFA('file-o', array('fw' => TRUE)); ?> <small>file-o</small></li>
			<li><?php echo AdHtml::iconFA('file-text', array('fw' => TRUE)); ?> <small>file-text</small></li>
			<li><?php echo AdHtml::iconFA('file-text-o', array('fw' => TRUE)); ?> <small>file-text-o</small></li>
			<li><?php echo AdHtml::iconFA('files-o', array('fw' => TRUE)); ?> <small>files-o</small></li>
			<li><?php echo AdHtml::iconFA('floppy-o', array('fw' => TRUE)); ?> <small>floppy-o</small></li>
			<li><?php echo AdHtml::iconFA('font', array('fw' => TRUE)); ?> <small>font</small></li>
			<li><?php echo AdHtml::iconFA('indent', array('fw' => TRUE)); ?> <small>indent</small></li>
			<li><?php echo AdHtml::iconFA('italic', array('fw' => TRUE)); ?> <small>italic</small></li>
			<li><?php echo AdHtml::iconFA('link', array('fw' => TRUE)); ?> <small>link</small></li>
			<li><?php echo AdHtml::iconFA('list', array('fw' => TRUE)); ?> <small>list</small></li>
			<li><?php echo AdHtml::iconFA('list-alt', array('fw' => TRUE)); ?> <small>list-alt</small></li>
			<li><?php echo AdHtml::iconFA('list-ol', array('fw' => TRUE)); ?> <small>list-ol</small></li>
			<li><?php echo AdHtml::iconFA('list-ul', array('fw' => TRUE)); ?> <small>list-ul</small></li>
			<li><?php echo AdHtml::iconFA('outdent', array('fw' => TRUE)); ?> <small>outdent</small></li>
			<li><?php echo AdHtml::iconFA('paperclip', array('fw' => TRUE)); ?> <small>paperclip</small></li>
			<li><?php echo AdHtml::iconFA('paste', array('fw' => TRUE)); ?> <small>paste <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('repeat', array('fw' => TRUE)); ?> <small>repeat</small></li>
			<li><?php echo AdHtml::iconFA('rotate-left', array('fw' => TRUE)); ?> <small>rotate-left <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('rotate-right', array('fw' => TRUE)); ?> <small>rotate-right <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('save', array('fw' => TRUE)); ?> <small>save <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('scissors', array('fw' => TRUE)); ?> <small>scissors</small></li>
			<li><?php echo AdHtml::iconFA('strikethrough', array('fw' => TRUE)); ?> <small>strikethrough</small></li>
			<li><?php echo AdHtml::iconFA('table', array('fw' => TRUE)); ?> <small>table</small></li>
			<li><?php echo AdHtml::iconFA('text-height', array('fw' => TRUE)); ?> <small>text-height</small></li>
			<li><?php echo AdHtml::iconFA('text-width', array('fw' => TRUE)); ?> <small>text-width</small></li>
			<li><?php echo AdHtml::iconFA('th', array('fw' => TRUE)); ?> <small>th</small></li>
			<li><?php echo AdHtml::iconFA('th-large', array('fw' => TRUE)); ?> <small>th-large</small></li>
			<li><?php echo AdHtml::iconFA('th-list', array('fw' => TRUE)); ?> <small>th-list</small></li>
			<li><?php echo AdHtml::iconFA('underline', array('fw' => TRUE)); ?> <small>underline</small></li>
			<li><?php echo AdHtml::iconFA('undo', array('fw' => TRUE)); ?> <small>undo</small></li>
			<li><?php echo AdHtml::iconFA('unlink', array('fw' => TRUE)); ?> <small>unlink <span class="text-muted">(alias)</span></small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Directional Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('angle-double-down', array('fw' => TRUE)); ?> <small>angle-double-down</small></li>
			<li><?php echo AdHtml::iconFA('angle-double-left', array('fw' => TRUE)); ?> <small>angle-double-left</small></li>
			<li><?php echo AdHtml::iconFA('angle-double-right', array('fw' => TRUE)); ?> <small>angle-double-right</small></li>
			<li><?php echo AdHtml::iconFA('angle-double-up', array('fw' => TRUE)); ?> <small>angle-double-up</small></li>
			<li><?php echo AdHtml::iconFA('angle-down', array('fw' => TRUE)); ?> <small>angle-down</small></li>
			<li><?php echo AdHtml::iconFA('angle-left', array('fw' => TRUE)); ?> <small>angle-left</small></li>
			<li><?php echo AdHtml::iconFA('angle-right', array('fw' => TRUE)); ?> <small>angle-right</small></li>
			<li><?php echo AdHtml::iconFA('angle-up', array('fw' => TRUE)); ?> <small>angle-up</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-down', array('fw' => TRUE)); ?> <small>arrow-circle-down</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-left', array('fw' => TRUE)); ?> <small>arrow-circle-left</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-o-down', array('fw' => TRUE)); ?> <small>arrow-circle-o-down</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-o-left', array('fw' => TRUE)); ?> <small>arrow-circle-o-left</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-o-right', array('fw' => TRUE)); ?> <small>arrow-circle-o-right</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-o-up', array('fw' => TRUE)); ?> <small>arrow-circle-o-up</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-right', array('fw' => TRUE)); ?> <small>arrow-circle-right</small></li>
			<li><?php echo AdHtml::iconFA('arrow-circle-up', array('fw' => TRUE)); ?> <small>arrow-circle-up</small></li>
			<li><?php echo AdHtml::iconFA('arrow-down', array('fw' => TRUE)); ?> <small>arrow-down</small></li>
			<li><?php echo AdHtml::iconFA('arrow-left', array('fw' => TRUE)); ?> <small>arrow-left</small></li>
			<li><?php echo AdHtml::iconFA('arrow-right', array('fw' => TRUE)); ?> <small>arrow-right</small></li>
			<li><?php echo AdHtml::iconFA('arrow-up', array('fw' => TRUE)); ?> <small>arrow-up</small></li>
			<li><?php echo AdHtml::iconFA('arrows', array('fw' => TRUE)); ?> <small>arrows</small></li>
			<li><?php echo AdHtml::iconFA('arrows-alt', array('fw' => TRUE)); ?> <small>arrows-alt</small></li>
			<li><?php echo AdHtml::iconFA('arrows-h', array('fw' => TRUE)); ?> <small>arrows-h</small></li>
			<li><?php echo AdHtml::iconFA('arrows-v', array('fw' => TRUE)); ?> <small>arrows-v</small></li>
			<li><?php echo AdHtml::iconFA('caret-down', array('fw' => TRUE)); ?> <small>caret-down</small></li>
			<li><?php echo AdHtml::iconFA('caret-left', array('fw' => TRUE)); ?> <small>caret-left</small></li>
			<li><?php echo AdHtml::iconFA('caret-right', array('fw' => TRUE)); ?> <small>caret-right</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-down', array('fw' => TRUE)); ?> <small>caret-square-o-down</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-left', array('fw' => TRUE)); ?> <small>caret-square-o-left</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-right', array('fw' => TRUE)); ?> <small>caret-square-o-right</small></li>
			<li><?php echo AdHtml::iconFA('caret-square-o-up', array('fw' => TRUE)); ?> <small>caret-square-o-up</small></li>
			<li><?php echo AdHtml::iconFA('caret-up', array('fw' => TRUE)); ?> <small>caret-up</small></li>
			<li><?php echo AdHtml::iconFA('chevron-circle-down', array('fw' => TRUE)); ?> <small>chevron-circle-down</small></li>
			<li><?php echo AdHtml::iconFA('chevron-circle-left', array('fw' => TRUE)); ?> <small>chevron-circle-left</small></li>
			<li><?php echo AdHtml::iconFA('chevron-circle-right', array('fw' => TRUE)); ?> <small>chevron-circle-right</small></li>
			<li><?php echo AdHtml::iconFA('chevron-circle-up', array('fw' => TRUE)); ?> <small>chevron-circle-up</small></li>
			<li><?php echo AdHtml::iconFA('chevron-down', array('fw' => TRUE)); ?> <small>chevron-down</small></li>
			<li><?php echo AdHtml::iconFA('chevron-left', array('fw' => TRUE)); ?> <small>chevron-left</small></li>
			<li><?php echo AdHtml::iconFA('chevron-right', array('fw' => TRUE)); ?> <small>chevron-right</small></li>
			<li><?php echo AdHtml::iconFA('chevron-up', array('fw' => TRUE)); ?> <small>chevron-up</small></li>
			<li><?php echo AdHtml::iconFA('hand-o-down', array('fw' => TRUE)); ?> <small>hand-o-down</small></li>
			<li><?php echo AdHtml::iconFA('hand-o-left', array('fw' => TRUE)); ?> <small>hand-o-left</small></li>
			<li><?php echo AdHtml::iconFA('hand-o-right', array('fw' => TRUE)); ?> <small>hand-o-right</small></li>
			<li><?php echo AdHtml::iconFA('hand-o-up', array('fw' => TRUE)); ?> <small>hand-o-up</small></li>
			<li><?php echo AdHtml::iconFA('long-arrow-down', array('fw' => TRUE)); ?> <small>long-arrow-down</small></li>
			<li><?php echo AdHtml::iconFA('long-arrow-left', array('fw' => TRUE)); ?> <small>long-arrow-left</small></li>
			<li><?php echo AdHtml::iconFA('long-arrow-right', array('fw' => TRUE)); ?> <small>long-arrow-right</small></li>
			<li><?php echo AdHtml::iconFA('long-arrow-up', array('fw' => TRUE)); ?> <small>long-arrow-up</small></li>
			<li><?php echo AdHtml::iconFA('toggle-down', array('fw' => TRUE)); ?> <small>toggle-down <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('toggle-left', array('fw' => TRUE)); ?> <small>toggle-left <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('toggle-right', array('fw' => TRUE)); ?> <small>toggle-right <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('toggle-up', array('fw' => TRUE)); ?> <small>toggle-up <span class="text-muted">(alias)</span></small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Video Player Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('arrows-alt', array('fw' => TRUE)); ?> <small>arrows-alt</small></li>
			<li><?php echo AdHtml::iconFA('backward', array('fw' => TRUE)); ?> <small>backward</small></li>
			<li><?php echo AdHtml::iconFA('compress', array('fw' => TRUE)); ?> <small>compress</small></li>
			<li><?php echo AdHtml::iconFA('eject', array('fw' => TRUE)); ?> <small>eject</small></li>
			<li><?php echo AdHtml::iconFA('expand', array('fw' => TRUE)); ?> <small>expand</small></li>
			<li><?php echo AdHtml::iconFA('fast-backward', array('fw' => TRUE)); ?> <small>fast-backward</small></li>
			<li><?php echo AdHtml::iconFA('fast-forward', array('fw' => TRUE)); ?> <small>fast-forward</small></li>
			<li><?php echo AdHtml::iconFA('forward', array('fw' => TRUE)); ?> <small>forward</small></li>
			<li><?php echo AdHtml::iconFA('pause', array('fw' => TRUE)); ?> <small>pause</small></li>
			<li><?php echo AdHtml::iconFA('play', array('fw' => TRUE)); ?> <small>play</small></li>
			<li><?php echo AdHtml::iconFA('play-circle', array('fw' => TRUE)); ?> <small>play-circle</small></li>
			<li><?php echo AdHtml::iconFA('play-circle-o', array('fw' => TRUE)); ?> <small>play-circle-o</small></li>
			<li><?php echo AdHtml::iconFA('step-backward', array('fw' => TRUE)); ?> <small>step-backward</small></li>
			<li><?php echo AdHtml::iconFA('step-forward', array('fw' => TRUE)); ?> <small>step-forward</small></li>
			<li><?php echo AdHtml::iconFA('stop', array('fw' => TRUE)); ?> <small>stop</small></li>
			<li><?php echo AdHtml::iconFA('youtube-play', array('fw' => TRUE)); ?> <small>youtube-play</small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Brand Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('adn', array('fw' => TRUE)); ?> <small>adn</small></li>
			<li><?php echo AdHtml::iconFA('android', array('fw' => TRUE)); ?> <small>android</small></li>
			<li><?php echo AdHtml::iconFA('apple', array('fw' => TRUE)); ?> <small>apple</small></li>
			<li><?php echo AdHtml::iconFA('bitbucket', array('fw' => TRUE)); ?> <small>bitbucket</small></li>
			<li><?php echo AdHtml::iconFA('bitbucket-square', array('fw' => TRUE)); ?> <small>bitbucket-square</small></li>
			<li><?php echo AdHtml::iconFA('bitcoin', array('fw' => TRUE)); ?> <small>bitcoin <span class="text-muted">(alias)</span></small></li>
			<li><?php echo AdHtml::iconFA('btc', array('fw' => TRUE)); ?> <small>btc</small></li>
			<li><?php echo AdHtml::iconFA('css3', array('fw' => TRUE)); ?> <small>css3</small></li>
			<li><?php echo AdHtml::iconFA('dribbble', array('fw' => TRUE)); ?> <small>dribbble</small></li>
			<li><?php echo AdHtml::iconFA('dropbox', array('fw' => TRUE)); ?> <small>dropbox</small></li>
			<li><?php echo AdHtml::iconFA('facebook', array('fw' => TRUE)); ?> <small>facebook</small></li>
			<li><?php echo AdHtml::iconFA('facebook-square', array('fw' => TRUE)); ?> <small>facebook-square</small></li>
			<li><?php echo AdHtml::iconFA('flickr', array('fw' => TRUE)); ?> <small>flickr</small></li>
			<li><?php echo AdHtml::iconFA('foursquare', array('fw' => TRUE)); ?> <small>foursquare</small></li>
			<li><?php echo AdHtml::iconFA('github', array('fw' => TRUE)); ?> <small>github</small></li>
			<li><?php echo AdHtml::iconFA('github-alt', array('fw' => TRUE)); ?> <small>github-alt</small></li>
			<li><?php echo AdHtml::iconFA('github-square', array('fw' => TRUE)); ?> <small>github-square</small></li>
			<li><?php echo AdHtml::iconFA('gittip', array('fw' => TRUE)); ?> <small>gittip</small></li>
			<li><?php echo AdHtml::iconFA('google-plus', array('fw' => TRUE)); ?> <small>google-plus</small></li>
			<li><?php echo AdHtml::iconFA('google-plus-square', array('fw' => TRUE)); ?> <small>google-plus-square</small></li>
			<li><?php echo AdHtml::iconFA('html5', array('fw' => TRUE)); ?> <small>html5</small></li>
			<li><?php echo AdHtml::iconFA('instagram', array('fw' => TRUE)); ?> <small>instagram</small></li>
			<li><?php echo AdHtml::iconFA('linkedin', array('fw' => TRUE)); ?> <small>linkedin</small></li>
			<li><?php echo AdHtml::iconFA('linkedin-square', array('fw' => TRUE)); ?> <small>linkedin-square</small></li>
			<li><?php echo AdHtml::iconFA('linux', array('fw' => TRUE)); ?> <small>linux</small></li>
			<li><?php echo AdHtml::iconFA('maxcdn', array('fw' => TRUE)); ?> <small>maxcdn</small></li>
			<li><?php echo AdHtml::iconFA('pagelines', array('fw' => TRUE)); ?> <small>pagelines</small></li>
			<li><?php echo AdHtml::iconFA('pinterest', array('fw' => TRUE)); ?> <small>pinterest</small></li>
			<li><?php echo AdHtml::iconFA('pinterest-square', array('fw' => TRUE)); ?> <small>pinterest-square</small></li>
			<li><?php echo AdHtml::iconFA('renren', array('fw' => TRUE)); ?> <small>renren</small></li>
			<li><?php echo AdHtml::iconFA('skype', array('fw' => TRUE)); ?> <small>skype</small></li>
			<li><?php echo AdHtml::iconFA('stack-exchange', array('fw' => TRUE)); ?> <small>stack-exchange</small></li>
			<li><?php echo AdHtml::iconFA('stack-overflow', array('fw' => TRUE)); ?> <small>stack-overflow</small></li>
			<li><?php echo AdHtml::iconFA('trello', array('fw' => TRUE)); ?> <small>trello</small></li>
			<li><?php echo AdHtml::iconFA('tumblr', array('fw' => TRUE)); ?> <small>tumblr</small></li>
			<li><?php echo AdHtml::iconFA('tumblr-square', array('fw' => TRUE)); ?> <small>tumblr-square</small></li>
			<li><?php echo AdHtml::iconFA('twitter', array('fw' => TRUE)); ?> <small>twitter</small></li>
			<li><?php echo AdHtml::iconFA('twitter-square', array('fw' => TRUE)); ?> <small>twitter-square</small></li>
			<li><?php echo AdHtml::iconFA('vimeo-square', array('fw' => TRUE)); ?> <small>vimeo-square</small></li>
			<li><?php echo AdHtml::iconFA('vk', array('fw' => TRUE)); ?> <small>vk</small></li>
			<li><?php echo AdHtml::iconFA('weibo', array('fw' => TRUE)); ?> <small>weibo</small></li>
			<li><?php echo AdHtml::iconFA('windows', array('fw' => TRUE)); ?> <small>windows</small></li>
			<li><?php echo AdHtml::iconFA('xing', array('fw' => TRUE)); ?> <small>xing</small></li>
			<li><?php echo AdHtml::iconFA('xing-square', array('fw' => TRUE)); ?> <small>xing-square</small></li>
			<li><?php echo AdHtml::iconFA('youtube', array('fw' => TRUE)); ?> <small>youtube</small></li>
			<li><?php echo AdHtml::iconFA('youtube-play', array('fw' => TRUE)); ?> <small>youtube-play</small></li>
			<li><?php echo AdHtml::iconFA('youtube-square', array('fw' => TRUE)); ?> <small>youtube-square</small></li>
		</ul>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Medical Icons</h4>
		<ul class="icons unstyled clearfix list">
			<li><?php echo AdHtml::iconFA('ambulance', array('fw' => TRUE)); ?> <small>ambulance</small></li>
			<li><?php echo AdHtml::iconFA('h-square', array('fw' => TRUE)); ?> <small>h-square</small></li>
			<li><?php echo AdHtml::iconFA('hospital-o', array('fw' => TRUE)); ?> <small>hospital-o</small></li>
			<li><?php echo AdHtml::iconFA('medkit', array('fw' => TRUE)); ?> <small>medkit</small></li>
			<li><?php echo AdHtml::iconFA('plus-square', array('fw' => TRUE)); ?> <small>plus-square</small></li>
			<li><?php echo AdHtml::iconFA('stethoscope', array('fw' => TRUE)); ?> <small>stethoscope</small></li>
			<li><?php echo AdHtml::iconFA('user-md', array('fw' => TRUE)); ?> <small>user-md</small></li>
			<li><?php echo AdHtml::iconFA('wheelchair', array('fw' => TRUE)); ?> <small>wheelchair</small></li>
		</ul>
	</section>
</section>