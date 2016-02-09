<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NationalHolidays */

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'National Holiday List'), 'url' => ['index']];

?>
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> <?php echo Yii::t('app', 'Add National Holidays') ?></h3></div>

  <div class="col-xs-4"></div>

  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4"></div>
	<div class="col-xs-4"></div>
	<div class="col-xs-4 left-padding">
	
	</div>
   </div>

</div>

  <div class="national-holidays-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

  </div>

