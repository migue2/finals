<?php

use yii\db\Migration;

/**
 * Handles the creation of table `company`.
 */
class m180524_065028_create_company_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'laptops_id' => $this->integer()->notNull(),
            'location' => $this->text()->notNull(),
            'buyer_id' => $this->integer()->notNull(),
            'phone_no' => $this->string()->notNull()
       ]);
        $this->createIndex(
            'idx-company-laptops_id',
            'company','laptops_id'
        );

        $this->addForeignKey(
            'fk-company-laptops',
            'company','laptops_id',
            'laptops', 'id'
        );
        $this->createIndex(
            'idx-company-buyer_id',
            'company','buyer_id'
        );

        $this->addForeignKey(
            'fk-company-buyer',
            'company','buyer_id',
            'buyer', 'id'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-company-laptops', 'company');
        $this->dropIndex('idx-company-laptops_id','company');
        $this->dropTable('company');
    }
}