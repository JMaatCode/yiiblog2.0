<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TagModel */

$this->title = '编辑: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '标签管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="tag-model-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
