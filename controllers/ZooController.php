<?php 

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\Zoo;

use app\models\user;
use yii\db\Query;

class ZooController extends Controller { 
    public function actionViewZoo()
    {   
        $sql=Zoo::find()->where(['activity'=>1])->all();

        return $this->renderAjax('viewZoo',['sql'=>$sql]);
    }
    public function actionEditZoo($id)
    {   
        $model =Zoo::find()->where(['zoo_id'=>$id])->one();
        
        // $model  = new Zoo();
        if ($this->request->isPost) {
            $array = $this->request->post();
        
            $model->load($array);
            if ($model->validate()) {
                $model->save();
                // return $this->redirect('viewzoo');
            }
         
        }
        
       
        // return $this->render('addzoo',['model'=>$model]);
        return $this->renderAjax('editZoo',['model'=>$model]);
    
    }
    public function actionDeleteZoo($id)
    {  
        $sql1= new Query();
        $sql1->createCommand()->update("zoo", ['activity' => 0] ,['zoo_id' => $id] )->execute();
        // return $sql1;
        $sql=Zoo::find()->where(['activity'=>1])->all();
       
        return $this->renderajax('viewZoo',['sql'=>$sql]);
        // return $this->render('Viewzoo');
        
    }
    public function actionAddZoo()
    {
        $model  = new Zoo();
        if ($this->request->isPost) {
            $array = $this->request->post();
            $model->load($array);
            if ($model->validate()) {
                $model->save();
                // return $this->redirect('viewzoo');
            }
         
        }
        $sql=Zoo::find()->where(['activity'=>1])->all();
    
        return $this->renderAjax('addZoo',['sql'=>$sql,'model'=>$model]);
    }

}
?>