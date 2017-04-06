<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PostsModel */

$this->title = 'Update Posts Model: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posts-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
