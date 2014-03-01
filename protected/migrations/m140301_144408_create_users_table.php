<?php

class m140301_144408_create_users_table extends CDbMigration
{
    public function up()
    {
        // todo
    }

    public function down()
    {
        $this->dropTable('users');
    }
}
