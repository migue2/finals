<?php

namespace app\controllers;
use app\models\Laptops;
use app\models\Company;
use yii;
use app\models\User;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\components\AccessRule;


class LaptopsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'ruleConfig' => [
                    'class' => AccessRule::className(),
                ],
                'only' => ['create','update','delete'],
                'rules'=>[
                    [
                        'actions'=>['create','update'],
                        'allow' => true,
                        'roles' => ['@']
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],


        ];
    }
    public function actionCreate()
    {
        $model = new Laptops;

        if($model->load(Yii::$app->request->post()) && $model->save()){
            $this->redirect(['laptops/index']);
        }

        return $this->render('create', compact('model'));
    }

    public function actionDelete($id)
    {
        $model = Laptops::findOne($id);

        Yii::$app->db->createCommand()
        ->delete('company','laptops_id=:id',[':id'=>$id])
        ->execute();

        $model->delete();
        
        return $this->redirect(['/laptops/index']);
    }

    public function actionIndex()
    {
        $laptops = Laptops::find()->orderBy('name')->all();
        return $this->render('index',['laptops'=>$laptops]);
    }

    public function actionUpdate($id)
    {
        $model = Laptops::findOne($id);

            if($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->redirect(['/laptops/view', 'id'=>$id]);
        }

        return $this->render('update', compact('model'));
    }

    public function actionView($id)
    {
        $model = Laptops::findOne($id);

        return $this->render('view',compact('model'));
    }

}

  