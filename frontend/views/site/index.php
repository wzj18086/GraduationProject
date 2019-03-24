<?php

/* @var $this yii\web\View */

use yii\bootstrap\Carousel;use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = '';

?>
<?=$this->params['breadcrumbs'][] = $this->title;?>
<link rel="stylesheet" type="text/css" href="assets/site.css" />

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
        <div>
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <?php foreach ($carousel as $car):
                        if ($car->id == 1){?>
                            <li data-target="#myCarousel" data-slide-to=<?= $car->id -1 ?> class="active"></li>
                        <?php }else{?>
                        <li data-target="#myCarousel" data-slide-to=<?= $car->id - 1?>></li>
                    <?php } endforeach;?>

                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <?php foreach ($carousel as $car):?>
                    <?php if($car->id == 1) {?>
                    <div class="item active">
                        <a href=<?=$car->image_url ?>><img alt= "test" src=<?= $car->image_src ?> ></a>
                        <div class="carousel-caption"><?=$car->title ?></div>
                    </div>
                    <?php }else{?>
                            <div class="item ">
                                <a href=<?= $car->image_url ?>><img  alt= "test" src=<?= $car->image_src ?> ></a>
                                <div class="carousel-caption"><?=$car->title ?></div>
                            </div>
                    <?php }?>

                    <?php endforeach;?>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
        <?php foreach ($category as $cat): ?>
            <div>
                <div class="cat_name">
                    <a href=<?=Url::to(['post/category','cat_id'=>$cat->id])?>><?= $cat->name ?><br></a>
                </div>


                <?php foreach ($post as $item)
                {
                    if ($item->cat_id == $cat->id){ ?>
                        <div class="row">
                            <div class="col-lg-12">
                                        <div class="result c-container list">
                                            <h3><a class="post" href=<?=Url::to(['post/view', 'id' => $item->id]) ?>><?= $item->title ?></a></h3>
                                            <div>
                                                <span class=" f13"><?= "创建时间：".$item->created_at ?></span>
                                                <span class=" f13"><?= "更新时间：".$item->updated_at ?></span>
                                            </div>
                                            <p class="summary "><?=  $item->summary?></p>
                                        </div>

                            </div>
                        </div>

                <?php } }?>
            </div>
        <?php endforeach;?>

    </div>

    <div class="col-lg-2">
        <div>
            <b>最新评论</b>
            <?php foreach ($all_comments as $comment): ?>
            <p class="comment"><?=$comment->comment?></p>
            <?php endforeach;?>
        </div>
        <div>
            <b>友情链接</b>
            <p><a>1</a></p>
            <p><a>2</a></p>
            <p><a>3</a></p>
            <p><a>4</a></p>
        </div>

    </div>
</div>