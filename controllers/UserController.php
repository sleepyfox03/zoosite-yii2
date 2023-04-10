<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

use yii\web\Response;
use yii\web\UploadedFile;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Zoo;

use app\models\user;
use yii\db\Query;

class UserController extends Controller
{
 
    public function actionViewUser()
    {
        $sql = user::find()->where(['activity' => 1])->all();
        return $this->renderAjax('viewUser', ['sql' => $sql]);
    }
    public function actionEditUser($id)
    {
        $model = user::find()->where(['user_id' => $id])->one();
 
        // $model  = new user();
        if ($this->request->isPost) {
            $array = $this->request->post();
            $model->load($array);
            if ($model->validate()) {
                $model->save();
                // return $this->redirect('viewuser');
            }

        }


        return $this->renderAjax('editUser', ['model' => $model]);

    }
    public function actionDeleteUser($id)
    {
        $sql1 = new Query();
        $sql1->createCommand()->update("user", ['activity' => 0], ['user_id' => $id])->execute();
        // return $sql1;
        $sql = user::find()->where(['activity' => 1])->all();

        return $this->renderAjax('viewUser', ['sql' => $sql]);
        // return $this->render('Viewuser');

    }
    public function actionAddUser()
{
    $model  = new user();
    if ($this->request->isPost) {
        $array = $this->request->post("user");
        $model->uname = $array['uname'];
        $model->email = $array['email'];
        $model->phn_no = $array['phn_no'];
        $model->role = $array['role'];
        $model->pass = $array['pass'];
        $model->profile = UploadedFile::getInstance($model, 'profile');

        // if ($model->validate()) {
            $model->save();
           
            // return "user added successfully";
            // return $this->redirect('viewuser');
        // }
        // print_r($model->getErrors());
        return "failure in adding user";
     
    }
    $sql=user::find()->where(['activity'=>1])->all();
   
    return $this->renderAjax('addUser',['sql'=>$sql,'model'=>$model]);
}




}