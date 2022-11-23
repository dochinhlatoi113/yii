<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\channuoi_loaichuongtrai;
use app\models\coso_channuoi;
use yii\data\Pagination;
class TestController extends Controller
{
    public function actionIndex(){
        // $list = coso_channuoi::find()->orderBy('id','ASC')->all();       
        $lists = new channuoi_loaichuongtrai;
        $list = $lists->getAllData(); 
    //    echo "<pre>";print_r($list);exit;
      
        return $this->render('@app/views/fe/test' , $list);
    }

    public function actionCreate(){
        
      
        return $this->render('@app/views/fe/create');
    }
}