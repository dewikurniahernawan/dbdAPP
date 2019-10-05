<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\pengguna */

$this->title = 'Create Pengguna';
$this->params['breadcrumbs'][] = ['label' => 'Penggunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengguna-create">

    <?= $this->renderajax('_form', [
        'model' => $model,
    ]) ?>

</div>
