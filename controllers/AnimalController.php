<?php
namespace app\controllers;
use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\db\Query;

use app\models\Animals;
use app\models\Zoo;

class AnimalController extends Controller
{


public function actionViewanimalss()
    {   
        $sql=Animals::find()->where(['activity'=>1])->all();
        return $this->renderAjax('Viewanimals',['sql'=>$sql]);
    }


public function actionEditanimalss($id)
    {   
        $model =Animals::find()->where(['animals_id'=>$id])->one();
        // print_r($id);die();
        // $model  = new Zoo();
        if ($this->request->isPost) {
            $array = $this->request->post();
            $model->load($array);
            if ($model->validate()) {
                $model->save();
                // return $this->redirect('viewanimals');
            }
        }
         return $this->renderAjax('editanimals',['model'=>$model]);
    }


public function actionDeleteanimalss($id)
    {  
        $sql1= new Query();
        $sql1->createCommand()->update("animals", ['activity' => 0] ,['animals_id' => $id] )->execute();
        // return $sql1;
        $sql=Animals::find()->where(['activity'=>1])->all();
        return $this->renderAjax('Viewanimals',['sql'=>$sql]);
        // return $this->render('Viewzoo');        
    }



public function actionAddanimalss()
    {
        $model  = new Animals();
        if ($this->request->isPost) {
            $array = $this->request->post();
            $model->load($array);
            if ($model->validate()) {
                $model->save();
                // return $this->redirect('viewanimals');
            }
        }
        $sql=Animals::find()->where(['activity'=>1])->all();
        return $this->renderAjax('addanimals',['sql'=>$sql,'model'=>$model]);
    }


}
