<?php

use yii\db\Migration;

/**
 * Class m210118_123456_create_invoice_item_table
 */
class m210118_123456_create_invoice_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%invoice_item}}', [
            'id' => $this->primaryKey(),
            'ItemName' => $this->string()->notNull(),
            'ItemQty' => $this->integer()->notNull(),
            'ItemPrice' => $this->float()->notNull(),
        ]);

        // You can add indexes, foreign keys, etc., if necessary
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%invoice_item}}');
    }
}
