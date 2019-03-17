<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/16
 * Time: 21:28
 */
namespace frontend\models;
use yii\base\Model;
class CommentForm extends Model
{
    public $comment;

    public function rules()
    {
        return[
            ['comment','string']
        ];// TODO: Change the autogenerated stub
    }

    public static function tableName()
    {
        return '{{%Comment}}';
    }


    public function attributeLabels()
    {
        return [
            'comment' => '评论内容'];
    }
}

