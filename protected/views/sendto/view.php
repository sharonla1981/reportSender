<?php
/* @var $this SendtoController */
/* @var $model Sendto */

$this->breadcrumbs=array(
	'Sendtos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sendto', 'url'=>array('index')),
	array('label'=>'Create Sendto', 'url'=>array('create')),
	array('label'=>'Update Sendto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sendto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sendto', 'url'=>array('admin')),
);
?>

<h1>View Sendto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'report_id',
		'client_id',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
