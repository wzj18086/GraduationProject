<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/2
 * Time: 20:50
 */

use yii\bootstrap\ActiveForm;
/* @var $model \frontend\models\PostForm */
$this->title = "文章创建";
$this->params['breadcrumbs'][] = ['label'=>'文章','url'=>'post/index'];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-9">
        <div class="panel-title box-title ">
            <span>创建文章</span>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin();?>
            <?= $form->field($model,'title')->textInput(["maxLength"=>true])?>
            <?= $form->field($model,'cat_id')->dropDownList($cat)?>
            <?= $form->field($model,'label_img')->textInput(["maxLength"=>true])?>
            <?= $form->field($model,'content')->textInput(["maxLength"=>true])?>
            <?= $form->field($model,'tags')->textInput(["maxLength"=>true])?>


            <div class="form-group">
                <?=\yii\bootstrap\Html::submitButton("发布",['class'=>'btn btn-success'])?>

            </div>
            <?php ActiveForm::end()?>
        </div>

    </div>

    <div class="col-lg-3">
        <div class="panel-title box-title ">
            <span>注意事项</span>
        </div>
        <div class="panel-body">
            <p>1.121455</p>
            <p>2.ndlnda</p>
            <p>3.ndkjnkjsnk</p>

        </div>
    </div>

</div>

