<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    public function actionSearch() {
        if (isset($_POST['param'])) {
            $param = $_POST['param'];
        }
        else{
            $param ='';
        }
        $model = new Detailikm;
        if ($param == 'Silahkan Cari IKM yang Anda Butuhkan')
            $param = '';

        $count = Yii::app()->db->createCommand('SELECT count(*) ' .
                        'FROM detailikm WHERE NAMA_PERUSAHAAN LIKE "%' . $param . '%" '
                        . 'or JENIS_PRODUK LIKE "%' . $param . '%"')->queryScalar();

        $sql = 'SELECT * FROM detailikm WHERE NAMA_PERUSAHAAN LIKE "%' . $param . '%"'
                . ' or JENIS_PRODUK LIKE "%' . $param . '%"';

        $sql = Yii::app()->db->createCommand($sql);
        $dataProvider = new CSqlDataProvider($sql, array(
            'keyField' => 'ID_IKM',
            'totalItemCount' => $count,
            'sort' => array(
                'attributes' => array(
                    'NAMA_PERUSAHAAN',
                ),
                'defaultOrder' => array(
                    'NAMA_PERUSAHAAN' => CSort::SORT_DESC, //default sort value
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
        $this->render('search', array(
            //'model'=>$model,
            'dataProvider' => $dataProvider,
        ));
    }

    /*
      public function actionIndex()
      {
      $model=new Detailikm('search');
      $model->unsetAttributes();  // clear any default values
      if(isset($_GET['Detailikm']))
      $model->attributes=$_GET['Detailikm'];

      $this->render('index',array(
      'model'=>$model,
      ));
      }

      public function actionIndex()
      {
      $criteria = new CDbCriteria();

      if(isset($_GET['q']))
      {
      $q = $_GET['q'];
      $criteria->compare('attribute1', $q, true, 'OR');
      $criteria->compare('attribute2', $q, true, 'OR');
      }

      $dataProvider=new CActiveDataProvider("DetailIkm", array('criteria'=>$criteria));

      $this->render('index',array(
      'dataProvider'=>$dataProvider,
      ));
      } */

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
