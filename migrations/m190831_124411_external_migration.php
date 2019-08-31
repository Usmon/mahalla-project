<?php

use yii\db\Migration;

/**
 * Class m190831_124411_external_migration
 */
class m190831_124411_external_migration extends Migration
{

    static private $name = 'external_migrations';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::$name, [
            'id' => $this->primaryKey(),
            'neighborhood_id' => $this->integer()->notNull(),
            'going_abroad_mens' => $this->integer()->notNull(),
            'going_abroad_womens' => $this->integer()->notNull(),
            'no_contact' => $this->integer()->notNull(),
            'no_contact' => $this->integer()->notNull(),
            'emigrants_mens' => $this->integer()->notNull(),
            'emigrants_womens' => $this->integer()->notNull(),
            'deported' => $this->integer()->notNull(),
            'public_interview' => $this->integer()->notNull(),
            'employed' => $this->integer()->notNull(),
            'medical_exam' => $this->integer()->notNull(),
            'disease_count' => $this->integer()->notNull(),
            'lost_pass' => $this->integer()->notNull(),
            'renewed_pass' => $this->integer()->notNull(),
            'country_rus' => $this->integer()->notNull(),
            'country_usa' => $this->integer()->notNull(),
            'country_pol' => $this->integer()->notNull(),
            'country_eng' => $this->integer()->notNull(),
        ]);

        $this->createIndex('idx_neighborhood_id',self::$name, 'neighborhood_id');
        $this->addForeignKey('fk_neighborhood', self::$name, 'neighborhood_id' ,'neighborhoods' ,'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190831_124411_external_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190831_124411_external_migration cannot be reverted.\n";

        return false;
    }
    */
}
