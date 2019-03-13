<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/2/27
 * Time: 21:21
 */

namespace frontend\widget\post;

use common\models\PostModel;
use frontend\models\PostForm;
use http\Client\Request;


use http\Url;
use yii\base\Widget;
use Yii;
use yii\data\Pagination;


//文章列表组件
class PostWidget extends Widget
{
    public $title = '';//文章标题

    public $limit = 6;//显示条数

    public $more = true;//是否显示更多

    public $page = true;//是否显示分页

    public function run()
    {
        $curPage = Yii::$app->request->get('page',1);
        //查询条件

        $cond = ['=','is_valid',0];


        $res =PostForm::getList($cond,$curPage,$this->limit);

        $result['title'] = $this->title?:"最新文章";
        $result['more'] = \yii\helpers\Url::to(['post/index']);
        $result['data'] = $res['data']?:[];
        if($this->page)
        {
            $pages = new Pagination(['totalCount'=>$res['count'],'pageSize'=>$res['pageSize']]);
            $result['page']=$pages;

        }
        return $this->render('index',['data'=>$result]);
    }
}