<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */

$this->title = 'Update Blog: ' . $model->id_;
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_, 'url' => ['view', 'id' => $model->id_]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="blog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
