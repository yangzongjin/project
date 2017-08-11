<?php
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
     
        <?php $form = ActiveForm::begin(['action' => ['apply/apply_info'],'method'=>'post',]); ?>
<?= $form->field($model, 'birth')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true
        ]
    ]);
?>
      <?php echo Html::submitButton('提交', ['class'=>'btn btn-primary','name' =>'submit-button']) ?>
 <?php ActiveForm::end(); ?>