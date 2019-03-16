<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/9
 * Time: 17:11
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
<p><?= $post->content ?></p>


<div class="content">

    <?php $form = ActiveForm::begin(['id'=>'comment','action'=>['post/view','id'=>$post->id],'method'=>'post']); ?>

        <?= $form->field($commentForm, 'comment') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>
    <div>
        <?php foreach ($comments as $comment):?>
            <p><?= $comment->comment ?></p>
            <p><?= $user->id ?></p>
        <?php endforeach;?>
    </div>

</div>