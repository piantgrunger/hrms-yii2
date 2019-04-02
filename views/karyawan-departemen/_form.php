<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\models\Departemen;
use app\models\InformasiPribadi;

/* @var $this yii\web\View */
/* @var $model app\models\KaryawanDepartemen */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="karyawan-departemen-form">
    <?php
    $form = ActiveForm::begin();
    if ($id_karyawan !== null) {
        echo $form->field($model, 'id_karyawan')->hiddenInput(['value' => $id_karyawan])->label(false);
    } else {
        echo $form->field($model, 'id_karyawan')->widget(
                Select2::className(), [
            'data' => ArrayHelper::map(InformasiPribadi::find()->all(), 'id_karyawan', 'nama'),
            'options' => ['placeholder' => 'Pilih Nama Karyawan...'],
            'pluginOptions' => ['allowClear' => true],
                ]
        );
    }
    echo $form->field($model, 'id_dept')->widget(
            Select2::className(), [
        'data' => ArrayHelper::map(Departemen::find()->all(), 'id_dept', 'nm_dept'),
        'options' => ['placeholder' => 'Pilih Departemen...'],
        'pluginOptions' => ['allowClear' => true],
            ]
    );
    ?>
    <div class="form-group">
    <?php echo Html::submitButton($model->isNewRecord ? '<span class="glyphicon btn-glyphicon glyphicon-floppy-saved img-circle text-muted"></span>Create' : '<span class="glyphicon btn-glyphicon glyphicon-floppy-saved img-circle text-muted"></span>Update', ['class' => $model->isNewRecord ? 'btn icon-btn btn-success' : 'btn icon-btn btn-primary']); ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>