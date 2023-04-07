<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\userlog;
use app\models\ContactForm;
use app\models\Zoo;

use app\models\user;
use yii\db\Query;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    
     
  

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionIndex()
    {
        return $this->redirect('/zoo/site/signup');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionDashboard()
    {
        if(! isset(Yii::$app->session['username'])) { 
            return $this->render('login');
        }
        return $this->render('dashboard');
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionUserlogin()
    {
        if( isset(Yii::$app->session['username'])) { 
            return $this->redirect('dashboard');
        }
     $model  = new user();
        if ($this->request->isPost) {
            $array = $this->request->post("user");
            $data = user::findOne(['email' => $array['email']]);
            if($data->pass == $array['pass']) {
                $session = Yii::$app->session;
                $session->open();
                
                $session['username'] = $array['email'];
                return $this->redirect('dashboard');
                // return $this->render('dashboard');
             } 
             else { 
                return "error";
             }
            
            
            // $ab=user::find()->where(['id'=>$id])->one()
    //         // if ($model->validate()) {
                // return $this->render('dashboard');
    //         // }
        }
        return $this->render('userlogin',['model'=>$model]);
//         $sql=Animals::find()->where(['activity'=>1])->all();
//         return $this->renderAjax('addanimals',['sql'=>$sql,'model'=>$model]);
//     
    
}
    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        $session = Yii::$app->session;
        $session->remove('username');
        $session->destroy();
        return $this->redirect('index');
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
  



    public function actionSignup()
    {
        $model = new user();
        if ($this->request->isPost) {
            $array = $this->request->post();
            $model->load($array);
            if ($model->validate()) {
                $model->save();

                return $this->redirect('index');
                
                // return $this->redirect('/zoo/user/viewuser');
            }
            
            

        }
        // $sql = user::find()->where(['activity' => 1])->all();

        return $this->render('signup', [ 'model' => $model]);
    }




}




