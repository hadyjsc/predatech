<?php

use frontend\controllers\pendaftaran\PredatechController;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranPredatech */
/* @var $form yii\widgets\ActiveForm */
$message = "";
$url = Yii::$app->request->url;
?>
        <div class="row">
            <div class="alert alert-info fade in nomargin">
            <h4>Perhatian!</h4>
            <p><strong>Dalam pendaftaran mahasiswa hanya di wajibkan mengisi data dengan benar, silahkan lakukan pengecekan nim mahasiswa terlebih dahulu untuk memvalidasi apakah mahasiswa terdaftar pada Universitas</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
<div class="pendaftaran-asisten-form">
    <?php 
    if (isset($_POST['submit'])) {
        $data = array($_POST['nim'],$_POST['nama_lengkap'],$_POST['email'],$_POST['nomor_hp'],$_POST['alamat']);
        $simpan = PredatechController::daftar($data);
        if ($simpan === 'terdaftar') {
            header('Location:'.$url.'&status='.$simpan);
            die();
        }

    }
    if (isset($_GET['status']) == "terdaftar") {
        $message = "<div class='alert alert-tertiary'><strong>Selamat ! </strong>Sudah terdaftar sebagai calon Anggota Predatech. Silahkan menunggu pengumuman untuk seleksi berikutnya.<br><br> <a href='".Yii::$app->urlManager->createUrl('site/index')."' class='alert-link'>Home Page </a>.</div>";
    }
    echo $message;
    ?>

    <form class="form-horizontal" method="POST" action="">
    <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
           value="<?=Yii::$app->request->csrfToken?>"/>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nomor Induk Mahasiswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Nomor Induk Mahasiswa" name="nim" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nama Mahasiswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Nama Lengkap Mahasiswa" name="nama_lengkap" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="Email Mahasiswa" name="email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nomor Telephone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Nomor Telephone Yang Dapat Dihubungi" name="nomor_hp" required>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Alamat Sekarang" name="alamat" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" class="btn btn-3d btn-secondary mr-xs mb-sm"><i class="fa fa-thumbs-up"></i> Registrasi</button>
        </div>
    </div>
    </form>   
</div>
        </div>
    </div>
