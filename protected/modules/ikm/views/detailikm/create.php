<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */

$this->breadcrumbs=array(
	'Detailikms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailikm', 'url'=>array('index')),
	array('label'=>'Manage Detailikm', 'url'=>array('admin')),
);
?>

<h1>Create Detailikm</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>