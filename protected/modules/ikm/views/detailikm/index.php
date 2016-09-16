<?php
/* @var $this DetailikmController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailikms',
);

$this->menu=array(
	array('label'=>'Create Detailikm', 'url'=>array('create')),
	array('label'=>'Manage Detailikm', 'url'=>array('admin')),
);
?>

<h1>Detailikms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
