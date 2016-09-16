<?php

class DetailikmController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'filterkel', 'filterkbli', 'checkStatus'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $model = $this->loadModel($id);
        if ($model->STATUS == 1) {
            $model->STATUS = 'Terverifikasi';
        } else
            $model->STATUS = 'Belum Diverifikasi';
        //$model = checkStatus($id);
        $this->render('view', array(
            'model' => $model,
        ));
    }

    public function checkStatus($id) {
        $model = $this->loadModel($id);
        if ($model->STATUS == 1) {
            $model->STATUS = 'Terverifikasi';
        } else
            $model->STATUS = 'Belum Diverifikasi';
        return $model;
    }

    public function actionFilterkel() {
        if ((int) $_POST['id_kecamatan'] != 0) {
            $data = Kelurahan::model()->findAll('ID_KECAMATAN=:id_kecamatan', array(':id_kecamatan' => (int) $_POST['id_kecamatan']));

            $data = CHtml::listData($data, 'ID_KELURAHAN', 'KELURAHAN');
        } else {
            $data = array("" => "Pilih Kelurahan");
        }

        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    public function actionFilterkbli() {
        if ((int) $_POST['id_dir'] != 0) {
            $data = Kbli::model()->findAll('ID_DIREKTORIPOTENSI=:id_dir', array(':id_dir' => (int) $_POST['id_dir']));

            $data = CHtml::listData($data, 'ID_KBLI', 'KBLI');
        } else {
            $data = array("" => "Pilih KBLI");
        }

        foreach ($data as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Detailikm;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Detailikm'])) {
            $model->attributes = $_POST['Detailikm'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID_IKM));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Detailikm'])) {
            $model->attributes = $_POST['Detailikm'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->ID_IKM));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    /*
      public function actionIndex()
      {
      $dataProvider=new CActiveDataProvider('Detailikm');
      $this->render('index',array(
      'dataProvider'=>$dataProvider,
      ));
      } */

    public function actionIndex() {
        $model = new Detailikm('search');

        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Detailikm']))
            $model->attributes = $_GET['Detailikm'];

        $count = Yii::app()->db->createCommand('SELECT count(*) ' .
                        'FROM detailikm, kelurahan, kecamatan, bentukusaha, direktoripotensi, kbli, status '
                        . 'WHERE detailikm.id_kelurahan=kelurahan.id_kelurahan AND '
                        . 'kelurahan.id_kecamatan=kecamatan.id_kecamatan AND '
                        . 'detailikm.id_kbli=kbli.id_kbli AND status.id=detailikm.STATUS AND '
                        . 'direktoripotensi.id_direktoripotensi=kbli.id_direktoripotensi AND '
                        . 'bentukusaha.id_bentuk_usaha=detailikm.id_bentuk_usaha')->queryScalar();

        $sql = 'SELECT *, (TENAGA_KERJA_P+TENAGA_KERJA_W) AS TOTAL ' .
                'FROM detailikm, kelurahan, kecamatan, bentukusaha, direktoripotensi, kbli,status '
                . 'WHERE detailikm.id_kelurahan=kelurahan.id_kelurahan AND '
                . 'kelurahan.id_kecamatan=kecamatan.id_kecamatan AND '
                . 'detailikm.id_kbli=kbli.id_kbli AND status.id=detailikm.STATUS AND '
                . 'direktoripotensi.id_direktoripotensi=kbli.id_direktoripotensi AND '
                . 'bentukusaha.id_bentuk_usaha=detailikm.id_bentuk_usaha';

        $sql = Yii::app()->db->createCommand($sql);
        $dataProvider = new CSqlDataProvider($sql, array(
            'keyField' => 'ID_IKM',
            'totalItemCount' => $count,
            'sort' => array(
                'attributes' => array(
                    'NAMA_PERUSAHAAN',
                ),
                'defaultOrder' => array(
                    'NAMA_PERUSAHAAN' => CSort::SORT_ASC, //default sort value
                ),
            ),
            'pagination' => array(
                'pageSize' => 10,
            ),
        ));
                
        $this->render('admin', array(
            'model' => $model,
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Detailikm('search');

        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Detailikm']))
            $model->attributes = $_GET['Detailikm'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Detailikm the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Detailikm::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Detailikm $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'detailikm-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
