<style>
    .view {
        border-top-left-radius: 10px 10px;
	border-top-right-radius: 10px 10px;
	border-bottom-right-radius: 10px 10px;
	border-bottom-left-radius: 10px 10px;
    }
</style>
<?php
/* @var $this ReportController */
/* @var $dataProvider CActiveDataProvider */


$this->breadcrumbs=array(
	'Reports',
);

$this->menu=array(
	array('label'=>'Create Report', 'url'=>array('create')),
	array('label'=>'Manage Report', 'url'=>array('admin')),
);
?>

<h1>Reports</h1>
<?php /*
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
*/ ?>
<?php $this->widget('ext.EColumnListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
        'columns' => 2
));

?>

