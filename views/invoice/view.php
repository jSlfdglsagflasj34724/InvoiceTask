<?php

use yii\helpers\Html;

$this->title = 'View Invoice Item: ' . $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="invoice-item-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <table class="table">
        <tr>
            <th>ID</th>
            <td><?= $model->id ?></td>
        </tr>
        <tr>
            <th>Item Name</th>
            <td><?= Html::encode($model->ItemName) ?></td>
        </tr>
        <tr>
            <th>Item Qty</th>
            <td><?= Html::encode($model->ItemQty) ?></td>
        </tr>
        <tr>
            <th>Item Price</th>
            <td><?= Html::encode($model->ItemPrice) ?></td>
        </tr>
    </table>
</div>
<?= Html::a('Generate PDF', ['generate-pdf', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
