<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmpDesignation */

$this->params['breadcrumbs'][] = ['label' => Yii::t('emp', 'Designations'), 'url' => ['index']];

?>
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-plus"></i> <?php echo Yii::t('emp', 'Add Designation'); ?> </h3></div>

  <div class="col-xs-4"></div>

  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4"></div>
	<div class="col-xs-4"></div>
	<div class="col-xs-4 left-padding">
	
	</div>
   </div>

</div>

<div class="emp-designation-create">

      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
