<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = '主页';
?>
<!--<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>-->


<div class="row">
    <div class="col-lg-3">
        <form class="d-flex md-3">
            <p class="list-group-item dropdown-toggle active collapsed" >全部教程</p>

            <?php foreach ($category as $cat):?>
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" ><a href=<?=Url::to(['post/category','cat_id'=>$cat->id])?>><?= $cat->name  ?></a></li>
            </ul>
            <?php endforeach;?>
        </form>
    </div>

    <div class="col-lg-7">
        <?php foreach ($category as $cat): ?>
            <div>
                <a href=<?=Url::to(['post/category','cat_id'=>$cat->id])?>><?= $cat->name ?><br></a>


                <?php foreach ($post as $item)
                {
                    if ($item->cat_id == $cat->id){ ?>
                        <div class="row">
                            <div class="col-lg-10">
                                <ul class="nav nav-pills">
                                    <li role="presentation"><a class="nav nav-pills nav-stacked" href=<?=Url::to(['post/view', 'id' => $item->id]) ?>><?= $item->summary ?></a></li>
                                </ul>
                            </div>
                        </div>

                <?php } }?>
            </div>
        <?php endforeach;?>

    </div>

    <div class="col-lg-2">
        <p>友情链接</p>
        <a>1</a>
        <a>2</a>
        <a>3</a>
        <a>4</a>
    </div>
</div>