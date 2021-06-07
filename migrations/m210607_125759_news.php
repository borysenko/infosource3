<?php

use yii\db\Migration;

/**
 * Class m210607_125759_news
 */
class m210607_125759_news extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'last_visit_time' => $this->integer()->null()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210607_125759_news cannot be reverted.\n";

        return false;
    }
    */
}
