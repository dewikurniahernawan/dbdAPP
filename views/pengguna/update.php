<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pengguna */

$this->title = 'Update Pengguna: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
