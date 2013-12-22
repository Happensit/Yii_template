<?php

class m130930_043260_InstallUserProfile extends CDbMigration
{
	protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8';

	private $tableName = '{{user_profile}}';

	public function safeUp()
	{
		$this->createTable($this->tableName, array(
			'id' => 'pk',
			'user_id' => 'int NOT NULL',
			'name' => 'string',
			'cid' => 'string',
			'birthday' => 'date',
			'sex' => 'string',
			'tel' => 'string',
			'email' => 'string',
			'address' => 'string',
			'image' => 'string',
			'about' => 'text',
		), $this->MySqlOptions);

		$this->addForeignKey('fk_user_profile_users', $this->tableName, 'user_id', '{{users}}', 'id', 'CASCADE', 'RESTRICT');

		$this->insert($this->tableName, array(
			'user_id' => '1',
			'name' => 'ChouAndy',
			'sex' => '男',
			'tel' => '0986-205773',
			'email' => 'chouandy625@gmail.com',
		));
	}

	public function safeDown()
	{
		$this->dropTable($this->tableName);
	}
}