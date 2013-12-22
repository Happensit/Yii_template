<?php

class m130930_043259_InstallUsers extends CDbMigration
{
	protected $MySqlOptions = 'ENGINE=InnoDB CHARSET=utf8';

	private $tableName = '{{users}}';

	public function safeUp()
	{
		$this->createTable($this->tableName, array(
			'id' => 'pk',
			'username' => 'string NOT NULL',
			'password' => 'string NOT NULL',
			'role_id' => 'int NOT NULL',
			'is_active' => 'int NOT NULL DEFAULT 0',
			'last_login' => 'datetime',
			'created' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
		), $this->MySqlOptions);

		$this->createIndex('user_username', $this->tableName, 'username', true);
		
		// public void addForeignKey(string $name, string $table, string $columns, string $refTable, string $refColumns, string $delete=NULL, string $update=NULL)
		$this->addForeignKey('fk_users_user_roles', $this->tableName, 'role_id', '{{user_roles}}', 'id', 'RESTRICT', 'RESTRICT');


		$username = 'admin';
		$password = '1111';

		$this->insert($this->tableName, array(
			'username' => $username,
			'password' => AdString::encrypting($password),
			'role_id' => '1',
			'is_active' => '1',
		));
	}

	public function safeDown()
	{
		$this->dropTable($this->tableName);
	}
}