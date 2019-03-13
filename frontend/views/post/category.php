<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/10
 * Time: 21:01
 */

use yii\helpers\Url;

?>

<?php foreach ($post as $item) {?>
        <a href=<?=Url::to(['post/view', 'id' => $item->id]) ?>><?= $item->summary ?><br></a>
    <?php }?>
