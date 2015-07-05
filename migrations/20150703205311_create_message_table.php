<?php

use Phinx\Migration\AbstractMigration;

class CreateMessageTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('message');
        $table->addColumn('name', 'text');
        $table->create();
    }
}
