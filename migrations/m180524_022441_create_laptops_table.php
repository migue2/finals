<?php

use yii\db\Migration;

/**
 * Handles the creation of table `laptops`.
 */
class m180524_022441_create_laptops_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('laptops', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->string()->notNUll(),
            'Amount' => $this->integer(100)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('laptops');
    }
}
