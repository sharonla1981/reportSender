<?php
/* @var $this SendtoController */
/* @var $model Sendto */

$this->breadcrumbs=array(
	'Sendtos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sendto', 'url'=>array('index')),
	array('label'=>'Create Sendto', 'url'=>array('create')),
	array('label'=>'View Sendto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sendto', 'url'=>array('admin')),
);
?>

<h1>Update Sendto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>