<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Selamat Datang di <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
/* @var $this DetailikmController */
/* @var $model Detailikm */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detailikm-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>List IKM</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'detailikm-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'ID_IKM',
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
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

