<?php

use app\models\User;
use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin();

/**
 * @var User $model
 */
?>
<?= $form->field($model, 'name')?>
<?= $form->field($model, 'surname')?>
<?= $form->field($model, 'phone')?>
<?= $form->field($model, 'email')?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
    </div>
</div>
<?php ActiveForm::end(); ?>
