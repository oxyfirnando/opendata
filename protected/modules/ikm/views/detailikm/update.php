<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */

$this->breadcrumbs=array(
	'Detailikms'=>array('index'),
	$model->ID_IKM=>array('view','id'=>$model->ID_IKM),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailikm', 'url'=>array('index')),
	array('label'=>'Create Detailikm', 'url'=>array('create')),
	array('label'=>'View Detailikm', 'url'=>array('view', 'id'=>$model->ID_IKM)),
	array('label'=>'Manage Detailikm', 'url'=>array('admin')),
);
?>

<h1>Update Detailikm <?php echo $model->ID_IKM; ?></h1>

<?php $this->renderPartial('_forms', array('model'=>$model)); ?>