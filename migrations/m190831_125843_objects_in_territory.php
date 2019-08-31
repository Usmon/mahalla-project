<?php

use yii\db\Migration;

/**
 * Class m190831_125843_objects_in_territory
 */
class m190831_125843_objects_in_territory extends Migration
{

    private static $name = 'objects_in_territory';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::$name, [
            'id' => $this->primaryKey(),
            'neighborhood_id' => $this->integer()->notNull(),
            'guzar' => $this->integer()->notNull(),
            'stores' => $this->integer()->notNull(),
            'stores' => $this->integer()->notNull(),
            'weddings' => $this->integer()->notNull(),
            'catering' => $this->integer()->notNull(),
            'internet_club' => $this->integer()->notNull(),
            'training_center' => $this->integer()->notNull(),
            'hospital' => $this->integer()->notNull(),
            'family_polyclinic' => $this->integer()->notNull(),
            'farms' => $this->integer()->notNull(),
            'playground' => $this->integer()->notNull(),
            'sports_ground' => $this->integer()->notNull(),
            'mosques' => $this->integer()->notNull(),
            'other_religious' => $this->integer()->notNull(),
            'pilgrim' => $this->integer()->notNull(),
            'cemeteries' => $this->integer()->notNull(),
            'markets' => $this->integer()->notNull(),
            'bread_production' => $this->integer()->notNull(),
            'beauty_salon' => $this->integer()->notNull(),
            'mastering' => $this->integer()->notNull(),
            'sights' => $this->integer()->notNull(),
            'libraries' => $this->integer()->notNull(),
            'pharmacy' => $this->integer()->notNull(),
            'bathrooms' => $this->integer()->notNull(),
        ]);

        $this->createIndex('idx_neighborhood_id'.self::$name,self::$name, 'neighborhood_id');
        $this->addForeignKey('fk_neighborhood_obj'.self::$name, self::$name, 'neighborhood_id' ,'neighborhoods' ,'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190831_125843_objects_in_territory cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190831_125843_objects_in_territory cannot be reverted.\n";

        return false;
    }
    */
}
