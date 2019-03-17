<?php

namespace common\models;

use common\models\base\BaseModel;
use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $comment_id
 * @property int $post_id
 * @property string $comment
 * @property int $user_id
 */
class Comment extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment_id', 'post_id', 'comment','user_id'], 'required'],
            [['comment_id', 'post_id','user_id'], 'integer'],
            [['comment'], 'string'],
            [['comment_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => 'Comment ID',
            'post_id' => 'Post ID',
            'comment' => 'Comment',
            'user_id'=>'User ID',
        ];
    }
}
