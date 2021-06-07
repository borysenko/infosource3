<?php


namespace app\models;

use yii\db\ActiveRecord;

Class News extends ActiveRecord
{
    public static function tableName()
    {
        return '{{news}}';
    }

    public function rules()
    {
        return [
            [['content'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'content' => 'Описание',
        ];
    }

    public function loadContent()
    {
        $data = json_decode(file_get_contents('https://random-word-api.herokuapp.com//word?number=10'));
        $this->content = implode(', ', $data);
    }

    public function randomContent()
    {
        $data = explode(", ", $this->content);
        shuffle($data);
        $this->content = implode(', ', $data);
    }
}