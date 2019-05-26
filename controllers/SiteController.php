<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Library;
use app\models\AddOrEdit;
use app\models\FilterSort;
use app\models\DeleteForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDelete()
    {
        $del = new DeleteForm();
        return $this->render('del', ['del' => $del]);
    }

    public function actionAOE()
    {
        $AOE = new AddOrEdit();
        return $this->render('AOE', ['AOE' => $AOE]);
    }

    public function FilterSort()
    {
        $FilterSort = new FilterSort();
        return $this->render('FilterSort', ['FilterSort' => $FilterSort]);
    }

    /**
     * Displays librarypage.
     *
     * @return string
     */
    public function actionLibrary()
    {
    	$library = Library::find()->all();

		// foreach ($library as $l) {
		// 	$count = Library::find()
  //   		->where(['autor' => $library->autor])
  //   		->count();
		// }

        return $this->render('library', ['library' => $library]);
    }

  //   public function actionCounter($a)
  //   {
  //   	$library = Library::find()->all();

		// foreach ($library as $l) {
		// 	if ($a->autor = $l)
		// 	$count = Library::find()
  //   		->where(['autor' => $a->autor])
  //   		->count();
		// }

  //       return $this->render('autor', ['autor' => $count]);
  //   }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
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
}
