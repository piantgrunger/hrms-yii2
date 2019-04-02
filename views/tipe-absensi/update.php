<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipeAbsensi */

$this->title = 'Update Tipe Absensi: ' . $model->id_tipe_absensi;
$this->params['breadcrumbs'][] = ['label' => 'Tipe Absensi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tipe_absensi, 'url' => ['view', 'id' => $model->id_tipe_absensi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipe-absensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>