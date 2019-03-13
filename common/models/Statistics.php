<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "statistics".
 *
 * @property string $id ID
 * @property int $article_id 文章ID
 * @property int $visit 访问量
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class Statistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'statistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['article_id'], 'required'],
            [['article_id', 'visit'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['article_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Article ID',
            'visit' => 'Visit',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
