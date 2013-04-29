<?php
/* @var $this SendtoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sendtos',
);

$this->menu=array(
	array('label'=>'Create Sendto', 'url'=>array('create')),
	array('label'=>'Manage Sendto', 'url'=>array('admin')),
);
?>

<h1>Sendtos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
