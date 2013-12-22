<?php

class m130930_043258_InstallUserRoles extends CDbMigration
{
	protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8';

	private $tableName = '{{user_roles}}';

	public function safeUp()
	{
		$this->createTable($this->tableName, array(
			'id' => 'pk',
			'name' => 'string NOT NULL',
			'alias' => 'string NOT NULL',
		), $this->MySqlOptions);

		$roles = array(
			array(
				'name' => 'admin',
				'alias' => '管理員',
			),
			array(
				'name' => 'user',
				'alias' => '一般使用者',
			),
		);

		foreach ($roles as $value) {
			$this->insert($this->tableName, $value);
		}
	}

	public function safeDown()
	{
		$this->dropTable($this->tableName);
	}
}