<?php

use yii\db\Migration;

/**
 * Class m190831_123210_neighborhoods
 */
class m190831_123210_neighborhoods extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('neighborhoods', [
            'id' => $this->primaryKey(),
            'district_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()
        ]);

        $this->createIndex('idx_district' ,'neighborhoods', 'district_id');
        $this->addForeignKey('fk_districts' ,'neighborhoods', 'district_id' ,'districts' ,'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190831_123210_neighborhoods cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190831_123210_neighborhoods cannot be reverted.\n";

        return false;
    }
    */
}
