<?php

use yii\db\Migration;

/**
 * Class m190831_121009_districts
 */
class m190831_121009_districts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('districts', [
            'id' => $this->primaryKey(),
            'region_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull()
        ]);
        $this->createIndex('idx-regions', 'districts', 'region_id');
        $this->addForeignKey('fk_regions_id',
                             'districts',
                           'region_id',
                           'regions',
                         'id'
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190831_121009_districts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190831_121009_districts cannot be reverted.\n";

        return false;
    }
    */
}
