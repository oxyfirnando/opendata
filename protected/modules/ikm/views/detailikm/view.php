<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */

$this->breadcrumbs=array(
	'Detailikms'=>array('index'),
	$model->ID_IKM,
);

$this->menu=array(
	array('label'=>'List Detailikm', 'url'=>array('index')),
	array('label'=>'Create Detailikm', 'url'=>array('create')),
	array('label'=>'Update Detailikm', 'url'=>array('update', 'id'=>$model->ID_IKM)),
	array('label'=>'Delete Detailikm', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_IKM),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detailikm', 'url'=>array('admin')),
);
?>

<h1>View Detailikm #<?php echo $model->ID_IKM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_IKM',
		'ID_KBLI',
		'ID_KELURAHAN',
		'ID_BENTUK_USAHA',
		'NAMA_PERUSAHAAN',
		'PIMPINAN',
		'ALAMAT',
		'TELP',
		'TAHUN_IZIN',
		'JENIS_PRODUK',
		'TENAGA_KERJA_P',
		'TENAGA_KERJA_W',
		'NILAI_INVESTASI',
		'KAPASITAS_PRODUKSI',
		'SATUAN',
		'NILAI_PRODUKSI',
		'NILAI_BAHAN_BAKU',
		'STATUS',
	),
)); ?>
