<?php

namespace app\models;

use yii\db\ActiveRecord;

class InvoiceItem extends \yii\db\ActiveRecord
{
    public function rules()
    {
        return [
            [['ItemName', 'ItemQty', 'ItemPrice'], 'required'],
            ['ItemName', 'string', 'max' => 50],
            ['ItemQty', 'integer'],
            ['ItemPrice', 'number'],
        ];
    }
}
