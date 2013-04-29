<?php
/* @var $this SendtoController */
/* @var $model Sendto */

$this->breadcrumbs=array(
	'Sendtos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sendto', 'url'=>array('index')),
	array('label'=>'Create Sendto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('sendto-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sendtos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sendto-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'report_id',
		'client_id',
		'create_time',
		'create_user_id',
		'update_time',
		/*
		'update_user_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
