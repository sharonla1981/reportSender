<?php
/* @var $this SendtoController */
/* @var $model Sendto */

$this->breadcrumbs=array(
	'Sendtos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sendto', 'url'=>array('index')),
	array('label'=>'Manage Sendto', 'url'=>array('admin')),
);
?>

<h1>Create Sendto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>