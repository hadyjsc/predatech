<?php

namespace frontend\controllers\pendaftaran;

use Yii;
use frontend\models\pendaftaran\predatech\PendaftaranPredatech;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PredatechController implements the CRUD actions for PendaftaranPredatech model.
 */
class PredatechController extends Controller
{
    /**
     * @inheritdoc
     */
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'incoming' => [
                        'Origin' => ['*'],
                        'Access-Control-Request-Method' => ['GET', 'POST'],
                        'Access-Control-Request-Headers' => ['*'],
                    ],
                ],
            ],
        ];
    }

    /**
     * Lists all PendaftaranPredatech models.
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('index');    
    }

    public function daftar($data){
           $model = new PendaftaranPredatech();
           $model->nim = $data[0];
           $model->nama_lengkap = ucwords($data[1]);
           $model->email = $data[2];
           $model->nomor_hp = $data[3];
           $model->alamat = ucwords($data[4]);
           $model->save();
           // if ($model->save()) {
           //    $status = 1;
           // }else {
           //    $status = 0;
           // }
           return $status = 'terdaftar';
    }

}
