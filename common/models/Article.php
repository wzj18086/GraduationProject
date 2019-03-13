<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property string $id ID
 * @property string $title 标题
 * @property string $author 作者
 * @property int $category_id 分类
 * @property string $content 内容
 * @property string $image_url 图片
 * @property int $is_valid 是否有效：1-是 2-否
 * @property string $created_at 创建时间
 * @property string $updated_at 更新时间
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'required'],
            [['category_id', 'is_valid'], 'integer'],
            [['content'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'image_url'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'category_id' => 'Category ID',
            'content' => 'Content',
            'image_url' => 'Image Url',
            'is_valid' => 'Is Valid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(),['id'=>'category_id']);
    }

    public function getStatistics()
    {
        return $this->hasOne(Statistics::className(),['article_id'=>'id']);
    }
}
