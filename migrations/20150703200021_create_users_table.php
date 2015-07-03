<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function change()
    {
             // create the table
        $table = $this->table('user');
        $table->addColumn('id', 'integer')
              ->addColumn('created', 'datetime')
              ->create();
    }
}
