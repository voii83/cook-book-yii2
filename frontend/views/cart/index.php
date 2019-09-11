<?php
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\grid\SerialColumn;
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ArrayDataProvider */

$this->title = 'Cart';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cart-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="form-group">
        <?= Html::a('Add item', ['add'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Clear cart', ['clear'], ['class' => 'btn btn-danger', 'data-confirm' => 'Are you sure you want to delete this cart?']) ?>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()], 'id:text:Product ID', 'amount:text:Amount',
            ['class' => ActionColumn::className(), 'template' => '{delete}',]
        ],
    ]) ?>
</div>
