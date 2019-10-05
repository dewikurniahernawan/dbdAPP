<?php

use yii\helpers\Html;
use yii\helpers\listData;
use kartik\grid\GridView;
use dosamigos\datepicker\DatePicker;
use \yii\bootstrap\collapse;

/* @var $this yii\web\View */
/* @var $searchModel app\models\dataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data DBD';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-index">

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'headerRowOptions' => ['class' => 'kartik-sheet-style'],
        'filterRowOptions' => ['class' => 'kartik-sheet-style'],
        'summary' => '',
        'beforeHeader' => [
           [
            'columns' => [
                ['content' => $this->title, 'options' => ['colspan' => 12, 'class' => 'text-center warning']],
            ],
            'options' => ['class'=>'skip-export']
           ]
        ],
        'exportConfig' =>[
            GridView::EXCEL => ['label' => 'save as excel'],
        ],
        'toolbar' => [
            '{export}',
        ],
        'pjax' => true,
        'bordered' => true,
        'striped' => true,
        'condensed' => true,
        'responsive' => true,
        'hover' => true,
        'floatHeader' => true,
        'showPageSummary' => true,
        'panel' => [
            'type' => GridView::TYPE_PRIMARY
        ],
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute'=>'timestamp',
                'value'=>'timestamp',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                    'model'=>$searchModel,
                    'attribute'=>'timestamp',
                    'clientOptions'=>[
                        'autoclose'=>true,
                        'format'=>'yyyy-mm-dd',
                    ],
                ]),
            ],

            'coordinates',
             [
                'class' => 'yii\grid\DataColumn',
                'header' => 'ns_1',                              
                'value'=>'ns_1',
                'filter' => Html::activeDropDownList($searchModel,'ns_1',[
                    'Y'=>'Yes',
                    'N'=>'No',
                ]), 
                          
            ],
            'fday',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'age',                              
                'value'=>'age',
                'filter' => Html::activeDropDownList($searchModel,'age',[
                    0   => 'all',
                    1   => '0-10',
                    2   => '11-20',
                    3   => '21-30',
                    4   => '31-40',
                    5   => '41-50',
                    6   => '51-60',
                    7   => '61-70',
                    8   => '71-80',
                    9   => '81-90',
                   
                ]),  
                          

            ],
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'sex',                              
                'value'=>'sex',
                'filter' => Html::activeDropDownList($searchModel,'sex',[
                    'L'=>'Laki-laki',
                    'P'=>'Perempuan',
                ]),  
            ],
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'prevd',
                'value' => 'prevd',
                'filter' => Html::activeDropDownList($searchModel,'prevd',[
                    'Y'=>'Yes',
                    'N'=>'No',
                ]),
            ],
         

        ],
    ]); ?>


</div>
