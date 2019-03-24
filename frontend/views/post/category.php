<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/10
 * Time: 21:01
 */

use yii\helpers\Url;

$this->params['breadcrumbs'][] = $cat->name;

?>

<link rel="stylesheet" type="text/css" href="assets/site.css" />
<?php foreach ($post as $item) {?>

    <ul class="nav nav-pills">
        <li class="list" >
            <div class="result c-container" >
                <h3><a class="nav nav-pills nav-stacked post" href=<?=Url::to(['post/view', 'id' => $item->id]) ?>><?= $item->title ?></a></h3>
                <div>
                    <span class="f13"><?= "创建时间：".$item->created_at ?></span>
                    <span class="f13"><?= "更新时间：".$item->updated_at ?></span>
                </div>
                <div class="summary"><?=  $item->summary?></div>
            </div>

        </li>
    </ul>
    <?php }?>
