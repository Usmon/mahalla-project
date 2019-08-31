<?php

use yii\db\Migration;

/**
 * Class m190831_114841_regions
 */
class m190831_114841_regions extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('regions', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()
        ]);
        //Set data
        $this->insert('regions', [
            'name' => 'Қорақалпоғистон Республикаси',
        ]);
        $this->insert('regions', [
            'name' => 'Андижон вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Бухоро вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Жиззах вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Қашқадарё вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Навоий вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Наманган вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Сурхондарё вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Сирдарё вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Тошкент вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Фарғона вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Хоразм вилояти',
        ]);
        $this->insert('regions', [
            'name' => 'Тошкент шаҳри',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190831_114841_regions cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190831_114841_regions cannot be reverted.\n";

        return false;
    }
    */
}
