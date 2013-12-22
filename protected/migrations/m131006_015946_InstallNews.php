<?php

class m131006_015946_InstallNews extends CDbMigration
{
	protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8';

	private $tableName = '{{news}}';

	public function safeUp()
	{
		$this->createTable($this->tableName, array(
			'id' => 'pk',
			'date' => 'date NOT NULL',
			'title' => 'string NOT NULL',
			'content' => 'text NOT NULL',
			'is_visible' => 'int NOT NULL DEFAULT 1',
			'created' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'creator_id' => 'int NOT NULL',
		), $this->MySqlOptions);

		$this->addForeignKey('fk_news_creator', $this->tableName, 'creator_id', '{{users}}', 'id', 'CASCADE', 'RESTRICT');
	}

	public function safeDown()
	{
		$this->dropTable($this->tableName);
	}
}