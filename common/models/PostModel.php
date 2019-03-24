<?php

namespace common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property string $title 标题
 * @property string $summary 摘要
 * @property string $content 内容
 * @property string $label_img 标签图
 * @property int $cat_id 分类id
 * @property int $user_id 用户id
 * @property string $user_name 用户名
 * @property int $is_valid 是否有效：0-未发布 1-已发布
 * @property int $created_at 创建时间
 * @property int $updated_at 更新时间
 * @property int $id
 */
class PostModel extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['cat_id', 'user_id', 'is_valid', 'created_at', 'updated_at', 'id'], 'integer'],
            [['id'], 'required'],
            [['title', 'summary', 'label_img', 'user_name'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title' => '标题',
            'summary' => '概况',
            'content' => '内容',
            'label_img' => '标签图',
            'cat_id' => '分类ID',
            'user_id' => '用户ID',
            'user_name' => '用户名',
            'is_valid' => '是否可用',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'id' => 'ID',
        ];
    }


}
