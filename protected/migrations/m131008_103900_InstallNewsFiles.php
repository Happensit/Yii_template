<?php

class m131008_103900_InstallNewsFiles extends CDbMigration
{
	protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8';

	private $tableName = '{{news_files}}';

	public function safeUp()
	{
		$this->createTable($this->tableName, array(
			'id' => 'pk',
			'news_id' => 'int NOT NULL',
			'name' => 'string NOT NULL',
			'ext' => 'string NOT NULL',
			'type' => 'string',
			'size' => 'int NOT NULL',
			'filesize' => 'string NOT NULL',
			'path' => 'string NOT NULL',
			'created' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
		), $this->MySqlOptions);

		$this->addForeignKey('fk_news_files_news', $this->tableName, 'news_id', '{{news}}', 'id', 'CASCADE', 'RESTRICT');
	}

	public function safeDown()
	{
		$this->dropTable($this->tableName);
	}
}