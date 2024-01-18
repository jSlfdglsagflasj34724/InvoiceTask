<?php

namespace app\controllers;
use Yii;
use mPDF;
use yii\web\Controller;
use app\models\InvoiceItem;
use kartik\mpdf\Pdf;


class InvoiceController extends Controller
{
    public function actionCreate()
    {
        $model = new InvoiceItem();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();
            Yii::$app->session->setFlash('success', 'Invoice item added successfully.');
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionGeneratePdf($id)
    {
        $model = InvoiceItem::findOne($id);

        $content = $this->renderPartial('pdf', ['model' => $model]);

        $pdf = Yii::$app->pdf;
        $pdf->content = $content;

        return $pdf->render();
    }


    public function actionView($id)
    {
        $model = InvoiceItem::findOne($id);

        return $this->render('view', [
            'model' => $model,
        ]);
    }
}
