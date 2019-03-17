<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/9
 * Time: 17:11
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>

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
<?php }?>

<div>
    <?php foreach ($comments as $comment):?>
        <p><?= $comment->user_id ?></p>
        <p><?= $comment->comment ?></p>
    <?php endforeach;?>
</div>