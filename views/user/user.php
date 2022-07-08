<?php

use yii\grid\GridView;

/* @var $dataProvider yii\data\ActiveDataProvider */

echo GridView::widget(
    [
        'dataProvider' => $dataProvider,
        'columns' => [
            'name',
            'surname',
            'phone',
            'email'
        ]
    ]
);
