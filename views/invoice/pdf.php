<?php

use yii\helpers\Html;

?>

<div class="invoice-item-pdf">
    <h1><?= Html::encode('Invoice Item: ' . $model->id) ?></h1>

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
