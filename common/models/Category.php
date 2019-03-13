<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property string $id ID
 * @property string $name 分类名称
 * @property string $desc 分类描述
 * @property int $is_valid 是否启用 1-启动 2-关闭
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_valid'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['desc'], 'string', 'max' => 255],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'desc' => 'Desc',
            'is_valid' => 'Is Valid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
