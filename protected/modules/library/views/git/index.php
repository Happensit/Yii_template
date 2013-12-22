<div class="page-header">
	<h2>
		<?php echo AdHtml::iconFA('github-square', array('fw' => TRUE)); ?> Git 版本控制
	</h2>
</div>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 相關連結</h3>
	<ul class="list">
		<li>官網：<?php echo TbHtml::link('http://git-scm.com/', 'http://git-scm.com/', array('rel' => 'external')); ?></li>
		<li>版本：<span class="text-error">2013-12-03 v1.8.5.1</span></li>
		<li>下載：<?php echo TbHtml::link('http://git-scm.com/downloads', 'http://git-scm.com/downloads', array('rel' => 'external')); ?></li>
		<li>指令說明：<?php echo TbHtml::link('http://git-scm.com/docs', 'http://git-scm.com/docs', array('rel' => 'external')); ?></li>
		<li>線上教學：<?php echo TbHtml::link('http://git-scm.com/book', 'http://git-scm.com/book', array('rel' => 'external')); ?></li>
		<li>線上練習：<?php echo TbHtml::link('http://try.github.com/', 'http://try.github.com/', array('rel' => 'external')); ?></li>
	</ul>
</section>

<hr>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> Git 程式碼社群服務</h3>

	<ul class="list">
		<li><?php echo AdHtml::iconFA('github', array('fw' => TRUE)); ?> GitHub：<?php echo TbHtml::link('https://github.com/', 'https://github.com/', array('rel' => 'external')); ?></li>
		<li><?php echo AdHtml::iconFA('bitbucket', array('fw' => TRUE)); ?> Bitbucket：<?php echo TbHtml::link('https://bitbucket.org', 'https://bitbucket.org', array('rel' => 'external')); ?></li>
	</ul>
</section>

<hr>

<section>
	<h3><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 常用語法</h3>

	<section>
		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 設定 Git 參數</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git config --global user.name "ChouAndy"
		git config --global user.email "chouandy625@gmail.com"
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 建立自己的 Repository <small>前往欲建立的資料夾底下</small></h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git init
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 複製別人的 Repository</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git clone https://github.com/ChouAndy/yii-wab.git dir_name
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 新增修改內容並上傳</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git add -A
		git status
		git commit -m "註解內容"
		git push
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 新增 submodule</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git submodule add https://github.com/ChouAndy/andystrap.git protected/extensions/andystrap
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 更新 submodule</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git submodule foreach --recursive git pull origin master
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 修改/取消上一次的 commit</h4>

		<p>1. 修改上一次的 commit 訊息</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git commit --amend
        <?php $this->endWidget(); ?>

		<p>2. 將 file1、file2 加入上一次的 commit</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git commit --amend file1 file2 ...
        <?php $this->endWidget(); ?>

		<p>3. 取消剛剛的 commit，但保留修改過的檔案</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git reset HEAD^ --soft
        <?php $this->endWidget(); ?>

		<p>4. 取消剛剛的 commit，回到再上一次 commit 的 乾淨狀態</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git reset HEAD^ --hard
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 分支基本操作 (branch)</h4>

		<p>1. 列出所有本地端的 branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch
        <?php $this->endWidget(); ?>

		<p>2. 列出所有遠端的 branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch -r
        <?php $this->endWidget(); ?>

		<p>3. 列出所有本地及遠端的 branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch -a
        <?php $this->endWidget(); ?>

		<p>4. 建立一個新的 branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch "branch名稱"
        <?php $this->endWidget(); ?>

		<p>5. 建立一個新的 branch 並切換到該 branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git checkout -b "branch名稱"
        <?php $this->endWidget(); ?>

		<p>6. 以起始點作為基準建立一個新的 branch，起始點可以是一個 tag、branch 或是 commit</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch branch名稱 起始點
        <?php $this->endWidget(); ?>

		<p>7. 建立一個 tracking 遠端branch 的 branch，這樣以後 push/pull 都會直接對應到該 遠端branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch --track branch名稱 遠端branch
        <?php $this->endWidget(); ?>

		<p>8. 將一個已存在的 branch 設定成 tracking 遠端branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch --set-upstream branch 遠端branch
        <?php $this->endWidget(); ?>

		<p>9. 刪除 branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git branch -d "branch名稱"
        <?php $this->endWidget(); ?>

		<p>10. 刪除一個 tracking 的遠端branch</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git -r -d 遠端branch
        <?php $this->endWidget(); ?>

		<p>11. 刪除一個 repository 的 branch，通常用在刪除遠端的 branch，例如 <code>git push origin :old_branch_to_be_deleted</code></p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git push repository名稱 :遠端branch
        <?php $this->endWidget(); ?>

		<p>12. 切換到另一個 branch (所有修改過程會被保留)</p>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git checkout branch名稱
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 讓 Git Case Sensitive</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git config core.ignorecase false
        <?php $this->endWidget(); ?>

		<h4><?php echo AdHtml::iconFA('book', array('fw' => TRUE)); ?> 移除 Git Cache</h4>
		<?php $this->beginWidget('andystrap.widgets.AdHighlighter', array('language' => 'bash')); ?>
		git rm -r --cached .
        <?php $this->endWidget(); ?>

	</section>

</section>
