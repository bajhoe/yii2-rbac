<?php

/* 
 * This file is part of the Dektrium project
 * 
 * (c) Dektrium project <http://github.com/dektrium>
 * 
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use dektrium\rbac\models\Assignment;
use kartik\select2\Select2;
use yii\bootstrap5\Alert;
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/**
 * @var $model Assignment
 */

?>

<?php if ($model->updated): ?>

<?= Alert::widget([
    'options' => [
        'class' => 'alert-success'
    ],
    'body' => Yii::t('rbac', 'Assignments have been updated'),
]) ?>

<?php endif ?>

<?php $form = ActiveForm::begin([
    'layout' => 'floating',
    'enableClientValidation' => false,
    'enableAjaxValidation'   => false,
]) ?>

<?= Html::activeHiddenInput($model, 'user_id') ?>

<?= $form->field($model, 'items')->widget(Select2::className(), [
    'data' => $model->getAvailableItems(),
    'options' => [
        'id' => 'items',
        'multiple' => true
    ],
]) ?>

<?= Html::submitButton(Yii::t('rbac', 'Update assignments'), ['class' => 'btn btn-success btn-block']) ?>

<?php ActiveForm::end() ?>

