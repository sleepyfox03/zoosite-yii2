<?php
namespace app\controllers;
use yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\db\Query;
use app\models\AnimalZooMap;
use app\models\Animals;
use app\models\Zoo;
use yii\helpers\ArrayHelper;
class AnimalzooController extends Controller
{

public function actionViewAnimals()
{
    $sql =" SELECT a.animals_id,a.animals_name,a.scientific_name,a.type,a.category,z.zoo_id,z.zoo_name,z.state,z.city
    FROM animals as a
    JOIN animal_zoo_map as az
    ON a.animals_id=az.animals_id
    JOIN zoo AS z
    ON z.zoo_id=az.zoo_id
    WHERE a.activity=1";
    
    $connection = Yii::$app->getDb();
    $command = $connection->createCommand($sql);
    $data = $command->queryAll();
    // print_r($data);die();

    return $this->renderAjax('viewAnimals', ['data' => $data]);
}


public function actionAddAnimals()
    {  $query = new Query();
        $model  = new Animals();
        $model2= new Zoo();
        $list = ArrayHelper::map(Zoo::find()->where(['activity' => '1'] )->all(), 'zoo_id', 'zoo_name');
        if ($this->request->isPost) {
            $array = $this->request->post();
            $array2 = $this->request->post('Zoo');
        
            $zooId=$array2['zoo_name'];
          
            $model->load($array);
            if ($model->validate()) {
                $model->save();
            }
            
        $animalId = $query->select(" LAST_INSERT_ID() as aid")->one();
        $data = $animalId['aid'];
        
    
        $query->createCommand()->insert('animal_zoo_map',['animals_id' => $data , 'zoo_id' => $zooId])->execute();

        }
        
        $sql=Animals::find()->where(['activity'=>1])->all();
        return $this->renderAjax('addAnimals',['sql'=>$sql,'model'=>$model,'list'=>$list,'model2'=>$model2]);
    }


public function actionDeleteAnimals($id)
    {  
        $sql1= new Query();
        $sql1->createCommand()->update("animals", ['activity' => 0] ,['animals_id' => $id] )->execute();
        // return $sql1;
    $sql =" SELECT a.animals_id,a.animals_name,a.scientific_name,a.type,a.category,z.zoo_id,z.zoo_name,z.state,z.city
    FROM animals as a
    JOIN animal_zoo_map as az
    ON a.animals_id=az.animals_id
    JOIN zoo AS z
    ON z.zoo_id=az.zoo_id
    WHERE a.activity=1";
    
    $connection = Yii::$app->getDb();
    $command = $connection->createCommand($sql);
    $data = $command->queryAll();
    // print_r($data);die();

    return $this->renderAjax('viewAnimals', ['data' => $data]);
        // return $this->render('Viewzoo');        
    }


public function actionEditAnimalss($id)
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
         return $this->renderAjax('editAnimals',['model'=>$model]);
    }

public function actionEditAnimals($id)
    {   
        $query = new Query();

        $model =Animals::find()->where(['animals_id'=>$id])->one();
        $list = ArrayHelper::map(Zoo::find()->where(['activity' => '1'] )->all(), 'zoo_id', 'zoo_name');
        $model2=AnimalZooMap::find()->where(['animals_id'=>$id])->one();
        if ($this->request->isPost) {
            $array = $this->request->post();
            $array2 = $this->request->post('Zoo');
        
            $zooId=$array2['zoo_id'];
          
            $model->load($array);
            if ($model->validate()) {
                $model->save();
            }
          
            $query->createCommand()->update("animal_zoo_map", ['zoo_id' => $zooId],['animals_id' => $id ])->execute();
   
    
             
        
        print_r($model->getErrors());
        return "Hello word";

        }
        
        // $sql=Animals::find()->where(['activity'=>1])->all();
        return $this->renderAjax('editAnimals',['model'=>$model,'list'=>$list,'model2'=>$model2]);
}


}