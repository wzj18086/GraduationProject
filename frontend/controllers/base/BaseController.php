<?php
/**
 * Created by PhpStorm.
 * User: Wang Zhijie
 * Date: 2019/3/2
 * Time: 17:23
 */
namespace frontend\controllers\base;

use yii\web\BadRequestHttpException;
use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        try {
            if (!parent::beforeAction($action))
                return false;
        } catch (BadRequestHttpException $e) {
        }
        return true; // TODO: Change the autogenerated stub
    }
}