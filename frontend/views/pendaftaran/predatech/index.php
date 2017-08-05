<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranAsisten */

$this->title = 'Pendaftaran Online Anggota Baru Predatech';
$this->params['breadcrumbs'][] = ['label' => 'Pendaftaran Anggota Baru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$pendaftaran = "OPEN";
?>
<div class="pendaftaran-asisten-create">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active"><?= Html::encode($this->title) ?></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Pendaftaran Online</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<?php if ($pendaftaran == "OPEN"): ?>
			    <?= $this->render('_form') ?>
		<?php else: ?>
			<div class="row">
            <div class="alert alert-tertiary fade in nomargin">
            <h4>Perhatian!</h4>
            <strong>Belum ada pendaftaran baru untuk tahun ini silahkan kembali nanti atau menghubungi panitia penyelenggara.</strong>
            </div>
        </div>
		<?php endif ?>

      </div>
</div>
