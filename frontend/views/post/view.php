<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/9
 * Time: 17:11
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->params['breadcrumbs'][] = ['label'=>$cat->name,'url'=>'index.php?r=post%2Fcategory&cat_id='.$cat->id];
$this->params['breadcrumbs'][] = $post->title;
?>
<link rel="stylesheet" type="text/css" href="assets/site.css" />
<div class="content">
    <p><?= $post->content ?></p>
</div>

<?php if(!$user->getIsGuest()){?>
<div class="comment_form">

    <?php $form = ActiveForm::begin(['id'=>'comment','action'=>['post/view','id'=>$post->id],'method'=>'post']); ?>

        <?= $form->field($commentForm, 'comment') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>
<?php }else {?>
    <div>
        <b>请<a href="index.php?r=site%2Flogin">登陆</a>或<a href="index.php?r=site%2Fsignup">注册</a>后进行评论</b>
    </div>
<?php }?>
<div>

    <h3>评论区</h3>
    <?php foreach ($comments as $comment):?>
    <div class="comment">
        <?= $user_array[$comment->user_id].":  "?>
        <?= $comment->comment ?>
    </div>

    <?php endforeach;?>
</div>