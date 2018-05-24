<?php

use yii\db\Migration;

/**
 * Handles the creation of table `buyer`.
 */
class m180524_051453_create_buyer_table extends Migration
{
   /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('buyer', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'gender' => $this->string(10)->notNull(),
            'address' => $this->string(500)->notNull(),
            'phone_no'=>$this->string(200)->notnull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('buyer');
    }
}
